<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model{



    public function select_all_user_info_list(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('user_id','DESC');
        $query=$this->db->get();
        $all_user_info=$query->result();
        return $all_user_info;
    }


    public function select_all_user_logged_info_list(){
        $this->db->select('*');
        $this->db->from('user_log');
        $this->db->order_by('user_log_id','DESC');
        $query=$this->db->get();
        $all_user_logged_info=$query->result();
        return $all_user_logged_info;
    }



    public function select_all_active_user_logged_info_list(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_is_login','1');
        $this->db->order_by('user_id','DESC');
        $query=$this->db->get();
        $all_active_user_logged_info=$query->result();
        return $all_active_user_logged_info;
    }



    public function check_user_email_is_exist($email){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_email',$email);
        $query=$this->db->get();
        $has=$query->num_rows();
        if($has==1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    


    public function save_user_info($data){
        $user_insert= $this->db->insert("users",$data);
        $last_insert_user_id=$this->db->insert_id(); 
        return $last_insert_user_id; 
      }



    public function save_login_user_data($data){
        $user_insert= $this->db->insert("user_log",$data);
        return $user_insert; 
      }


      public function get_all_permission_list(){
        $this->db->select('*');
        $this->db->from('permission_role');
        $query = $this->db->get();
        $query_result=$query->result();
        return $query_result;
      }
    
    
      public function save_new_user_empty_permission($permit){
        $permit_insert= $this->db->insert("users_permission",$permit);
        return $permit_insert; 
      }



      public function Check_user_is_active($user_id){
        $this->db->select('activation_status');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $this->db->where('activation_status',1);
        $query=$this->db->get();
        $has=$query->num_rows();
        if($has==1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    



    public function update_user_empty_permission($permit){
        $this->db->set('is_permission',$permit['is_permission']);
        $this->db->where('users_permission_id',$permit['users_permission_id']);
        $this->db->update('users_permission');
      }
    
    


      public function check_user_permission_is_exist($user_id){
        $this->db->select('*');
        $this->db->from('users_permission');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        return $query_result=$query->result();
    }
    
    
    public function get_all_user_permission_list_by_user_id($user_id){
        $this->db->select('*');
        $this->db->from('users_permission');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        $query_result=$query->result();
        return $query_result;
      }
    
 
    
    
    public function select_all_permission_without_no_permit($user_id){
        $this->db->select('users_permission_id,user_id,permission_role_id,permission_role_name,permission_role_details');
        $this->db->from('users_permission');
        $this->db->where('user_id',$user_id);
        $this->db->where('is_permission',0);
        $this->db->order_by('users_permission_id','ASC');
        $query=$this->db->get();
        $all_info=$query->result();
        return $all_info;
    }
    
    
    
    public function select_all_permission_with_yes_permit($user_id){
        $this->db->select('users_permission_id,user_id,permission_role_id,permission_role_name,permission_role_details');
        $this->db->from('users_permission');
        $this->db->where('user_id',$user_id);
        $this->db->where('is_permission',1);
        $this->db->order_by('users_permission_id','ASC');
        $query=$this->db->get();
        $all_info=$query->result();
        return $all_info;
    }
    
    
    
    
    public function select_all_user_info_by_user_id($user_id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        $all_user_data=$query->result();
        return $all_user_data;
    }
    
    
    
    public function select_all_permission_info_by_user_id($user_id){
        $this->db->select('*');
        $this->db->from('users_permission');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        $all_info=$query->result();
        return $all_info;
        
    }
    
    
    
    public function update_user_permission_info_by_user_permission_id($permission_main_info){
        $this->db->set('is_permission',0);
        $this->db->where('users_permission_id',$permission_main_info['users_permission_id']);
        $this->db->update('users_permission');
    }
    
    
    
    public function update_all_permission_info_by_user_id($users_permission_id,$user_id){
        $this->db->set('is_permission',1);
        $this->db->set('user_id',$user_id);
        $this->db->where('users_permission_id',$users_permission_id);
       return  $this->db->update('users_permission');
    }
    


    public function delete_user_all_permission($user_id){
        $this->db->where('user_id',$user_id);
        $this->db->delete('users_permission');
    }
    
    


    public function unpublish_user_info($user_id){
        $this->db->set('activation_status',0);
        $this->db->where('user_id',$user_id);
        $this->db->update('users');

    }
    
    
    public function publish_user_info($user_id){
        $this->db->set('activation_status',1);
        $this->db->where('user_id',$user_id);
        $this->db->update('users');

    } 





    public function update_login_user_is_login_true($user_id){
        $this->db->set('user_is_login',1);
        $this->db->where('user_id',$user_id);
        $this->db->update('users');

    } 
    
    public function update_login_user_is_login_false($user_id){
        $this->db->set('user_is_login',0);
        $this->db->where('user_id',$user_id);
        $this->db->update('users');

    } 


    public function get_user_login_info_by_user_id($user_id){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_id',$user_id);
        $query=$this->db->get();
        $all_info=$query->row();
        return $all_info->user_is_login;
    }


    public function delete_all_user_log_info(){
        $this->db->truncate('user_log');
    }
    
    public function delete_selected_user_log_info($user_log_id){
        $this->db->where("user_log_id",$user_log_id);
        $this->db->delete("user_log");
    }
    






    
    
    
}

?>