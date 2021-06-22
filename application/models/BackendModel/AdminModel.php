<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model{
    
    public function check_admin_login_info($data){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_email',$data['user_email']);
        $this->db->where('password',md5($data['user_password']));
        $this->db->where('activation_status',1);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        if($has==1){
        $result=$qresult->row();
        return $result;
        }
    }





    public function get_user_permissin_data($user_id){
        $this->db->select('*');
        $this->db->from('users_permission');
        $this->db->where('user_id',$user_id);
        $this->db->where('is_permission',1);
        $qresult=$this->db->get();
        $result=$qresult->result();
        $permission_name=array();
       foreach($result as $all_result){
           $permission_role_name=$all_result->permission_role_name;
           array_push($permission_name,$permission_role_name);
       }
       return $permission_name;
       
    }
    
    

    
    
    
    
}

?>