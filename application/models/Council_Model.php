<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/5/2016
 * Time: 7:23 AM
 */
class Council_Model extends CI_Model {

    public function getList($condition){
        $this->db->where($condition);
        $query=$this->db->get('council');
        return $query->result_array();
    }
}