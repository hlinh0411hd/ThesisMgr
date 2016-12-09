<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/19/2016
 * Time: 12:29 AM
 */
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_Model');
        $this->load->helper('url');
    }

    public function login($username, $password=""){
        $data = $this->User_Model->login($username, $password);
        echo $data;
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect('../mainpage', 'refresh');
    }

    public function signUpThesis(){
        $this->load->view('student/sign_up_thesis');
    }

    public function loginForm(){
        $this->load->view('login_box.php');
    }
}