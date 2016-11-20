<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 8:28 AM
 */

class InfoFunctionTeacher extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Teacher_Model');
        $this->load->model('Department_Model');
        $this->load->model('Faculty_Model');
        $this->load->model('Laboratory_Model');
    }

    public function index(){
        $data = $this->Teacher_Model->getById($this->session->userdata("userIdSession"));
        $data['departmentName'] = $this->Department_Model->getName($data['departmentId']);
        $data['facultyName'] = $this->Faculty_Model->getName($data['facultyId']);
        $data['laboratoryName'] = $this->Laboratory_Model->getName($data['laboratoryId']);
        $this->load->view('teacher/info_function_teacher',$data);
    }
}