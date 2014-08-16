<?php
class Insert_image_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function insert_image($cow_id=1,$image_name,$image,$remark=""){
		$data = array('cow_id' => $cow_id, 'image_name' => $image_name, 'image' => $image, 'remark'=> $remark);
		
		$str = $this->db->insert('cow_images', $data);
		$str =$this->db->insert_id();
		return $str;
	}
	public function get_last_image($id){
		$this->db->where("image_id = ".$id);
		$row = $this->db->get("cow_images")->row();
		return $row;
	} 
}