<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/29/2016
 * Time: 9:51 AM
 */
class Thesis extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Thesis_Model');
        $this->load->model('Student_Model');
        $this->load->model('Teacher_Model');
        $this->load->model('Reviewer_Model');
        $this->load->model('Mail_Model');
        $this->load->helper('url');
    }

    public function requestAddThesis(){
        extract($_GET);
        $studentId = $this->session->userdata("userIdSession");
        $student = $this->Student_Model->getById($studentId);
        $data = array(
            'studentId' => $student['studentId'],
            'thesisName' => $_GET['thesisName'],
            'teacherId' => $_GET['teacherId'],
            'coteacherId' => $_GET['coteacherId']==""? 0:$_GET['coteacherId'],
            'thesisDescription' => $_GET['thesisDescription'],
            'facultyId' => $student['facultyId']
        );
        $this->Thesis_Model->addThesis($data);
        redirect('../mainpage', 'refresh');
    }

    public function accept($thesisId){
        $this->Thesis_Model->accept($thesisId);
        $studentId = $this->Thesis_Model->getById($thesisId)['studentId'];
        $studentMail = $this->Student_Model->getById($studentId)['studentMail'];
        $this->Mail_Model->send($studentMail, "Test", "Accepted Thesis");
    }
    public function deny($thesisId){
        $this->Thesis_Model->accept($thesisId);
        $studentId = $this->Thesis_Model->getById($thesisId)['studentId'];
        $studentMail = $this->Student_Model->getById($studentId)['studentMail'];
        $this->Thesis_Model->deny($thesisId);
        $this->Mail_Model->send($studentMail, "Test", "Denied Thesis");
    }

    public function checkedProtectionFile($thesisId){
        $data = array(
            'protectionFile' => 1
        );
        $this->Thesis_Model->update($thesisId, $data);
    }

    public function remindProtectionFile(){
        $condition = array(
            'protectionFile' => 0,
            'facultyId' => $this->session->userdata('userIdSession')
        );
        $list = $this->Thesis_Model->getList($condition);
        $listMail = array();
        foreach ($list as $thesis) {
            $studentId = $thesis['studentId'];
            array_push($listMail, $this->Student_Model->getById($studentId)['studentMail']);
        }
        $subject = "Test";
        $message = "Remind submit protection file";
        $this->Mail_Model->send($listMail, $subject, $message);
    }
    public function detail($thesisId){
        $thesis = $this->Thesis_Model->getById($thesisId);
        $thesis['studentName'] = $this->Student_Model->getById($thesis['studentId'])['studentName'];
        $thesis['teacherName'] = $this->Teacher_Model->getById($thesis['teacherId'])['teacherName'];
        $thesis['coteacherName'] = $this->Teacher_Model->getById($thesis['coteacherId'])['teacherName'];
        $condition = array(
            'thesisId' => $thesis['thesisId']
        );
        $listReviewer = $this->Reviewer_Model->getList($condition);
        foreach ($listReviewer as $item) {
            $item['teacherName'] = $this->Teacher_Model->getById($item['teacherId'])['teacherName'];
        }
        $data['thesis'] = $thesis;
        $data['reviewers'] = $listReviewer;
        $this->load->view('tpl/thesis_detail',$data);
    }
}