<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/10/2016
 * Time: 3:03 PM
 */
class Subfield_Model extends CI_Model {
    public function getById($subfieldId){
        $query = $this->db->select('*')
            ->from('subfields')
            ->where('subfieldId', $subfieldId)
            ->get();
        return $query->row_array();
    }
}