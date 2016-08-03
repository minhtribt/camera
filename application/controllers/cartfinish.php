<?php
class Cartfinish extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('cart');
        $this->load->Model("mcart");
        $this->load->Model("mcartdetail");

        $this->load->library("my_layout"); // Sử dụng thư viện layout
        $this->my_layout->setLayout("layout/frontend"); // load file layout chính (view/layout/frontend.php)

        $this->load->helper('captcha');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->helper('path');
        $this->load->library('session');

    }
    //insert on db
    public function insertCart($array) {
        $data['title'] = 'Thông báo';
        $idCart = $this->mcart->insertCart($array);
        $this->mcartdetail->insertProducts($idCart);
        $this->mcart->updatePriceCart($this->cart->total(), $idCart);
        //Hủy giỏ hàng
        $this->cart->destroy();
        $this->my_layout->view("frontend/info_payment_success",$data);
        
    }
    //update on db
    public function updateDelete($cart_Id) {
        $this->mcart->updateDelete($cart_Id);
    }
    //update on mcart
    public function updateQtyProduct() {
        for($i = 1 ; $i <= count($this->cart->contents()); $i++) {
            $rowid = 'rowid_'.$i;
            $rowid_value = $_REQUEST[$rowid];
            $qty = 'qty_'.$i;
            $qty_value = $_REQUEST[$qty];
            $this->updateQty($rowid_value, $qty_value);
        }
        redirect('home/showcart');
    }

    public function updateQty($rowid, $qty){
        $data = array(
            'rowid' => $rowid,
            'qty'     => $qty
        );
        $this->cart->update($data);
        
    }
    public function deleteProductOnCart($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty'     => 0
        );
        $this->cart->update($data);
        redirect('home/showcart');
    }

    public function payment() {
        $data['dataShop'] = $this->getProductInShoppingCart();
        $data['totalAmount'] = $this->format_price($this->cart->total());
        $data['title'] = "Thanh Toán Giỏ Hàng";

        $sess = $this->session->userdata('users_Id');
        if($sess != null) {
            $this->my_layout->view("frontend/paymentcart",$data);
        } else {
            $this->my_layout->view("frontend/info_login",$data);
        }

    }
    public function infopayment(){
        $data['title'] = "Thông tin khách hàng";
        $config = array(
            array(
                 'field'   => 'info_name', 
                 'label'   => 'Họ Và Tên', 
                 'rules'   => 'required'
            ),
            array(
                 'field'   => 'info_phone', 
                 'label'   => 'Số Di Động', 
                 'rules'   => 'required'
            ),
            array(
                 'field'   => 'email', 
                 'label'   => 'Email', 
                 'rules'   => 'valid_email'
            ),
            array(
                 'field'   => 'info_address', 
                 'label'   => 'Địa Chỉ', 
                 'rules'   => 'required'
            ),
            array(
                 'field'   => 'captcha', 
                 'label'   => 'Captcha', 
                 'rules'   => 'required|callback_captcha_Check'
            ),
            array(
                 'field'   => 'info_notes', 
                 'label'   => 'info_notes',
                 'rules'   => 'required'
            )
        );

        $this->form_validation->set_rules($config);
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

        //captcha_Check
        $randomValue = $this ->randomValue();
        $this->session-> set_userdata('memWord', $this->session-> userdata('word'));
        $this->session->set_userdata('word', $randomValue);
            

        $val = array(
            "word"      =>  $randomValue,//chổ này các bạn có thể thêm các ký tự của các bạn cũng được ví dụ như tên của bạn chẳng hạn he he, tôi để trong cho nó tự random.
            "img_path"  =>  "./captcha/",//đường dẫn để tạo img captcha.
            "img_url"   =>  base_url()."captcha/",//đã là đường dẫn để hiển thị hình ảnh sau khi tạo xong captcha
            'font_path'  => base_url().'fonts/texb.ttf',
            "img_width" => 150,//chiều dài của captcha
            "img_height"=> 30,//chiều cao của captcha
            "expiration"=> 7200 //thời gian hết hạn của captcha
            );
        
        $cap = create_captcha($val);
        $data['captcha_image'] = $cap['image'];

        if ($this->form_validation->run() == FALSE)
        {
           $this->my_layout->view("frontend/info_payment",$data);
        } else {
            $array = array(
                "session_id_login" => $this->session->userdata('users_Id'),
                "info_name" => $this->input->post('info_name'),
                "info_phone" => $this->input->post('info_phone'),
                "email" => $this->input->post('email'),
                "info_address" => $this->input->post('info_address'),
                "info_notes" => $this->input->post('info_notes') 
            );
            $this->insertCart($array);
        }
        
    }
    public function randomValue(){
        $chars = "ABCDEFGHJKLMNPQRSTUVWXY13456789"; 
        $word = '';
        for ($a = 0; $a <= 5; $a++)
        { 
            $b = rand(0, strlen($chars) - 1); 
            $word .= $chars[$b]; 
        }
        return $word;
    }

    public function captcha_Check($str)
    {
        if (strtoupper($str) != $this->session-> userdata('memWord'))
        {
            $this->form_validation->set_message('captcha_Check', '%s Bạn Nhập Không Khớp Với Mã Bảo Vệ.');
            return FALSE;
        }
        else
        {
            return TRUE;
        }
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
            //echo($length -3);
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
?>