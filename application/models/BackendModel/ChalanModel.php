<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ChalanModel extends CI_Model{
    
 

    public function insert_chalan_info($data){
        $this->db->insert('chalan_info',$data);
        $last_insert_user_id=$this->db->insert_id(); 
        return $last_insert_user_id; 
    }


    public function save_chalan_details_data_in_account($data){
        $this->db->insert('account_income_details',$data);
    }



    public function select_all_chalan_info(){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->order_by('chalan_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }



    public function all_chalan_sms_data(){
        $this->db->select('*');
        $this->db->from('sms_notification');
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function all_chalan_info_by_chalan_id($chalan_info_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_info_id',$chalan_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function all_chalan_info_by_chalan_no($chalan_no){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_no',$chalan_no);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function all_vehicles_info_by_vehicles_info_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function update_previous_chalan_due_paid_profit_calculate($chalan_info_id){
        $this->db->set('income_details_is_profit',1);
        $this->db->where('chalan_info_id',$chalan_info_id);
        $this->db->where('income_details_due_paid_status',0);
        $this->db->update('account_income_details');
    }



    public function booked_vehicles_info_for_chalan($vehicles_info_id){
        $this->db->set('vehicles_is_available',0);
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $this->db->update('vehicles_info');
    }


    public function do_active_cnf_sms_notification(){
        $this->db->set('chalan_cnf_sms',1);
        $this->db->update('sms_notification');
    }


    public function do_deactive_cnf_sms_notification(){
        $this->db->set('chalan_cnf_sms',0);
        $this->db->update('sms_notification');
    }




    public function do_active_importer_sms_notification(){
        $this->db->set('chalan_importer_sms',1);
        $this->db->update('sms_notification');
    }


    public function do_deactive_importer_sms_notification(){
        $this->db->set('chalan_importer_sms',0);
        $this->db->update('sms_notification');
    }



    public function do_active_exporter_sms_notification(){
        $this->db->set('chalan_exporter_sms',1);
        $this->db->update('sms_notification');
    }


    public function do_deactive_exporter_sms_notification(){
        $this->db->set('chalan_exporter_sms',0);
        $this->db->update('sms_notification');
    }




    public function cancel_booking_vehicles_info_for_chalan($vehicles_info_id){
        $this->db->set('vehicles_is_available',1);
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $this->db->update('vehicles_info');
    }


    public function update_chalan_info_status_change($chalan_status,$chalan_info_id){
        $this->db->set('chalan_status',$chalan_status);
        $this->db->where('chalan_info_id',$chalan_info_id);
        $this->db->update('chalan_info');
    }

    public function delete_chalan_income_accounts_data_chalan_cancel($chalan_info_id){
        $this->db->where('chalan_info_id',$chalan_info_id);
        $this->db->delete('account_income_details');
    }

    public function update_chalan_payment_info_status_change($payment_info,$chalan_info_id){
        $this->db->set('chalan_payment_status',$payment_info);
        $this->db->where('chalan_info_id',$chalan_info_id);
        $this->db->update('chalan_info');
    }



    public function join_vehicles_info_by_vehicles_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->join('vehicles_owner_info','vehicles_owner_info.vehicles_owner_id =vehicles_info.vehicles_owner_id');
        $this->db->join('driver_info','driver_info.driver_info_id =vehicles_info.driver_info_id');
        $this->db->where('vehicles_info.vehicles_info_id',$vehicles_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }

        public function cnf_info_by_cnf_id($cnf_info_id){
            $this->db->select('*');
            $this->db->from('cnf_info');
            $this->db->where('cnf_info_id',$cnf_info_id);
            $query=$this->db->get();
            $query_result=$query->row();
            return $query_result;
        }


    public function exporter_info_exporter_info_id($exporter_info_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_info_id',$exporter_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }

    public function importer_info_importer_info_id($importer_info_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_info_id',$importer_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }

    public function all_active_exporter_info(){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_is_active',1);
        $this->db->order_by('exporter_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function all_active_importer_info(){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_is_active',1);
        $this->db->order_by('importer_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function all_active_cnf_info(){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_is_active',1);
        $this->db->order_by('cnf_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function all_active_vehicles_info(){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->where('vehicles_is_driver',1);
        $this->db->where('vehicles_info_is_active',1);
        $this->db->where('vehicles_is_available',1);
        $this->db->order_by('vehicles_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }




    public function join_vehicles_info_by_vehicles_info_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->join('vehicles_owner_info','vehicles_owner_info.vehicles_owner_id =vehicles_info.vehicles_owner_id');
        $this->db->join('driver_info','driver_info.driver_info_id =vehicles_info.driver_info_id');
        $this->db->where('vehicles_info.vehicles_info_id',$vehicles_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
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