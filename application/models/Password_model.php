<?php

class Password_model extends CI_Model{

	public function create_hash($email,$password){

		$password_new=$email."//".$password;
		$options = array('cost' => 11);
		$password_new_hash=password_hash($password_new,PASSWORD_BCRYPT,$options);

		return $password_new_hash;
	}

	public function verify_hash($email,$password,$hash){
		$options = array('cost' => 11);
		// if(password_verify($email."//".$password,$hash)){
			// if (password_needs_rehash($hash,PASSWORD_BCRYPT, $options)) {

			// }

		// }
		return password_verify($email."//".$password,$hash);
	}

}


?> 