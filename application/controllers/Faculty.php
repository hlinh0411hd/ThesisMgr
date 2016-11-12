<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
        $this->load->view('header_page');
		$this->load->view('faculty_account');
	}
}
?>