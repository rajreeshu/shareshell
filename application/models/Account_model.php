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
        $data['data']=$this->db->select('listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video')->where('sn',$input['id'])->get('property_info')->row();
        $data['image']=$this->db->select('image_id,image')->where('property_id',$input['id'])->get('property_image')->result();
		$data['favourite_status']=$this->db->where(['user_id'=>$input['user_id'],'property_id'=>$input['id']])->get('favourite_property')->num_rows()?true:false;
        $data['listed_by']=$this->db->select('first_name,last_name,username,gender,image,address,user_bio,website,facebook,twitter,email')->where('sn',$data['data']->listed_by)->get('user_detail')->row();
		
		// $data['input'] =$input;

        return $data;
    }

    
public function property_detail($input){

	$this->db->select('sn,name,price,main_image,description,avail,city,status,type,address,min_bed');
	
	if(isset($input['search_text'])&&$input['search_text']!=""){
		$search_text=$input['search_text'];
        $this->db->group_start();
		$this->db->like('name',$search_text)->or_like('address',$search_text)->or_like('description',$search_text)->or_like('city',$search_text);
        $this->db->group_end();
	}

	if($input['filter_avail']=="all"){
		$input['filter_avail']="";
	}
    $this->db->group_start();
	$this->db->like('avail',$input['filter_avail']);
	if($input['filter_avail']=="boy"||$input['filter_avail']=="girl"){
		$this->db->or_like('avail','combined');
	}
    $this->db->group_end();

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

	if(isset($input['filter_type'])&&$input['filter_type']!=""){
		$this->db->where('type',$input['filter_type']);
	}
	

	if($input['filter_price']!=""){
		$property_price = explode(',', $input['filter_price']);
		$this->db->where('price >',(int)$property_price[0]-10);
		$this->db->where('price < ',(int)$property_price[1]+10);
	}

	return $this->db->order_by($input['filter_sort'],$input['filter_sort_by']);

}

public function getallpropertylist($input){

    if(isset($input['filter_addon'])){
		if(gettype($input['filter_addon'])=="string"){
			$input['filter_addon']=explode(",",$input['filter_addon']);
		}
		$addon_length=count($input['filter_addon']);
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
	// $data['input']=$input; 

	$this->load->model('account_model');
	$data['data']=$this->account_model->property_detail($input)->limit($input['items_per_page'],($input['page_no']-1)*$input['items_per_page'])->get('property_info')->result();
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
		$data['data']=$this->db->where('sn',$input['user_id'])->update('user_detail',[$input['field']=>$input['value']]);
	}
	return $data['data'];
}

public function my_propertydata($input){
	$this->db->select('sn,listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video');
	$this->db->where('listed_by',$input['user_id']);
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


}

?>