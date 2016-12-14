<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/13/2016
 * Time: 8:44 PM
 */
class Field_Model extends CI_Model {
    public function getAll(){
        $query = $this->db->get('fields');
        $fieldList = $query->result_array();
        $subfieldList = "";
        foreach ($fieldList as $field){
            $fieldName = $field['fieldName'];
            $fieldId = $field['fieldId'];
            $this->db->where('fieldId',$fieldId);
            $query = $this->db->get('subfields');
            $subfieldList[$fieldName] = $query->result_array();
        }
        $data = array(
            'fieldList' => $fieldList,
            'subfieldList' => $subfieldList
        );
        return $data;
    }

    public function getById($fieldId){
        $query = $this->db->select('*')
            ->from('fields')
            ->where('fieldId', $fieldId)
            ->get();
        return $query->row_array();
    }

    public function getName($fieldId){
        $query = $this->db->select('fieldName')
            ->from('fields')
            ->where('fieldId', $fieldId)
            ->get();
        return $query->row_array()['fieldName'];
    }
}
?>