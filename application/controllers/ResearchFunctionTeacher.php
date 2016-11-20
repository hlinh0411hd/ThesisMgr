<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/20/2016
 * Time: 10:19 PM
 */
class ResearchFunctionTeacher extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ResearchDirection_Model');
        $this->load->model('Field_Model');
    }

    public function index(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession")
        );
        $data['researchDirection'] = $this->ResearchDirection_Model->getByTeacherId($data['userIdSession']);
        $arr = $this->Field_Model->getAll();
        foreach ($arr as $b=>$a) {
            $data[$b] = $a;
        }
        $this->load->view('teacher/research_tree',$data);
    }

    public function addBranch(){
        $this->load->view('teacher/branch_tree');
    }

    public function addFieldBranch(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession")
        );
        $data['researchDirection'] = $this->ResearchDirection_Model->getByTeacherId($data['userIdSession']);
        $arr = $this->Field_Model->getAll();
        foreach ($arr as $b=>$a) {
            $data[$b] = $a;
        }
        $this->load->view('teacher/branch_field',$data);
    }

    public function addSubfieldBranch($fieldId){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession")
        );
        $data['researchDirection'] = $this->ResearchDirection_Model->getByTeacherId($data['userIdSession']);
        $arr = $this->Field_Model->getAll();
        $fieldName = $this->Field_Model->getName($fieldId);
        $data['subfieldList'] = $arr['subfieldList'][$fieldName];
        $this->load->view('teacher/branch_subfield',$data);
    }
}