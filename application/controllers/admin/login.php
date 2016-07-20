<?php
class Login extends CI_Controller{
    //put your code here

    public function  __construct() {
        parent::__construct();
		$this->load->library('user_agent');
        $this->load->helper("url");
    }

    // Controller mặc định cho trang chủ
    public function index($msg = NULL){
        $data['msg'] = $msg;
        $data['title'] ='Đăng nhập';
        if(isset($_REQUEST["username"])){
            $Username = $_REQUEST["username"];
            $Password = $_REQUEST['password'];
            $result = $this->Musers->validateAdmin($Username, $Password);
            if(!$result){
                $msg = "<div class='error'>Username hay Password không đúng</div>";
                $data['msg'] = $msg;
                $this->admin_login->view("default/layout/admin/login",$data);
            } else {
				$IP = $this->getIp();
				$session_id = $this->session->userdata('NguoiDung_id');
				$name = $this->session->userdata('Username');
				 $data2 = array(
				'IP'     => $IP,                  
				'LastLogin' => date('m/d/Y h:i:s a', time() + 7*3600),
				'id_user'     => $session_id,
				'Name'     => $name,
				'OS' =>  $this->agent->platform(),
				'Browser' =>  $this->agent->browser().' '.$this->agent->version()
				);

				$this -> Mlog -> Insert($data2);
                redirect('/admin/tintuc/DanhSachTinDaDangTrongThang');
            }

        } else {
			$temp['title']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 
			$temp['template']='default/admin/login'; 
			$temp['data']['info']="Camera Bến Tre - Giải pháp & Thiết bị an ninh, báo động, báo cháy..."; 
	
            $this->load->view("default/layout/admin/login",$data);
        }
    }
	  public function getIp(){

        $ip = $_SERVER['REMOTE_ADDR'];     
        if($ip){
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            }
            return $ip;
        }
        // There might not be any data
        return false;
    }
    public function do_Logout(){
        $this->session->sess_destroy();
        redirect('admin/login');
    }

}
?>