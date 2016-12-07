<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/5/2016
 * Time: 7:35 AM
 */
class Council extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Teacher_Model');
        $this->load->model('Council_Model');
        $this->load->helper('url');
    }

    public function index(){
        $condition = 'facultyId='.$this->session->userdata('userIdSession');
        $list = $this->Council_Model->getList($condition);
        $data['list'] = array();
        foreach ($list as $council){
            $council['teacherName'] = $this->Teacher_Model->getById($council['teacherId'])['teacherName'];
            array_push($data['list'], $council);
        }
        $this->load->view('council/council_list', $data);
    }

    public function addCouncilRow(){
        $this->load->view('council/council_row');
    }

    public function addCouncil(){
        $teacherId = "";
        $position = "";
        $note = "";
        extract($_GET);
        $data = array(
            'teacherId' => $teacherId,
            'position' => $position,
            'note' => $note,
            'facultyId' => $this->session->userdata('userIdSession')
        );
        $this->Council_Model->addCouncil($data);
        redirect('../faculty', 'refresh');
    }
}