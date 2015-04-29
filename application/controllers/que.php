<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Que extends CI_Controller {

    protected $lib = array('session', 'zip', 'table');
    protected $helper = array('url', 'date', 'text', 'html', 'form');
	
	public function __construct(){
		parent::__construct();
        $this->load->library($this->lib);
        $this->load->helper($this->helper);
		}

	public function index()
	{
		//$this->load->view('loginque');
		//$this->load->view('ipadque');
		//$this->load->view('button1');
		$this->load->view('button1a');
		//$this->load->view('button2');
		//$this->load->view('logintable');
		//$this->load->view('adminque');
		//$this->load->view('popupque');
		//$this->load->view('popupjumpque');
		//$this->load->view('popupipad');
		//$this->load->view('backroomque');
		//$this->load->view('quetv');
		//$this->load->view('clientques');
		//$this->load->view('mainmenu');
		//$this->load->view('mainmenu1');
		//$this->load->view('reports');
		//$this->load->view('report_menu');
		//$this->load->view('report_daily_transaction_by_SA');
	}
}
