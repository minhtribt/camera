<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	public function  __construct() {
        parent::__construct();
			$this->load->helper('url');
            $this->load->library('cart');
    }
	public function index()
	{
		$temp['title']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 
		$temp['template']='default/frontend/home'; 
        $temp['data']['info']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy...";
		$this->load->view('default/layout/frontend/layout', $temp);
	}

	 public function showcart(){
	 	$data['template']='default/frontend/showcart'; 
        $data['dataShop'] = $this->getProductInShoppingCart();
        $data['totalAmount'] = $this->format_price($this->cart->total());
        $data['title'] = "Giỏ Hàng";
        $data['data']= "";
        $this->load->view("default/layout/frontend/layout",$data);
    }

   
    public function getProductInShoppingCart() {
        $data = $this->cart->contents();
        foreach ($data as $key => $value) {
            foreach ($data[$key] as $item) {
                $data[$key]['gia_display'] = $this->format_price($data[$key]['price']);
                $data[$key]['gia_displayTotal'] = $this->format_price($data[$key]['price']*$data[$key]['qty']);
            }
        }
        return $data;
    }

     public function format_price($price) {
        $length = strlen($price);
        $newValue = '';
        while ($length > 0) {
            $temp =  substr($price, $length - 3, 3);
            if($length < 3) {
                $temp =  substr($price, 0, $length);
            }
            if(strlen($newValue)>0){
                $newValue = $temp.'.'.$newValue;
            } else {
                $newValue = $temp;
            }
            $length = $length -3;
        }
        return $newValue;
    }
}
