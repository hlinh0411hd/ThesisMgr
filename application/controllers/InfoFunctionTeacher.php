<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 8:28 AM
 */

class InfoFunctionTeacher extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Teacher_Model');
        $this->load->model('Department_Model');
        $this->load->model('Faculty_Model');
        $this->load->model('Laboratory_Model');
    }

    public function index(){

    }
}