<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	protected  $lib = array('calendar','session','form_validation','email');
	protected  $helper = array('url','date','text','html','form');
		
	public function __construct(){
		parent::__construct();		
		$this->load->library($this->lib);
		$this->load->helper($this->helper);
		$this->load->model('users');
		$this->clear_cache();
		$this->authenticate();
	}
	
	function authenticate(){
		if(!$this->session->userdata('logged_in')){
			redirect('../login/', 'refresh');
		}elseif($this->session->userdata('acct_type')!='admin'){
			show_404();
		}
	}
	
	//My Functions
	public function getFirst($string){
		$string = ucfirst(substr($string,0,1));
		return $string;
	}
	public function nameFormat($string){
		$string = ucfirst(strtolower($string));
		return $string;
	}
	
	//END My Functions
	
	function clear_cache(){
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

	public function index(){
		$this->load->view('adminque');
	}
	
	public function adduser(){
		$firstname= $this->nameFormat($this->input->post('firstf'));
		$lastname= $this->nameFormat($this->input->post('lastf'));
		$username= $this->input->post('username');
		$password= $this->input->post('password');
		$account_type= $this->input->post('account_type');
		
		$adduser_confirmation = $this->users->adduser($firstname,$lastname,$username,$password,$account_type);
		if($adduser_confirmation == "1"){
			$data['adduser_confirmation'] = "Username already exist!";
		}else if($adduser_confirmation == "2"){
			$data['adduser_confirmation'] = "Please complete the details";
		}else if($adduser_confirmation == "3"){
			$data['adduser_confirmation'] = "New User has been Created";
		}else{
			$data['adduser_confirmation'] = "";
		}
		
		$this->load->view('adminque',$data);
	}
}