<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller { 

	public function __construct()
        {
                parent::__construct();
                $this->check_logged_in();
        }

	public function index(){
		
		$this->load->view('website/home');	
	} 

	public function properties(){ 

		$this->load->view('website/properties');
	}

	public function property(){

		$this->load->view('website/property');
	}

	public function contact(){
		$this->load->view('website/contact');
	}

	public function faq(){
		$this->load->view('website/faq');
	}

	public function aboutus(){
		$this->load->view('website/about_us');
	}

	public function testimonial(){
		$this->load->view('website/testimonial_page');
	}

	public function privacypolicy(){
		$this->load->view('website/privacy_policy');
	}

	public function termsconditions(){
		$this->load->view('website/terms_conditions');
	}


	public function Submit_property(){
		if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
			$this->load->view('website/property_submit');	
		}else{
			redirect('main/log_user');
		}
		
	}

	public function property_submited(){
		$this->load->view('website/property_submited');
	}

	public function log_user(){

		if(!$this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
			$this->load->view('website/login_signup');
		}else{
			redirect('account');
		}

		
	}
	public function signup_detail(){
		
		$this->load->view('website/signup_second');
	}
	public function account_created(){
		if($this->security->xss_clean($this->session->userdata('otp_verify_signup_shareshell'))){
			$this->load->view('website/account_created');
		}else{
			redirect("main/log_user");
		}
		
	}

	public function account(){
		if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
			$this->load->view('website/useraccount');	
		}else{
			redirect('main/log_user');
		}
		
	}

	public function changePassword(){
		if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
			$this->load->view('website/change_password');	
		}else{
			redirect('main/log_user');
		}
	}

	public function myProperties(){
		if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
			$this->load->view('website/my_properties');
		}else{
			redirect('main/log_user');
		}
	}

	public function forgetpassword(){
		if(!$this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
			$this->load->view('website/forget_password');
		}else{
			redirect('main/account');
		}
	}


	public function blog_admin_login(){


		if($user_id=$this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
			$user_data=$this->db->select('first_name,last_name,type')->where('sn',$user_id)->get("user_detail")->row();
			if($user_data->type=="blogger"){
				$this->load->view('website/blog_admin',['name'=>$user_data->first_name.' '.$user_data->last_name,'writer_id'=>$user_id]);
			}else{
				echo "Your can't access this Page";
			}
			
		}else{
			echo "You are not authorized";
		}
	}

	public function blogs(){
		$this->load->view("website/blogs");
	}

	public function blog(){
		$this->load->view("website/blog_page");
	}


	public function my404(){
		$this->load->view('website/404');
	}


	// public function test(){
	// 	$input=array(
	// 		"name"=>"reeshu",
	// 		"phone"=>"89798798",
	// 		"email"=>"dsklfh@lkdfash.com",
	// 		"property_id"=>"787",
	// 		"property_img"=>"https://wallpapercave.com/wp/wp5326049.jpg",
			
	// 	);
	// 	$this->load->view('email_template/contact_owner',["input"=>$input]);
	// }


	//private function
	private function check_logged_in(){
		if(!$this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
			if($cookie_value=$this->encrypt->decode($this->input->cookie('remember_me_shareshell', TRUE))){ 
				$this->session->unset_userdata('user_id_shareshell');
				$this->session->set_userdata('user_id_shareshell',$cookie_value);
			}
		}
	}

}
