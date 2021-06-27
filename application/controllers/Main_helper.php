<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_helper extends CI_Controller {  

	public function submit_property()
	{
		$input=$this->security->xss_clean($this->input->post());

		$data['input']=$input;
		

		// $data['data']=$input;

		$addon=""; 

		if(isset($input['emergency_exit'])){
			$addon=$addon."exit,";
		} 
		if(isset($input['fire_place'])){
			$addon=$addon."fire,";
		}
		if(isset($input['laundry'])){
			$addon=$addon."laundry,";
		}
		if(isset($input['mess'])){
			$addon=$addon."mess,";
		}

		$db_array = array('listed_by' => $this->security->xss_clean($this->session->userdata('user_id_shareshell')),
							'name'	   => $input['propertyname'],
							'price'	   => $input['propertyprice'],
							'address'  => $input['propertyaddress'],
							'contact'  =>$input['propertycontact'],
							'main_image'=>'',
							'description'=>$input['description'],
							'avail'	   => $input['property_avail'],
							'city'	   => $input['property_city'],
							'status'   => $input['property_status'],
							'type'     => $input['property_type'],
							'min_bed'  => $input['property_rooms'],
							'addon'	   =>$addon,
							'add_image'=> '',
							'add_video'=> $input['property_video'],
							'listed_date'=>date('Y-m-d H:i:s')
		 );

		$insert_prop_data =$this->db->insert('property_info',$db_array);
		$insertId = $this->db->insert_id();

		// $this->load->model('upload_model');
		// $main_img_upload=$this->upload_model->upload_file($insertId,'jpg|png|jpeg','utility/main_image','main_img');

		



		// $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		// if($main_img_upload==true){
		// 	$this->db->where('sn',$insertId)->update('property_info',['main_image'=>$upload_data['file_name']]);
		// }

		// $data['upload_error']=$this->upload->display_errors();

		// $multiple_img_upload_no=1;
		// $data['file_name']="";
		// while($multiple_img_upload_no<$input['property_image_no']){
		// 	$upload_multi=false;
		// 	$multi_file_name='prs'.$multiple_img_upload_no;


		// 	$upload_multi=$this->upload_model->upload_file($insertId."_".$multiple_img_upload_no,'jpg|png|jpeg','utility/main_image',$multi_file_name);
		// 	$upload_data_multi = $this->upload->data();
		// 	if($upload_multi){
		// 		$this->db->insert('property_image',['property_id'=>$insertId,'image'=>$upload_data_multi['file_name'],'date_time'=>date('Y-m-d H:i:s')]);
		// 	}
		// 	// $data['upload_error_multi'.$multiple_img_upload_no]=$this->upload->display_errors();
			
		// 	// $data['file_name'].=' '.$multi_file_name;
		// 	// $data['upload_data']=$upload_data_multi;
		// 	$multiple_img_upload_no++;
		// }

		// $data['input']=$input;
		$data['property_id']=$insertId;
		$data['key']=$this->security->get_csrf_hash();
		echo json_encode($data);
	}

public function upload_multi_prop_img(){
	$input=$this->security->xss_clean($this->input->post());
	$insertId=$this->security->xss_clean($this->session->userdata('user_id_shareshell'));
	// $img_name=$this->security->xss_clean($this->session->userdata('img_upload_temp_user'));
	
	if($insertId){
		
		$this->load->model('upload_model');
		$up_img=$this->upload_model->compressor_upload('utility/main_image',$insertId,$input);
		// $up_img=$this->upload_model->compressor_upload('utility/user_image','x.jpg',$input);
			
			


			// echo $_FILES["file"]["name"];

			// echo $this->image_lib->display_errors();

			

		if($up_img){
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'utility/main_image/'.$_FILES["file"]["name"];
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 200;
			// $config['height']       = 250;

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			
			if(substr_count($_FILES["file"]["name"],"_")){
				$this->db->insert('property_image',['property_id'=>strstr($_FILES["file"]["name"],"_",true),'image'=>$_FILES["file"]["name"],'date_time'=>date('Y-m-d H:i:s')]);
				// echo "if worked";
			}else{
				$this->db->where('sn',strstr($_FILES["file"]["name"],".",true))->update('property_info',['main_image'=>$_FILES["file"]["name"]]);
				// echo "else worked -> ".strstr($_FILES["file"]["name"],".",true);
			}
			
				// $this->db->where('sn',$insertId)->update('user_detail',['image'=>$img_name]);
		}

	}
	
	
}







public function get_property_data(){
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->select('listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video')->where('sn',$input['id'])->get('property_info')->row();
	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);
}

