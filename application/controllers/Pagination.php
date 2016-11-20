<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagination extends CI_Controller{

    private $listPage = [
        'teacher' => 'faculty/teacher_function_faculty',
        'student' => 'faculty/student_function_faculty'
    ];

    private $listModel = [
        'teacher' => 'TeacherFunctionFaculty_Model',
        'student' => 'StudentFunctionFaculty_Model'
    ];
    private $listTable = [
        'teacher' => 'teacher',
        'student' => 'students'
    ];

    private $page;

    public function __construct(){
        parent::__construct();
        ob_start();
        $this->page = $_GET['page'];
        $this->load->helper(array('form', 'url'));
        $this->load->model('Pagination_Model');
        $this->load->model($this->listModel[$this->page]);
    }
    public function index(){
        $directPage = $this -> page;
        $directModel = $this->listModel[$this->page];
        $total = $this-> {$directModel}->getList();
        $perpage	=  1; /* Số lượng hiển thị trên một page*/

        # Tải bộ thư viện Pagination Class của CodeIgniter
        $this->load->library('pagination1');
        $config['total_rows']  =  sizeof($total);
        $config['per_page']  =  $perpage;
        $config['next_link'] =  'Next »';
        $config['prev_link'] =  '« Prev';
        $config['num_tag_open'] =  '';
        $config['num_tag_close'] =  '';
        $config['num_links']	=  5;
        $config['cur_tag_open'] =  '<li class="active"><a class="currentpage">';
        $config['cur_tag_close'] =  '</a></li>';
        $config['base_url'] =  base_url().'/pagination/';
        $config['uri_segment']	 =  2;

        # Khởi tạo phân trang
        $this->pagination1->initialize($config);

        # Tạo link phân trang
        $pagination =  $this->pagination1->create_links($directPage);

        # Lấy offset
        $offset  =  ($this->uri->segment(2)=='') ? 0 : $this->uri->segment(2);

        # Đẩy dữ liệu ra view
        $a_Data['list'] =  $this->Pagination_Model->a_fGetBooks($this->listTable[$directPage],$perpage, $offset);
        $a_Data['pagination'] = $pagination;
        $this->load->view($this->listPage[$directPage], $a_Data);
    }
}