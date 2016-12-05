<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/29/2016
 * Time: 10:01 AM
 */
class Thesis_Model extends CI_Model {
    public function addThesis($data){
        $this->db->insert('thesis',$data);
    }

    public function getList($condition){
        $this->db->where($condition);
        $query=$this->db->get('thesis');
        return $query->result_array();
    }

    public function accept($thesisId){
        $this->db->set('accepted', 1);
        $this->db->where('thesisId', $thesisId);
        $this->db->update('thesis');
    }

    public function deny($thesisId){
        $this->db->where('thesisId', $thesisId);
        $this->db->delete('thesis');
    }

    public function getById($thesisId){
        $query = $this->db->select('*')
            ->from('thesis')
            ->where('thesisId', $thesisId)
            ->get();
        return $query->row_array();
    }

    public function update($thesisId, $data){
        $this->db->set($data)
            ->where('thesisId', $thesisId)
            ->update('thesis');
    }

}