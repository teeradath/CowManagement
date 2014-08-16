<?php
class User_model extends CI_Model{
	public $arr="";
	public $point=0;
	public function __construct(){
		parent::__construct();
	}
public function getTreeUser($id,$limit=0){
		$this->db->where("id = ".$id);
		$row = $this->db->get("tb_user")->row();
		
		$this->point += $row->point;
		$this->arr .= "<ul>";
		$this->arr .= "<li>".$row->id." -> [Point = ".$row->point."]";
		$this->UserParent($row->id,1,$limit);
		$this->arr .= "</li>";
		$this->arr .= "</ul>";
		return  $this->arr;
	}
	public function UserParent($id,$level=1,$limit){
		$this->db->where("parrent_id = ".$id);
		$result = $this->db->get("tb_user");
		if(($limit+1) != $level){
			
			if($result->num_rows()!=0){
				$this->arr .= "<ul>";
				foreach ($result->result_array() as $row){
					/* Logic to database ---------------------------------- */
					if($level==1){
						$this->point += ($row["point"]*50)/100;
					}elseif($level==2){
						$this->point += ($row["point"]*40)/100;
					}elseif($level==3){
						$this->point += ($row["point"]*30)/100;
					}elseif($level==4){
						$this->point += ($row["point"]*20)/100;
					}elseif($level==5){
						$this->point += ($row["point"]*10)/100;
					}
					/* ---------------------------------------------------- */
					$this->arr .= "<li>".$row["id"]." -> [lv = ".$level."]". " [Point = ".$row["point"]."]";
					$this->UserParent($row['id'],$level+1,$limit);
					$this->arr .= "</li>";
				}
				$this->arr .= "</ul>";
			}
		}
	}
	
}