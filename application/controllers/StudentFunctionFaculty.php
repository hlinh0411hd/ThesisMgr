<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentFunctionFaculty extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('StudentFunctionFaculty_Model');
		$this->load->model('Excel_Model');
		$this->load->model('Mail_Model');
		$this->load->helper('url');
	}
	
	public function index(){
		$data=$this->StudentFunctionFaculty_Model->getListStudent();
		$data1["hello"]=$data;
		$this->load->view('faculty/student_function_faculty',$data1);
	}
	
	public function updateStudent(){
		$this->load->view('faculty/update_student');
	}
	
	public function singleupload(){
		$data[0] = array($_GET['id'], $_GET['name'], $_GET['class'], $_GET['email'], $_GET['faculty']);
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
	public function readExcel($file){
		$property = array("MSSV", "Họ và tên","Khoa", "Lớp", "Email");
		$data = $this->Excel_Model->read($file, $property);
		if ($data!="error"){
			$listMail = $this->StudentFunctionFaculty_Model->addStudent($data);
			$this->Mail_Model->send($listMail,"Test","Hihi");
		}
		redirect('../faculty', 'location');
	}
}
?>