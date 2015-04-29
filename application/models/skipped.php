<?php 
class Skipped extends CI_MODEL{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	public function generate_all_skipped(){
		$query = $this->db->query("SELECT * FROM skipped WHERE date(date_of_transaction) = CURDATE()");
		return $query->result_array();
	}
	
	public function skipped($numberque,$salutation,$firstname,$lastname,$status,$agent,$ar,$prepared){
		$query = $this->db->query("INSERT INTO skipped(numberque,salutation,firstname,lastname,status,agent,ar,prepared)
									VALUES('{$numberque}','{$salutation}','{$firstname}','{$lastname}','{$status}','{$agent}','{$ar}','{$prepared}')");
		return $this->db->affected_rows();
	}
	
	public function flag_skipped($skippednumber=""){
		$query = $this->db->query("SELECT id,prepared,numberque,salutation,firstname,lastname FROM skipped WHERE numberque='$skippednumber' && DATE(date_of_transaction)=CURDATE() LIMIT 1");
		return $query->row();
	}
	
	public function served_skip($user_id,$flag="",$agent=""){
		if($flag && $agent){
			$query = $this->db->query("SELECT * FROM skipped WHERE id='$flag' LIMIT 1");
			$query = $query->row();
			$this->served->served($user_id,$query->numberque,$query->salutation,$query->firstname,$query->lastname,$query->status,$agent);
			$this->db->query("DELETE FROM skipped  WHERE id='$flag'");
			return $this->db->affected_rows();
		}else{
			return false;
		}
	}
	
	
}