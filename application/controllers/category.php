<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	
	public function  __construct() {
        parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination'); //Load thư viên phân trang
			$this->load->Model("MProduct");
    }
	public function index()
	{
		$temp['title']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 
		$temp['template']='default/frontend/category'; 
        $temp['data']['info']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 


        $config['base_url'] = base_url('category/index/'); // xác định trang phân trang 
        $config['total_rows'] = $this->MProduct->count_all(); // xác định tổng số record 
        $config['per_page'] = 12; // xác định số record ở mỗi trang 
        $config['uri_segment'] = 3; // xác định segment chứa page number 
        $this->pagination->initialize($config); 
        $temp['records']=$this->MProduct->list_with_page($config['per_page'],$this->uri->segment(3)); 
		$this->load->view('default/layout/frontend/layout', $temp);

	}
	
}
