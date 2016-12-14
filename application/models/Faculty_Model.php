<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/13/2016
 * Time: 3:21 PM
 */
class Faculty_Model extends CI_Model {
    public function getName($facultyId){
        $this->db->select('facultyName');
        $this->db->where('facultyId', $facultyId);
        $query = $this->db->get('faculties');
        return $query->row_array()['facultyName'];
    }

    public function getDepartment($facultyId){
        $this->db->where('facultyId', $facultyId);
        $query = $this->db->get('departments');
        return $query->result_array();
    }

    public function getAll(){
        $query = $this->db->get('faculties');
        return $query->result_array();
    }

    public function getLaboratory($facultyId){
        $this->db->where('facultyId', $facultyId);
        $query = $this->db->get('laboratories');
        return $query->result_array();
    }
	
	public function getDescription($facultyId){
		$this->db->select('facultyDescription');
        $this->db->where('facultyId', $facultyId);
        $query = $this->db->get('faculties');
        return $query->row_array()['facultyDescription'];
	}
}