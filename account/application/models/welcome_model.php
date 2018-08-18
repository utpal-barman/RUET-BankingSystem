<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome_model extends CI_Model {

    function __construct(){
            parent::__construct();
    }

    function verify_user($username,$password){
        $this-> db-> SELECT('*');
        $this-> db-> WHERE('username',$username);
        $this->db->WHERE('password',$password);
        $flag = $this->db->get('account')->row();

        return $flag;

    }
    
    
    
    
    

    function register_user($data){
        $this->db->set($data);
        $id = $this->db->insert('account');
        return $id;
    }
    
    function update_user($data){
        $account_id = $this -> session -> userdata('account_id');
    
        
        $id = $this -> db -> where('account_id', $account_id);
        $id  = $this -> db -> update('account', $data);
        
        return $id;
    }
    
    

    function get_profile_info(){
        $username = $this -> session -> userdata('username');
        return $this->db->select('*')
                        ->from('account')
                        ->where('username', $username)
                        ->get()->row();
    }
    
    function show_bills() {
   
         $query = $this->db->where('id',$this->session->userdata('id'));
         $query = $this->db->get('bill');
         return $query->result(); 
    }


        


}