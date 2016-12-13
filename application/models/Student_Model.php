<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/28/2016
 * Time: 1:59 PM
 */
class Student_Model extends CI_Model {
    public function getById($studentId){
        $query = $this->db->select('*')
            ->from('students')
            ->where('studentId', $studentId)
            ->get();
        return $query->row_array();
    }

    public function getList($condition){
        $this->db->where($condition);
        $query=$this->db->get('students');
        return $query->result_array();
    }

    public function update($studentId, $data){
        $this->db->set($data)
            ->where('studentId', $studentId)
            ->update('students');
    }
}