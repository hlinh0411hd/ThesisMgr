<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller{
	public function __construct(){
		parent::__construct();
        $this->load->model('Faculty_Model');
        $this->load->model('ThesisRegisterTime_Model');
        $this->load->model('Mail_Model');
        $this->load->model('Thesis_Model');
        $this->load->model('Teacher_Model');
        $this->load->model('Student_Model');
        $this->load->model('Export_Model');
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

    public function exportThesis(){
        $condition = array(
            'facultyId' => $this->session->userdata('userIdSession'),
            'accepted' => 1
        );
        $data = $this->Thesis_Model->getList($condition);
        $data1 = array();
        foreach ($data as $datum) {
            $datum['studentName'] = $this->Student_Model->getById($datum['studentId'])['studentName'];
            $datum['teacherName'] = $this->Teacher_Model->getById($datum['teacherId'])['teacherName'];
            $datum['coteacherName'] = $this->Teacher_Model->getById($datum['coteacherId'])['teacherName'];
            array_push($data1, $datum);
        }
        $this->Export_Model->studentAndThesis($data1);
    }

    public function exportThesisList(){
        $this->Export_Model->editThesis();
    }

    public function protect(){
        $condition = array(
            'facultyId' => $this->session->userdata('userIdSession'),
            'accepted' => 1
        );

        $thesis = $this->Thesis_Model->getList($condition);
        $subject = "Đăng ký bảo vệ";
        $message = "Khoa mở đăng ký bảo vệ khóa luận cho sinh viên đã đăng ký khóa luận";

        foreach ($thesis as $item) {
            $student = $this->Student_Model->getById($item['studentId']);
            $this->Mail_Model->send($student['studentMail'], $subject, $message);
        }
        return 1;
    }
}
?>