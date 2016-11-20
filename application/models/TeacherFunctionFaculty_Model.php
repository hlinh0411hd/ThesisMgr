<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TeacherFunctionFaculty_Model extends CI_Model{
	public function getList(){
		$this->db->where('facultyId',100);
		$query=$this->db->get('teacher');
		return $query->result_array();
	}
	
	public function addTeacher($arraydata){
		$listMail = array();
		foreach ($arraydata as $teacher){
			$data = array(
				'teacherId' => $teacher[0],
				'teacherName' => $teacher[1],
				'facultyId' => $teacher[2],
				'departmentId' => "101",
				'teacherMail' => $teacher[3],
				'password' => "11111111",
			);
			$this->db->where('teacherId',$teacher[0]);
			$query = $this->db->get('teacher');
			if ($query->num_rows()>0){
				echo "Đã có";
				continue;
			}
			array_push($listMail, $teacher[3]);
			$this->db->insert('teacher',$data);
		}
		return $listMail;
	}
}
?>