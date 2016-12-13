<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller{
	public function __construct(){
		parent::__construct();
        $this->load->model('Faculty_Model');
        $this->load->model('ThesisRegisterTime_Model');
	}
	
	public function index(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userAvatarSession' => $this->session->userdata("userAvatarSession"),
            'userSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession")
        );
        $this->load->view("header_page", $data);
		$this->load->view('faculty/faculty_account');
        $this->load->view('footer');
	}

	public function department($facultyId){
        $data["departmentList"] = $this->Faculty_Model->getDepartment($facultyId);
    }

    public function laboratory($facultyId){
        $data["laboratoryList"] = $this->Faculty_Model->getLaboratory($facultyId);
    }

    public function thesisRegister(){
        $data = $this->ThesisRegisterTime_Model->getByFaculty($this->session->userdata('userIdSession'));
        $this->load->view('faculty/thesis_register', $data);
    }

    public function saveTimeRegister(){
        $facultyId = "";
        $startDate = $endDate = $startTime = $endTime = "";
        extract($_GET);
        $data = array(
            'startDate' => $startDate,
            'startTime' => $startTime,
            'endDate' => $endDate,
            'endTime' => $endTime
        );
        $this->ThesisRegisterTime_Model->update($facultyId, $data);
    }
}
?>