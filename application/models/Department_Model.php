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
}