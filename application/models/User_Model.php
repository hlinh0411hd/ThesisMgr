<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/19/2016
 * Time: 12:30 AM
 */
class User_Model extends CI_Model {
    public function login($username, $password){
        $query = $this->db->select('*')
                        ->from('students')
                        ->where(array(
                            'studentId' => $username,
                            'password' => $password
                        ))
                        ->get();
        if ($query->num_rows() > 0){
            $result = $query->row_array();
            $this->session->set_userdata(array(
                'usernameSession' => $result['studentName'],
                'userIdSession' => $result['studentId'],
                'userTypeSession' => 3
            ));
            return "ok";
        }


        $query = $this->db->select('*')
            ->from('teacher')
            ->where(array(
                'teacherId' => $username,
                'password' => $password
            ))
            ->get();
        if ($query->num_rows() > 0){
            $result = $query->row_array();
            $this->session->set_userdata(array(
                'usernameSession' => $result['teacherName'],
                'userIdSession' => $result['teacherId'],
                'userTypeSession' => 2
            ));
            return "ok";
        }

        return "error";
    }
}