<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 7:54 AM
 */
class Student extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Student_Model');
        $this->load->model('Teacher_Model');
        $this->load->model('Faculty_Model');
        $this->load->model('Department_Model');
        $this->load->model('Faculty_Model');
        $this->load->model('Laboratory_Model');
    }
    public function index(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession"),
            'userAvatarSession' => $this->session->userdata("userAvatarSession")
        );
        $this->load->view("header_page", $data);
        $this->load->view('student/student_account');
        $this->load->view('footer');
    }

    public function info(){
        $data = $this->Student_Model->getById($this->session->userdata("userIdSession"));
        $data['faculties'] = $this->Faculty_Model->getAll();
        $data['consultant'] = $this->Teacher_Model->getById($data['consultant']);
        $this->load->view('student/info_function_student',$data);
    }
}
?>