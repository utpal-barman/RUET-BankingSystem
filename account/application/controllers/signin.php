<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');
        $this->load->library('session');
	}


	public function index()
	{
		$this->load->view('view_signin');
	}

	public function login_index()
	{
        

        $logged_user_data = array();

		$username = $this-> input-> post('username');
		$password = $this-> input-> post('password');


		$id = $this-> welcome_model-> verify_user($username,md5($password));

		if(!empty($id)){
			$logged_user_data['username'] = $id-> username;
            $logged_user_data['name'] = $id-> name;
            $logged_user_data['account_id'] = $id-> account_id;
            $logged_user_data['id'] = $id-> id;
            $logged_user_data['dept'] = $id-> dept;
            $logged_user_data['series'] = $id-> series;
            $logged_user_data['email'] = $id-> email;
            $logged_user_data['mobile'] = $id-> mobile;
            $logged_user_data['balance'] = $id-> balance;
            
			$this-> session-> set_userdata($logged_user_data);
			redirect('stu_main');
		}	
		else{
/*			$this -> session -> unset_userdata('username');
			$logged_user_data['username'] = '';*/
			$logged_user_data['error_msg'] = "Invalid Username or Password. Try Again with valid information";
			$this-> session-> set_userdata($logged_user_data);
			redirect('signin');

		}

	}
        
        public function logout() {
            $this->load->library('session');
            $this->session->unset_userdata('username');
            $this->session->sess_destroy();
            redirect('home');
        }
}