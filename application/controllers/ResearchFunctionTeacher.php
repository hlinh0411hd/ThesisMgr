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
        $this->load->model('RelativeField_Model');
        $this->load->model('RelativeSubfield_Model');
        $this->load->model('Subfield_Model');
    }

    public function index(){
        $data = array(
            'usernameSession' => $this->session->userdata("usernameSession"),
            'userIdSession' => $this->session->userdata("userIdSession"),
            'userTypeSession' => $this->session->userdata("userTypeSession")
        );
        $arr = $this->Field_Model->getAll();
        foreach ($arr as $b=>$a) {
            $data[$b] = $a;
        }
        $this->initTree();
        $this->load->view('teacher/research_tree',$data);
    }

    public function initTree(){
        $teacherId = $this->session->userdata("userIdSession");
        $researchDirectionList = $this->ResearchDirection_Model->getByTeacherId($teacherId);
        $relativeFieldList = array();
        $relativeSubfieldList = array();
        foreach ($researchDirectionList as $researchDirection){
            $researchDirectionId =$researchDirection['researchDirectionId'];
            $relativeFieldList[$researchDirectionId] = $this->RelativeField_Model->getByResearchDirectionId($researchDirectionId);
            foreach ($relativeFieldList as $item) {
                foreach ($item as $i) {
                    $data = array(
                        'researchDirectionId' =>$researchDirectionId,
                        'fieldId' => $i
                    );
                    $relativeSubfieldList[$researchDirectionId][$i] = $this->RelativeSubfield_Model->getList($data);
                }
            }
        }
        $data['relativeFieldList'] = $relativeFieldList;
        $data['relativeSubfieldList'] = $relativeSubfieldList;
        $arr = $this->Field_Model->getAll();
        foreach ($arr as $b=>$a) {
            $data[$b] = $a;
        }
        foreach ($researchDirectionList as $item) {
            $data['item'] = $item;
            $this->load->view('teacher/branch_tree', $data);
        }
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

    public function saveTree(){
        $teacherId = $this->session->userdata("userIdSession");
        $researchDirectionName = "";
        $fieldList = [];
        $subfieldList = [];
        extract($_POST);
        $researchDirectionId = $this->ResearchDirection_Model->addNew($researchDirectionName, $teacherId);
        var_dump($subfieldList);
        foreach ($fieldList as $fieldId){
            $this->RelativeField_Model->addNew($researchDirectionId, $fieldId['id']);
        }
        foreach ($subfieldList as $subfieldId){
            $subfield = $this->Subfield_Model->getById($subfieldId['id']);
            $this->RelativeSubfield_Model->addNew($researchDirectionId, $subfield['subfieldId'], $subfield['fieldId']);
        }
    }


    public function updateTree(){
        $teacherId = $this->session->userdata("userIdSession");
        $researchDirectionName = "";
        $fieldList = [];
        $subfieldList = [];
        $researchDirectionId="";
        $this->RelativeField_Model->delete($researchDirectionId);
        $this->ResearchDirection_Model->updateName($researchDirectionId,$researchDirectionName,$teacherId);
        foreach ($fieldList as $fieldId){
            $this->RelativeField_Model->addNew($researchDirectionId, $fieldId['id']);
        }
    }

    public function deleteTree(){
        $researchDirectionId = "";
        extract($_POST);
        echo $researchDirectionId;
        $this->ResearchDirection_Model->delete($researchDirectionId);
    }
}