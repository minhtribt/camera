<?php  
class mcart extends CI_model{ 
   public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function insertCart($array_data) {
    	$today = date("Y/m/d");
        $data = array(
           'cart_User' => $array_data['session_id_login'],
           'cart_Date' => $today,
           'cart_delete' => false,
           'cart_FullName' => $array_data['info_name'],
           'cart_Phone' => $array_data['info_phone'],
           'cart_Email' => $array_data['email'],
           'cart_Add' => $array_data['info_address'],
           'cart_Notes' => $array_data['info_notes']
        );

        $this->db->insert('cart', $data);
        return $this->db->insert_id();
    }
    public function updatePriceCart($totalPrice, $cart_Id) {
    	$data = array(
           'cart_Price' => $totalPrice
        );
		$this->db->where('cart_Id', $cart_Id);
		$this->db->update('cart', $data); 
    }
    public function updateDelete ($cart_Id) {
    	$data = array(
           'cart_delete' => true 
        );
        $this->db->where('cart_Id', $cart_Id);
		$this->db->update('cart', $data);
    }
} 
?>