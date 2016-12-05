<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentFunctionFaculty_Model extends CI_Model{
    public function getList($condition){
        $this->db->where($condition);
        $query=$this->db->get('students');
        return $query->result_array();
    }

    public function addStudent($arraydata){
        $listMail = array();
        foreach ($arraydata as $student){
            $data = array(
                'studentId' => $student[1],
                'studentName' => $student[2],
                'facultyId' => $student[3],
                'studentClass' => $student[4],
                'studentMail' => $student[5],
                'password' => "11111111",
            );
            $this->db->where('studentId',$student[1]);
            $query = $this->db->get('students');
            if ($query->num_rows()>0){
                echo "Đã có";
                continue;
            }
            array_push($listMail, $student[5]);
            $this->db->insert('students',$data);
        }
        return $listMail;
    }

    public function addAllowedStudent($arraydata){
        $listMail = array();
        foreach ($arraydata as $student){
            $data = array(
                'studentId' => $student[1],
                'studentName' => $student[2],
                'studentClass' => $student[3],
                'studentMail' => $student[4]
            );
            $this->db->where('thesisAllowed',1);
            $this->db->where('studentId',$student[1]);
            $query = $this->db->get('students');
            if ($query->num_rows()>0){
                echo "Đã cho phép";
                continue;
            }
            array_push($listMail, $student[4]);
            $this->db->set('thesisAllowed',1);
            $this->db->where('studentId', $student[1]);
            $this->db->update('students');
        }
        return $listMail;
    }

    public function deleteAllowedStudent($arraydata){
        $listMail = array();
        foreach ($arraydata as $student){
            $data = array(
                'studentId' => $student[1],
                'studentName' => $student[2],
                'studentClass' => $student[3],
                'studentMail' => $student[4]
            );
            $this->db->where('thesisAllowed',0);
            $this->db->where('studentId',$student[1]);
            $query = $this->db->get('students');
            if ($query->num_rows()>0){
                echo "Đã không cho phép";
                continue;
            }
            array_push($listMail, $student[4]);
            $this->db->set('thesisAllowed',0);
            $this->db->where('studentId', $student[1]);
            $this->db->update('students');
        }
        return $listMail;
    }

    public function search($info, $type=""){
        if ($type == 'studentId'){
            $query = $this->db->select()
                ->from('students')
                ->where('studentId',$info)
                ->get();
        } else if ($type == 'studentName'){
            $query = $this->db->select()
                ->from('students')
                ->like('studentName',$info)
                ->get();
        } else {
            $query = $this->db->select()
                ->from('students')
                ->where('studentId',$info)
                ->or_like('studentName',$info)
                ->get();
        }
        return $query->result_array();
    }
}
?>