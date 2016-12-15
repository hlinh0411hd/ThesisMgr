<?php

/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/15/2016
 * Time: 4:35 AM
 */
class Export_Model extends CI_Model {

    public function studentAndThesis($data){
        $this->load->library('Word');
        $phpword = new Word();
        $section = $phpword->createSection(array('orientation'=>'landscape'));

        // Add text elements
        $section->addTitle('Danh sach khoa luan');
        $section->addTextBreak(1);


        // Define table style arrays
        $styleTable = array('borderSize'=>6, 'borderColor'=>'006699', 'cellMargin'=>80);
        $styleFirstRow = array('borderBottomSize'=>18, 'borderBottomColor'=>'0000FF', 'bgColor'=>'66BBFF');
// Define cell style arrays
        $styleCell = array('valign'=>'center');
        $styleCellBTLR = array('valign'=>'center', 'textDirection'=>PHPWord_Style_Cell::TEXT_DIR_BTLR);
// Define font style for first row
        $fontStyle = array('bold'=>true, 'align'=>'center');
// Add table style
        $phpword->addTableStyle('myOwnTableStyle', $styleTable, $styleFirstRow);
// Add table
        $table = $section->addTable('myOwnTableStyle');
// Add row
        $table->addRow(900);
// Add cells
        $table->addCell(2000, $styleCell)->addText('STT', $fontStyle);
        $table->addCell(2000, $styleCell)->addText('Ten khoa luan', $fontStyle);
        $table->addCell(2000, $styleCell)->addText('Sinh vien', $fontStyle);
        $table->addCell(2000, $styleCell)->addText('Giang vien huong dan', $fontStyle);
// Add more rows / cells
        $n = 0;
        foreach ($data as $item) {
            $table->addRow();
            $n++;
            $table->addCell(2000)->addText($n);
            $table->addCell(2000)->addText($item['thesisName']);
            $table->addCell(2000)->addText($item['studentName']);
            $table->addCell(2000)->addText($item['teacherName']." ".$item['coteacherName']);

        }
//
//        $section->addText('I am inline styled.', array('name'=>'Verdana', 'color'=>'006699'));
//        $section->addTextBreak(1);
//
//        $phpword->addFontStyle('rStyle', array('bold'=>true, 'italic'=>true, 'size'=>16));
//        $phpword->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
//        $section->addText('I am styled by two style definitions.', 'rStyle', 'pStyle');
//        $section->addText('I have only a paragraph style definition.', null, 'pStyle');

        $filename='danhsachdetai.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache

        $objWriter = PHPWord_IOFactory::createWriter($phpword, 'Word2007');
        $objWriter->save('php://output');
    }

}