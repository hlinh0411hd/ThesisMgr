<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/14/2016
 * Time: 8:51 PM
 */
class Mark_Model extends CI_Model {
    public function getById($thesisId){
        $query = $this->db->select('*')
            ->from('mark')
            ->where('thesisId', $thesisId)
            ->get();
        if ($query->num_rows() == 0){
            echo $thesisId;
            $this->db->set('thesisId', $thesisId);
            $this->db->insert('mark');
            $query = $this->db->select('*')
                ->from('mark')
                ->where('thesisId', $thesisId)
                ->get();
        }
        return $query->row_array();
    }

    public function update($thesisId, $data){
        $this->db->set($data);
        $this->db->where('thesisId', $thesisId);
        $this->db->update('mark');
    }
}