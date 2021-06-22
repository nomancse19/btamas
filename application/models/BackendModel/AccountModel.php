<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountModel extends CI_Model{
    


    public function insert_income_category_info($data){
        $this->db->insert('account_income_category',$data);
    }


    public function insert_cost_category_info($data){
        $this->db->insert('account_cost_category',$data);
    }


    
    
    public function insert_income_details_info($data){
        $this->db->insert('account_income_details',$data);
    }
    




    public function insert_cost_details_info($data){
        $this->db->insert('account_cost_details',$data);
    }
    


    public function select_all_income_category_info(){
        $this->db->select('*');
        $this->db->from('account_income_category');
        $this->db->order_by('income_category_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }



    public function select_all_cost_category_info(){
        $this->db->select('*');
        $this->db->from('account_cost_category');
        $this->db->order_by('cost_category_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    public function select_all_publish_income_category_info(){
        $this->db->select('*');
        $this->db->from('account_income_category');
        $this->db->where('income_category_is_active',1);
        $this->db->order_by('income_category_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }



    public function select_all_publish_cost_category_info(){
        $this->db->select('*');
        $this->db->from('account_cost_category');
        $this->db->where('cost_category_is_active',1);
        $this->db->order_by('cost_category_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }



    public function select_all_income_details_info(){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->order_by('income_details_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }



    public function select_all_cost_details_info(){
        $this->db->select('*');
        $this->db->from('account_cost_details');
        $this->db->order_by('cost_details_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }



    public function select_income_details_info_by_income_details_id($income_details_id){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->where('income_details_id',$income_details_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }

    
    public function deactive_income_category_by_income_category_id($income_category_id){
        $this->db->set('income_category_is_active',0);
        $this->db->where('income_category_id',$income_category_id);
        $this->db->update('account_income_category');
    }


    public function deactive_cost_category_by_cost_category_id($cost_category_id){
        $this->db->set('cost_category_is_active',0);
        $this->db->where('cost_category_id',$cost_category_id);
        $this->db->update('account_cost_category');
    }


    public function active_income_category_by_income_category_id($income_category_id){
        $this->db->set('income_category_is_active',1);
        $this->db->where('income_category_id',$income_category_id);
        $this->db->update('account_income_category');
    }



    public function active_cost_category_by_cost_category_id($cost_category_id){
        $this->db->set('cost_category_is_active',1);
        $this->db->where('cost_category_id',$cost_category_id);
        $this->db->update('account_cost_category');
    }


    public function get_income_category_name_by_income_category_id($income_category_id){
        $this->db->select('*');
        $this->db->from('account_income_category');
        $this->db->where('income_category_id',$income_category_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result->income_category_name;
    }



    public function get_cost_category_name_by_cost_category_id($cost_category_id){
        $this->db->select('*');
        $this->db->from('account_cost_category');
        $this->db->where('cost_category_id',$cost_category_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result->cost_category_name;
    }


    public function select_income_category_info_by_income_category_id($income_category_id){
        $this->db->select('*');
        $this->db->from('account_income_category');
        $this->db->where('income_category_id',$income_category_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }



    public function select_cost_category_info_by_cost_category_id($cost_category_id){
        $this->db->select('*');
        $this->db->from('account_cost_category');
        $this->db->where('cost_category_id',$cost_category_id);
        $query=$this->db->get();
        $query_result=$query->row();
        return $query_result;
    }



    public function update_income_category_info($data,$income_category_id){
        $this->db->set('income_category_name',$data['income_category_name']);
        $this->db->where('income_category_id',$income_category_id);
        $this->db->update('account_income_category');
    }



    public function update_cost_category_info($data,$cost_category_id){
        $this->db->set('cost_category_name',$data['cost_category_name']);
        $this->db->where('cost_category_id',$cost_category_id);
        $this->db->update('account_cost_category');
    }





    public function update_income_details_info($data){
        $this->db->set('income_category_id',$data['income_category_id']);
        $this->db->set('income_details_date',$data['income_details_date']);
        $this->db->set('income_category_name',$data['income_category_name']);
        $this->db->set('income_details_name',$data['income_details_name']);
        $this->db->set('income_details_original_amount',$data['income_details_original_amount']);
        $this->db->set('income_details_sell_amount',$data['income_details_sell_amount']);
        $this->db->set('income_details_added_date_time',$data['income_details_added_date_time']);
        $this->db->where('income_details_id',$data['income_details_id']);
        $this->db->update('account_income_details');
    }



    public function delete_income_details_info($income_details_id){
        $this->db->where('income_details_id',$income_details_id);
        $this->db->delete('account_income_details');
    }



    
   public function delete_costing_details_info($costing_details_id){
    $this->db->where('cost_details_id',$costing_details_id);
    $this->db->delete('account_cost_details');
}















    
    
    
}

?>