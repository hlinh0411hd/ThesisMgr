<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentFunctionFaculty_Model extends CI_Model{
	public function getListStudent(){
		$this->db->where('facultyId',100);
		$query=$this->db->get('students');
		return $query->result_array();
	}
	
	public function addStudent($arraydata){
		$listMail = array();
		foreach ($arraydata as $student){
			$data = array(
				'studentId' => $student[0],
				'studentName' => $student[1],
				'facultyId' => $student[2],
				'studentClass' => $student[3],
				'studentMail' => $student[4],
				'password' => "11111111",
			);
			$this->db->where('studentId',$student[0]);
			$query = $this->db->get('students');
			if ($query->num_rows()>0){
				echo "Đã có";
				continue;
			}
			array_push($listMail, $student[4]);
			$this->db->insert('students',$data);
		}
		return $listMail;
	}
}
?>