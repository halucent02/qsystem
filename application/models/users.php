<?php
class Users extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function adduser($firstname,$lastname,$username,$password,$account_type){
		
		if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password) && !empty($account_type)){
		$query = $this->db->query("SELECT * FROM users WHERE username='$username' LIMIT 1");
			if($query->result_array()){
				return "1";
			}else{
				$query = $this->db->query("INSERT INTO users(firstname,lastname,username,password,account_type) VALUES('{$firstname}','{$lastname}','{$username}','{$password}','{$account_type}')");
				return "3";
			}
		}else{
			return "2";
		}
	}
	
	public function check_user($username,$password){
		$query = $this->db->query("SELECT id,firstname,lastname,username,account_type FROM users WHERE username='$username' AND password='$password' LIMIT 1");
		return $query->row();
	}
	
	public function tag_to($number=""){
		$query = $this->db->query("SELECT firstname,lastname FROM users WHERE id='$number' LIMIT 1");
		return $query->row();
	}
    
    public function get_registered_users(){
        $query = $this->db->query("SELECT id,username,firstname,lastname FROM users WHERE active='yes' ORDER BY firstname ASC");
        return $query->result_array();
        
    }
}