<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CnfModel extends CI_Model{
    
    public function check_admin_login_info($data){
        $this->db->select('*');
        $this->db->from('admin_user');
        $this->db->where('admin_user_email',$data['admin_user_email']);
        $this->db->where('admin_user_password',md5($data['admin_user_password']));
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        if($has==1){
        $result=$qresult->row();
        return $result;
        }
    }


    public function insert_cnf_info($data){
        $this->db->insert('cnf_info',$data);
    }
    


    public function check_cnf_phone_number_is_exist($cnf_mobile_number){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_primary_mobile_number',$cnf_mobile_number);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }
    
    public function check_cnf_email_is_exist($cnf_email_address){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_email_address',$cnf_email_address);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }



    public function select_all_cnf_info(){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->order_by('cnf_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    
    public function deactive_cnf_account_by_cnf_id($cnf_info_id){
        $this->db->set('cnf_is_active',0);
        $this->db->where('cnf_info_id',$cnf_info_id);
        $this->db->update('cnf_info');
        $fdata['success_message']="CNF Info Account Deactivated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageCnf');
    }


    public function active_cnf_account_by_cnf_id($cnf_info_id){
        $this->db->set('cnf_is_active',1);
        $this->db->where('cnf_info_id',$cnf_info_id);
        $this->db->update('cnf_info');
        $fdata['success_message']="CNF Info Account Activated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageCnf');
    }


    public function select_cnf_image_data_by_cnf_id($cnf_info_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_info_id',$cnf_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function select_cnf_info_data_by_cnf_id($cnf_info_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_info_id',$cnf_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function update_cnf_info($data){
        $this->db->set('cnf_full_name',$data['cnf_full_name']);
        $this->db->set('cnf_address',$data['cnf_address']);
        $this->db->set('cnf_email_address',$data['cnf_email_address']);
        $this->db->set('cnf_primary_mobile_number',$data['cnf_primary_mobile_number']);
        $this->db->set('cnf_op1_mobile_number',$data['cnf_op1_mobile_number']);
        $this->db->set('cnf_op2_mobile_number',$data['cnf_op2_mobile_number']);
        $this->db->set('cnf_user_name',$data['cnf_user_name']);
        $this->db->set('cnf_user_password',$data['cnf_user_password']);
        $this->db->set('cnf_nid_number',$data['cnf_nid_number']);
        $this->db->set('cnf_nid_card_front_side_image',$data['cnf_nid_card_front_side_image']);
        $this->db->set('cnf_nid_card_back_side_image',$data['cnf_nid_card_back_side_image']);
        $this->db->set('cnf_profile_photo',$data['cnf_profile_photo']);
        $this->db->where('cnf_info_id',$data['cnf_info_id']);
        $this->db->update('cnf_info');
    }


    public function delete_old_cnf_nid_card_front_side_image($cnf_info_id){
        $query_get_image =$this->db->get_where('cnf_info', array('cnf_info_id' =>$cnf_info_id));
        $file_name=$query_get_image->row('cnf_nid_card_front_side_image');
        unlink(FCPATH.$file_name);
    }

    public function delete_old_cnf_nid_card_back_side_image($cnf_info_id){
        $query_get_image =$this->db->get_where('cnf_info', array('cnf_info_id' =>$cnf_info_id));
        $file_name=$query_get_image->row('cnf_nid_card_back_side_image');
        unlink(FCPATH.$file_name);
    }

    public function delete_old_cnf_profile_photo($cnf_info_id){
        $query_get_image =$this->db->get_where('cnf_info', array('cnf_info_id' =>$cnf_info_id));
        $file_name=$query_get_image->row('cnf_profile_photo');
        unlink(FCPATH.$file_name);
    }


    
    
    
}

?>