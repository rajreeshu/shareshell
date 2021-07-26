<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH.'/libraries/JWT/JWT.php';
class Api extends CI_Controller {

    public function __construct()
	{
		parent::__construct();	
		
	}


public function verifyToken($token){

    $Key = <<<EOD
    -----BEGIN PUBLIC KEY-----
    MIGeMA0GCSqGSIb3DQEBAQUAA4GMADCBiAKBgFTAV3g4z7SiGw4vp0nenFkP6QQV
    LLHH7yNelz2WZipEN2OImQJzHqnuDSIzxZ2hRJSPEGNlWBhqaZmBV8fRiYwXwv3D
    3oB6rRXAOqThCJRjjH84oS2FK+aCyaKCLhjDa+2N/PN534p0oBSkJPeGcX6P1g9w
    wcV983x+STr/oHQpAgMBAAE=
    -----END PUBLIC KEY-----
    EOD;


    $decoded = JWT::decode($token, $Key, array('RS256'));
    $decoded_array = (array) $decoded;
		if($decoded_array['0']=="true")
		{
			return true;
		}
		else
		{
			die("Not Authorised To Use.");
		}
         
}

public function login(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') 
        {       
                
            $this->verifytoken($this->input->post('token'));
            $input=$this->security->xss_clean($this->input->post());
            $this->load->model('account_model');
		    $result=$this->account_model->login_validate($input);

            $final_result['verified']=$result['data'];
            if($result['data']){
                $final_result['user_id']=$result['dbpass']->userid;
                $final_result['first_name']=$result['dbpass']->first_name;
                $final_result['last_name']=$result['dbpass']->last_name;
                $final_result['image']=$result['dbpass']->image;
                $final_result['otp_status']=$result['dbpass']->status;
            }
            
            echo json_encode($final_result);
            

			
		}
        else
		{
		    echo json_encode("You Are Not Allowed");
		}
}

public function get_property_data(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){       
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());
        $this->load->model('account_model');
	    $data=$this->account_model->getpropertydata($input);
        
        echo json_encode($data);
            	
	}else{
		    echo json_encode("You Are Not Allowed");
		}
}

public function get_all_property_list(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
	    $input=$this->security->xss_clean($this->input->post());

        $this->load->model('account_model');
        $data=$this->account_model->getallpropertylist($input);

    	echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }
}

public function user_account_detail(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
	    $input=$this->security->xss_clean($this->input->post());

        $this->load->model('account_model');
        $data=$this->account_model->get_user_data($input);

    	echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }
}

public function my_property_data(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
	    $input=$this->security->xss_clean($this->input->post());

        $this->load->model('account_model');
        $data=$this->account_model->my_propertydata($input);

    	echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }
}

public function delete_property_byid(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
	    $input=$this->security->xss_clean($this->input->post());

        $this->load->model('account_model');
        $data=$this->account_model->delete_property_by_id($input);

    	echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }
}

}

?>