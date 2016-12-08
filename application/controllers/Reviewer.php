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


    public function deleteReviewer($reviewerId){
        $this->Reviewer_Model->deleteReviewer($reviewerId);
    }
}