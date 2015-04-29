<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backroom extends CI_Controller {
	
	protected  $lib = array('calendar','session','form_validation','email');
	protected  $helper = array('url','date','text','html','form');
		
	public function __construct(){
		parent::__construct();		
		$this->load->library($this->lib);
		$this->load->helper($this->helper);
		$this->load->model('pending');
		$this->clear_cache();
		$this->authenticate();
		}
	
	function authenticate(){
		if(!$this->session->userdata('logged_in')){
			redirect('../login/', 'refresh');
		}
	}
	
	function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
	
	public function prepared(){
		$id= $this->uri->segment(3);
		$this->pending->prepared($id);
		$this->index();
	}
	
	public function index(){
		$data['not_prepared'] = $this->pending->not_prepared_releasing();
		$data['prepared'] = $this->pending->prepared_releasing();
		$data['to_speak'] = $this->pending->please_prepared_speak();
		
		$this->load->view('backroomque',$data);
	}
}