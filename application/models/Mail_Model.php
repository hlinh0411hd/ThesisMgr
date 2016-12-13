<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_Model extends CI_Model{
	public function send($listMail, $subject, $message){
		$this->load->library('email');
		// Cấu hình
		$config['protocol']     = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com'; //neu sử dụng gmail
		$config['smtp_user']    = 'hlinh0411hd@gmail.com';
		$config['smtp_pass']    = 'ktdvxeacdfijghgm';
		$config['smtp_port']    = '465';
		$this->email->initialize($config);
		$this->email->set_newline("\r\n");
		//cau hinh email va ten nguoi gui
		$this->email->from('hlinh0411hd@gmail.com', 'Phạm Minh Hoàng Linh');
		//cau hinh nguoi nhan
		$this->email->to($listMail);
		 
		$this->email->subject($subject);
		$this->email->message($message);
		 
		//dinh kem file
		//thuc hien gui
		if ( ! $this->email->send())
		{
			// Generate error
			return $listMail;
		}else{
			return 'Gửi email thành công';
		}
	}
}
?>