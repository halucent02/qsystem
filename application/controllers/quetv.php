<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quetv extends CI_Controller {
	
	protected  $lib = array('session');
	protected  $helper = array('url','date','text','html','form');
		
	public function __construct(){
		parent::__construct();		
		$this->load->library($this->lib);
		$this->load->helper($this->helper);
		$this->load->model('que');
		$this->load->model('pending');
		$this->load->model('drop');
		$this->clear_cache();
		}
	
	function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
	
	public function index(){
		$data['qd'] = $this->drop->check_drop();
		$data['serve'] = $this->que->serve_table_view();
		$data['pendingfive'] = $this->pending->get_five_pending();
		$data['quedata'] = $this->que->showdata();
		$this->load->view('quetv',$data);
	}
}