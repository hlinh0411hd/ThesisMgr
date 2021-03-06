<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination extends CI_Controller{

    private $listPage = [
        'teacher' => 'faculty/teacher_function_faculty',
        'student' => 'faculty/student_function_faculty',
        'thesis' => 'tpl/thesis',
        'request' => 'tpl/request',
        'council' => 'tpl/council'
    ];

    private $listModel = [
        'teacher' => 'TeacherFunctionFaculty_Model',
        'student' => 'StudentFunctionFaculty_Model',
        'thesis' => 'Thesis_Model',
        'request' => 'Request_Model',
        'council' => 'Council_Model'
    ];
    private $listTable = [
        'teacher' => 'teacher',
        'student' => 'students',
        'thesis' => 'thesis',
        'request' => 'request',
        'council' => 'council'
    ];

    private $page;

    public function __construct(){
        parent::__construct();
        ob_start();
        if (isset($_GET['condition'])){
            if ($_GET['condition'] == "tethesis"){
                $this->condition = "teacherId=".$this->session->userdata("userIdSession");
                $this->condition.= " OR coteacherId=".$this->session->userdata("userIdSession");
            } else if ($_GET['condition'] == "student"){
                $this->condition = "studentID = ".$this->session->userdata("userIdSession");
            }
        } else $this->condition = "facultyId=".$this->session->userdata("userIdSession");
        $this->page = $_GET['page'];
        $this->load->helper(array('form', 'url'));
        $this->load->model('Pagination_Model');
        $this->load->model($this->listModel[$this->page]);
        $this->load->model('Student_Model');
        $this->load->model('Teacher_Model');
		$this->load->model('Department_Model');
		$this->load->model('Laboratory_Model');
    }
    public function index(){
        $directPage = $this -> page;
        $directModel = $this->listModel[$this->page];
        $condition = $this->condition;

        # Đẩy dữ liệu ra view
        $a_Data['list'] =  $this->Pagination_Model->a_fGetBooks($this->listTable[$directPage],$condition);

        if ($this->listTable[$directPage] == "thesis"){
            foreach ($a_Data['list'] as $item) {
                $item->studentName = $this->Student_Model->getById($item->studentId)['studentName'];
                $item->teacherName = $this->Teacher_Model->getById($item->teacherId)['teacherName'];
                $item->coteacherName = $this->Teacher_Model->getById($item->coteacherId)['teacherName'];
            }
        } else if($this->listTable[$directPage]=="teacher"){
			foreach ($a_Data['list'] as $item) {
				$item->departmentName = $this->Department_Model->getById($item->departmentId)['departmentName'];
				$item->laboratoryName = $this->Laboratory_Model->getById($item->laboratoryId)['laboratoryName'];
            }
		}
        $this->load->view($this->listPage[$directPage], $a_Data);
    }
}