<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/19/2016
 * Time: 11:08 PM
 */
class ResearchDirection_Model extends CI_Model {
    public function getByTeacherId($teacherId){
        $query = $this->db->select('*')
            ->from('research_directions')
            ->where('teacherId', $teacherId)
            ->get();
        return $query->result_array();
    }
}