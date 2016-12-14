<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 11:14 PM
 */
class Mainpage extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Faculty_Model');
		$this->load->model('Department_Model');
		$this->load->model('Laboratory_Model');
        $this->load->model('Field_Model');
        $this->load->model('Subfield_Model');
        $this->load->model('Teacher_Model');
		$this->load->model('Student_Model');
		$this->load->model('Thesis_Model');
    }

    public function index(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession"),
            'userAvatarSession' => $this->session->userdata("userAvatarSession")
        );
        $this->load->view("header_page", $data);
        $this->load->view("mainpage/mainpage");
        $this->load->view("footer");
    }
	
	public function infoDepartment($departmentId){
		$data = array(
			'departmentName' => $this->Department_Model->getName($departmentId),
			'deparmentDescription' => $this->Department_Model->getDescription($departmentId)
		);
		$this->load->view('mainpage/department_info', $data);
	}
	public function infoLaboratory($laboratoryId){
		$data = array(
			'laboratoryName' => $this->Laboratory_Model->getName($laboratoryId),
			'laboratoryDescription' => $this->Laboratory_Model->getDescription($laboratoryId)
		);
		$this->load->view('mainpage/laboratory_info', $data);
	}
	

    public function faculty($faculty){
        $facultyName = $this->Faculty_Model->getName($faculty);
        $data=array(
            'departmentList' => $this->Faculty_Model->getDepartment($faculty),
            'laboratoryList' => $this->Faculty_Model->getLaboratory($faculty),
            'facultyId' => $faculty,
            'facultyName' => $facultyName,
			'facultyDescription' => $this->Faculty_Model->getDescription($faculty)
        );
        $this->load->view("mainpage/faculty_mainpage", $data);
    }
	public function infoFaculty($facultyId){
		$data = array(
			'facultyName' => $this->Faculty_Model->getName($facultyId),
			'facultyDescription' =>  $this->Faculty_Model->getDescription($facultyId)
		);
		$this->load->view('mainpage/faculty_info', $data);
	}

    public function field(){
        $data = $this->Field_Model->getAll();
        $this->load->view('mainpage/field_mainpage',$data);
    }

    public function infoField($fieldId){
        $data = $this->Field_Model->getById($fieldId);
        $data['teacherList'] = $this->Teacher_Model->getByField($fieldId);
        $this->load->view('mainpage/field_info', $data);
    }

    public function infoSubfield($subfieldId){
        $data = $this->Subfield_Model->getById($subfieldId);
        $data['teacherList'] = $this->Teacher_Model->getBySubfield($subfieldId);
        $this->load->view('mainpage/subfield_info', $data);
    }
	
	public function thesis(){
		$data = $this->Thesis_Model->getList("1=1");
		$array['list'] = array();
		foreach ($data as $item){
			$temp = array(
				'thesisName' => $item['thesisName'],
				'studentName' => $this->Student_Model->getName($item['studentId']),
				'created_at' => $item['created_at'],
				'accepted' => $item['accepted'],
				'isSuccess' => $item['isSuccess'],
				'thesisId' => $item['thesisId'],
				'protectionFile' => $item['protectionFile']
			);
			array_push($array['list'], $temp);
			
		}
		$this->load->View('mainpage/thesis_mainpage',$array);
	}

    public function teacherByFaculty($facultyId){
        $data['data'] = $this->Teacher_Model->getByFaculty($facultyId);
        $this->load->view('mainpage/teacher_mainpage',$data);
    }
}