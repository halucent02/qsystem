<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FrontLine extends CI_Controller {
	
	protected  $lib = array('calendar','session','form_validation','email');
	protected  $helper = array('url','date','text','html','form');
		
	public function __construct(){
		parent::__construct();		
		$this->load->library($this->lib);
		$this->load->helper($this->helper);
		$this->load->model('pending');
		$this->load->model('usershandle');
		$this->load->model('served');
		$this->load->model('users');
		$this->load->model('skipped');
		$this->load->model('que');
		$this->load->model('drop');
		$this->clear_cache();
		$this->authenticate();
		}
	
	
	function authenticate(){
		if(!$this->session->userdata('logged_in')){
			redirect('../login/', 'refresh');
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
	
	
	
	function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
	
	public function index(){
			$btn = $this->session->userdata('btn');
			if($btn == "css"){$this->button_call_serve_skip();}else if($btn == "jn"){$this->button_jump_next();}else{$this->button_jump_next();}
	}
	
	public function tagger($number){
		if(!empty($number)){
			$tagger = $this->users->tag_to($number);
			$idenfied_tagger = 	$this->nameFormat($tagger->firstname)." ".$this->getFirst($tagger->lastname);
			return $idenfied_tagger;
		}else{
			return false;
		}
	}
	
	public function button_jump_next(){
		$data['pending'] = $this->pending->generate_all_pending($this->session->userdata('transaction'),
						    $this->session->userdata('status')!=null?  $this->session->userdata('status') : "");
		$data['served']  = $this->served->generate_all_served();
		$data['skipped'] = $this->skipped->generate_all_skipped();
		$data['pending_count'] = count($data['pending']);
		$data['served_count'] = count($data['served']);
		$data['skipped_count'] = count($data['skipped']);
		$data['optionval']= $this->que->generate_counter();
		
		$this->load->view('button1');
		$this->load->view('logintable',$data);
	}
	public function button_call_serve_skip(){
		$data['pending'] = $this->pending->generate_all_pending($this->session->userdata('transaction'),
		                   $this->session->userdata('status')!=null?  $this->session->userdata('status') : "");
		$data['served']  = $this->served->generate_all_served();
		$data['skipped'] = $this->skipped->generate_all_skipped();
		$data['pending_count'] = count($data['pending']);
		$data['served_count'] = count($data['served']);
		$data['skipped_count'] = count($data['skipped']);
		$data['optionval']= $this->que->generate_counter();
		
		$this->load->view('button2');
		$this->load->view('logintable',$data);
	}
	
	public function resetcall(){
		$resetdata = array(
					'call_id' =>'',
					'call_prepared' =>'',
					'call_number' =>'',
					'call_salutation' =>'',
					'call_fname' =>'',
					'call_lname' =>'',
					'jump' =>0,
		);
				$this->session->set_userdata($resetdata);
	}
	public function nextque(){
		$this->resetcall();
		$toCall = $this->pending->flag_pending($this->session->userdata('transaction'),$this->session->userdata('id'));
		if($toCall){
			foreach($toCall as $postCall){
				$this->session->set_userdata('call_id',$postCall['id']);
				$this->session->set_userdata('call_prepared',$postCall['prepared']);
				$this->session->set_userdata('call_number',$postCall['numberque']);
				$this->session->set_userdata('call_salutation',$postCall['salutation']);
				$this->session->set_userdata('call_fname',$postCall['firstname']);
				$this->session->set_userdata('call_lname',$postCall['lastname']);
				
			}
		}
		$this->button_call_serve_skip();
		$this->session->set_userdata('btn','css');
		
	}

   public function counter_trans(){
		$counter_trans = $this->usershandle->generate_handle($this->session->userdata('id'));
		$counter_trans_value = array(
							'counter' 	  => $counter_trans->counter,
							'transaction' => $counter_trans->type,
		);
		$this->session->set_userdata($counter_trans_value);
		$this->session->set_userdata('btn','jn');
	}

    public function update_users_handle(){
    	$this->resetcall();
		$id = $this->session->userdata('id');
		$counter = $this->input->post('counter');
		$type = $this->input->post('transaction');
		
		if($counter){
			$this->que->taken_sit($counter,$this->session->userdata('counter'),$this->nameFormat($this->session->userdata('firstname'))." ".$this->getFirst($this->session->userdata('lastname')).".");
		}else{
			$this->que->untake_sit($this->session->userdata('counter'));
		}
	
		$this->usershandle->update($id,$counter,$type);
		$this->counter_trans();
		
	}
	
	public function jumpque(){
		$toCall = $this->skipped->flag_skipped($this->input->post('skip'));
		if($toCall){
			$jump_info = array(
						'call_id' 		  => $toCall->id,
						'call_prepared'   => $toCall->prepared,
						'call_number'     => $toCall->numberque,
						'call_salutation' => $toCall->salutation,
						'call_fname'      => $toCall->firstname,
						'call_lname'      => $toCall->lastname,
						'jump'            => '1',
				);
			$this->session->set_userdata($jump_info);
			$this->button_call_serve_skip();
		    $this->session->set_userdata('btn','css');
			}else{
				$this->index();
			}
	}
	
	public function clear_call(){
		$this->drop->clear_to_pandora();
	}
	
	public function refresh(){
		$trigger = 'refresher/refresh.txt';
		$filehandler = fopen($trigger, 'w');
		fwrite($filehandler, 'call');
		fclose($filehandler);
	}
	
	public function callque(){
		if(!empty($this->session->userdata('counter')) &&
		   !empty($this->session->userdata('call_id')) &&
		   !empty($this->session->userdata('call_fname')) &&
		   !empty($this->session->userdata('call_lname')) &&
		   !empty($this->session->userdata('transaction'))
		   ){
		$this->que->call_que($this->session->userdata('counter'),
                             $this->session->userdata('call_fname')." ".
                             $this->session->userdata('call_lname'),
                             $this->session->userdata('transaction')
							 );
							 
			$this->que->taken_sit($this->session->userdata('counter'),'',
								  $this->nameFormat($this->session->userdata('firstname'))." ".
								  $this->getFirst($this->session->userdata('lastname')).".");
								  
			$this->drop->insert_to_pandora();
			$this->drop->insert_to_pandora1();
		    $this->refresh();
			
	}
		$this->button_call_serve_skip();
		$this->session->set_userdata('btn','css');
	}
	public function skipque(){
		if($this->session->userdata('call_id')!="NULL"){
		$this->pending->skipped_pending($this->session->userdata('call_id'),
										$this->nameFormat($this->session->userdata('firstname'))." ".
										$this->getFirst($this->session->userdata('lastname')).".");
		}
		$this->que->served_que($this->session->userdata('counter'));
		$this->drop->insert_to_pandora1();
		$this->resetcall();
		$this->clear_call();
		$this->refresh();
		$this->button_jump_next();
		$this->session->set_userdata('btn','jn');
	}
	public function serveque(){
		if(!$this->session->userdata('jump')){
			if($this->session->userdata('call_id')!="NULL"){
			$this->pending->served_pending($this->session->userdata('id'),$this->session->userdata('call_id'),
											$this->nameFormat($this->session->userdata('firstname'))." ".
											$this->getFirst($this->session->userdata('lastname')).".");
			}
			$this->que->served_que($this->session->userdata('counter'));
			$this->drop->insert_to_pandora1();
			$this->resetcall();
			$this->clear_call();
		    $this->refresh();
			$this->button_jump_next();
			$this->session->set_userdata('btn','jn');
		}else{
			$this->skipped->served_skip($this->session->userdata('id'),$this->session->userdata('call_id'),
											$this->nameFormat($this->session->userdata('firstname'))." ".
											$this->getFirst($this->session->userdata('lastname')).".");
											
			$this->que->served_que($this->session->userdata('counter'));
			$this->drop->insert_to_pandora1();
			$this->resetcall();
			$this->refresh();
			$this->button_jump_next();
			$this->session->set_userdata('btn','jn');
		}

	}
	public function job(){
		$this->input->post('job') ? $this->session->set_userdata('status', $this->input->post('job')) : "";
		$btn = $this->session->userdata('btn');
		if($btn == "css"){$this->button_call_serve_skip();}else if($btn == "jn"){$this->button_jump_next();}else{$this->button_jump_next();}	
	}
}