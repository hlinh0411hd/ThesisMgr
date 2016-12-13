<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/14/2016
 * Time: 1:59 AM
 */
class ThesisRegisterTime_Model extends CI_Model {
    public function getByFaculty($facutyId){
        $query = $this->db->select('*')
            ->from('thesisregistertime')
            ->where('facultyId', $facutyId)
            ->get();
        return $query->row_array();
    }

    public function update($facultyId, $data){
        $this->db->set($data)
            ->where('facultyId', $facultyId)
            ->update('thesisregistertime');
    }

}