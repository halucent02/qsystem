<?php 
class Que extends CI_MODEL{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function showdata(){
		$query = $this->db->query("SELECT * FROM quedata WHERE id='1' && DATE(date_of_transaction) != CURDATE()");
		if($query->row()){
			$this->db->query("TRUNCATE TABLE quedata");
			$this->db->query("INSERT INTO quedata(id) VALUES(1)");
			$query = $this->db->query("SELECT * FROM quedata WHERE id='1'");
			return $query->row();
		}else{
			$query = $this->db->query("SELECT * FROM quedata WHERE id='1' && DATE(date_of_transaction) = CURDATE()");
			return $query->row();
		}
	}
	
	public function serve_table_view(){
		$query = $this->db->query("SELECT * FROM queserve WHERE DATE(date_of_transaction) != CURDATE() ORDER BY counter_number ASC");
		if($query->result_array()){
			$this->db->query("TRUNCATE TABLE queserve");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(1)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(2)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(3)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(4)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(5)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(6)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(7)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(8)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(9)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(10)");
			$this->db->query("INSERT INTO queserve(counter_number) VALUES(11)");
			$query = $this->db->query("SELECT * FROM queserve WHERE active='yes' ORDER BY counter_number ASC");
			return $query->result_array();
		}else{
			$query = $this->db->query("SELECT * FROM queserve WHERE active='yes' ORDER BY counter_number ASC");
			return $query->result_array();
		}
	}
	 public function call_que($counter_number='',$client_name='',$status=''){
	 	$this->db->query("UPDATE quedata SET banner_num='$counter_number',banner_name='$client_name' WHERE id='1'");
	 	$this->db->query("UPDATE queserve SET client_name='$client_name',status='$status',active='yes' WHERE counter_number='$counter_number'");
	 }
	 
	 public function served_que($counter_number=''){
	 	$this->db->query("UPDATE queserve SET client_name='NULL',status='NULL',active='NULL' WHERE counter_number='$counter_number'");
	 	
	 }
	 
	  public function taken_sit($counter_number='',$active_counter='',$agent=''){
	  	$this->db->query("UPDATE queserve SET sit='' WHERE counter_number='$active_counter'");
	 	$this->db->query("UPDATE queserve SET sit='$agent' WHERE counter_number='$counter_number'");
	 	
	 }
	  
	  public function untake_sit($counter_number=''){
	 	$this->db->query("UPDATE queserve SET sit='' WHERE counter_number='$counter_number'");
	 	
	 }
	  
	 
	 public function generate_counter(){
	 	$query = $this->db->query("SELECT * FROM queserve ORDER BY counter_number ASC");
	 	return $query->result_array();
	 }
	
}