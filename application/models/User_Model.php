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
                'userAvatarSession' => $result['avatar'],
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
                'userAvatarSession' => $result['avatar'],
                'userTypeSession' => 2
            ));
            return "ok";
        }

        $query = $this->db->select('*')
            ->from('faculties')
            ->where(array(
                'facultyUsername' => $username,
                'facultyPassword' => $password
            ))
            ->get();
        if ($query->num_rows() > 0){
            $result = $query->row_array();
            $this->session->set_userdata(array(
                'usernameSession' => $result['facultyName'],
                'userIdSession' => $result['facultyId'],
                'userAvatarSession' => $result['avatar'],
                'userTypeSession' => 1
            ));
            return "ok";
        }

        return "error";
    }

    public function get($username, $password){
        $data = array(
            'studentId' => $username,
            'password' => $password
        );
        $query = $this->db->select('*')
            ->from('students')
            ->where(array(
                'studentId' => $username,
                'password' => $password
            ))
            ->get();
        if ($query->num_rows() > 0){
            $result = $query->row_array();
            return $result;
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
            return $result;
        }
    }


    public function changePassword($username, $password){
        $this->db->set('password', $password);
        $this->db->where('studentId', $username);
        $this->db->update('students');
        $this->db->set('password', $password);
        $this->db->where('teacherId', $username);
        $this->db->update('teacher');
    }
}