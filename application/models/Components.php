<?php

/**
 * Calculator Class
 *
 * @project     Springback Calculator
 * @Category    Model
 * @author      Abdelrahman Al Harahsheh
 * @link        https://github.com/Abdelrahman146
 */

class Components extends CI_Model {
    
    /*
     * return website name
     */
    
    public function get_site_name(){
        
        $this->db->select('component_text');
        $this->db->from('components');
        $this->db->where('component_name','website Name');
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     * update website name
     */
    
    public function update_site_name($update){
        
        $data = array(
            'component_text' => $update
        );

        $this->db->where('component_name', 'website Name');
        $this->db->update('components', $data);
        
        return true;
        
    }
    
    
     /*
     * return about project
     */
    
    public function get_about_project(){
        
        $this->db->select('component_text');
        $this->db->from('components');
        $this->db->where('component_name','about project');
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     * update about project
     */
    
    public function update_about_project($update){
        
        $data = array(
            'component_text' => $update
        );

        $this->db->where('component_name', 'about project');
        $this->db->update('components', $data);
        
        return true;
        
    }
    
    /*
     * return about author
     */
    
    public function get_about_author(){
        
        $this->db->select('component_text');
        $this->db->from('components');
        $this->db->where('component_name','about author');
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     * update about project
     */
    
    public function update_about_author($update){
        
        $data = array(
            'component_text' => $update
        );

        $this->db->where('component_name', 'about author');
        $this->db->update('components', $data);
        
        return true;
        
    }
    
    /*
     * return project description
     */
    
    public function get_project_description(){
        
        $this->db->select('component_text');
        $this->db->from('components');
        $this->db->where('component_name','project_description');
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     * update project description
     */
    
    public function update_project_description($update){
        
        $data = array(
            'component_text' => $update
        );

        $this->db->where('component_name', 'project description');
        $this->db->update('components', $data);
        
        return true;
        
    }
    
    /*
     * return Equation
     */
    
    public function get_Equation(){
        
        $this->db->select('component_text');
        $this->db->from('components');
        $this->db->where('component_name','Equation');
        $query = $this->db->get();
        
        return $query;
    }
    
    /*
     * update Equation
     */
    
    public function update_Equation($update){
        
        $data = array(
            'component_text' => $update
        );

        $this->db->where('component_name', 'Equation');
        $this->db->update('components', $data);
        
        return true;
        
    }
    
}
    