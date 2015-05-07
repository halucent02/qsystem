<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Quelist extends CI_Controller {
    
    protected  $lib = array('calendar','session','form_validation','email');
    protected  $helper = array('url','date','text','html','form');
        
    public function __construct(){
        parent::__construct();      
        $this->load->library($this->lib);
        $this->load->helper($this->helper);
        $this->load->model('pending');
        $this->clear_cache();
        }
    
    
    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
    
    
    public function updatelist(){
        $pendings = $this->pending->generate_all_pending("","all");
        $output = "";
        foreach($pendings as $pending){
            $output  .="<div class='listanaf'>";
            $output .="<div class='listanumber'>".$pending['numberque']."</div>";
            $output .="<div class='listaname'>".$pending['firstname']." ".$pending['lastname']."</div>";
            $output .="<div class='listastatus'>".$pending['status']."</div>";
            $output .="</div>";
         }
            
        echo $output;
    }
    public function index(){
        $this->load->view('clientques');
    }
}