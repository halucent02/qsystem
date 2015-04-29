<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reporitorial extends CI_Controller
{

    protected $lib = array('session', 'zip', 'table');
    protected $helper = array('url', 'date', 'text', 'html', 'form');

    public function __construct()
    {
        parent::__construct();
        $this->load->library($this->lib);
        $this->load->helper($this->helper);
        $this->load->model('reporitorial_gen');
        // $this->load->model('users');
        $this->clear_cache();
    }

    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

    public function index(){
        $this->load->view('report_menu');
		//show_404();
    }
    
    public function percentage_of_service(){
        $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');
        
        $data['percentage_of_service'] = $this->reporitorial_gen->get_percentage_service($fromyear,$toyear);
        $data['yes'] =  array(
            array('Releasing', 'Inquiry', 'For Repair', 'Appointment', 'Total'),
            array($data['percentage_of_service'][0], $data['percentage_of_service'][1], $data['percentage_of_service'][2], $data['percentage_of_service'][3], $data['percentage_of_service'][4])
        );
        
        $this->load->view('report_percentage_of_service',$data);
    }

    public function service_duration(){
        $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');
        
        
        $this->load->view('report_service_duration');
    }
    public function service_time_per_agent(){
        $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');
        
        
        $this->load->view('report_service_time_per_agent');
    }
    public function clients_by_date(){
        $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');
        
        
        $this->load->view('report_clients_by_date');
    }
    public function clients_arrival_per_hour(){
        $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');
        
        
        $this->load->view('report_clients_arrival_per_hour');
    }
    public function clients_per_weekday(){
       $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');
        
        
        $this->load->view('report_clients_per_weekday');
    }
    public function daily_transaction(){
        $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');


        $this->load->view('report_daily_transaction');
    }
    public function daily_transaction_by_S(){
        $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');


        $this->load->view('report_daily_transaction_by_S');
    }
    public function daily_transaction_by_SA(){
        $fromyear = $this->input->post('fromyear');
        $toyear   = $this->input->post('toyear');


        $this->load->view('report_daily_transaction_by_SA');
    }

}