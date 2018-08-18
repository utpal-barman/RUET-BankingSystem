<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signup extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('welcome_model');
        $this->load->library('session');
	}


	public function index()
	{
		$this->load->view('view_signup');
	}


	public function register()
	{
		$new_user_info = array();
        
        $new_user_info['account_id']= $this-> input-> post('account_id');
        $new_user_info['id']		= $this-> input-> post('id');
        $new_user_info['name']		= $this-> input-> post('name');
        $new_user_info['dept']		= $this-> input-> post('dept');
        $new_user_info['series']	= $this-> input-> post('series');
		$new_user_info['email']		= $this-> input-> post('email');
		$new_user_info['mobile']	= $this-> input-> post('mobile');
		$new_user_info['username']	= $this-> input-> post('username');
		$new_user_info['password']	= md5($this-> input-> post('password'));

/*		If any filed is missing in registration process*/
		if(empty($new_user_info['account_id']) || empty($new_user_info['id']) || empty($new_user_info['name'])  || empty($new_user_info['dept'])   || empty($new_user_info['series'])|| empty($new_user_info['email'])  || empty($new_user_info['mobile'])||empty($new_user_info['username'])|| empty($new_user_info['password']))
		{
			$logged_user_data['not_success_msg'] = "Some fields are missing!";
			$this->session->set_userdata($logged_user_data);
			redirect('signup');
		}

/*		If all fileds are filled properly*/
		else {
			$id = $this-> welcome_model-> register_user($new_user_info);
			if($id) {
                $this-> session-> userdata['username'] = $new_user_info['username'];
                $this-> session-> userdata['name'] = $new_user_info['name'];
				$this-> session-> set_userdata($logged_user_data);
				redirect('stu_main');
			}
		}
	}

}