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

public function edit_user_data(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
	    $input=$this->security->xss_clean($this->input->post());

        $update_array=array(
                    'first_name'=>$input['first_name'],
                    'last_name'=>$input['last_name'],
                    'address'=>$input['address'],
                    'website'=>$input['website'],
                    'phone'=>$input['phone'],
                    'facebook'=>$input['facebook'],
                    'twitter'=>$input['twitter'],
                    'user_bio'=>$input['user_bio']
        );

        $data['data']=$this->db->where("sn",$input['user_id'])->update("user_detail",$update_array);

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
        $data['data']=$this->account_model->my_propertydata($input);

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

public function my_fav_properties(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());
        $this->load->model('account_model');
        $data['data']=$this->account_model->show_fav_property($input);

        echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }
}

public function add_to_favorite(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());
        $this->load->model('account_model');
	    $data=$this->account_model->add_to_fav($input);
        echo json_encode($data);

    }else{
        echo json_encode("You Are Not Allowed");
    }

}

public function reset_password_otp(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());
        $this->load->model('account_model');
        $data=$this->account_model->resetPassword_otp($input);

        echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }
}

public function verify_otp(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());
        
        $this->load->model('account_model');
        $data=$this->account_model->verify_otp_m($input);
        echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }        

}

public function update_password(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());
        $this->load->model('account_model');

        $data['data']=$this->account_model->update_password_m($input);
        echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }    

}

public function change_password(){ 
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());

        $this->load->model('account_model');
        $data=$this->account_model->changePassword_m($input); 

        echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }    

}

public function signup_validate_data(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());

        $this->load->model('account_model');
        $data=$this->account_model->signup_validate_data_m($input);
    	echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }    
}

public function submit_signup_data(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));

        $input=$this->security->xss_clean($this->input->post());

        $otp_random=rand(1000,9999);

        $this->load->model('password_model');
	    $hashed_pass=$this->password_model->create_hash($input['email_field'],$input['password_field']);
        
        $db_array=array(
                        'first_name'=>$input['first_name_field'],
                        'last_name'=>$input['last_name_field'],
                        'username'=>$input['username_field'],
                        'email'=>$input['email_field'],
                        'password'=>$hashed_pass,
                        'user_bio'=>$input['bio_area'],
                        'address'=>$input['address_area'],
                        'website'=>$input['website_field_new'],
                        'phone'=>$input['phone_field'],
                        'facebook'=>$input['facebook_field'],
                        'twitter'=>$input['twitter_field'],
                        'gender'=>$input['gender_field'],
                        'account_created_on'=>date('Y-m-d H:i:s')
        );

        $insert_prop_data =$this->db->insert('user_detail',$db_array);
        $insertId = $this->db->insert_id();
        
        $config['upload_path']          = 'utility/user_image';
        $config['allowed_types']        = 'gif|jpg|png|jpeg'; 
        $config['max_size']             = 10000;
        $config['file_name']			=$insertId;

        // $this->load->library('upload', $config);
        $this->load->library('upload');

        $this->upload->initialize($config);
        $this->upload->do_upload('main_img');

        $img_upload_data = $this->upload->data();
        
        if(isset($img_upload_data['file_name'])&&$img_upload_data['file_name']==true){
            $this->db->where("sn",$insertId)->update("user_detail",['image'=>$img_upload_data['file_name']]);
        }
        
        // $data['img_error']= $this->upload->display_errors();



        $config_temp['image_library'] = 'gd2';
		$config_temp['source_image'] = 'utility/user_image/'.$img_upload_data['file_name'];
		$config_temp['create_thumb'] = TRUE;
		$config_temp['maintain_ratio'] = TRUE;
		$config_temp['width']         = 200;
        
        $this->load->library('image_lib', $config_temp);
        $this->image_lib->resize();
        echo $this->image_lib->display_errors();

        if($insert_prop_data==1){
            $this->db->where('sn',$insertId)->update('user_detail',['otp'=>password_hash($otp_random,PASSWORD_BCRYPT),'otp_sent_time'=>date('Y-m-d H:i:s')]);

            $this->load->model('email_model');
        	$this->email_model->send_mail_otp($input['email_field'],$otp_random);
            
        }

        $data['data']=$insert_prop_data;
        $data['user_id']=$insertId;
        echo json_encode($data);

    }else{
        echo json_encode("You Are Not Allowed");
    }   
}



//machine learnign codes

public function all_blog_data_ml(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());
        $data['data']=$this->db->select('blog_id,blog_heading as blog_title,blog_body as blog_content,blog_category,blog_tags,blog_image')->get('blog')->result();    
        echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }  
    
}

public function all_search_suggest(){
    if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){        
                
        $this->verifytoken($this->input->post('token'));
        $input=$this->security->xss_clean($this->input->post());
        $data['data']=$this->db->select('name,address,landmark,city')->get('property_info')->result();    
        echo json_encode($data);
    }else{
        echo json_encode("You Are Not Allowed");
    }  
    
}



}

?>