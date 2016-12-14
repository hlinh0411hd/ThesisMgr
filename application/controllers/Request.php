<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/2/2016
 * Time: 10:44 AM
 */
class Request extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Request_Model');
        $this->load->model('Student_Model');
        $this->load->model('Teacher_Model');
        $this->load->model('Thesis_Model');
        $this->load->helper('url');
    }

    public function index(){
        if ($this->session->userdata('userTypeSession') == 1){
            $facultyId = $this->session->userdata('userIdSession');
            $condition = array(
                'facultyId' => $facultyId
            );
        } else if ($this->session->userdata('userTypeSession') == 3){
            $studentId = $this->session->userdata('userIdSession');
            $condition = array(
                'studentId' => $studentId
            );
        }
        $data = $this->Request_Model->getList($condition);
        $list['list']= array();
        foreach ($data as $datum) {
            $datum['studentName'] = $this->Student_Model->getById($datum['studentId'])['studentName'];
            $datum['thesisOldName'] = $this->Thesis_Model->getById($datum['thesisId'])['thesisName'];
            array_push($list['list'], $datum);
        }
        $this->load->view('tpl/request', $list);
    }

    public function addRequest($requestType, $thesisId){
        $thesisName = $teacherId = $coteacherId = $thesisDescription = "";
        if ($requestType == 1)
        extract($_GET);
        $student = $this->Student_Model->getById($this->session->userdata("userIdSession"));
        $data = array(
            'thesisId' => $thesisId,
            'requestType' => $requestType,
            'studentId' => $student['studentId'],
            'thesisName' => $thesisName,
            'teacherId' => $teacherId,
            'coteacherId' => $coteacherId==""? "":$coteacherId,
            'thesisDescription' => $thesisDescription,
            'facultyId' => $student['facultyId']
        );
        $this->Request_Model->add($data);
        redirect('../student', 'refresh');
    }

    public function edit($thesisId){
        $thesis = $this->Thesis_Model->getById($thesisId);
        $teacher = $this->Teacher_Model->getById($thesis['teacherId']);
        if ($thesis['coteacherId']!=0) $coteacher = $this->Teacher_Model->getById($thesis['coteacherId']);
            else $coteacher = "";
        $data = array(
            'thesisId' => $thesisId,
            'thesisName' => $thesis['thesisName'],
            'thesisDescription' => $thesis['thesisDescription'],
            'teacherName' => $teacher['teacherName'],
            'teacherId' => $teacher['teacherId'],
            'coteacherName' => $coteacher!=""? $coteacher['teacherName']:"",
            'coteacherId' => $coteacher!=""? $coteacher['teacherId']:0
        );
        $this->load->view('student/edit_thesis',$data);
    }

    public function exportRequest($requestId){
        $request = $this->Request_Model->getById($requestId);
        $data = array(
            'status' => 1
        );
        $this->Request_Model->update($requestId, $data);
        return 1;
    }

    public function confirmRequest($requestId){
        $request = $this->Request_Model->getById($requestId);
        $data = array(
            'status' => 2
        );
        $this->Request_Model->update($requestId, $data);
        if ($request['requestType'] == 1){
            $thesis = array(
                'studentId' => $request['studentId'],
                'thesisName' => $request['thesisName'],
                'teacherId' => $request['teacherId'],
                'coteacherId' => $request['coteacherId'],
                'thesisDescription' => $request['thesisDescription']
            );
            $this->Thesis_Model->update($request['thesisId'], $thesis);
        } else if ($request['requestType'] == 2){
            $this->Thesis_Model->deny($request['thesisId']);
        }
        return 1;
    }

    public function denyRequest($requestId){
        $request = $this->Request_Model->getById($requestId);
        $data = array(
            'status' => 3
        );
        $this->Request_Model->update($requestId, $data);
        return 1;
    }
}