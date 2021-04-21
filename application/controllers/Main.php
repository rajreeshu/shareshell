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
		$this->load->view('website/login_signup');
	}
	public function signup_detail(){
		$this->load->view('website/signup_second');
	}




	public function my404(){
		$this->load->view('website/404');
	}

}
