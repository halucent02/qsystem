<?php 
class Pending extends CI_MODEL{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function add($salutation,$firstname,$lastname,$status,$ar="",$prepared=""){
		if(!empty($salutation) && !empty($firstname) && !empty($lastname) && !empty($status) && empty($ar) && $status!="RELEASING"){
			//from number model. please check if error occured.
			$number = $this->number->get_number();
		
			$numberque= $number->number_sequence;
		
			$query = $this->db->query("INSERT INTO pending(numberque,salutation,firstname,lastname,status,ar,prepared)
									VALUES('{$numberque}','{$salutation}','{$firstname}','{$lastname}','{$status}','N/A','2')");
		return $this->db->affected_rows();
		}
		else if(!empty($salutation) && !empty($firstname) && !empty($lastname) && !empty($status) && !empty($ar) && $status=="RELEASING"){
			$this->load->model('number');
		
			$number = $this->number->get_number();
		
			$numberque= $number->number_sequence;
		
			$query = $this->db->query("INSERT INTO pending(numberque,salutation,firstname,lastname,status,ar,prepared)
									VALUES('{$numberque}','{$salutation}','{$firstname}','{$lastname}','{$status}','{$ar}','0')");
		return $this->db->affected_rows();
		}else{
			return FALSE;
		}
	}
	
	public function generate_all_pending($transaction,$status=""){
		if($status=="all"){
			$query = $this->db->query("SELECT * FROM pending WHERE DATE(date_of_transaction)= CURDATE()");
			return $query->result_array();
		}elseif($status=="job"){
			$query = $this->db->query("SELECT * FROM pending WHERE status='$transaction' && DATE(date_of_transaction)= CURDATE()");
			return $query->result_array();
		}
	}
	
	public function generate_releasing(){
		$query = $this->db->query("SELECT * FROM pending WHERE DATE(date_of_transaction)= CURDATE() AND status='RELEASING'");
		return $query->result_array();
	}
	
	public function not_prepared_releasing(){
		$query = $this->db->query("SELECT * FROM pending WHERE DATE(date_of_transaction)= CURDATE() AND prepared='0'");
		return $query->result_array();
	}
	
	public function please_prepared_speak(){
		$query = $this->db->query("SELECT * FROM pending WHERE DATE(date_of_transaction)= CURDATE() AND prepared='0' ORDER BY id DESC LIMIT 1");
		return $query->row();
	}
	
	public function prepared_releasing(){
		$query = $this->db->query("SELECT * FROM pending WHERE DATE(date_of_transaction)= CURDATE() AND prepared='1'");
		return $query->result_array();
	}
	
	public function prepared($id){
		$query = $this->db->query("UPDATE pending SET prepared='1' WHERE id=$id");
		return $this->db->affected_rows();
	}
	
	public function flag_pending($transaction="",$user_id){
		$query = $this->db->query("SELECT * FROM pending WHERE flag='$user_id' && status='$transaction' && DATE(date_of_transaction)= CURDATE() LIMIT 1");
		if($query->result_array()){
			return $query->result_array();
		}else{
			$pending_id = $this->db->query("SELECT id FROM pending WHERE flag IS NULL && status='$transaction' && DATE(date_of_transaction)= CURDATE() LIMIT 1");
			if($pending_id->row()){
				$pending_id = $pending_id->row();
				$pending_id = Intval($pending_id->id);
				$this->db->query("UPDATE pending SET flag='$user_id' WHERE id=$pending_id");
				$query = $this->db->query("SELECT * FROM pending WHERE flag='$user_id' && status='$transaction' && DATE(date_of_transaction)= CURDATE() LIMIT 1");
				return $query->result_array();
			}else{
				return FALSE;
			}
		}
	}
	
	public function served_pending($user_id,$flag="",$agent=""){
		if($flag && $agent){
			$query = $this->db->query("SELECT * FROM pending WHERE id='$flag' && DATE(date_of_transaction)= CURDATE() LIMIT 1");
			$query = $query->row();
			$this->served->served($user_id,$query->numberque,$query->salutation,$query->firstname,$query->lastname,$query->status,$agent);
			$this->db->query("DELETE FROM pending  WHERE id='$flag'");
			$this->session->set_userdata('call_id',"NULL");// setting the value to null
			return $this->db->affected_rows();
		}else{
			return false;
		}
	}
	
	public function skipped_pending($flag="",$agent=""){
		if($flag && $agent){
			$query = $this->db->query("SELECT * FROM pending WHERE id='$flag' LIMIT 1");
			if($query->row()){
				$query = $query->row();
				$this->skipped->skipped($query->numberque,$query->salutation,$query->firstname,$query->lastname,$query->status,$agent,$query->ar,$query->prepared);
				$this->db->query("DELETE FROM pending  WHERE id='$flag'");
				$this->session->set_userdata('call_id',"NULL");// setting the value to null
				return $this->db->affected_rows();
			}else{
				return false;
			}
		}else{
			return false;
		}
		
	}
	
	public function get_five_pending(){
		$query = $this->db->query("SELECT * FROM pending WHERE DATE(date_of_transaction)= CURDATE() LIMIT 5");
		return $query->result_array();
	}
}
