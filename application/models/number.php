<?php
class Number extends CI_MODEL{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function get_number(){
		$query = $this->db->query("SELECT * FROM number WHERE DATE(date_of_transaction) != CURDATE()");
		if($query->result_array()){
			$this->db->query("TRUNCATE TABLE number");
			$this->db->query("INSERT INTO number(id,number_sequence) VALUES(1,1)");
			$number = $this->db->query("SELECT number_sequence FROM number WHERE id='1'");
			return $number->row();
		}else{
			$number_sequence = $this->db->query("SELECT number_sequence FROM number  WHERE id='1'");
			$number_sequence = $number_sequence->row();
			
			$number_sequence = Intval($number_sequence->number_sequence) + 1;
			$this->db->query("UPDATE number SET number_sequence = $number_sequence  WHERE id='1'");
			$number = $this->db->query("SELECT number_sequence FROM number WHERE id='1'");
			return $number->row();
		}
	}
}
