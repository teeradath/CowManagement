<?php
class cow_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	
	public function getCowList($perpage="",$num_page=""){
		$sql = " SELECT distinct c.cow_id, c.cow_name, c.father_code, c.birth_day, c.sex, s.status_name,
				(select cow_name from cow where cow_id = c.parent_id)  parent_id,
				(select image_name from cow_images where cow_id = c.cow_id LIMIT 1) image_name
				FROM cow c
				inner join cow_status s on s.status_id = c.status_id
				inner join cow_images i on i.cow_id = c.cow_id LIMIT ".(int)$num_page.",".((int)$perpage+(int)$num_page);
		$rs = $this->db->query($sql);
		return $rs;
	}
	
	public function CountCowList(){
		$rs = $this->db->query("
				SELECT distinct c.cow_id, c.cow_name, c.father_code, c.birth_day, c.sex, s.status_name,
				(select cow_name from cow where cow_id = c.parent_id)  parent_id,
				(select image_name from cow_images where cow_id = c.cow_id LIMIT 1) image_name
				FROM cow c
				inner join cow_status s on s.status_id = c.status_id
				inner join cow_images i on i.cow_id = c.cow_id");
		return $rs->num_rows();
	}
}