public function get_property_images(){
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->select('image_id,image')->where('property_id',$input['property_id'])->get('property_image')->result();

	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);
}

public function get_all_property_list(){
	$input=$this->security->xss_clean($this->input->post());

	if(isset($input['filter_addon'])){
		$addon_length=count($input['filter_addon']);
		// $data['input']=$addon_length;
		if($addon_length<4){
			for($addon_length;$addon_length<=3;$addon_length++){
				$input['filter_addon'][$addon_length]="";
			}
		}

		
	}else{
		for($i=0;$i<=3;$i++){
			$input['filter_addon'][$i]="";
		}
	}
	$data['extra']=$input['filter_addon']; 

	// $input['filter_addon'][5]="";
	$data['input']=$input;


	// $this->db->select('sn,listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video');
	// $this->db->like('avail',$input['filter_avail']);
	// $this->db->like('city',$input['filter_city']);
	// $this->db->like('status',$input['filter_status']);
	// $this->db->like('addon',$input['filter_addon'][0]);
	// $this->db->like(['avail'=>$input['filter_avail'],'city'=>$input['filter_city'],'status'=>$input['filter_status'],'addon'=>$input['filter_addon'][0]]);
	// $this->db->like('addon',$input['filter_addon'][1]);
	// $this->db->like('addon',$input['filter_addon'][2]);
	// $this->db->like('addon',$input['filter_addon'][3]);
	// $this->db->where('price >',(int)$property_price[0]-10);
	// $this->db->where('price < ',(int)$property_price[1]+10);
	// $data['row_count']=$this->db->get('property_info')->num_rows();
	// $this->db;


	
	// ->like(['avail'=>$input['filter_avail'],'city'=>$input['filter_city'],'status'=>$input['filter_status'],'addon'=>$input['filter_addon'][0]])->like('addon',$input['filter_addon'][1])->like('addon',$input['filter_addon'][2])->like('addon',$input['filter_addon'][3])->where('price >',(int)$property_price[0]-10)->where('price < ',(int)$property_price[1]+10)
	
	
	
	// $data['row_count']=$raw_data->get('property_info')->num_rows();
	
	// $raw_data->limit($input['items_per_page'],($input['page_no']-1)*$input['items_per_page']);
	// $raw_data->order_by($input['filter_sort'],$input['filter_sort_by']);
	
	// $data['data']=$raw_data->get('property_info')->result();

	$data['data']=$this->property_detail($input)->limit($input['items_per_page'],($input['page_no']-1)*$input['items_per_page'])->get('property_info')->result();
	$data['row_count']=$this->property_detail($input)->get('property_info')->num_rows();

	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);
}

// public function get_user_data


