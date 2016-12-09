<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
        $this->load->model('Teacher_Model');
    }

    public function index(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession"),
            'userAvatarSession' => $this->session->userdata("userAvatarSession")
        );
        $this->load->view("header_page", $data);
        $this->load->view("mainpage/mainpage");
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
        $this->load->view("mainpage/faculty_mainpage", $data);
    }

    public function field(){
        $data = $this->Field_Model->getAll();
        $this->load->view('mainpage/field_mainpage',$data);
    }

    public function teacherByFaculty($facultyId){
        $data['data'] = $this->Teacher_Model->getByFaculty($facultyId);
        $this->load->view('mainpage/teacher_mainpage',$data);
    }
}