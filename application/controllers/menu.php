<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller
{

    protected $lib = array('calendar', 'session', 'form_validation', 'email');
    protected $helper = array('url', 'date', 'text', 'html', 'form');

    public function __construct()
    {
        parent::__construct();
        $this->load->library($this->lib);
        $this->load->helper($this->helper);
        $this->load->model('users');
        $this->clear_cache();
        $this->authenticate();
    }

    public function index(){
        $this->load->view('mainmenu');
    }

    function authenticate()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('../login/', 'refresh');
        } elseif ($this->session->userdata('acct_type') != 'admin') {
            show_404();
        }
    }

    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
}