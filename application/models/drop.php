<?php 
class Drop extends CI_MODEL{
	

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function check_drop(){
		$query = $this->db->query("SELECT pandora,pandora1 FROM dropcall WHERE id='1'");
		return $query->row();
	}
	
	public function insert_to_pandora(){
		$this->db->query("UPDATE dropcall SET pandora='call' WHERE id='1'");
	}
	
	public function insert_to_pandora1(){
		$this->db->query("UPDATE dropcall SET pandora1='call' WHERE id='1'");
	}
	
	public function clear_to_pandora(){
		$this->db->query("UPDATE dropcall SET pandora='',pandora1='call' WHERE id='1'");
	}

}
