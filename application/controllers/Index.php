<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/29/2016
 * Time: 12:23 AM
 */
class Index extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->view('tpl/index');
    }

}