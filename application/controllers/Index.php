<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/29/2016
 * Time: 12:23 AM
 */
class Index extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Teacher_Model');
        $this->load->model('Student_Model');
        $this->load->model('Faculty_Model');
        $this->load->model('Department_Model');
        $this->load->model('Laboratory_Model');
    }

    public function index(){
        $this->load->view('tpl/index');
    }

    public function modalteacher($teacherId){
        $data = $this->Teacher_Model->getById($teacherId);
        $data['facultyName'] = $this->Faculty_Model->getName($data['facultyId']);
        $data['departmentName'] = $this->Department_Model->getName($data['departmentId']);
        $data['laboratoryName'] = $this->Laboratory_Model->getName($data['laboratoryId']);
        $this->load->view('tpl/modal', $data);
    }

    public function modalstudent($studentId){
        $data = $this->Student_Model->getById($studentId);
        $data['facultyName'] = $this->Faculty_Model->getName($data['facultyId']);
        $this->load->view('tpl/modal_student', $data);
    }
}