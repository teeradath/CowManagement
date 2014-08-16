<?php
class Upload_image extends CI_Controller {
	public function index(){
		$this->load->view('welcome_message');
	}
	public function upload_file(){
		$image = addslashes(file_get_contents($_FILES["image_file"]["tmp_name"]));
		$image_name = addslashes($_FILES["image_file"]["name"]);
		$image_size = getimagesize($_FILES["image_file"]["tmp_name"]);

		if($image_size == null){
			echo "ไม่มีรูป";
		}
		else {
			$this->load->model("insert_image_model");
			$lastID = $this->insert_image_model->insert_image(1,$image_name,$image,"test");
			//echo "Success";
			$row = $this->insert_image_model->get_last_image($lastID);
			$data["img"] = "<img src='".$row->image."' />";
		}
		//echo $file;
		/*$config['upload_path'] = 'images/uploads/';
		$config['allowed_types'] = 'jpg|gif|png';
		$config['max_size'] = 1024; //kb
		$config['max_height'] = 1024; //pixcel
		$config['max_width'] = 1024; //pixcel
		$config['file_name'] = 'image_file'.date('YmdHis');
		$this->load->library("upload",$config);
		//$this->upload->initialize($config);
	
		if($this->upload->do_upload("image_file")){
			$data["arr"] = $this->upload->data();
			//echo "<pre>";
			//print_r($data);
			//echo "</pre>";
		}else{
			$data["arr"] = array("error"=>$this->upload->display_errors());
			//echo $this->upload->display_errors();
		}
		$data["title"] = "CI_test|Upload success";*/
	}
}