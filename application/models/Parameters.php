<?php

/**
 * Parameters Class
 *
 * @project     Springback Calculator
 * @Category    Model
 * @author      Abdelrahman Al Harahsheh
 * @link        https://github.com/Abdelrahman146
 */

class Parameters extends CI_Model {
    
    /*
     * return all parameters
     */
    
    public function get_parameters(){
        
        $this->db->select('*');
        $this->db->from('parameters');
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     * return parameter
     */
    
    public function get_parameter($id){
        
        $this->db->select('*');
        $this->db->from('parameters');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     * update parameter
     */
    
    public function delete_parameter($id){
        
        $this->db->where('id', $id);
        $this->db->delete('parameters');
        
    }
    
    /*
     * insert new parameter
     */
    
    public function insert_parameter($data){
        
        $this->db->insert('parameters', $data);
        
    }
}
    
    
    