<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 11:14 PM
 */
class Mainpage extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->view("header_page");
        $this->load->view("mainpage");
        $this->load->view("footer");
    }
}