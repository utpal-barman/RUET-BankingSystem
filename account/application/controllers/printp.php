<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class printp extends CI_Controller {

	function __construct(){
		parent::__construct();
        $this->load->model('welcome_model');
        $this->load->library('session');
	}


	public function index(){
		$this->load->view('view_print');
	}


}