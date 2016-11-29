<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentFunctionFaculty extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('StudentFunctionFaculty_Model');
		$this->load->model('Excel_Model');
		$this->load->model('Mail_Model');
		$this->load->model('Student_Model');
		$this->load->helper('url');
	}
	
	public function index(){
		$data=$this->StudentFunctionFaculty_Model->getListStudent();
		$data1["hello"]=$data;
		$this->load->view('faculty/student_function_faculty',$data1);
	}

	public function updateThesisAllowed(){
        $this->load->view('faculty/update_thesis_allowed');
    }
	
	public function updateStudent(){
		$this->load->view('faculty/update_student');
	}
	
	public function singleupload(){
		$data[0] = array("",$_GET['id'], $_GET['name'], $_GET['faculty'], $_GET['class'], $_GET['email']);
        $listMail = $this->StudentFunctionFaculty_Model->addStudent($data);
		$this->Mail_Model->send($listMail,"Test","Hihi");
		redirect('../faculty', 'location');
	}
	
	public function multiupload(){
		$data=$this->Excel_Model->upload();
		if ($data!="error"){
			$this->readExcel($data['file_name']);
		} else echo $data;
		
	}

	public function multiThesisAllowed(){
        $data=$this->Excel_Model->upload();
        if ($data!="error"){
            $this->addAllowedStudent($data['file_name']);
        } else echo $data;
    }

	public function readExcel($file){
		$property = array("STT", "MSSV", "Họ và tên","Khoa", "Lớp", "Email");
		$data = $this->Excel_Model->read($file, $property);
		if ($data!="error"){
			$listMail = $this->StudentFunctionFaculty_Model->addStudent($data);
			$this->Mail_Model->send($listMail,"Test","AddNew");
		}
		redirect('../faculty', 'location');
	}

	public function addAllowedStudent($file){
        $property = array("STT", "MSSV", "Họ và tên", "Lớp", "Email");
        $data = $this->Excel_Model->read($file, $property);
        if ($data!="error"){
            $listMail = $this->StudentFunctionFaculty_Model->addAllowedStudent($data);
            $this->Mail_Model->send($listMail,"Test","AllowedSignIn");
        }
        redirect('../faculty', 'location');
    }

    public function addAnAllowedStudent($studentId){
        $student = $this->Student_Model->getById($studentId);
        $data = array(array(0, $student['studentId'], $student['studentName'], $student['studentClass'], $student['studentMail']
        ));

        if ($data!="error"){
            $listMail = $this->StudentFunctionFaculty_Model->addAllowedStudent($data);
            var_dump($listMail);
            $this->Mail_Model->send($listMail,"Test","AllowedSignIn");
        }
        var_dump($data);
    }

    public function deleteAnAllowedStudent($studentId){
        $student = $this->Student_Model->getById($studentId);
        $data = array(array(0, $student['studentId'], $student['studentName'], $student['studentClass'], $student['studentMail']
        ));

        if ($data!="error"){
            $listMail = $this->StudentFunctionFaculty_Model->deleteAllowedStudent($data);
            $this->Mail_Model->send($listMail,"Test","DeleteAllowed");
        }
    }

    public function search($info, $type){
	    $data['header'] = array(
	        'MSSV' => 'studentId',
            'Họ và tên' => 'studentName',
            'Lớp' => 'studentClass',
            'Email' => 'studentMail',
            'Được đăng ký' => 'thesisAllowed'
        );
        $data['list'] = $this->StudentFunctionFaculty_Model->search($info, $type);
        $this->load->view('tpl/list',$data);
    }
}
?>