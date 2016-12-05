<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct(){
		parent::__construct();
	}
	
	public function upload(){
		$this->load->view('upload');
	}
	
	public function sendmail(){
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
		$this->email->to('dongdx96@gmail.com');
		 
		$this->email->subject('Test Mail');
		$this->email->message('Hello');
		 
		//dinh kem file
		//thuc hien gui
		if ( ! $this->email->send())
		{
			// Generate error
			echo $this->email->print_debugger();
		}else{
			echo 'Gửi email thành công';
		}
	}
	
	public function uploading(){
		$data="";
		$config = array();
		$config['upload_path'] = './upload/';
		$config['allowed_types'] ='xlsx';
		$config['max_size'] = '10000';
		$config['file_name'] = 'file'.time();
		$this->load->library('upload',$config);
		 if($this->upload->do_upload('fileToUpload'))
         {
             //chua mang thong tin upload thanh con
             $data = $this->upload->data();
             //in cau truc du lieu cua file da upload
         }
         else
         {
            //hien thi lỗi nếu có
            $error = $this->upload->display_errors();
            echo $error;
         }
		$this->readExcel();
	}
	
	public function readExcel()
	{
		$filename = 'upload/data1.xlsx';
		$inputFileType = PHPExcel_IOFactory::identify($filename);
		$objReader = PHPExcel_IOFactory::createReader($inputFileType);
		 
		$objReader->setReadDataOnly(true);
		 
		/**  Load $inputFileName to a PHPExcel Object  **/
		$objPHPExcel = $objReader->load("$filename");
		 
		$total_sheets=$objPHPExcel->getSheetCount();
		 
		$allSheetName=$objPHPExcel->getSheetNames();
		$objWorksheet  = $objPHPExcel->setActiveSheetIndex(0);
		$highestRow    = $objWorksheet->getHighestRow();
		$highestColumn = $objWorksheet->getHighestColumn();
		$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
		$arraydata = array();
		for ($row = 2; $row <= $highestRow;++$row)
		{
			for ($col = 0; $col <$highestColumnIndex;++$col)
			{
				$value=$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
				$arraydata[$row-2][$col]=$value;
			}
		}
		 
		echo '<pre>';
		print_r($arraydata);
		echo '</pre>';
	}

	public function writeWord(){
        $this->load->library('Word');
        $phpword = new Word();
        $section = $phpword->createSection(array('orientation'=>'landscape'));

        // Add text elements
        $section->addText('Hello World!');
        $section->addTextBreak(1);

        $section->addText('I am inline styled.', array('name'=>'Verdana', 'color'=>'006699'));
        $section->addTextBreak(1);

        $phpword->addFontStyle('rStyle', array('bold'=>true, 'italic'=>true, 'size'=>16));
        $phpword->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
        $section->addText('I am styled by two style definitions.', 'rStyle', 'pStyle');
        $section->addText('I have only a paragraph style definition.', null, 'pStyle');

        $filename='just_some_random_name.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache

        $objWriter = PHPWord_IOFactory::createWriter($phpword, 'Word2007');
        $objWriter->save('php://output');
    }
}
