<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reports extends CI_Controller {
    
    protected  $lib = array('session','zip');
    protected  $helper = array('url','date','text','html','form');
        
    public function __construct(){
        parent::__construct();      
        $this->load->library($this->lib);
        $this->load->helper($this->helper);
        $this->load->model('reportgen');
        $this->load->model('users');
        $this->clear_cache();
        }
    
    function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
    
    public function index(){
        $data['users'] = $this->users->get_registered_users();
        $this->load->view('reports',$data);
    }
    
    public function format_date_to_words($date){
       return date("jS F, Y", strtotime($date));
    }
    
    public function query(){
         $date_from = $this->input->post('date_from');
         $date_to   = $this->input->post('date_to');
         $agents    = $this->input->post('agents');
         $status    = $this->input->post('status');
         
         
         $viewtab = $this->reportgen->get_viewtab($date_from,$date_to,$agents,$status);
         $transaction_counts = $this->reportgen->get_transaction_count($date_from,$date_to,$agents,$status);
         
         
                 $views_html ='';
          if($viewtab > 0){
              foreach($viewtab as $view){
                 $views_html .= '<div class="resultportionf">';
                 $views_html .=  '<div class="dateresult">'.$view['date_of_transaction'].'</div>';
                 $views_html .=  '<div class="statusresult">'.$view['status'].'</div>';
                 $views_html .=  '<div class="agentresult">'.$view['agent'].'</div>';
                 $views_html .= '</div>';
              }
              
              $views_html1  = '<div class="transactionname">TRANSACTIONS</div>';
              $views_html1 .= '<div class="releas">RELEASING</div>';
              $views_html1 .= '<div class="releasR">'.$transaction_counts[0].'</div>';
              $views_html1 .= '<div class="inqu">INQUIRY</div>';
              $views_html1 .= '<div class="inquR">'.$transaction_counts[1].'</div>';
              $views_html1 .= '<div class="forre">FOR   REPAIR</div>';
              $views_html1 .= '<div class="forreR">'.$transaction_counts[2].'</div>';
              $views_html1 .= '<div class="appoi">APPOINTMENT</div>';
              $views_html1 .= '<div class="appoiR">'.$transaction_counts[3].'</div>';
              $views_html1 .= '<div class="totals">TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</div>';
              $views_html1 .= '<div class="totalsR">'.$transaction_counts[4].'</div>';
              //$views_html1 .= '<div class="percents">PERCENT&nbsp;:</div>';
              //$views_html1 .= '<div class="percentsR">100%</div>';
              
                  $views_html2  ='';
              foreach($agents as $per_agent):
                  $agent_result = $this->reportgen->per_agent($date_from,$date_to,$per_agent);
                  if($agent_result){
                      $views_html2  .='<div class="agent1f">';
                      $views_html2  .='<div class="agent1name">'.$agent_result[0].'</div>';
                      $views_html2  .='<div class="relnameagent1">';
                      $views_html2  .='<released>RELEASED</released>';
                      $views_html2  .='<div class="totalrel">'.$agent_result[1].'</div>';
                      $views_html2  .='<div class="percentrel">'.$agent_result[1]/100*$transaction_counts[0].'%</div>';
                      $views_html2  .='</div>';
                      $views_html2  .='<div class="inqnameagent1">';
                      $views_html2  .='<inquiry>INQUIRY</inquiry>';
                      $views_html2  .='<div class="totalinq">'.$agent_result[2].'</div>';
                      $views_html2  .='<div class="percentinq">'.$agent_result[2]/100*$transaction_counts[1].'%</div>';
                      $views_html2  .='</div>';
                      $views_html2  .='<div class="forrepnameagent1">';
                      $views_html2  .='<forepair>FOR REPAIR</forepair>';
                      $views_html2  .='<div class="totalforrep">'.$agent_result[3].'</div>';
                      $views_html2  .='<div class="percentforrep">'.$agent_result[3]/100*$transaction_counts[2].'%</div>';
                      $views_html2  .='</div>';
                      $views_html2  .='<div class="appointnameagent1">';
                      $views_html2  .='<appointments>APPOINTMENT</appointments>';
                      $views_html2  .='<div class="totalappoint">'.$agent_result[4].'</div>';
                      $views_html2  .='<div class="percentappoint">'.$agent_result[4]/100*$transaction_counts[3].'%</div>';
                      $views_html2  .='</div>';
                      $views_html2  .='<div class="totalagent1">';
                      $views_html2  .='<totalsgent>TOTAL:</totalsgent>';
                      $views_html2  .='<div class="totalnumsagent1">'.$agent_result[5].'</div>';
                      $views_html2  .='<div class="totalperc1">'.$agent_result[5]/100*$transaction_counts[4].'%</div>';
                      $views_html2  .='</div>';    
                      $views_html2  .='</div>'; 
                  }
              endforeach;
              
             $archive_data = array('viewtab'=>$views_html,
                                   'date_from'=>$this->format_date_to_words($date_from),
                                   'date_to'=>$this->format_date_to_words($date_to),
                                   'transac'=>$views_html1,
                                   'peragent'=>$views_html2
                            );                       
             echo json_encode($archive_data);
             exit();
          }else{
              return false;
              exit();
          }
         
    }
}