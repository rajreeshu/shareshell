<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account_model extends CI_Model{


    public function login_validate($input){
        $data['dbpass']=$this->db->select('sn as userid,password,status,first_name,last_name,username,image')->where('email',$input['email'])->get('user_detail')->row();
        if($data['dbpass']){
			$this->load->model('password_model');
			$data['data']=$this->password_model->verify_hash($input['email'],$input['password'],$data['dbpass']->password);
            // $data['data']=password_verify($input['email']."//".$input['password'],$data['dbpass']->password);
        }else{
            $data['data']=0;
        } 
	    

        return $data;
    }

    public function getpropertydata($input){
        $data['data']=$this->db->select('listed_by,lister_info,name,price,address,landmark,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video,negoitable,furnish,facing,min_bathroom,min_balcony,floor_no,area,prefered,food,sharing_with')->where('sn',$input['id'])->get('property_info')->row();
        $data['image']=$this->db->select('image_id,image')->where('property_id',$input['id'])->get('property_image')->result();
		$data['favourite_status']=$this->db->where(['user_id'=>$input['user_id'],'property_id'=>$input['id']])->get('favourite_property')->num_rows()?true:false;
        $data['listed_by']=$this->db->select('first_name,last_name,username,gender,image,address,user_bio,website,facebook,twitter,email')->where('sn',$data['data']->listed_by)->get('user_detail')->row();
		
		// $data['input'] =$input;

        return $data;
    }

    
public function property_detail($input){

	// return json_encode($out_put);

	$this->db->select('sn,name,price,main_image,description,avail,city,status,type,address,min_bed,furnish');
	
	if(isset($input['search_text'])&&$input['search_text']!=""){
		$search_text=strtolower($input['search_text']);
        $this->db->group_start();
		$this->db->like('name',$search_text)->or_like('address',$search_text)->or_like('description',$search_text)->or_like('city',$search_text);
        $this->db->group_end();
	}

	if($input['filter_status']!=""){
		$this->db->like('status',$input['filter_status']);
	}

	if(isset($input['filter_type'])&&$input['filter_type']!=""){
		$this->db->group_start();
			foreach(explode(',',$input['filter_type']) as $value_loop){
					$this->db->or_where('type',$value_loop);
			}
		$this->db->group_end();
	}

	if($input['filter_city']!=""){
		$this->db->like('city',$input['filter_city']);
	}
	
	if(isset($input['filter_min_bed'])){
		if($input['filter_min_bed']!=""){
			$this->db->group_start();
			foreach(explode(',',$input['filter_min_bed']) as $value_loop){
				if($value_loop!=""){
				if($value_loop>=40){
					$this->db->or_where('min_bed >=',5);
				}else{
					$this->db->or_where('min_bed',$value_loop);
				}
			}
			}
			$this->db->group_end();
		}
	}

	if(isset($input['filter_furnish'])&&$input['filter_furnish']!=""){
		$this->db->group_start();
		
		foreach(explode(',',$input['filter_furnish']) as $value_loop){
			if($value_loop!=""){
				$this->db->or_where('furnish',$value_loop);
			}
		}
		$this->db->group_end();
	}

	if($input['filter_addon']!=""){
		foreach(explode(',',$input['filter_addon']) as $value_loop){
			if($value_loop!=""){
				$this->db->like('addon',$value_loop);
			}
		}
	}

	if($input['filter_bathroom']!=""){
		$this->db->group_start();
		foreach(explode(',',$input['filter_bathroom']) as $value_loop){
			if($value_loop!=""){
				if($value_loop>=40){
					$this->db->or_where('min_bathroom >=',5);
				}else{
					$this->db->or_where('min_bathroom',$value_loop);
				}
			}
		}
		$this->db->group_end();
	}

	if($input['filter_facing']!=""){
		$this->db->group_start();
		foreach(explode(',',$input['filter_facing']) as $value_loop){
			if($value_loop!=""){
				$this->db->or_where('facing',$value_loop);
			}
		}
		$this->db->group_end();
	}

	if($input['filter_sharing']!=""){
		$this->db->group_start();
		foreach(explode(',',$input['filter_sharing']) as $value_loop){
			if($value_loop!=""){
				if($value_loop>=40){
					$this->db->or_where('sharing_with >=',5);
				}else{
					$this->db->or_where('sharing_with',$value_loop);
				}
			}
		}
		$this->db->group_end();
	}

	if(isset($input['filter_avail'])&&$input['filter_avail']!=""){
		$this->db->group_start();
		foreach(explode(',',$input['filter_avail']) as $value_loop){
			if($value_loop!=""){
				$this->db->or_where('avail',$value_loop);
			}
		}
		$this->db->group_end();
	}

	if($input['filter_meal']!=""){
		$this->db->group_start();
		foreach(explode(',',$input['filter_meal']) as $value_loop){
			if($value_loop!=""){
				$this->db->or_where('food',$value_loop);
			}
		}
		$this->db->group_end();
	}

	if($input['filter_prefered']!=""){
		$this->db->group_start();
		foreach(explode(',',$input['filter_prefered']) as $value_loop){
			if($value_loop!=""){
				$this->db->or_where('prefered',$value_loop);
			}
		}
		$this->db->group_end();
	}
	
	if($input['filter_price']!=""){
		$property_price = explode(',', $input['filter_price']);
		$this->db->where('price >',(int)$property_price[0]-10);
		$this->db->where('price < ',(int)$property_price[1]+10);
	}
	$this->db->where('listed_by!=',"");
	return $this->db->order_by($input['filter_sort'],$input['filter_sort_by']);

}

public function getallpropertylist($input){

	$data['input']=$input; 
	if(!isset($input['search_text'])){
		$input['search_text']="";
	}

	$this->load->model('account_model');
	
	$handle = curl_init();

         
	// Set the url
	curl_setopt($handle, CURLOPT_URL, 'https://shareshell-ai.searchme.tech/correct');
	curl_setopt($handle, CURLOPT_POST, 1);
	curl_setopt($handle, CURLOPT_POSTFIELDS,
		"nam=".$input['search_text']);
	// Set the result output to be a string.
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	 
	$output = curl_exec($handle);
	 
	curl_close($handle);
	// var_dump($output);

	$data['correct'] ='';
	$data['data']=[];
	foreach(json_decode($output) as $out){
		$data['correct'].=$out;
		$input['search_text']=$out;
		$data_arr=$this->account_model->property_detail($input)->limit($input['items_per_page'],($input['page_no']-1)*$input['items_per_page'])->get('property_info')->result();
		// $data['data']=$data_arr;
		$data['data']=array_merge($data['data'],$data_arr);
	}
	// $data['data']=$this->account_model->property_detail($input)->limit($input['items_per_page'],($input['page_no']-1)*$input['items_per_page'])->get('property_info')->result();
	
	$data['liked']=$this->db->select('property_id')->where('user_id',$input['user_id'])->get('favourite_property')->result();
	$data['row_count']=$this->account_model->property_detail($input)->get('property_info')->num_rows();

    return $data;
}

public function get_user_data($input){
	return $this->db->select('first_name,last_name,username,email,phone,gender,image,address,user_bio,website,facebook,twitter')->where('sn',$input['user_id'])->get('user_detail')->row();
}

public function edit_userdata($input){
	if($input['field']=='username'){
		$username_chk=$this->db->select('username')->where('username',$input['value'])->get('user_detail')->row();
		if($username_chk==null){
			$data['data']=$this->db->where('sn',$input['user_id'])->update('user_detail',[$input['field']=>$input['value']]);
		}else{
			$data['data']='username already taken';
		}
	}else{
		if($input['field']!='email'){
			$data['data']=$this->db->where('sn',$input['user_id'])->update('user_detail',[$input['field']=>$input['value']]);
		}else{
			$data['data']="email can't be changed";
		}
		
	}
	return $data['data'];
}

public function my_propertydata($input){
	$this->db->select('sn,listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video');
	$this->db->where('listed_by',$input['user_id']);
	$this->db->where('listed_by!=',"");
	$this->db->order_by('sn','DESC');
	return $this->db->get('property_info')->result();
}

public function delete_property_by_id($input){
	return $this->db->where('sn',$input['property_id'])->delete('property_info');
}


public function get_blog_list_data($input){
	$this->db->select("blog_heading,blog_id,blog_body,blog_image,blog_date");
	if($input['category']!=""){
		$this->db->where("blog_category",$input['category']);
	}
	if($input['tags']!=""){
		$this->db->like("blog_tags",$input['tags']);
	}
	return $this->db->order_by("blog_id","DESC");
}

public function show_fav_property($input){
	$this->db->select("a.id,a.property_id,b.name,b.price,b.address,b.avail,b.type,b.status,b.main_image,b.min_bed");
	$this->db->from('favourite_property as a');
	$this->db->where('a.user_id',$input['user_id']);
	$this->db->join ('property_info as b','a.property_id=b.sn');
	return $this->db->get()->result();
}

public function add_to_fav($input){
	if($input['user_id']==""){
		return;
	}
	$early=$this->db->where(['user_id'=>$input['user_id'],'property_id'=>$input['property_id']])->get('favourite_property')->num_rows();
	if(!$early){
		$data['work']="added";
		$data['data']=$this->db->insert('favourite_property',['user_id'=>$input['user_id'],'property_id'=>$input['property_id'],'date_time'=>date('Y-m-d H:i:s')]);

	}else{
		$data['work'] ="removed";
		$data['data']=$this->db->where(['user_id'=>$input['user_id'],'property_id'=>$input['property_id']])->delete('favourite_property');
	}
	return $data;
}

public function resetPassword_otp($input){
	$otp_random=rand(1000,9999);
	$this->db->where('email',$input['email_field'])->update('user_detail',['otp'=>password_hash($otp_random,PASSWORD_BCRYPT),'otp_sent_time'=>date('Y-m-d H:i:s')]);
	$this->load->model('email_model');
	$send_email=$this->email_model->send_mail_otp($input['email_field'],$otp_random);
	
	if($send_email){
		$data['data']=true;
	}else{
		$data['data']=$send_email;
	}
	$data['send_mail']=$send_email;
	$user_id=$this->db->select('sn')->where("email",$input['email_field'])->get("user_detail")->row();	

	$data['user_id']=$user_id->sn;
	return $data; 
	
}

// public function resend_otp_user($input){
//     $otp_random=rand(1000,9999);
// 	$input['email_field']=$this->db->select('email')->where('sn',$input['user_id'])->get('user_detail')->row()->email;
// 	$this->db->where('email',$input['email_field'])->update('user_detail',['otp'=>password_hash($otp_random,PASSWORD_BCRYPT),'otp_sent_time'=>date('Y-m-d H:i:s')]);
// 	$this->load->model('email_model');
// 	$send_email=$this->email_model->send_mail_otp($input['email_field'],$otp_random);
// 	if($send_email){
// 		$data['data']=true;
// 	}
// 	$user_id=$this->db->select('sn')->where("email",$input['email_field'])->get("user_detail")->row();	

// 	$data['user_id']=$user_id->sn;
// 	return $data;
// }

public function verify_otp_m($input){
	$db_data=$this->db->select('otp,otp_sent_time')->where('sn',$input['user_id'])->get('user_detail')->row();

	$data['data']=password_verify($input['otp'],$db_data->otp);

	if($data['data']){
		$this->session->unset_userdata('otp_verify_signup_shareshell');
		$this->db->where('sn',$input['user_id'])->update('user_detail',['status'=>1]);
	}
	return $data;
	
}

public function update_password_m($input){
	$this->load->model('password_model');
	$hashed_pass=$this->password_model->create_hash($input['email'],$input['password']);

	return $this->db->where('email',$input['email'])->update("user_detail",['password'=>$hashed_pass]);

}

public function changePassword_m($input){
	$user_detail=$this->db->select('email,password')->where('sn',$input['user_id'])->get('user_detail')->row();

	$this->load->model('password_model');
	$isSame=$this->password_model->verify_hash($user_detail->email,$input['old_password'],$user_detail->password);
	$new_password_hash=$this->password_model->create_hash($user_detail->email,$input['new_password']);
	
	$data['updated']=false; 

	if($isSame){
		$data['isSamePassword']=true;
		$data['updated']=$this->db->where('sn',$input['user_id'])->update("user_detail",['password'=>$new_password_hash]);
	}else{
		$data['isSamePassword']=false;
	}
	return $data;
}

public function signup_validate_data_m($input){
	$data['data']=$this->db->where($input['datatype'],$input['data'])->get('user_detail')->num_rows();
	return $data;
}



}

?>