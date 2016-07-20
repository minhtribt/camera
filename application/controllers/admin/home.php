<?php
class Home extends CI_Controller{
    //put your code here

    public function  __construct() {
        parent::__construct();
        $this->load->helper("url");
    }

    // Controller mặc định cho trang chủ
    public function index(){
       		
		$temp['title']="Camera Bến Tre - Administrator"; 
		$temp['template']='default/admin/login'; 
		$temp['data']['info']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 

		$this->load->view("default/layout/admin/home", $temp);
    }
}
?>
