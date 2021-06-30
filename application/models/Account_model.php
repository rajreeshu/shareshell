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

}

?>