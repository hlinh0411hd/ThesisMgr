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

    public function addNew($researchDirectionName, $teacherId){
        $data = array(
            'researchDirectionName' => $researchDirectionName,
            'teacherId' => $teacherId
        );
        $this->db->insert('research_directions', $data);
        $query = $this->db->select_max('researchDirectionId', 'id')
            ->from('research_directions')
            ->get();
        return $query->row_array()['id'];
    }

    public function updateName($researchDirectionId, $reseachDirectionName, $teacherId){
        $this->db->set('researchDirectionName', $reseachDirectionName);
        $this->db->where(array(
            'researchDirectionId' => $researchDirectionId,
            'teacherId' => $teacherId
        ));
        $this->db->update('research_directions');
    }

    public function delete($researchDirectionId){
        $this->db->where('researchDirectionId', $researchDirectionId);
        $this->db->delete('research_directions');
    }
}