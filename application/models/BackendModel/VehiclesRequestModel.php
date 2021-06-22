<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VehiclesRequestModel extends CI_Model{
    
 

    public function all_vehicles_request(){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->order_by('vehicles_request_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }



    public function all_user_account_request(){
        $this->db->select('*');
        $this->db->from('all_user_account_request');
        $this->db->order_by('all_user_account_request_id','DESC');
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


    public function count_all_user_account_request(){
        $this->db->select('*');
        $this->db->from('all_user_account_request');
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


    public function all_vehicles_request_by_id($vehicles_request_id){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_id',$vehicles_request_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }




    
    public function update_vehicles_request_status($vehicles_request_id,$vehicles_request_status){
        $this->db->set('vehicles_request_status',$vehicles_request_status);
        $this->db->where('vehicles_request_id',$vehicles_request_id);
        $this->db->update('all_vehicles_request');
        $fdata['success_message']="Vehicles Request Status Updated Success...";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/AllVehiclesRequest');
    }





    public function delete_user_account_request($user_account_request_id){
        $this->db->where('all_user_account_request_id',$user_account_request_id);
        $this->db->delete('all_user_account_request');
    }


  
    
    
    
}

?>