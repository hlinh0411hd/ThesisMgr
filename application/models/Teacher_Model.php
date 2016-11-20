<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/16/2016
 * Time: 10:02 PM
 */
class Teacher_Model extends CI_Model {
    public function getByFaculty($facutyId){
        $query = $this->db->select('*')
                        ->from('teacher')
                        ->where('facultyId', $facutyId)
                        ->get();
        return $query->result_array();
    }

    public function getById($teacherId){
        $query = $this->db->select('*')
                        ->from('teacher')
                        ->where('teacherId', $teacherId)
                        ->get();
        return $query->row_array();
    }
}