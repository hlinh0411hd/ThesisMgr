<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeacherFunctionFaculty extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model('TeacherFunctionFaculty_Model');
		$this->load->model('Excel_Model');
		$this->load->model('Mail_Model');
		$this->load->helper('url');
	}
	
	public function index(){
		$data=$this->TeacherFunctionFaculty_Model->getListTeacher();
		$data1["hello"]=$data;
        $data1["number"] = (sizeof($data)-1)/50+1;
		$this->load->view('faculty/teacher_function_faculty',$data1);
	}
	
	public function updateTeacher(){
		$this->load->view('faculty/update_teacher');
	}
	
	public function singleupload(){
		$data[0] = array("",$_GET['id'], $_GET['name'], $_GET['faculty'], $_GET['mail']);
        $listMail = $this->TeacherFunctionFaculty_Model->addTeacher($data);
		$this->Mail_Model->send($listMail,"Test","Hihi");
		redirect('../faculty', 'location');
	}
	
	public function multiupload(){
		$data=$this->Excel_Model->upload();
		if ($data!="error"){
			$this->readExcel($data['file_name']);
		}
		
	}
	public function readExcel($file){
		$property = array("STT", "Mã giảng viên", "Họ tên", "Khoa", "Email");
		$data = $this->Excel_Model->read($file, $property);
		if ($data!="error"){
			$listMail = $this->TeacherFunctionFaculty_Model->addTeacher($data);
			$this->Mail_Model->send($listMail,"Test","Thuần Ngu :3");
		}
		redirect('../faculty', 'location');
	}
}
?>