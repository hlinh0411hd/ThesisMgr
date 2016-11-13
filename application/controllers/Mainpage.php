<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 11:14 PM
 */
class Mainpage extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Faculty_Model');
        $this->load->model('Field_Model');
    }

    public function index(){
        $this->load->view("header_page");
        $this->load->view("mainpage");
        $this->load->view("footer");
    }

    public function faculty($faculty){
        $facultyName = $this->Faculty_Model->getName($faculty);
        $data=array(
            'departmentList' => $this->Faculty_Model->getDepartment($faculty),
            'laboratoryList' => $this->Faculty_Model->getLaboratory($faculty),
            'facultyId' => $faculty,
            'facultyName' => $facultyName
        );
        $this->load->view("faculty_mainpage", $data);
    }

    public function field(){
        $data = $this->Field_Model->getAll();
        $this->load->view('field_mainpage',$data);
    }
}