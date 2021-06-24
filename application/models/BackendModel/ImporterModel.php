<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ImporterModel extends CI_Model{
    
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


    public function insert_importer_info($data){
        $this->db->insert('importer_info',$data);
    }
    


    public function check_importer_phone_number_is_exist($importer_mobile_number){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_primary_mobile_number',$importer_mobile_number);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }
    
    public function check_importer_email_is_exist($importer_email_address){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_email_address',$importer_email_address);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }



    public function select_all_importer_info(){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->order_by('importer_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    public function select_all_member_importer_info(){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('transport_owner_member_type','Member');
        $this->db->order_by('importer_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function select_all_president_importer_info(){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('transport_owner_member_type','President');
        $this->db->order_by('importer_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    
    public function deactive_importer_account_by_importer_id($importer_info_id){
        $this->db->set('importer_is_active',0);
        $this->db->where('importer_info_id',$importer_info_id);
        $this->db->update('importer_info');
        $fdata['success_message']="Importer Info Account Deactivated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageImporter');
    }


    public function active_importer_account_by_importer_id($importer_info_id){
        $this->db->set('importer_is_active',1);
        $this->db->where('importer_info_id',$importer_info_id);
        $this->db->update('importer_info');
        $fdata['success_message']="Importer Info Account Activated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageImporter');
    }


    public function select_importer_image_data_by_importer_id($importer_info_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_info_id',$importer_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function select_importer_info_data_by_importer_id($importer_info_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_info_id',$importer_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function select_trnasport_owner_info_by_qrcode($Qrcode){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('transport_owner_QRcode_no',$Qrcode);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function update_importer_info($data){
        $this->db->set('transport_owner_full_name_bn',$data['transport_owner_full_name_bn']);
        $this->db->set('transport_owner_full_name_en',$data['transport_owner_full_name_en']);
        $this->db->set('transport_owner_permanent_address',$data['transport_owner_permanent_address']);
        $this->db->set('transport_name_en',$data['transport_name_en']);
        $this->db->set('transport_name_bn',$data['transport_name_bn']);
        $this->db->set('transport_owner_blood_group',$data['transport_owner_blood_group']);
        $this->db->set('transport_owner_birth_date',$data['transport_owner_birth_date']);
        $this->db->set('transport_owner_member_no',$data['transport_owner_member_no']);
        $this->db->set('transport_owner_card_no',$data['transport_owner_card_no']);
        $this->db->set('transport_owner_QRcode_no',$data['transport_owner_QRcode_no']);
        $this->db->set('transport_owner_designation',$data['transport_owner_designation']);
        $this->db->set('transport_owner_relative_name',$data['transport_owner_relative_name']);
        $this->db->set('transport_owner_relative_number',$data['transport_owner_relative_number']);
        $this->db->set('importer_address',$data['importer_address']);
        $this->db->set('importer_email_address',$data['importer_email_address']);
        $this->db->set('importer_primary_mobile_number',$data['importer_primary_mobile_number']);
        $this->db->set('importer_op1_mobile_number',$data['importer_op1_mobile_number']);
        $this->db->set('importer_user_password',$data['importer_user_password']);
        $this->db->set('importer_nid_number',$data['importer_nid_number']);
        $this->db->set('importer_nid_card_front_side_image',$data['importer_nid_card_front_side_image']);
        $this->db->set('importer_nid_card_back_side_image',$data['importer_nid_card_back_side_image']);
        $this->db->set('importer_profile_photo',$data['importer_profile_photo']);
        $this->db->where('importer_info_id',$data['importer_info_id']);
        $this->db->update('importer_info');
    }


    public function delete_old_importer_nid_card_front_side_image($importer_info_id){
        $query_get_image =$this->db->get_where('importer_info', array('importer_info_id' =>$importer_info_id));
        $file_name=$query_get_image->row('importer_nid_card_front_side_image');
        unlink(FCPATH.$file_name);
    }

    public function delete_old_importer_nid_card_back_side_image($importer_info_id){
        $query_get_image =$this->db->get_where('importer_info', array('importer_info_id' =>$importer_info_id));
        $file_name=$query_get_image->row('importer_nid_card_back_side_image');
        unlink(FCPATH.$file_name);
    }

    public function delete_old_importer_profile_photo($importer_info_id){
        $query_get_image =$this->db->get_where('importer_info', array('importer_info_id' =>$importer_info_id));
        $file_name=$query_get_image->row('importer_profile_photo');
        unlink(FCPATH.$file_name);
    }


    
    
    
}

?>