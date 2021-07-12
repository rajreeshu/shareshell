<?php

class Password_model extends CI_Model{

	public function create_hash($email,$password){

		$password_new=$email."//".$password;
		
		$password_new_hash=password_hash($password_new, PASSWORD_DEFAULT);

		return $password_new_hash;
	}


}


?> 