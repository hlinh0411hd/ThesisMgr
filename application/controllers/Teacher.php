<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/19/2016
 * Time: 2:02 AM
 */
class Teacher extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Teacher_Model');
        $this->load->model('Faculty_Model');
    }

    public function index(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession")
        );
        $this->load->view("header_page", $data);
        $this->load->view('teacher/teacher_account');
        $this->load->view('footer');
    }

    public function searchByName($id = "", $teacherName=""){
        $data = $this->Teacher_Model->searchByName($teacherName);
        $list['list'] = array();
        foreach ($data as $datum) {
            $facultyName = $this->Faculty_Model->getName($datum['facultyId']);
            array_push($list['list'], array(
                'teacherId' => $datum['teacherId'],
                'teacherName' => $datum['teacherName'] . " - " . $facultyName
            ));
        }
        $list['id'] = $id;
        $this->load->view('tpl/list_teacher', $list);
    }
}