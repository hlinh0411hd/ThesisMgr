<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 7:54 AM
 */
class Student extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view('header_page');
        $this->load->view('student_account');
        $this->load->view('footer');
    }
}
?>