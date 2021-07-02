<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Account_model extends CI_Model{


    public function login_validate($input){
        $data['dbpass']=$this->db->select('sn as userid,password,status,first_name,last_name,username,image')->where('email',$input['email'])->get('user_detail')->row();
        if($data['dbpass']){
            $data['data']=password_verify($input['email']."//".$input['password'],$data['dbpass']->password);
        }else{
            $data['data']=0;
        }
	    

        return $data;
    }

    public function getpropertydata($input){
        $data['data']=$this->db->select('listed_by,name,price,address,contact,main_image,description,avail,city,status,type,min_bed,addon,add_image,add_video')->where('sn',$input['id'])->get('property_info')->row();
        $data['image']=$this->db->select('image_id,image')->where('property_id',$input['id'])->get('property_image')->result();
    
        $data['listed_by']=$this->db->select('first_name,last_name,username,gender,image,address,user_bio,website,facebook,twitter')->where('sn',$data['data']->listed_by)->get('user_detail')->row();
        
        return $data;
    }

    

}

?>