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
}