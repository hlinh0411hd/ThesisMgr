<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller{
	public function __construct(){
		parent::__construct();
        $this->load->model('Faculty_Model');
	}
	
	public function index(){
        $this->load->view('header_page');
		$this->load->view('faculty_account');
        $this->load->view('footer');
	}

	public function department($facultyId){
        $data["departmentList"] = $this->Faculty_Model->getDepartment($facultyId);
    }

    public function laboratory($facultyId){
        $data["laboratoryList"] = $this->Faculty_Model->getLaboratory($facultyId);
    }
}
?>