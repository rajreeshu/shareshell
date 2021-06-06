<?php

class Upload_model extends CI_Model{

	public function upload_file($file_name,$file_extension,$file_path,$file_key_name){
		$this->load->library('upload');
		$upload_config=array( 
								'upload_path'=>$file_path,
								'allowed_types'=>$file_extension,
								'max_size'=>5000,
								'file_name'=>$file_name
							);
		$this->upload->initialize($upload_config);
		return $main_img_upload =$this->upload->do_upload($file_key_name);
	}

	public function compressor_upload($dir,$file_name,$data){
		$target_dir = $dir."/";
		return move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$file_name);
	}

}

?>