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

    public function info(){
        $data = $this->Teacher_Model->getById($this->session->userdata("userIdSession"));
        $data['departments'] = $this->Department_Model->getByFaculty($data['facultyId']);
        $data['laboratories'] = $this->Laboratory_Model->getByFaculty($data['facultyId']);
        $data['faculties'] = $this->Faculty_Model->getAll();
        $this->load->view('teacher/info_function_teacher',$data);
    }

    public function updateInfo(){
        $teacherName = "";
        $facultyId = "";
        $departmentId = "";
        $laboratoryId = "";
        $teacherMail = "";
        $teacherPhone = "";
        $teacherInfo = "";
        extract($_GET);
        $data = array(
            'teacherName'=> $teacherName,
            'facultyId'=> $facultyId,
            'departmentId'=> $departmentId,
            'laboratoryId'=> $laboratoryId,
            'teacherMail'=> $teacherMail,
            'teacherPhone'=> $teacherPhone,
            'teacherInfo'=> $teacherInfo
        );
        $this->Teacher_Model->update($this->session->userdata('userIdSession'), $data);
    }
}