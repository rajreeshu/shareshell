<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller { 

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


	public function Submit_property(){
		$this->load->view('website/property_submit');
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
		$this->load->view('website/account_created');
	}

	public function account(){
		if(isset($_SESSION['user_id_shareshell'])){
			$this->load->view('website/useraccount');	
		}else{
			redirect('main/log_user');
		}
		
	}



	public function my404(){
		$this->load->view('website/404');
	}

}
