<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller {
	
	protected  $lib = array('calendar','session','form_validation','email');
	protected  $helper = array('url','date','text','html','form');
		
	public function __construct(){
		parent::__construct();		
		$this->load->library($this->lib);
		$this->load->helper($this->helper);
		$this->load->model('users');
		$this->clear_cache();
	}
	
	
	function clear_cache(){
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

	public function index(){
		$this->session->unset_userdata('user_data');
		$this->session->sess_destroy();
		redirect('../login/', 'refresh');
	}
}