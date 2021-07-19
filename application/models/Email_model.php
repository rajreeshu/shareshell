<?php

class Email_model extends CI_Model{

	public function contactus_sendEmail($input){
		$headers = "Organization: Shareshell inc\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "X-Priority: 3\r\n";
		$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
		$headers .= 'From: '.$input["firstname"]. '| ShareShell <server53.web-hosting.com>' . "\n";
		$headers .='Reply-To: '.$input["firstname"]. '<'.$input['email'].'>'; 
		$success=1;
		
		$body='<b>name : '.$input['firstname']." ".$input['lastname']."<br> Email :- ".$input['email']."<br> Subject : ".$input['subject']."<br> Message : ".$input['message']."<b>";

		$success = mail('contactus@shareshell.in', 'Contact Us Page: '.$input['subject'],$body,$headers);

		if(!$success){
			return error_get_last();
		}

		return $success;
	}

	public function contact_owner_sendEmail($input){
		$body=$this->load->view('email_template/contact_owner',['input'=>$input],true);
		$headers = "Organization: Shareshell inc\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "X-Priority: 3\r\n";
		$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
		$headers .= 'From: '.$input["name"]. '| ShareShell <server53.web-hosting.com>' . "\n";
		$headers .='Reply-To: '.$input["name"]. '<'.$input['email'].'>'; 
		$success=1;
		
		// $body='<b>name : '.$input['name']." <br> Phone no :  ".$input['phone']."<br> Email :- ".$input['email']."<br> Property ID :".$input['property_id']." Subject : Want to Contact you for Property Posted on Shareshell.in<br>";
		// $body .='<img src="'.$input['property_img'].'>"';
		$success = mail($input['owner_email'], 'Want to Contact you for Property Posted on Shareshell.in',$body,$headers);

		if(!$success){
			return error_get_last();
		}

		return $success;
	}

}


?> 