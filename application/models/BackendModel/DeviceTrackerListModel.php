<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeviceTrackerListModel extends CI_Model{
    
 


    public function insert_device_tracker_info($data){
        $this->db->insert('vehicles_device_tracker',$data);
    }


    public function save_tracker_details_data_in_account($data){
        $this->db->insert('account_income_details',$data);
    }



    public function all_device_tracker_request(){
        $this->db->select('*');
        $this->db->from('vehicles_device_tracker');
        $this->db->order_by('vehicles_device_tracker_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }



    

    public function all_pending_vehicles_request(){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',0);
        $this->db->order_by('vehicles_request_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function count_all_pending_vehicles_request(){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',0);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }
    
    public function count_all_vehicles_request(){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }


    public function all_processing_vehicles_request(){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',1);
        $this->db->order_by('vehicles_request_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    public function all_accepted_vehicles_request(){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',2);
        $this->db->order_by('vehicles_request_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    public function all_completed_vehicles_request(){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',3);
        $this->db->order_by('vehicles_request_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function all_cancel_vehicles_request(){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',4);
        $this->db->order_by('vehicles_request_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function all_vehicles_tracker_request_by_id($vehicles_device_tracker_id){
        $this->db->select('*');
        $this->db->from('vehicles_device_tracker');
        $this->db->where('vehicles_device_tracker_id',$vehicles_device_tracker_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }

        public function update_device_tracker_info($data,$vehicles_device_tracker_id){
            $this->db->set('customer_name',$data['customer_name']);
            $this->db->set('customer_mobile_number',$data['customer_mobile_number']);
            $this->db->set('customer_address',$data['customer_address']);
            $this->db->set('tracker_device_model',$data['tracker_device_model']);
            $this->db->set('vehicles_model',$data['vehicles_model']);
            $this->db->set('device_install_date_time',$data['device_install_date_time']);
            $this->db->set('device_install_man_name',$data['device_install_man_name']);
            $this->db->set('device_install_man_number',$data['device_install_man_number']);
            $this->db->set('device_install_status',$data['device_install_status']);
            $this->db->where('vehicles_device_tracker_id',$vehicles_device_tracker_id);
            $this->db->update('vehicles_device_tracker');
        }


    
    public function update_vehicles_request_status($vehicles_request_id,$vehicles_request_status){
        $this->db->set('vehicles_request_status',$vehicles_request_status);
        $this->db->where('vehicles_request_id',$vehicles_request_id);
        $this->db->update('all_vehicles_request');
        $fdata['success_message']="Vehicles Request Status Updated Success...";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/AllVehiclesRequest');
    }


  
    
    
    
}

?>