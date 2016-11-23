<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/22/2016
 * Time: 2:14 AM
 */
class RelativeField_Model extends CI_Model {
    public function addNew($researchDirectionId, $fieldId){
        $data = array(
            'researchDirectionId' => $researchDirectionId,
            'fieldId' => $fieldId
        );
        $this->db->insert('relative_fields', $data);
    }

    public function getByResearchDirectionId($researchDirectionId){
        $query = $this->db->select('*')
            ->from('relative_fields')
            ->where('researchDirectionId', $researchDirectionId)
            ->get();
        $result = $query->result_array();
        $arr = array();
        foreach ($result as $relative){
            array_push($arr, $relative['fieldId']);
        }
        return $arr;
    }

    public function delete($researchDirectionId){
        $this->db->where('researchDirectionId', $researchDirectionId);
        $this->db->delete('relative_fields');
    }
}