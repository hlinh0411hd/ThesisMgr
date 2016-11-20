<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 8:28 AM
 */

class InfoFunctionStudent extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('student/info_function_student');
    }
}