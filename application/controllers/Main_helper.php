<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_helper extends CI_Controller {  

	public function submit_property()
	{
		$input=$this->security->xss_clean($this->input->post());

		$data['input']=$input;


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

	$this->load->model('account_model');
	$data=$this->account_model->getpropertydata($input);
	
	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data); 
}

// public function get_property_images(){
// 	$input=$this->security->xss_clean($this->input->post());

// 	$data['data']=$this->db->select('image_id,image')->where('property_id',$input['property_id'])->get('property_image')->result();

// 	$data['key']=$this->security->get_csrf_hash();

// 	echo json_encode($data);
// }

public function get_all_property_list(){
	$input=$this->security->xss_clean($this->input->post());

	$this->load->model('account_model');
	$data=$this->account_model->getallpropertylist($input);

	$data['key']=$this->security->get_csrf_hash();

	$data['input']=$input;

	echo json_encode($data);
}

public function add_to_favorite(){
	$input=$this->security->xss_clean($this->input->post());

	$early=$this->db->where(['user_id'=>$input['user_id'],'property_id'=>$input['property_id']])->get('favourite_property')->num_rows();
	if(!$early){
		$data['work']="added";
		$data['data']=$this->db->insert('favourite_property',['user_id'=>$input['user_id'],'property_id'=>$input['property_id'],'date_time'=>date('Y-m-d H:i:s')]);

	}else{
		$data['work'] ="removed";
		$data['data']=$this->db->where(['user_id'=>$input['user_id'],'property_id'=>$input['property_id']])->delete('favourite_property');
	}
	

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function my_fav_properties(){
	$input=$this->security->xss_clean($this->input->post());

	$this->db->select("a.id,a.property_id,b.name,b.price,b.address,b.avail,b.type,b.status,b.main_image,b.min_bed");
	$this->db->from('favourite_property as a');
	$this->db->where('a.user_id',$input['user_id']);
	$this->db->join ('property_info as b','a.property_id=b.sn');
	$data['data']=$this->db->get()->result();

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}



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

public function upload_blog_image(){
	$up_img=move_uploaded_file($_FILES["file"]["tmp_name"], 'utility/blog_image/'.$_FILES["file"]["name"]);
	$file_name_full=$_FILES['file']['name'];
			
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'utility/blog_image/'.$file_name_full;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 200;
			// $config['height']       = 250;

			$this->load->library('image_lib', $config);

			$this->image_lib->resize();

			echo $this->image_lib->display_errors();

			$file_name_full=$_FILES['file']['name'];
			$id = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
			if($up_img){
				$this->db->where('blog_id',$id)->update('blog',['blog_image'=>$file_name_full]);
			}

}

public function upload_blog(){
	$input=$this->security->xss_clean($this->input->post());
	$blog_body=$_POST['blog_body'];
	$insert_data=array(
		'writer_id'=>$input['writer_id'],
		'blog_heading'=>$input['blog_heading'],
		'blog_body'=> $blog_body,
		'blog_category'=> $input['blog_category'],
		'blog_date'=>date('Y-m-d')
	);
	$this->db->insert('blog',$insert_data);
	$data['blog_id']=$this->db->insert_id();
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function get_blog_data(){
	$input=$this->security->xss_clean($this->input->post());
	$data['blog']=$this->db->select('writer_id,blog_heading,blog_body,blog_image,blog_category,blog_date')->where('blog_id',$input['blog_id'])->get("blog")->row();
	$data['writer']=$this->db->select('first_name,last_name')->where("sn",$data['blog']->writer_id)->get("user_detail")->row();
	$data['next_blog_id']=$this->db->select('blog_id')->where('blog_id >',$input['blog_id'])->get('blog')->row();
	$data['prev_blog_id']=$this->db->select('blog_id')->order_by('blog_id','DESC')->where('blog_id <',$input['blog_id'])->get('blog')->row();

	$data['recommended_blogs']=$this->db->select('blog_id,blog_heading,blog_body,blog_image')->order_by('blog_id','DESC')->limit(4)->get('blog')->result();
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function get_blog_list_content(){
	$input=$this->security->xss_clean($this->input->post());
	$this->db->select("blog_heading,blog_id,blog_body,blog_image,blog_date");
	if($input['category']!=""){
		$this->db->where("blog_category",$input['category']);
	}
	$arr=$this->db->order_by("blog_id","DESC");
	// $this->db->limit($input['per_page']*($input['page_no']-1)+1,$input['per_page']);
	$this->db->limit($input['per_page'],$input['per_page']*($input['page_no']-1));
	$data['data']=$this->db->get("blog")->result();

	$data['page_count']=ceil($arr->get("blog")->num_rows()/$input['per_page']);
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function get_blog_comments(){
	$input=$this->security->xss_clean($this->input->post());
	$this->db->select('a.comment_id,a.commentor_id,a.comment,a.date_time,b.first_name,b.last_name,b.image,b.gender');
	$this->db->from('blog_comments as a');
	$this->db->where('blog_id',$input['blog_id']);
	$this->db->join('user_detail as b','a.commentor_id=b.sn');
	$this->db->order_by('comment_id','DESC');
	$this->db->limit($input['per_page'],$input['per_page']*($input['page_no']-1));
	$data['data']=$this->db->get()->result();
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function post_blog_comment(){
	$input=$this->security->xss_clean($this->input->post());
	$data['data']=$this->db->insert('blog_comments',['blog_id'=>$input['blog_id'],'commentor_id'=>$input['commentor_id'],'comment'=>$input['comment'],'date_time'=>date('Y-m-d H:i:s')]);
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
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

public function resend_otp_userid(){
	$input=$this->security->xss_clean($this->input->post());

	$otp_random=rand(1000,9999);
	$input['email_field']=$this->db->select('email')->where('sn',$input['user_id'])->get('user_detail')->row()->email;
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

	$updated=$this->db->where('email',$input['email'])->update("user_detail",['password'=>$hashed_pass]);

	$data['data']=$updated;
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function login_validate_data(){

	$input=$this->security->xss_clean($this->input->post());

	// $data['input']=$input;
	$this->load->model('account_model');
	$result=$this->account_model->login_validate($input);


	if($result['data']&&$result['dbpass']->status==1){
		$this->session->unset_userdata('user_id_shareshell');
		$this->session->set_userdata('user_id_shareshell',$result['dbpass']->userid);

		if($input['remember_me']==true){
			$cookie = array(
				'name'   => 'remember_me_shareshell',
				'value'  => $this->encrypt->encode($result['dbpass']->userid),                            
				'expire' => 3600 * 1000 * 24 * 365,                                                                                   
				'secure' => TRUE
				);
			$this->input->set_cookie($cookie);
		}

	}
	$data['data']=$result['data'];
	if(isset($result['dbpass']->status)){
		$data['account_status']=$result['dbpass']->status;
	}else{
		$data['account_status']=0;
	}
	
	// $data['input']=$input;
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);



}

public function logout_account(){

	$input=$this->security->xss_clean($this->input->post());
	$this->session->unset_userdata('user_id_shareshell');
	delete_cookie('remember_me_shareshell');
	if(!$this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
		redirect("main/log_user");
	}else{
		redirect("account");
		// $data['data']=false;
	}

	// $data['key']=$this->security->get_csrf_hash();
	

}

public function update_user_data(){

	$input=$this->security->xss_clean($this->input->post());
	$this->load->model('account_model');
	$data['data']=$this->account_model->edit_userdata($input);

	

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function get_user_name() {
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->select('first_name,last_name')->where('sn',$input['user_id'])->get("user_detail")->row();
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
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

	$this->load->model('account_model');
	$data['data']=$this->account_model->get_user_data($input);

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);

}

// public function user_detail_public(){
// 	$input=$this->security->xss_clean($this->input->post());

// 	$data['data']=$this->db->select('first_name,last_name,username,gender,image,address,user_bio,website,facebook,twitter')->where('sn',$input['user_id'])->get('user_detail')->row();

// 	$data['key']=$this->security->get_csrf_hash();
// 	echo json_encode($data);
// }

public function change_password(){
	$input=$this->security->xss_clean($this->input->post());

	$user_detail=$this->db->select('email,password')->where('sn',$input['user_id'])->get('user_detail')->row();



	// $isSame=password_verify($user_detail->email."//".$input['old_password'],$user_detail->password);

	$this->load->model('password_model');
	$isSame=$this->password_model->verify_hash($user_detail->email,$input['old_password'],$user_detail->password);
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

	$this->load->model('account_model');
	$data['data']=$this->account_model->my_propertydata($input);

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}

public function delete_property_byid(){

	$input=$this->security->xss_clean($this->input->post());

	if($this->security->xss_clean($this->session->userdata('user_id_shareshell'))){
		$this->load->model('account_model');
		$this->account_model->delete_property_by_id($input);
	}

	

	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}





public function contact_us_email_send(){
	$input=$this->security->xss_clean($this->input->post());

	$this->load->model('email_model');
	$data['data']=$this->email_model->contactus_sendEmail($input);
	$data['key'] =$this->security->get_csrf_hash();

	echo json_encode($data);
}

public function contact_owner_email_send(){
	$input=$this->security->xss_clean($this->input->post());
	$data['input']=$input;
	$this->load->model('email_model');
	$data['data']=$this->email_model->contact_owner_sendEmail($input);

	$data['key'] =$this->security->get_csrf_hash();
	echo json_encode($data);
}






//mailing function
private function _send_mail($email,$random_val){

	$body=$this->load->view('email_template/resetPassword',['otp'=>$random_val],true);
	// $this->load->library('email');
	// // $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
	// // $this->email->set_header('Content-type', 'text/html');
	// $this->email->set_header('MIME-Version', 'text/html');

	// 	$fromName="Shareshell";
    //     $subject='Otp Verification of ShareShell';
    //     $message='Your Verification Code is :'.$random_val;
    //     $from ="contactus@shareshell.in";
	// 	$this->email->set_newline("\r\n");  
	// 	$this->email->set_mailtype("html");
    //     $this->email->from($from, $fromName);
    //     $this->email->to($email);

    //     $this->email->subject($subject);
    //     $this->email->message($body);

    //     if($this->email->send()){
    //         return true;
    //     }
    //     else {
	// 		return  $this->email->print_debugger();
    //     }
    
//php mail function
	// $headers = 'From: ShareShell <contactus@shareshell.in>' . "\n";
		
			// $headers .= 'MIME-Version: text/html' . "\n";
			// $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			// $returnpath = '-f contactus@shareshell.in';
			$headers = "Organization: Shareshell inc\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
			$headers .= "X-Priority: 3\r\n";
			$headers .= "X-Mailer: PHP". phpversion() ."\r\n";
			$headers .= 'From: ShareShell <server53.web-hosting.com>' . "\n";
			$headers .='Reply-To: ShareShell <contactus@shareshell.in>'; 

			$success=1;
			
			$success = mail($email, 'Otp Verification of ShareShell', $body,$headers);
			return $success;

}	



}
