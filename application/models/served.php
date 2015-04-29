<?php 
class Served extends CI_MODEL{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function generate_all_served(){
		$query = $this->db->query("SELECT * FROM served WHERE date(date_of_transaction) = CURDATE()");
		return $query->result_array();
	}
	
	public function served($user_id,$numberque,$salutation,$firstname,$lastname,$status,$agent){
		$query = $this->db->query("INSERT INTO served(user_id,numberque,salutation,firstname,lastname,status,agent)
									VALUES('{$user_id}','{$numberque}','{$salutation}','{$firstname}','{$lastname}','{$status}','{$agent}')");
		return $this->db->affected_rows();
	}
}