<?php
class Cow extends CI_Controller {
	
	public function index()
	{
		$this->load->model("cow_model");
		$this->template->menuActive = 1;
		$this->template->title = "ระบบการจัดการโคนม | ข้อมูลโค";
		$this->template->content_view = "cow/list";
		
		// pagination --------------------------------------------
		$config["base_url"] = base_url()."cow/index";
		$config["per_page"] = 10;
		$config["total_rows"] = $this->cow_model->CountCowList();
		$config['full_tag_open'] = '<ul class="pagination">';
		$config['full_tag_close'] = '</ul>';            
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		//--------------------------------------------------------
		$data["result"] = $this->cow_model->getCowList($config["per_page"],$this->uri->segment(3))->result_array();
		
		
		$this->template->get_template($data);
	}
}