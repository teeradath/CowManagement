<?php

class Users extends CI_Controller {

	public function index($id=1)
	{
		$this->load->model("user_model");
		$data['user'] = $this->user_model->getUser($id);
		//$data['user_parrent']= $this->user_model->getParrent(1);
		//echo $this->user_model->show_menu_array($data['user_parrent']);
		//$this->print_menu(1);
		$data['user_parrent'] = $this->user_model->getUserTree($id);
		$this->load->view('users/index',$data);
	}
	
	/*function print_menu($id = 0)
	{
		// get all records from database whose parent is $id
		$this->db->where("parrent_id",$id);
		$result = $this->db->get("tb_user");
		//check if there are any results
		if($result->num_rows() != 0)
		{
			echo "<ul>";
			foreach ($result->result_array() as $row)
			{
				//print result and call function to check if it has children
				echo "<li>".$row['id']."</li>";
				$this->print_menu($row['id']);
			}
			echo "</ul>";
		}
	}*/
	
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */