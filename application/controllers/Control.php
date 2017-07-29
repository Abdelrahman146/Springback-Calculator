<?php

/**
 * Control Class
 *
 * @project     Springback Calculator
 * @Category    Controller
 * @author      Abdelrahman Al Harahsheh
 * @link        https://github.com/Abdelrahman146
 */

class Control extends CI_Controller {
    
    /*
     * index method
     */
    
    public function index(){
        
        $data['title'] = 'Home';
        if(!$this->session->userdata('logged_in')) {
            echo 'logged in will show the control page';
        }else {
            echo 'not logged in and will show the logout page';
        }
        $this->load->view('templates/header', $data);
        $this->load->view('control', $data);
        $this->load->view('templates/footer', $data);
    }
    
    public function login(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]|max_length[16]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[4]|max_length[50]');
		
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		
		$user_id = $this->User_model->login($username, $password);
		
		 //Validate user
         if($user_id){
             //Create array of user data
             $data = array(
                       'user_id'   => $user_id,
                       'username'  => $username,
                       'logged_in' => true
             );
			//Set session userdata
			$this->session->set_userdata($data);
                   
			//Set message
			$this->session->set_flashdata('pass_login', 'You are logged in');
			redirect('control');
        } else {
            //Set error
             $this->session->set_flashdata('fail_login', 'Sorry, the login info that you entered is invalid');
			redirect('control');
        }
	}
	
	public function logout(){
		//Unset user data
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();

        redirect('calculator');
	}
    
}