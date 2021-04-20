<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_helper extends CI_Controller { 

	public function submit_property()
	{
		$input=$this->security->xss_clean($this->input->post());
		

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
							'add_video'=> $input['property_video']
		 );

		//	$db_array = array('listed_by' => '1',
			// 				'name'	   => $input['prop_name'],
			// 				'price'	   => $input['prop_price'],
			// 				'address'  => $input['prop_address'],
			// 				'contact'  =>$input['prop_contact'],
			// 				'main_image'=>'',
			// 				'description'=>$input['prop_description'],
			// 				'avail'	   => $input['prop_avail'],
			// 				'city'	   => $input['prop_city'],
			// 				'status'   => $input['prop_status'],
			// 				'type'     => $input['prop_type'],
			// 				'min_bed'  => $input['min_bed'],
			// 				'addon'	   => $input['addon'],
			// 				'add_image'=> '',
			// 				'add_video'=> $input['video']
		 // );
		// $data['input']=$input;
		$insert_prop_data =$this->db->insert('property_info',$db_array);
		$insertId = $this->db->insert_id();

		//file uploading code
		$this->load->library('upload');
		$upload_config=array(
								'upload_path'=>'utility/main_image',
								'allowed_types'=>'jpg|png|jpeg',
								'max_size'=>5000,
								'file_name'=>$insertId
							);
		$this->upload->initialize($upload_config);
		$main_img_upload =$this->upload->do_upload('main_img');
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


	$data['data']=$this->db->select('sn,listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video')->like(['avail'=>$input['filter_avail'],'city'=>$input['filter_city'],'status'=>$input['filter_status'],'addon'=>$input['filter_addon'][0]])->like('addon',$input['filter_addon'][1])->like('addon',$input['filter_addon'][2])->like('addon',$input['filter_addon'][3])->where('price >',(int)$property_price[0]-10)->where('price < ',(int)$property_price[1]+10)->order_by('sn','DESC')->limit($input['items_per_page'],($input['page_no']-1)*$input['items_per_page'])->get('property_info')->result();


	$data['key']=$this->security->get_csrf_hash();

	echo json_encode($data);
}






}
