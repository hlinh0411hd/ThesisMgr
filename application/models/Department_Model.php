<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/19/2016
 * Time: 10:20 PM
 */
class Department_Model extends CI_Model {
    public function getName($departmentId){
        $query = $this->db->select('departmentName')
                        ->from('departments')
                        ->where('departmentId',$departmentId)
                        ->get();
        return $query->row_array()['departmentName'];
    }
	
	public function getDescription($departmentId){
        $query = $this->db->select('departmentDescription')
                        ->from('departments')
                        ->where('departmentId',$departmentId)
                        ->get();
        return $query->row_array()['departmentDescription'];
    }

    public function getByFaculty($facutyId){
        $query = $this->db->select('*')
            ->from('departments')
            ->where('facultyId', $facutyId)
            ->get();
        return $query->result_array();
    }
	
	public function getById($departmentId){
        $query = $this->db->select('*')
            ->from('departments')
            ->where('departmentId', $departmentId)
            ->get();
        return $query->row_array();
    }
}