<?php 
class Pending extends CI_MODEL{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
}