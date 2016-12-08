<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_Model extends CI_Model{
	public function upload(){
		$data="";
		$config = array();
		$config['upload_path'] = './upload/';
		$config['allowed_types'] ='xlsx|xls';
		$config['max_size'] = '1000000';
		$config['file_name'] = 'file'.time();
		$this->load->library('upload',$config);
		if($this->upload->do_upload('fileToUpload'))
		{
			//chua mang thong tin upload thanh con
			$data = $this->upload->data();
			return $data;
			//in cau truc du lieu cua file da upload
		}
		else
		{
			//hien thi lỗi nếu có
			$error = $this->upload->display_errors();
			return "error";
		}
	}
	
	public function read($file,$property){
		$filename = 'upload/'.$file;
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
		echo $highestColumnIndex;
		if ($highestColumnIndex!=sizeof($property)){
			return "error";
		}
		for ($i = 0; $i < $highestColumnIndex; ++$i){
			if ($objWorksheet->getCellByColumnAndRow($i,1)->getValue()!=$property[$i]){
                echo $objWorksheet->getCellByColumnAndRow($i,1)->getValue();
				return "error";
			}
		}
		for ($row = 2; $row <= $highestRow;++$row)
		{
			for ($col = 0; $col <$highestColumnIndex;++$col)
			{
				$value=$objWorksheet->getCellByColumnAndRow($col, $row)->getValue();
				$arraydata[$row-2][$col]=$value;

			}
		}
		return $arraydata;
	}
}
?>