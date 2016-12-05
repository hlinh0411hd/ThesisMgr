<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeacherFunctionFaculty_Model extends CI_Model{
	public function getList($condition){
		$this->db->where($condition);
		$query=$this->db->get('teacher');
		return $query->result_array();
	}
	
	public function addTeacher($arraydata){
		$listMail = array();
		foreach ($arraydata as $teacher){
			$data = array(
				'teacherId' => $teacher[1],
				'teacherName' => $teacher[2],
				'facultyId' => $teacher[3],
				'departmentId' => "101",
				'teacherMail' => $teacher[4],
				'password' => "11111111",
			);
			$this->db->where('teacherId',$teacher[1]);
			$query = $this->db->get('teacher');
			if ($query->num_rows()>0){
				echo "Đã có";
				continue;
			}
			array_push($listMail, $teacher[4]);
			$this->db->insert('teacher',$data);
		}
		return $listMail;
	}
}
?>