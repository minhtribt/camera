<?php  
class MProduct extends CI_model{ 
     // đếm tổng số record trong table book 
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function count_all(){ 
        return $this->db->count_all('product'); 
    }

    public function listall(){
        $query=$this->db->get('product');
        return $query->result_array();
    }
    // lấy dữ liệu theo từng phần 
    public function list_with_page($number, $offset){ 
        $this->db->order_by("product_id", "desc"); // order by ID
        $query =  $this->db->get('product',$number,$offset); 
        $result_array = $query->result_array();
        return $result_array; 
    } 
    
    public function getProductById($id){
		$this->db->select('*');
		$this->db->from('product');
        $this->db->where("product_id",$id);
        $query=$this->db->get();
        $data = $query->row();
        return $data; //only return  1 record
        //return $query->row_array();
    } 
	
    public function Insert($data) {
        $this->db->insert('product',$data);
        return $this->db->insert_id();
    }

    public function Update($data, $TinTuc_id) {
        $this->db->where('TinTuc_id', $TinTuc_id);
        $this->db->update('product', $data); 
    }

    public function Delete($Tintuc_id){
        $this->db->where("TinTuc_id",$Tintuc_id);
        $this->db->delete('product');
        //unlink("./upload/" . $file[0]['file_name']); //xóa file upload trong thư mục chứa
        return $this->db->affected_rows();     
    }

    public function count_all_search($valueSearch){ 
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('TieuDe LIKE', '%'.$valueSearch.'%');
        $this->db->or_where('NoiDung LIKE', '%'.$valueSearch.'%');
        $result = $this->db->count_all_results(); 
        return $result;
    }

     // lấy dữ liệu theo từng phần 
    public function list_with_keySearch($valueSearch, $number, $offset){
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('TieuDe LIKE', '%'.$valueSearch.'%');
        $this->db->or_where('NoiDung LIKE', '%'.$valueSearch.'%');
        $this->db->limit($number,$offset);
        $query=$this->db->get();
        return $query->result_array();
    }
}
?>