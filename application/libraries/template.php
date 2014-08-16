<?php
class Template {
	public $ci;
	public $content_text = "";
	public $content_view = "";
	public $title = "";
	public $content_data = array();
	public function __construct(){
		$this->ci = & get_instance();
	}
	public function get_template($val){
		$data["content_view"]= $this->content_view;
		$data["content_data"] = $val;
		$data["title"] = $this->title;
		$this->ci->load->view("template/default",$data);
	}
}
?>