<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->model("user_model");
		$data["xxx"] = "active";
		$this->template->menuActive = 0;
		$this->template->title = "ระบบการจัดการโคนม";
		$this->template->content_view = "welcome/home";
		$this->template->get_template($data);
		

	}
	public function users($id,$limit){
		$this->load->model("user_model");
		//$data["user_tree"] = $this->db->get("tb_user")->result_array();
		$data["user_tree"] = $this->user_model->getTreeUser($id,$limit);
		$data["point"] = $this->user_model->point;
		$this->template->content_view = "user/user_tree";
		$this->template->title = "User Tree";
		$this->template->get_template($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */