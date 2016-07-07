<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solution extends CI_Controller {
	
	public function  __construct() {
        parent::__construct();
			$this->load->helper('url');
    }
	public function index()
	{
		$temp['title']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 
		$temp['template']='default/frontend/solution'; 
        $temp['data']['info']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 

		$this->load->view('default/layout/frontend/layout', $temp);
	}
	public function giadinh()
	{
		$temp['title']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 
		$temp['template']='default/frontend/solution-content'; 
        $temp['data']['info']="Giải pháp gia đình"; 

		$this->load->view('default/layout/frontend/layout', $temp);
	}
}
