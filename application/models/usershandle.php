<?php 
class Usershandle extends CI_MODEL{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function add($id){
		$query = $this->db->query("INSERT INTO users_handle(user_id)
									VALUES('{$id}')");
	}
	
	public function update($id,$counter="",$type=""){
			$query = $this->db->query("SELECT * FROM users_handle WHERE user_id='$id'");
		if($query->result_array()){
			$query = $this->db->query("UPDATE users_handle SET counter='$counter',type='$type' WHERE user_id='$id'");
		}else{
			$query = $this->db->query("INSERT INTO users_handle(user_id,counter,type)
									VALUES('{$id}','{$counter}','{$type}')");
		}
	}
		
	public function generate_handle($id){
		$query = $this->db->query("SELECT counter,type FROM users_handle WHERE user_id='$id' LIMIT 1");
		return $query->row();
	}
	
}