<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller{
	public function __construct(){
		parent::__construct();
        $this->load->model('Faculty_Model');
        $this->load->model('ThesisRegisterTime_Model');
        $this->load->model('Mail_Model');
        $this->load->model('Student_Model');
	}
	
	public function index(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession"),
			'userAvatarSession' => $this->session->userdata("userAvatarSession")
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
        $condition = array(
            'facultyId' => $facultyId,
            'thesisAllowed' => 1
        );

        $studentList = $this->Student_Model->getList($condition);
        $subject = "MỞ ĐĂNG KÝ KHÓA LUẬN";
        $message = "Từ ".$startDate." ".$startTime. " đến ". $endDate . " " . $endTime.", ";
        $message .= "Khoa mở đăng ký khóa luận cho sinh viên có đủ điều kiện đăng ký";

        foreach ($studentList as $item) {
            $this->Mail_Model->send($item['studentMail'], $subject, $message);
        }
    }
}
?>