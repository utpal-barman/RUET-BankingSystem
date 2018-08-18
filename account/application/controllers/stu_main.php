<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class stu_main extends CI_Controller {

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
            $this->load->view('view_stu_main', $data);
        }
    }

    // Function to Delete selected record from database.
    function delete_student_id() {
        $reason = $_COOKIE["height"];
        $this -> welcome_model-> delete_student_id($reason);
    }

}
