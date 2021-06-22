<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehiclesModel extends CI_Model{
    
 


    public function insert_vehicles_owner_info($vehicles_owner_data){
        $this->db->insert('vehicles_owner_info',$vehicles_owner_data);
        $last_insert_user_id=$this->db->insert_id(); 
        return $last_insert_user_id; 
    }
    

    public function insert_vehicles_info($vehicles_data){
        $this->db->insert('vehicles_info',$vehicles_data);
        $last_insert_user_id=$this->db->insert_id(); 
        return $last_insert_user_id; 
    }
    


    public function insert_vehicles_image_info_data($vehicles_image_data){
        $this->db->insert('vehicles_images',$vehicles_image_data);
        $last_insert_user_id=$this->db->insert_id(); 
        return $last_insert_user_id; 
    }
    




    public function check_vehicles_owner_phone_number_is_exist($vehicles_owner_primary_mobile_number){
        $this->db->select('*');
        $this->db->from('vehicles_owner_info');
        $this->db->where('vehicles_owner_primary_mobile_number',$vehicles_owner_primary_mobile_number);
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








    
    public function check_vehicles_gps_number_is_exist($vehicles_gps_mobile_number){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->where('vehicles_gps_mobile_number',$vehicles_gps_mobile_number);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }



    public function vehicles_info_id_by_vehicles_images_id($vehicles_images_id){
        $this->db->select('*');
        $this->db->from('vehicles_images');
        $this->db->where('vehicles_images_id',$vehicles_images_id);
        $query_result=$this->db->get()->row();
        return $query_result->vehicles_info_id;
    }




    public function delete_vehicles_paper_images_with_file($vehicles_images_id){
        $query_get_image =$this->db->get_where('vehicles_images', array('vehicles_images_id' =>$vehicles_images_id));
        $file_name=$query_get_image->row('vehicles_images_name');
        unlink(FCPATH.$file_name);
        $this->db->where('vehicles_images_id',$vehicles_images_id);
        $this->db->delete('vehicles_images');


    }


    public function select_all_join_vehicles_info(){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->join('vehicles_owner_info','vehicles_owner_info.vehicles_owner_id =vehicles_info.vehicles_owner_id');
        $this->db->order_by('vehicles_info.vehicles_info_id','DESC');
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








    public function select_all_vehicles_info_by_vehicles_info_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('vehicles_info');
        $this->db->join('vehicles_owner_info','vehicles_owner_info.vehicles_owner_id =vehicles_info.vehicles_owner_id');
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function select_driver_info_by_vehicles_info_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('driver_info');
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }


    public function select_all_vehicles_image_data_by_vehicles_info_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('vehicles_images');
        $this->db->join('vehicles_owner_info','vehicles_owner_info.vehicles_owner_id =vehicles_images.vehicles_owner_id');
        $this->db->join('vehicles_info','vehicles_info.vehicles_info_id =vehicles_images.vehicles_info_id');
        $this->db->where('vehicles_images.vehicles_info_id',$vehicles_info_id);
        $this->db->order_by('vehicles_images_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    
    public function deactive_vehicles_account_by_vehicles_id($vehicles_id){
        $this->db->set('vehicles_info_is_active',0);
        $this->db->where('vehicles_info_id',$vehicles_id);
        $this->db->update('vehicles_info');
        $fdata['success_message']="Vehicles Info Account Deactivated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageVehicles');
    }


    public function deactive_vehicles_account_by_vehicles_id2($vehicles_id){
        $this->db->set('vehicles_info_is_active',0);
        $this->db->where('vehicles_info_id',$vehicles_id);
        $this->db->update('vehicles_info');

    }

    public function update_driver_info_by_vehicles_driver_info_id($driver_info_id,$vehicles_info_id){
        $this->db->set('driver_is_used',1);
        $this->db->set('vehicles_info_id',$vehicles_info_id);
        $this->db->where('driver_info_id',$driver_info_id);
        $this->db->update('driver_info');

    }



    public function update_previous_driver_info_by_vehicles_driver_info_id($driver_info_id){
        $this->db->set('driver_is_used',0);
        $this->db->set('vehicles_info_id',NULL);
        $this->db->where('driver_info_id',$driver_info_id);
        $this->db->update('driver_info');

    }


    public function remove_vehicles_info_by_vehicles_driver_info_id($vehicles_info_id){
        $this->db->set('vehicles_is_driver',0);
        $this->db->set('driver_info_id',NULL);
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $this->db->update('vehicles_info');

    }


    public function select_old_driver_id_by_vehicles_id($vehicles_info_id){
        $this->db->select('*');
        $this->db->from('driver_info');
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result->driver_info_id;
    }


    public function select_vehicles_info_id_by_driver_id($driver_info_id){
        $this->db->select('*');
        $this->db->from('driver_info');
        $this->db->where('driver_info_id',$driver_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result->vehicles_info_id;
    }


 

    public function update_vehicles_info_by_driver_vehicles_info_id($driver_info_id,$vehicles_info_id){
        $this->db->set('driver_info_id',$driver_info_id);
        $this->db->set('vehicles_is_driver',1);
        $this->db->where('vehicles_info_id',$vehicles_info_id);
        $this->db->update('vehicles_info');

    }



    

    public function active_vehicles_account_by_vehicles_id($vehicles_id){
        $this->db->set('vehicles_info_is_active',1);
        $this->db->where('vehicles_info_id',$vehicles_id);
        $this->db->update('vehicles_info');
        $fdata['success_message']="Vehicles Info Account Activated Success.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageVehicles');
    }





    public function select_cnf_image_data_by_cnf_id($cnf_info_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_info_id',$cnf_info_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }





    public function update_vehicles_owner_info($data){
        $this->db->set('vehicles_owner_name',$data['vehicles_owner_name']);
        $this->db->set('vehicles_owner_primary_mobile_number',$data['vehicles_owner_primary_mobile_number']);
        $this->db->set('vehicles_owner_op_mobile_number',$data['vehicles_owner_op_mobile_number']);
        $this->db->set('vehicles_owner_address',$data['vehicles_owner_address']);
        $this->db->set('vehicles_owner_profile_photo',$data['vehicles_owner_profile_photo']);
        $this->db->set('vehicles_owner_nid_no',$data['vehicles_owner_nid_no']);
        $this->db->set('vehicles_owner_nid_front_side_photo',$data['vehicles_owner_nid_front_side_photo']);
        $this->db->set('vehicles_owner_nid_back_side_photo',$data['vehicles_owner_nid_back_side_photo']);
        $this->db->where('vehicles_owner_id',$data['vehicles_owner_id']);
        $this->db->update('vehicles_owner_info');
    }



    public function update_vehicles_info($data){
        $this->db->set('vehicles_no',$data['vehicles_no']);
        $this->db->set('vehicles_engine_no',$data['vehicles_engine_no']);
        $this->db->set('vehicles_chassis_no',$data['vehicles_chassis_no']);
        $this->db->set('vehicles_tax_token_no',$data['vehicles_tax_token_no']);
        $this->db->set('vehicles_license_no',$data['vehicles_license_no']);
        $this->db->set('vehicles_gps_mobile_number',$data['vehicles_gps_mobile_number']);
        $this->db->set('vehicles_gps_tracking_id',$data['vehicles_gps_tracking_id']);
        $this->db->set('vehicles_fitness_paper_no',$data['vehicles_fitness_paper_no']);
        $this->db->set('vehicles_brta_paper_no',$data['vehicles_brta_paper_no']);
        $this->db->set('vehicles_fitness_paper_end_date',$data['vehicles_fitness_paper_end_date']);
        $this->db->set('vehicles_tax_token_end_date',$data['vehicles_tax_token_end_date']);
        $this->db->set('vehicles_brta_paper_end_date',$data['vehicles_brta_paper_end_date']);
        $this->db->where('vehicles_info_id',$data['vehicles_info_id']);
        $this->db->update('vehicles_info');
    }


    public function delete_old_vehicles_owner_nid_front_side_image($vehicles_owner_id){
        $query_get_image =$this->db->get_where('vehicles_owner_info', array('vehicles_owner_id' =>$vehicles_owner_id));
        $file_name=$query_get_image->row('vehicles_owner_nid_front_side_photo');
        unlink(FCPATH.$file_name);
    }



    public function delete_old_vehicles_owner_nid_back_side_image($vehicles_owner_id){
        $query_get_image =$this->db->get_where('vehicles_owner_info', array('vehicles_owner_id' =>$vehicles_owner_id));
        $file_name=$query_get_image->row('vehicles_owner_nid_back_side_photo');
        unlink(FCPATH.$file_name);
    }



    public function delete_old_vehicles_owner_profile_photo($vehicles_owner_id){
        $query_get_image =$this->db->get_where('vehicles_owner_info', array('vehicles_owner_id' =>$vehicles_owner_id));
        $file_name=$query_get_image->row('vehicles_owner_profile_photo');
        unlink(FCPATH.$file_name);
    }












    
    
    
}

?>