public function signup_validate_data(){
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->where($input['datatype'],$input['data'])->get('user_detail')->num_rows();

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

// public function set_session(){
// 	$input=$this->security->xss_clean($this->input->post());

// 	$data['input']=$input;
	
// 	$this->session->set_userdata($input['session_name'], $input['session_value']);

		
	
// 	$data['key']=$this->security->get_csrf_hash();
// 	echo json_encode($data);
// }

// public function get_session(){
// 	$input=$this->security->xss_clean($this->input->post());
	
// 	$data['data']=$this->session->userdata($input['session_name']);
	
// 	$data['key']=$this->security->get_csrf_hash();
// 	echo json_encode($data);
// }

// public function delete_session(){
// 	$input=$this->security->xss_clean($this->input->post());
	
// 	$data['data']=$this->session->unset_userdata($input['session_name']);
	
// 	$data['key']=$this->security->get_csrf_hash();
// 	echo json_encode($data);
// }

public function password_create_hash(){
	$input=$this->security->xss_clean($this->input->post());

	$this->load->model('password_model');
	$data['data']=$this->password_model->create_hash($input['email'],$input['password']);

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function submit_signup_data(){
	$input=$this->security->xss_clean($this->input->post());

	$otp_random=rand(1000,9999);

	// $data['input']=$input;

	$db_array=array(
					'first_name'=>$input['first_name_field'],
					'last_name'=>$input['last_name_field'],
					'username'=>$input['username_field'],
					'email'=>$input['email_field'],
					'password'=>$input['password_field'],
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

	if($insert_prop_data==1){
		$this->session->set_flashdata('account_created', '1');

		$this->db->where('sn',$insertId)->update('user_detail',['otp'=>password_hash($otp_random,PASSWORD_BCRYPT),'otp_sent_time'=>date('Y-m-d H:i:s')]);

		$this->_send_mail($input['email_field'],$otp_random);

		$this->session->set_userdata('otp_verify_signup_shareshell',$insertId);
		
		$ext=pathinfo($input['image_field_check'], PATHINFO_EXTENSION);
		if($ext=='jpg'||$ext=='jpeg'||$ext=="png"){
			$this->session->set_userdata('img_upload_temp_user',$insertId.'.'.$ext);
		}else{
			$this->session->unset_userdata('img_upload_temp_user');
		}
		
		// $data['error']=$this->db->error();

	}
	

	// if($input['image_field_check']!=""){
	// 	$this->load->model('upload_model');
	// 	$main_img_upload=$this->upload_model->upload_file($insertId,'jpg|png|jpeg','utility/user_image','image_field');
		
	// 	$upload_data = $this->upload->data();
	// 	if($main_img_upload==true){
	// 			$this->db->where('sn',$insertId)->update('user_detail',['image'=>$upload_data['file_name']]);
	// 		}
	// 	$data['upload_error']=$this->upload->display_errors();
	// }
	
	// $data['otp']=$otp_random;
	$data['data']=$insert_prop_data;
	$data['user_id']=$insertId;
	// $data['ext']=;
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}



public function upload_test(){
	$input=$this->security->xss_clean($this->input->post());
	$insertId=$this->security->xss_clean($this->session->userdata('otp_verify_signup_shareshell'));
	$img_name=$this->security->xss_clean($this->session->userdata('img_upload_temp_user'));
	
	if($img_name){
		
		// $this->load->model('upload_model');
		// $up_img=$this->upload_model->compressor_upload('utility/user_image',$img_name,$input);
		// $up_img=$this->upload_model->compressor_upload('utility/user_image','x.jpg',$input);
		$up_img=move_uploaded_file($_FILES["file"]["tmp_name"], 'utility/user_image/'.$_FILES["file"]["name"]);
			
			
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'utility/user_image/'.$img_name;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 200;
			// $config['height']       = 250;

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			echo $this->image_lib->display_errors();

			

			if($up_img){
				$this->db->where('sn',$insertId)->update('user_detail',['image'=>$img_name]);
			}

	}
	
	
}

public function reset_password_otp(){
	$input=$this->security->xss_clean($this->input->post());

	$otp_random=rand(1000,9999);
	$this->db->where('email',$input['email_field'])->update('user_detail',['otp'=>password_hash($otp_random,PASSWORD_BCRYPT),'otp_sent_time'=>date('Y-m-d H:i:s')]);
	$send_email=$this->_send_mail($input['email_field'],$otp_random);
	if($send_email){
		$data['data']=true;
	}
	$user_id=$this->db->select('sn')->where("email",$input['email_field'])->get("user_detail")->row();	

	$data['user_id']=$user_id->sn;
	// $data['otp']=$otp_random;
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);

}

public function verify_otp(){

	$input=$this->security->xss_clean($this->input->post());

	$db_data=$this->db->select('otp,otp_sent_time')->where('sn',$input['user_id'])->get('user_detail')->row();

	$data['data']=password_verify($input['otp'],$db_data->otp);

	if($data['data']){
		$this->session->unset_userdata('otp_verify_signup_shareshell');
		$this->db->where('sn',$input['user_id'])->update('user_detail',['status'=>1]);
	}
	$data['input']=$input;
	// $data['db']=$db_data;
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);

}

public function update_password(){
	$input=$this->security->xss_clean($this->input->post());

	$this->load->model('password_model');
	$hashed_pass=$this->password_model->create_hash($input['email'],$input['password']);

	$updated=$this->db->update("user_detail",['password'=>$hashed_pass]);

	$data['data']=$updated;
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function login_validate_data(){

	$input=$this->security->xss_clean($this->input->post());

	// $data['input']=$input;

	$dbpass=$this->db->select('sn as userid,password,status')->where('email',$input['email'])->get('user_detail')->row();

	$data['data']=password_verify($input['email']."//".$input['password'],$dbpass->password);


	if($data['data']&&$dbpass->status==1){
		$this->session->unset_userdata('user_id_shareshell');
		$this->session->set_userdata('user_id_shareshell',$dbpass->userid);

	}

	$data['account_status']=$dbpass->status;
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);



}

public function logout_account(){

	$input=$this->security->xss_clean($this->input->post());
	$this->session->unset_userdata('user_id_shareshell');

	if(!$this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
		redirect("main/log_user");
	}else{
		redirect("account");
		// $data['data']=false;
	}

	// $data['key']=$this->security->get_csrf_hash();
	

}



public function upload_property_image(){
	$input=$this->security->xss_clean($this->input->post());
	$insertId=$this->security->xss_clean($this->session->userdata('user_id_shareshell'));
	$img_name=$this->security->xss_clean($this->session->userdata('img_upload_temp_user'));
	
	if($img_name){
		
		$this->load->model('upload_model');
		$up_img=$this->upload_model->compressor_upload('utility/user_image',$img_name,$input);
		// $up_img=$this->upload_model->compressor_upload('utility/user_image','x.jpg',$input);
			
			
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'utility/user_image/'.$img_name;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 200;
			// $config['height']       = 250;

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			echo $this->image_lib->display_errors();

			

			if($up_img){
				$this->db->where('sn',$insertId)->update('user_detail',['image'=>$img_name]);
			}

	}
	
	
}



public function user_account_detail(){
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->select('first_name,last_name,username,email,phone,gender,image,user_bio,website,facebook,twitter')->where('sn',$input['user_id'])->get('user_detail')->row();

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);

}

