<?php

class Password_model extends CI_Model{

	public function create_hash($email,$password){

		$password_new=$email."//".$password;
		
		$password_new_hash=password_hash($password_new,PASSWORD_BCRYPT);

		return $password_new_hash;
	}

	public function a($data){
		return "https://google.com";
	}

}


?> 