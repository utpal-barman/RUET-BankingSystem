<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class admin extends CI_Controller {

    function __construct(){
            parent::__construct();
            $this->load->model('welcome_model');
            $this->load->library('session');
    }


    public function index() {
        $data['bill'] = $this -> welcome_model -> show_bills();
        if (empty($this->session->userdata('username'))){
            redirect('signin');
        }
        else if($_SESSION['username'] == 'admin'){
            $this->load->view('view_admin', $data);
        }
        
        else{
            $this->load->view('view_home', $data);
        }
    }


}
