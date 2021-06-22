<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DriverModel extends CI_Model{
    
 

    public function insert_driver_info($driver_info_data){
        $this->db->insert('driver_info',$driver_info_data);
        $last_insert_user_id=$this->db->insert_id(); 
        return $last_insert_user_id; 
    }
    


    public function insert_driver_image_info_data($driver_image_data){
        $this->db->insert('driver_images',$driver_image_data);
        $last_insert_user_id=$this->db->insert_id(); 
        return $last_insert_user_id; 
    }
    



    public function check_driver_phone_number_is_exist($driver_phone_number){
        $this->db->select('*');
        $this->db->from('driver_info');
        $this->db->where('driver_mobile_number',$driver_phone_number);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }


    public function select_vehicles_owner_info_data_by_vehicles_owner_id($vehicles_owner_id){
        $this->db->select('*');
        $this->db->from('vehicles_owner_info');
        $this->db->where('vehicles_owner_id',$vehicles_owner_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function select_vehicles_info_data_by_vehicles_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $query_result=$this->db->get()->row();
        return $query_result;
    }






    
    public function select_driver_image_data_by_driver_id($driver_id){
        $this->db->select('*');
        $this->db->from('driver_info');
        $this->db->where('driver_info_id',$driver_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }



    
  



    public function driver_info_id_by_driver_images_id($driver_images_id){
        $this->db->select('*');
        $this->db->from('driver_images');
        $this->db->where('driver_images_id',$driver_images_id);
        $query_result=$this->db->get()->row();
        return $query_result->driver_info_id;
    }




    public function delete_driver_paper_images_with_file($driver_images_id){
        $query_get_image =$this->db->get_where('driver_images', array('driver_images_id' =>$driver_images_id));
        $file_name=$query_get_image->row('driver_images_name');
        unlink(FCPATH.$file_name);
        $this->db->where('driver_images_id',$driver_images_id);
        $this->db->delete('driver_images');


    }


    public function select_all_driver_info(){
        $this->db->select('*');
        $this->db->from('driver_info');
        $this->db->order_by('driver_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function select_all_active_driver_info(){
        $this->db->select('*');
        $this->db->from('driver_info');
        $this->db->where('driver_is_active',1);
        $this->db->where('driver_is_used',0);
        $this->db->order_by('driver_info_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function select_vehicles_join_info_data_by_vehicles_info_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->join('vehicles_owner_info','vehicles_owner_info.vehicles_owner_id =vehicles_info.vehicles_owner_id');
        $this->db->where('vehicles_info.vehicles_info_id',$vehicles_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }








    public function select_all_driver_info_by_driver_info_id($driver_info_id){
        $this->db->select('*');
        $this->db->from('driver_info');
        $this->db->where('driver_info_id',$driver_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function select_all_driver_image_data_by_driver_info_id($driver_info_id){
        $this->db->select('*');
        $this->db->from('driver_images');
        $this->db->join('driver_info','driver_info.driver_info_id =driver_images.driver_info_id');
        $this->db->where('driver_images.driver_info_id',$driver_info_id);
        $this->db->order_by('driver_images_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    
    public function deactive_driver_account_by_driver_id($driver_id){
        $this->db->set('driver_is_active',0);
        $this->db->where('driver_info_id',$driver_id);
        $this->db->update('driver_info');
        $fdata['success_message']="Driver Info Account Deactivated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageDriver');
    }


    public function deactive_driver_account_by_driver_id2($driver_id){
        $this->db->set('driver_is_active',0);
        $this->db->where('driver_info_id',$driver_id);
        $this->db->update('driver_info');

    }



    

    public function active_driver_account_by_driver_id($driver_id){
        $this->db->set('driver_is_active',1);
        $this->db->where('driver_info_id',$driver_id);
        $this->db->update('driver_info');
        $fdata['success_message']="Driver Info Account Activated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageDriver');
    }





    public function select_cnf_image_data_by_cnf_id($cnf_info_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_info_id',$cnf_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }








    public function update_driver_info($data){
        $this->db->set('driver_name',$data['driver_name']);
        $this->db->set('driver_mobile_number',$data['driver_mobile_number']);
        $this->db->set('driver_op_mobile_number',$data['driver_op_mobile_number']);
        $this->db->set('driver_address',$data['driver_address']);
        $this->db->set('driver_nid_card_no',$data['driver_nid_card_no']);
        $this->db->set('driver_license_number',$data['driver_license_number']);
        $this->db->set('driver_license_end_date',$data['driver_license_end_date']);
        $this->db->set('driver_parents_mobile_number',$data['driver_parents_mobile_number']);
        $this->db->set('driver_card_no',$data['driver_card_no']);
        $this->db->set('driver_profile_photo',$data['driver_profile_photo']);
        $this->db->set('driver_nid_card_front_side_image',$data['driver_nid_card_front_side_image']);
        $this->db->set('driver_nid_card_back_side_image',$data['driver_nid_card_back_side_image']);
        $this->db->set('driver_account_password',$data['driver_account_password']);
        $this->db->where('driver_info_id',$data['driver_info_id']);
        $this->db->update('driver_info');
    }


    public function delete_old_driver_nid_card_front_side_image($driver_info_id){
        $query_get_image =$this->db->get_where('driver_info', array('driver_info_id' =>$driver_info_id));
        $file_name=$query_get_image->row('driver_nid_card_front_side_image');
        unlink(FCPATH.$file_name);
    }



    public function delete_old_driver_nid_back_side_image($driver_info_id){
        $query_get_image =$this->db->get_where('driver_info', array('driver_info_id' =>$driver_info_id));
        $file_name=$query_get_image->row('driver_nid_card_back_side_image');
        unlink(FCPATH.$file_name);
    }



    public function delete_old_driver_profile_photo($driver_info_id){
        $query_get_image =$this->db->get_where('driver_info', array('driver_info_id' =>$driver_info_id));
        $file_name=$query_get_image->row('driver_profile_photo');
        unlink(FCPATH.$file_name);
    }













    
    
    
}

?>