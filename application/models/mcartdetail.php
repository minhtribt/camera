<?php  
class mcartdetail extends CI_model{ 
   public function __construct(){
        parent::__construct();
        $this->load->library('cart');
        $this->load->database();
    }

    public function insertProducts($idCart) {
        foreach ($this->cart->contents() as $items){
          $data = array(
             'cd_IdProduct' => $items['id'],
             'cd_Price' => $items['price'],
             'cd_Count' => $items['qty'],
             'cd_IdCart' => $idCart
          );
          $this->db->insert('cartdetail', $data);
        }
    }
} 
?>