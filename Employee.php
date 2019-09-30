<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employee extends CI_Model{
    /*
     * Get posts
     */
    function getRows($id = ""){
        if(!empty($id)){
            $query = $this->db->get_where('employee', array('id' => $id));
            return $query->row_array();
        }else{
            $query = $this->db->get('employee');
            return $query->result_array();
        }
    }
    
    /*
     * Insert post
     */
    public function insert($data = array()) {
        $insert = $this->db->insert('employee', $data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;
        }
    }
    
    /*
     * Update post
     */
    public function update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('employee', $data, array('id'=>$id));
            return $update?true:false;
        }else{
            return false;
        }
    }
    
    /*
     * Delete post
     */
    public function delete($id){
        $delete = $this->db->delete('employee',array('id'=>$id));
        return $delete?true:false;
    }
}