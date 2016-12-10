<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/10/2016
 * Time: 3:06 PM
 */
class RelativeSubfield_Model extends CI_Model {
    public function addNew($researchDirectionId, $subfieldId, $fieldId){
        $data = array(
            'researchDirectionId' => $researchDirectionId,
            'fieldId' => $fieldId,
            'subfieldId' => $subfieldId
        );
        $this->db->insert('relative_subfields', $data);
    }
}