public function user_detail_public(){
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->select('first_name,last_name,username,gender,image,address,user_bio,website,facebook,twitter')->where('sn',$input['user_id'])->get('user_detail')->row();

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function change_password(){
	$input=$this->security->xss_clean($this->input->post());

	$user_detail=$this->db->select('email,password')->where('sn',$input['user_id'])->get('user_detail')->row();



	$isSame=password_verify($user_detail->email."//".$input['old_password'],$user_detail->password);

	$this->load->model('password_model');
	$new_password_hash=$this->password_model->create_hash($user_detail->email,$input['new_password']);
	
	$updated=false;

	if($isSame){
		$data['isSamePassword']=true;
		$updated=$this->db->where('sn',$input['user_id'])->update("user_detail",['password'=>$new_password_hash]);
	}else{
		$data['isSamePassword']=false;
	}

	$data['updated']=$updated;


	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);

}


public function my_property_data(){
	$input=$this->security->xss_clean($this->input->post());

	$this->db->select('sn,listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video');
	// $this->db->like(['avail'=>$input['filter_avail'],'city'=>$input['filter_city'],'status'=>$input['filter_status'],'addon'=>$input['filter_addon'][0]])
	// $this->db->like('addon',$input['filter_addon'][1]);
	// $this->db->like('addon',$input['filter_addon'][2]);
	// $this->db->like('addon',$input['filter_addon'][3]);
	// $this->db->where('price >',(int)$property_price[0]-10);
	// $this->db->where('price < ',(int)$property_price[1]+10);
	// $this->db->order_by($input['filter_sort'],$input['filter_sort_by']);
	// $this->db->limit($input['items_per_page'],($input['page_no']-1)*$input['items_per_page']);
	$this->db->where('listed_by',$input['user_id']);
	$data['data']=$this->db->get('property_info')->result();

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function delete_property_byid(){

	$input=$this->security->xss_clean($this->input->post());

	if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
		$this->db->where('sn',$input['property_id'])->delete('property_info');
	}

	

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}



private function property_detail($input){

	$this->db->select('sn,name,price,main_image,description,avail,city,status,type');
	
	if(isset($input['search_text'])&&$input['search_text']!=""){
		$search_text=$input['search_text'];
		$this->db->like('name',$search_text)->or_like('address',$search_text)->or_like('description',$search_text)->or_like('city',$search_text);
	}

	if($input['filter_avail']=="all"){
		$input['filter_avail']="";
	}
	$this->db->like('avail',$input['filter_avail']);
	if($input['filter_avail']=="boy"||$input['filter_avail']=="girl"){
		$this->db->or_like('avail','combined');
	}

	if($input['filter_city']!=""){
		$this->db->like('city',$input['filter_city']);
	}

	if($input['filter_status']!=""){
		$this->db->like('status',$input['filter_status']);
	}
	if($input['filter_addon']!=""){
		$this->db->like('addon',$input['filter_addon'][0]);
		$this->db->like('addon',$input['filter_addon'][1]);
		$this->db->like('addon',$input['filter_addon'][2]);
		$this->db->like('addon',$input['filter_addon'][3]);
	}
	

	if($input['filter_price']!=""){
		$property_price = explode(',', $input['filter_price']);
		$this->db->where('price >',(int)$property_price[0]-10);
		$this->db->where('price < ',(int)$property_price[1]+10);
	}

	return $this->db->order_by($input['filter_sort'],$input['filter_sort_by']);

}



//mailing function
private function _send_mail($email,$random_val){
	$headers = 'From: Multirater Surveys <contactus@shareshell.in>' . "\n";
		
			$headers .= 'MIME-Version: 1.0' . "\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			$returnpath = '-f contactus@shareshell.in';

			$success=1;
			
			$success = mail($email, 'Otp Verification of ShareShell', "your Verification code is: ".$random_val);
			return $success;
}	



}
