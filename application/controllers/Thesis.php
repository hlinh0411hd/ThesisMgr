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
}