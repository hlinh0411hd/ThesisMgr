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
        $this->load->model('Student_Model');
        $this->load->model('ThesisRegisterTime_Model');
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
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = date('Y-m-d');
        $time = date('h:i:s');
        $data = $this->Student_Model->getById($this->session->userdata('userIdSession'));
        $data = $this->ThesisRegisterTime_Model->getByFaculty($data['facultyId']);
        $now = strtotime($date . " " . $time);
        $start = strtotime($data['startDate'] . " " . $data['startTime']);
        $end = strtotime($data['endDate'] . " " . $data['endTime']);
        if ($now >= $start && $now <= $end){
            $this->load->view('student/sign_up_thesis');
        } else {
            $this->load->view('tpl/out_of_time_register');
        }
    }

    public function loginForm(){
        $this->load->view('login_box.php');
    }

    public function changePassword(){
        $this->load->view('info_pass');
    }

    public function checkuser($id, $pass){
        $data = $this->User_Model->get($id, $pass);
        if ($data) {
            $this->session->set_userdata('user', $id);
            echo $id;
            return $id;
        } else return 0;
    }

    public function changePass(){
        $this->load->view('change_pass');
    }

    public function changeNewPassword($pass){
        $this->User_Model->changePassword($this->session->userdata('user'), $pass);
    }
}