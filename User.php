<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class User extends CI_Model{ 
    function __construct() { 
       $this->table = 'users'; 
    } 
        function getRows($params = array()){ 
        $this->db->select('*'); 
        $this->db->from($this->table); 
         
        if(array_key_exists("conditions", $params)){ 
            foreach($params['conditions'] as $key => $val){ 
                $this->db->where($key, $val); 
            } 
        } 
         
        if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){ 
            $result = $this->db->count_all_results(); 
        }else{ 
            if(array_key_exists("id", $params) || $params['returnType'] == 'single'){ 
                if(!empty($params['id'])){ 
                    $this->db->where('id', $params['id']); 
                } 
                $query = $this->db->get(); 
                $result = $query->row_array(); 
            }else{ 
                $this->db->order_by('id', 'desc'); 
                if(array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit'],$params['start']); 
                }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){ 
                    $this->db->limit($params['limit']); 
                } 
                 
                $query = $this->db->get(); 
                $result = ($query->num_rows() > 0)?$query->result_array():FALSE; 
            } 
        } 
         
       
        return $result; 
    } 
            public function getUser($id){
            $query = $this->db->get_where('users',array('id'=>$id));
            return $query->row_array();
        }
        public function update($data, $id) {
        if(!empty($data) && !empty($id)){
            $update = $this->db->update('users', $data, array('id'=>$id));
            return $update;
        }else{
            return false;
        }
    }
           public function insert($data = array()) { 
       
            $insert = $this->db->insert($this->table, $data); 
            
            return $insert?$this->db->insert_id():false; 
        
   }
   public function delete($id){
        $delete = $this->db->delete('users',array('id'=>$id));
        return $delete;
    } 
        
}