<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/19/2016
 * Time: 10:27 PM
 */
class Laboratory_Model extends CI_Model {
    public function getName($laboratoryId) {
        $query = $this->db->select('laboratoryName')
            ->from('laboratories')
            ->where('laboratoryId', $laboratoryId)
            ->get();
        return $query->row_array()['laboratoryName'];
    }
}