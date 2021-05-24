<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_helper extends CI_Controller {  

	public function submit_property()
	{
		$input=$this->security->xss_clean($this->input->post());

		// $data['input']=$input;
		

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

		$db_array = array('listed_by' => '1',
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

		$this->load->model('upload_model');
		$main_img_upload=$this->upload_model->upload_file($insertId,'jpg|png|jpeg','utility/main_image','main_img');



		$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
		if($main_img_upload==true){
			$this->db->where('sn',$insertId)->update('property_info',['main_image'=>$upload_data['file_name']]);
		}

		$data['upload_error']=$this->upload->display_errors();

		// $data['input']=$input;
		
		$data['key']=$this->security->get_csrf_hash();
		echo json_encode($data);
	}


public function get_property_data(){
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->select('listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video')->where('sn',$input['id'])->get('property_info')->row();
	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);
}

public function get_all_property_list(){
	$input=$this->security->xss_clean($this->input->post());

	

	if($input['filter_price']==""){
		$input['filter_price']="0,100000";
	}
	$property_price = explode(',', $input['filter_price']);


	

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


	$data['row_count']=$this->db->select('sn,listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video')->like(['avail'=>$input['filter_avail'],'city'=>$input['filter_city'],'status'=>$input['filter_status'],'addon'=>$input['filter_addon'][0]])->like('addon',$input['filter_addon'][1])->like('addon',$input['filter_addon'][2])->like('addon',$input['filter_addon'][3])->where('price >',(int)$property_price[0]-10)->where('price < ',(int)$property_price[1]+10)->get('property_info')->num_rows();


	$data['data']=$this->db->select('sn,listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video')->like(['avail'=>$input['filter_avail'],'city'=>$input['filter_city'],'status'=>$input['filter_status'],'addon'=>$input['filter_addon'][0]])->like('addon',$input['filter_addon'][1])->like('addon',$input['filter_addon'][2])->like('addon',$input['filter_addon'][3])->where('price >',(int)$property_price[0]-10)->where('price < ',(int)$property_price[1]+10)->order_by($input['filter_sort'],$input['filter_sort_by'])->limit($input['items_per_page'],($input['page_no']-1)*$input['items_per_page'])->get('property_info')->result();


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

	// $data['input']=$input;

	$db_array=array(
					'first_name'=>$input['first_name_field'],
					'last_name'=>$input['last_name_field'],
					'username'=>$input['username_field'],
					'email'=>$input['email_field'],
					'password'=>$input['password_field'],
					'website'=>$input['website_field_new'],
					'phone'=>$input['phone_field'],
					'facebook'=>$input['facebook_field'],
					'twitter'=>$input['twitter_field'],
					'account_created_on'=>date('Y-m-d H:i:s')
	);

	$insert_prop_data =$this->db->insert('user_detail',$db_array);
	$insertId = $this->db->insert_id();

	if($insert_prop_data==1){
		$this->session->set_flashdata('account_created', '1');
	}
	

	if($input['image_field_check']!=""){
		$this->load->model('upload_model');
		$main_img_upload=$this->upload_model->upload_file($insertId,'jpg|png|jpeg','utility/user_image','image_field');
		
		$upload_data = $this->upload->data();
		if($main_img_upload==true){
				$this->db->where('sn',$insertId)->update('user_detail',['image'=>$upload_data['file_name']]);
			}
		$data['upload_error']=$this->upload->display_errors();
	}
	

	$data['data']=$insert_prop_data;
	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);
}


public function login_validate_data(){

	$input=$this->security->xss_clean($this->input->post());

	// $data['input']=$input;

	$dbpass=$this->db->select('sn as userid,password')->where('email',$input['email'])->get('user_detail')->row();

	$data['data']=password_verify($input['email']."//".$input['password'],$dbpass->password);

	if($data['data']){
		$this->session->unset_userdata('user_id_shareshell');
		$this->session->set_userdata('user_id_shareshell',$dbpass->userid);

	}


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

public function user_account_detail(){
	$input=$this->security->xss_clean($this->input->post());

	$data['data']=$this->db->select('first_name,last_name,username,email,image,website,facebook,twitter,account_created_on')->where('sn',$input['user_id'])->get('user_detail')->row();



	$data['key']=$this->security->get_csrf_hash();
	echo json_encode($data);

}




}
