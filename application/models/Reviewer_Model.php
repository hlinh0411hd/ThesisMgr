<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/6/2016
 * Time: 8:14 PM
 */
class Reviewer_Model extends CI_Model {
    public function getList($condition){
        $this->db->where($condition);
        $query=$this->db->get('reviewer');
        return $query->result_array();
    }

    public function addReviewer($data){
        $this->db->insert('reviewer',$data);
    }

    public function deleteReviewer($reviewerId){
        $this->db->where('reviewerId', $reviewerId);
        $this->db->delete('reviewer');
    }
}