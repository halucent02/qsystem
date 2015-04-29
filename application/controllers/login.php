<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	
	protected  $lib = array('calendar','session','form_validation','email');
	protected  $helper = array('url','date','text','html','form');
		
	public function __construct(){
		parent::__construct();		
		$this->load->library($this->lib);
		$this->load->helper($this->helper);
	    $this->load->model('users');
		$this->load->model('pending');
		$this->load->model('usershandle');
		$this->load->model('served');
		$this->load->model('skipped');
		$this->load->model('maddaykeeper');
		$this->clear_cache();
	}
	
	function clear_cache(){
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

	public function index()
	{
		$this->load->view('loginque');
	}
	
	public function counter_trans(){
		$counter_trans = $this->usershandle->generate_handle($this->session->userdata('id'));
		if($counter_trans){
		$counter_trans_value = array(
							'counter' 	  => $counter_trans->counter,
							'transaction' => $counter_trans->type,
		);
		}else{
		$counter_trans_value = array(
							'counter' 	  => '',
							'transaction' => '',
		);	
		}
		$this->session->set_userdata($counter_trans_value);
		$this->maddaykeeper->organize();
	}
	public function loginsuccess(){
		if($this->session->userdata('acct_type')=="admin"){
			//$this->counter_trans();
			redirect('../menu', 'refresh');
		}elseif($this->session->userdata('acct_type')=="cs-frontline"){
			$this->counter_trans();
			redirect('../menustaff', 'refresh');
		}elseif($this->session->userdata('acct_type')=="cs-backroom"){
			$this->counter_trans();
			redirect('../menustaff', 'refresh');
		}
	}
	
	public function verifyUser(){
		$username = $this->input->post('username');
		$password= $this->input->post('password');
		
		$verified = $this->users->check_user($username,$password);
		
		if($verified){
			$user = array(
				   'status'    => 'all',
				   'id'        => $verified->id,
                   'firstname' => $verified->firstname,
                   'lastname'  => $verified->lastname,
                   'username'  => $verified->username,
                   'acct_type' => $verified->account_type,
                   'logged_in' => TRUE,
                   'jump'      => 0,
               );
			$this->session->set_userdata($user);
			$this->loginsuccess();
		}else{
			redirect('../login','refresh');
		}
		
	}
}
