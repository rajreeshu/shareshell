<?php

class Email_model extends CI_Model{

	public function contactus_sendEmail($input){
		// $headers = "Organization: Shareshell inc\r\n";
		// $headers .= "MIME-Version: 1.0\r\n";
		// $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		// $headers .= "X-Priority: 3\r\n";
		// $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
		// $headers .= 'From: '.$input["firstname"]. '| ShareShell <server53.web-hosting.com>' . "\n";
		// $headers .='Reply-To: '.$input["firstname"]. '<'.$input['email'].'>'; 
		// $success=1;
		
		// $body='<b>name : '.$input['firstname']." ".$input['lastname']."<br> Email :- ".$input['email']."<br> Subject : ".$input['subject']."<br> Message : ".$input['message']."<b>";

		// $success = mail('contactus@shareshell.in', 'Contact Us Page: '.$input['subject'],$body,$headers);

		// if(!$success){
		// 	return error_get_last();
		// }

		// return $success;

		$this->load->library('email');
		$body='<b>name : '.$input['firstname']." ".$input['lastname']."<br> Email :- ".$input['email']."<br> Subject : ".$input['subject']."<br> Message : ".$input['message']."<b>";
	$config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_user'] = 'shareshell07@gmail.com';
        $config['smtp_pass'] = 'Share@123india';
        $config['smtp_port'] = 465;
		$config['charset']    = 'utf-8';
        $config['validation'] = TRUE; 

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");  
		$this->email->set_mailtype("html");
		$this->email->from('shareshell07@gmail.com', 'Shareshell');
        $this->email->to("contact_us@shareshell.in");
		$this->email->subject($input['subject']);
		$this->email->message($body);
		return $this->email->send();
	}

	public function contact_owner_sendEmail($input){
		// $body=$this->load->view('email_template/contact_owner',['input'=>$input],true);
		// $headers = "Organization: Shareshell inc\r\n";
		// $headers .= "MIME-Version: 1.0\r\n";
		// $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		// $headers .= "X-Priority: 3\r\n";
		// $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
		// $headers .= 'From: '.$input["name"]. '| ShareShell <server53.web-hosting.com>' . "\n";
		// $headers .='Reply-To: '.$input["name"]. '<'.$input['email'].'>'; 
		// $success=1;
		// $success = mail($input['owner_email'], 'Want to Contact you for Property Posted on Shareshell.in',$body,$headers);

		// if(!$success){
		// 	return error_get_last();
		// }

		// return $success;

		$this->load->library('email');
		$body=$this->load->view('email_template/contact_owner',['input'=>$input],true);
		$config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_user'] = 'shareshell07@gmail.com';
        $config['smtp_pass'] = 'Share@123india';
        $config['smtp_port'] = 465;
		$config['charset']    = 'utf-8';
        $config['validation'] = TRUE; 

		$this->email->initialize($config);
		$this->email->set_newline("\r\n");  
		$this->email->set_mailtype("html");
		$this->email->from('shareshell07@gmail.com', 'Shareshell');
        $this->email->to($input['owner_email']);
		$this->email->subject("Want to Contact you for Property Posted on Shareshell.in");
		$this->email->message($body);
		return $this->email->send();
	}

	public function send_mail_otp($email,$random_val){
		$this->load->library('email');
		$body=$this->load->view('email_template/resetPassword',['otp'=>$random_val],true);
		$config = array();
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.gmail.com';
			$config['smtp_user'] = 'shareshell07@gmail.com';
			$config['smtp_pass'] = 'Share@123india';
			$config['smtp_port'] = 465;
			$config['charset']    = 'utf-8';
			$config['validation'] = TRUE; 
	
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");  
			$this->email->set_mailtype("html");
			$this->email->from('shareshell07@gmail.com', 'Shareshell');
			$this->email->to($email);
			$this->email->subject("OTP Verification of Shareshell");
			$this->email->message($body);
			return $this->email->send();
	
		// echo $this->email->print_debugger();
	}
}





?> 