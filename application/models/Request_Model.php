<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/2/2016
 * Time: 10:46 AM
 */
class Request_Model extends CI_Model {

    public function add($data){
        $this->db->insert('request', $data);
    }

    public function getList($condition){
        $this->db->where($condition);
        $query=$this->db->get('request');
        return $query->result_array();
    }

    public function getById($requestId){
        $query = $this->db->select('*')
            ->from('request')
            ->where('requestId', $requestId)
            ->get();
        return $query->row_array();
    }

    public function update($requestId, $data){
        $this->db->set($data)
            ->where('requestId', $requestId)
            ->update('request');
    }
}