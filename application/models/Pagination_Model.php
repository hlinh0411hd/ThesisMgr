<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pagination_model extends CI_Model{

    /* Gán tên bảng cần xử lý*/

    function __construct(){
        parent::__construct();
    }

    function a_fGetBooks($name, $perpage, $offset, $condition ){
        $a_User	= $this->db->select()
            ->where($condition)
            ->limit($perpage, $offset)
            ->get($name)
            ->result();
        return $a_User;
    }

    public function i_fGetTotalBooks()
    {
        return $this->db->select()->get($this->_name)->num_rows();
    }

}