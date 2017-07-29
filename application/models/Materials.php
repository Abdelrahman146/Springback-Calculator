<?php

/**
 * Materials Class
 *
 * @project     Springback Calculator
 * @Category    Model
 * @author      Abdelrahman Al Harahsheh
 * @link        https://github.com/Abdelrahman146
 */

class Materials extends CI_Model {
    
    /*
     * return all Materials
     */
    
    public function get_materials(){
        
        $this->db->select('*');
        $this->db->from('materials');
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     * return material
     */
    
    public function get_material($id){
        
        $this->db->select('*');
        $this->db->from('materials');
        $this->db->where('id', $id);
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     *  delete material
     */
    
    public function delete_material($id){
        
        $this->db->where('id', $id);
        $this->db->delete('materials');
        
    }
    
    /*
     * insert material
     */
    
    public function insert_material($data){
        
        $this->db->insert('materials', $data);
        
    }
}
    
    
    