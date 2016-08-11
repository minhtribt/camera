<?php
class Cart extends CI_Controller{
     public function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->library('cart');
        $this->load->Model("MProduct");
    }

    function addCartProduct(){
        
        if(isset($_REQUEST["productID"])){
            $productID = $_REQUEST["productID"];
            $product = $this->MProduct->getProductById($productID);
            $data = array(
               'id'      => $product->product_id,
               'qty'     => 1,
               'price'   => $product->product_price,
               'name'    => $product->product_name
            );
            $this->cart->insert($data);
            echo $this->cart->total_items();
        }        
    }

    function removedCartProduct(){
        if(isset($_REQUEST["rowid"])){
            $data = array(
                'rowid' => $_REQUEST["rowid"],
                'qty'     => 0
            );
            $this->cart->update($data);
            $this-> showCart();
        }
        
    }
    
    function destroyCart() {
        $this->cart->destroy();
        echo("<div class='khongcosanpham'>Không có sản phẩm nào trong giỏ hàng </div>");
    }

    function showCart() {
        if($this->cart->total_items() > 0) {
            //echo("<div style='text-align: center'>Có <strong>" .$this->cart->total_items() . "</strong> sản phẩm trong giỏ hàng </div>");
            ?>
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="10">
            <tr> 
                <th> Tên </th>
                <th> S.L </th>
                <th> Giá </th>
            </tr>
            <?php
            foreach ($this->cart->contents() as $items){
                echo('<tr>');
                //echo("<td class='updateCart'><a><img src='".base_url()."/public/frontend/images/trash.gif' id='updateCartImgId_".$items['rowid']."' width='16' height='16'></a></td>");
                echo('<td>'.$items['name'].'</td>');
                echo("<td style='text-align: center'>".$items['qty'].'</td>');
                echo("<td style='text-align: right'>".$this->format_price($items['price']*$items['qty']).'</td>');
                echo('</tr>');
            }
            ?>
            <table>
            
            <?php
        }
        
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