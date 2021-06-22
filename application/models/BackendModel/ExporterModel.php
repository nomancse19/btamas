<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ExporterModel extends CI_Model{
    
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


    public function insert_exporter_info($data){
        $this->db->insert('exporter_info',$data);
    }
    


    public function check_exporter_phone_number_is_exist($exporter_mobile_number){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_primary_mobile_number',$exporter_mobile_number);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }


    
    public function check_exporter_email_is_exist($exporter_email_address){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_email_address',$exporter_email_address);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }





    public function select_all_exporter_info(){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->order_by('exporter_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    


    public function deactive_exporter_account_by_exporter_id($exporter_info_id){
        $this->db->set('exporter_is_active',0);
        $this->db->where('exporter_info_id',$exporter_info_id);
        $this->db->update('exporter_info');
        $fdata['success_message']="Exporter Info Account Deactivated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageExporter');
    }




    public function active_exporter_account_by_exporter_id($exporter_info_id){
        $this->db->set('exporter_is_active',1);
        $this->db->where('exporter_info_id',$exporter_info_id);
        $this->db->update('exporter_info');
        $fdata['success_message']="Exporter Info Account Activated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageExporter');
    }


    public function select_exporter_image_data_by_exporter_id($exporter_info_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_info_id',$exporter_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }




    public function select_exporter_info_data_by_exporter_id($exporter_info_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_info_id',$exporter_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }





    public function update_exporter_info($data){
        $this->db->set('exporter_full_name',$data['exporter_full_name']);
        $this->db->set('exporter_address',$data['exporter_address']);
        $this->db->set('exporter_email_address',$data['exporter_email_address']);
        $this->db->set('exporter_primary_mobile_number',$data['exporter_primary_mobile_number']);
        $this->db->set('exporter_op1_mobile_number',$data['exporter_op1_mobile_number']);
        $this->db->set('exporter_op2_mobile_number',$data['exporter_op2_mobile_number']);
        $this->db->set('exporter_user_name',$data['exporter_user_name']);
        $this->db->set('exporter_user_password',$data['exporter_user_password']);
        $this->db->set('exporter_nid_number',$data['exporter_nid_number']);
        $this->db->set('exporter_nid_card_front_side_image',$data['exporter_nid_card_front_side_image']);
        $this->db->set('exporter_nid_card_back_side_image',$data['exporter_nid_card_back_side_image']);
        $this->db->set('exporter_profile_photo',$data['exporter_profile_photo']);
        $this->db->where('exporter_info_id',$data['exporter_info_id']);
        $this->db->update('exporter_info');
    }


    
    public function delete_old_exporter_nid_card_front_side_image($exporter_info_id){
        $query_get_image =$this->db->get_where('exporter_info', array('exporter_info_id' =>$exporter_info_id));
        $file_name=$query_get_image->row('exporter_nid_card_front_side_image');
        unlink(FCPATH.$file_name);
    }




    public function delete_old_exporter_nid_card_back_side_image($exporter_info_id){
        $query_get_image =$this->db->get_where('exporter_info', array('exporter_info_id' =>$exporter_info_id));
        $file_name=$query_get_image->row('exporter_nid_card_back_side_image');
        unlink(FCPATH.$file_name);
    }



    public function delete_old_exporter_profile_photo($exporter_info_id){
        $query_get_image =$this->db->get_where('exporter_info', array('exporter_info_id' =>$exporter_info_id));
        $file_name=$query_get_image->row('exporter_profile_photo');
        unlink(FCPATH.$file_name);
    }


    
    
    
}

?>