<?php 
class Maddaykeeper extends CI_MODEL{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function refresh_tables(){
 		$query = $this->db->query("SELECT * FROM queserve WHERE DATE(date_of_transaction) != CURDATE()");
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
		}		
 	}
	
	public function backup_served_data(){
		$query = $this->db->query("SELECT * FROM served WHERE DATE(date_of_transaction) != CURDATE()");
		if($query->result_array()){
			foreach ($query->result_array() as $key => $value) {
				$this->db->query("INSERT INTO served_archive(user_id,numberque,salutation,firstname,lastname,status,agent,date_of_transaction)
									VALUES('{$value['user_id']}','{$value['numberque']}','{$value['salutation']}','{$value['firstname']}','{$value['lastname']}','{$value['status']}','{$value['agent']}','{$value['date_of_transaction']}')
				");	
			}
		$this->db->query("TRUNCATE TABLE served");
		}
	}
	
	public function clear_pending_data(){
		$query = $this->db->query("SELECT * FROM pending WHERE DATE(date_of_transaction) != CURDATE()");
		if($query->result_array()){
			$this->db->query("TRUNCATE TABLE pending");
			}
	}
	
	public function clear_skipped_data(){
		$query = $this->db->query("SELECT * FROM skipped WHERE DATE(date_of_transaction) != CURDATE()");
		if($query->result_array()){
			$this->db->query("TRUNCATE TABLE skipped");
			}
	}

	public function organize(){
		$this->backup_served_data();
		$this->clear_pending_data();
		$this->clear_skipped_data();
		$this->refresh_tables();	
	}
}