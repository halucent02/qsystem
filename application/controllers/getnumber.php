<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GetNumber extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		}
	public function number(){
		$this->load->model('number');
		$this->number->get_number();
	}
}