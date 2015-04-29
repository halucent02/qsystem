<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class IpadQue extends CI_Controller {
	
	protected  $lib = array('calendar','session','form_validation','email');
	protected  $helper = array('url','date','text','html','form');
		
	public function __construct(){
		parent::__construct();		
		$this->load->library($this->lib);
		$this->load->helper($this->helper);
		$this->load->model('pending');
		$this->load->model('usershandle');
		$this->load->model('served');
		$this->load->model('skipped');
		$this->load->model('number');
		$this->clear_cache();
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
	
	
	function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
	
	public function index(){
		$this->load->view('ipadque');
	}
	
	public function addpending(){
		
		$salutation= $this->nameFormat($this->input->post('salutation'));
		$firstname= strtoupper($this->nameFormat($this->input->post('firstname')));
		$lastname= strtoupper($this->nameFormat($this->input->post('lastname')));
		$status= $this->input->post('status');
		$ar= $this->input->post('ar');
		
		$pending_confirmation = $this->pending->add($salutation,$firstname,$lastname,$status,$ar);
		echo $pending_confirmation? "<success>PLEASE WAIT FOR YOUR NAME TO BE CALLED<br>THANK YOU!<success>" : "<error>PLEASE FILL UP ALL THE FIELDS <br>THANK YOU!<error>";	
	}

}