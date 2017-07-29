<?php

/**
 * Calculator Class
 *
 * @project     Springback Calculator
 * @author      Abdelrahman Al Harahsheh
 * @link        https://github.com/Abdelrahman146
 */

class Calculator extends CI_Controller {
    
    /*
     * index method
     */
    
    public function index(){
        
        $data['title'] = 'Home';
        
        $this->load->view('templates/header', $data);
        $this->load->view('index', $data);
        $this->load->view('templates/footer', $data);
    }
    
    
    /*
     * show the result
     */
    
    public function result(){
        
    }
}
