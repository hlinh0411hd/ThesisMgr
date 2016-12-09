<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/7/2016
 * Time: 3:27 PM
 */
class Reviewer extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Teacher_Model');
        $this->load->model('Thesis_Model');
        $this->load->model('Student_Model');
        $this->load->model('Council_Model');
        $this->load->model('Reviewer_Model');
        $this->load->model('Faculty_Model');
        $this->load->helper('url');
    }

    public function addReviewerBranch(){
        $this->load->view('reviewer/reviewer_row');
    }

    public function addReviewer(){
        $thesisId="";
        $teacherId="";
        extract($_GET);
        $data = array(
            'thesisId' => $thesisId,
            'teacherId' => $teacherId
        );
        $this->Reviewer_Model->addReviewer($data);
        redirect('../faculty', 'refresh');
    }

    public function edit($thesisId){
        $thesis = $this->Thesis_Model->getById($thesisId);
        $thesis['studentName'] = $this->Student_Model->getById($thesis['studentId'])['studentName'];
        $thesis['teacherName'] = $this->Teacher_Model->getById($thesis['teacherId'])['teacherName'];
        $thesis['coteacherName'] = $this->Teacher_Model->getById($thesis['coteacherId'])['teacherName'];
        $condition = array(
            'thesisId' => $thesis['thesisId']
        );
        $listReviewer = $this->Reviewer_Model->getList($condition);
        $data['thesis'] = $thesis;
        $data['reviewers'] = array();
        foreach ($listReviewer as $item) {
            $item['teacherName'] = $this->Teacher_Model->getById($item['teacherId'])['teacherName'];
            array_push($data['reviewers'],$item);
        }
        $this->load->view('reviewer/reviewer_edit', $data);
    }
    public function deleteReviewer($reviewerId){
        $this->Reviewer_Model->deleteReviewer($reviewerId);
    }

    public function updateReviewer(){
        $reviewerId = "";
        $reviewer = "";
        extract($_GET);
        $this->Reviewer_Model->updateReviewer($reviewerId, $reviewer);
    }
}