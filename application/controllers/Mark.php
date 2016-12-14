<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/14/2016
 * Time: 9:11 PM
 */
class Mark extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("Mark_Model");
        $this->load->model("Thesis_Model");
    }

    public function editView($thesisId){
        $data = $this->Mark_Model->getById($thesisId);
        $this->load->view('tpl/mark', $data);
    }

    public function add(){
        $thesisId = "";
        $reviewerMark = "";
        $teacherMark = "";
        $councilMark = "";
        extract($_GET);
        $data = array(
            'reviewerMark' => $reviewerMark,
            'councilMark' => $councilMark,
            'teacherMark' => $teacherMark
        );
        $this->Mark_Model->update($thesisId, $data);
        return 1;
    }
}