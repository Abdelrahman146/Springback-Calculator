<?php

/**
 * Users Class
 *
 * @project     Springback Calculator
 * @Category    Model
 * @author      Abdelrahman Al Harahsheh
 * @link        https://github.com/Abdelrahman146
 */

class Users extends CI_Model {
    
   public function login($username,$password){  
        //Validate
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        
        $result = $this->db->get('users');
        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }
    
    public function update_password($username,$password, $new){
        
        $data = array(
            'password' => $new
        );
        
        //Validate
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $this->db->update('users', $data);
    }
    
    public function update_email($username,$password, $new){
        
        $data = array(
            'email' => $new
        );
        
        //Validate
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $this->db->update('users', $data);
    }
}
    
    
    