<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/16/2016
 * Time: 10:02 PM
 */
class Teacher_Model extends CI_Model {
    public function getByFaculty($facutyId){
        $query = $this->db->select('*')
                        ->from('teacher')
                        ->where('facultyId', $facutyId)
                        ->get();
        return $query->result_array();
    }

    public function getByField($fieldId){
        $query = $this->db->select('*')
                        ->from('relative_fields')
                        ->where('fieldId', $fieldId)
                        ->get();
        $list = array();
        if ($query->num_rows() > 0){
            foreach ($query->result_array() as $item) {
                $rd = $this->db->select('*')
                    ->from('research_directions')
                    ->where('researchDirectionId', $item['researchDirectionId'])
                    ->get();
                $teacher = $this->getById($rd->row_array()['teacherId']);
                $teacher['researchDirectionName'] = $rd->row_array()['researchDirectionName'];
                array_push($list, $teacher);
            }
        }
        return $list;
    }


    public function getBySubfield($subfieldId){
        $query = $this->db->select('*')
            ->from('relative_subfields')
            ->where('subfieldId', $subfieldId)
            ->get();
        $list = array();
        if ($query->num_rows() > 0){
            foreach ($query->result_array() as $item) {
                $rd = $this->db->select('*')
                    ->from('research_directions')
                    ->where('researchDirectionId', $item['researchDirectionId'])
                    ->get();
                $teacher = $this->getById($rd->row_array()['teacherId']);
                $teacher['researchDirectionName'] = $rd->row_array()['researchDirectionName'];
                array_push($list, $teacher);
            }
        }
        return $list;
    }

    public function getById($teacherId){
        $query = $this->db->select('*')
                        ->from('teacher')
                        ->where('teacherId', $teacherId)
                        ->get();
        return $query->row_array();
    }

    public function searchByName($teacherName){
        $query = $this->db->select()
                    ->from('teacher')
                    ->like('teacherName', $teacherName)
                    ->get();
        return $query->result_array();
    }

    public function update($teacherId, $data){
        $this->db->set($data)
            ->where('teacherId', $teacherId)
            ->update('teacher');
    }
	
	public function getSearch($keyWord){
		$this->db->select('*');
		$this->db->like('teacherName', $keyWord);
		$query = $this->db->get('teacher');
		return $query->result_array();
	}
}