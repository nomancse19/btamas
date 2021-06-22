<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReportModel extends CI_Model{
    


    public function get_combine_result(){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $query=$this->db->get();
        $query_result1=$query->result();

        $this->db->select('*');
        $this->db->from('account_cost_details');
        $query2=$this->db->get();
        $query_result2=$query2->result();
        $data = array_merge($query_result1, $query_result2);
        return $data;
        
    }



    public function income_list_by_daily_transaction(){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',0);
        $this->db->where('income_details_date',date('Y-m-d'));
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }


    public function income_list_by_daily_transaction_by_date($start_date,$end_date){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',0);
        $this->db->where('income_details_added_date_time>=',$start_date);
        $this->db->where('income_details_added_date_time<=',$end_date);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }



    public function all_profit_calculate_by_date($start_date,$end_date){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->where('income_details_is_profit',1);
        $this->db->where('income_details_added_date_time>=',$start_date);
        $this->db->where('income_details_added_date_time<=',$end_date);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    


    public function all_income_list_all_income_report_by_date($start_date,$end_date){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->where('income_details_added_date_time>=',$start_date);
        $this->db->where('income_details_added_date_time<=',$end_date);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }



    public function all_cost_list_all_cost_report_by_date($start_date,$end_date){
        $this->db->select('*');
        $this->db->from('account_cost_details');
        $this->db->where('cost_details_added_date_time>=',$start_date);
        $this->db->where('cost_details_added_date_time<=',$end_date);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }



    public function due_income_list_by_due_income_report_by_date($start_date,$end_date){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_payment_status',0);
        $this->db->where('chalan_created_date>=',$start_date);
        $this->db->where('chalan_created_date<=',$end_date);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }









    public function sum_of_total_sell_amount_of_income_list_daily_transcaction(){
        $this->db->select_sum('income_details_sell_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',0);
        $this->db->where('income_details_date',date('Y-m-d'));
        $query=$this->db->get();
        $result=$query->row();
        return $result->income_details_sell_amount;
    }



    public function sum_of_total_sell_amount_of_income_list_daily_transcaction_by_date($start_date,$end_date){
        $this->db->select_sum('income_details_sell_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',0);
        $this->db->where('income_details_added_date_time>=',$start_date);
        $this->db->where('income_details_added_date_time<=',$end_date);
        $query=$this->db->get();
        $result=$query->row();
        return $result->income_details_sell_amount;
    }






    public function sum_of_total_due_amount_of_income_list_daily_transcaction(){
        $this->db->select_sum('income_details_due_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',0);
        $this->db->where('income_details_date',date('Y-m-d'));
        $query=$this->db->get();
        $result=$query->row();
        return $result->income_details_due_amount;
    }



    public function sum_of_total_due_amount_of_income_list_daily_transcaction_by_date($start_date,$end_date){
        $this->db->select_sum('income_details_due_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',0);
        $this->db->where('income_details_added_date_time>=',$start_date);
        $this->db->where('income_details_added_date_time<=',$end_date);
        $query=$this->db->get();
        $result=$query->row();
        return $result->income_details_due_amount;
    }





    public function sum_of_total_old_due_amount_of_income_list_daily_transcaction(){
        $this->db->select_sum('income_details_due_paid_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',1);
        $this->db->where('income_details_date',date('Y-m-d'));
       $query=$this->db->get();
       $result=$query->row();
       return $result->income_details_due_paid_amount;
    }




    public function sum_of_total_old_due_amount_of_income_list_daily_transcaction_by_date($start_date,$end_date){
        $this->db->select_sum('income_details_due_paid_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',1);
        $this->db->where('income_details_added_date_time>=',$start_date);
        $this->db->where('income_details_added_date_time<=',$end_date);
       $query=$this->db->get();
       $result=$query->row();
       return $result->income_details_due_paid_amount;
    }





    public function old_due_received_income_list_by_daily_transaction(){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',1);
       $this->db->where('income_details_date',date('Y-m-d'));
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }




    public function old_due_received_income_list_by_daily_transaction_by_date($start_date,$end_date){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',1);
        $this->db->where('income_details_added_date_time>=',$start_date);
        $this->db->where('income_details_added_date_time<=',$end_date);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }




    
    public function costing_list_by_daily_transaction(){
        $this->db->select('*');
        $this->db->from('account_cost_details');
        $this->db->where('cost_details_date',date('Y-m-d'));
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }
    
    public function costing_list_by_daily_transaction_by_date($start_date,$end_date){
        $this->db->select('*');
        $this->db->from('account_cost_details');
        $this->db->where('cost_details_added_date_time>=',$start_date);
        $this->db->where('cost_details_added_date_time<=',$end_date);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }



    

    public function sum_of_total_cost_details_amount_of_costing_list_daily_transcaction(){
        $this->db->select_sum('cost_details_amount');
        $this->db->from('account_cost_details');
        $this->db->where('cost_details_date',date('Y-m-d'));
       $query=$this->db->get();
       $result=$query->row();
       return $result->cost_details_amount;
    }



    public function sum_of_total_cost_details_amount_of_costing_list_daily_transcaction_by_date($start_date,$end_date){
        $this->db->select_sum('cost_details_amount');
        $this->db->from('account_cost_details');
        $this->db->where('cost_details_added_date_time>=',$start_date);
        $this->db->where('cost_details_added_date_time<=',$end_date);
       $query=$this->db->get();
       $result=$query->row();
       return $result->cost_details_amount;
    }




    public function total_on_the_way_chalan(){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',1);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;
    }

    public function total_of_colmplete_chalan(){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',2);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;
    }


    public function total_of_cancel_chalan(){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',3);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;
    }




    public function sum_of_total_today_income(){
        $this->db->select_sum('income_details_sell_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_date',date('Y-m-d'));
        $query=$this->db->get();
        $result=$query->row();
        $sell_amount= $result->income_details_sell_amount;

        $this->db->select_sum('income_details_due_paid_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_date',date('Y-m-d'));
        $query=$this->db->get();
        $result=$query->row();
        $due_paid_amount= $result->income_details_due_paid_amount;

        return $sell_amount+$due_paid_amount;

    }



    public function sum_of_total_today_pending_income(){
        $this->db->select_sum('chalan_vehicles_rent_due_amount');
        $this->db->from('chalan_info');
        $this->db->where('chalan_payment_status',0);
        $query=$this->db->get();
        $result=$query->row();
        if($result->chalan_vehicles_rent_due_amount){
            return $result->chalan_vehicles_rent_due_amount;
        }
        else{
            return 0;
        }

    
         

    }


//Monthly Transaction Report Model Start Here....



    public function select_all_income_category_date_wise_sell_data($income_category_id,$date){
        $this->db->select_sum('income_details_sell_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',0);
        $this->db->where('income_category_id',$income_category_id);
        $this->db->where('income_details_date',$date);
        $query=$this->db->get();
        $result=$query->row();
        return $result->income_details_sell_amount;
    }


    public function select_all_income_category_date_wise_due_data($income_category_id,$date){
        $this->db->select_sum('income_details_due_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',0);
        $this->db->where('income_category_id',$income_category_id);
        $this->db->where('income_details_date',$date);
        $query=$this->db->get();
        $result=$query->row();
        return $result->income_details_due_amount;
    }




    public function select_all_cost_category_date_wise_amount_data($cost_category_id,$date){
        $this->db->select_sum('cost_details_amount');
        $this->db->from('account_cost_details');
        $this->db->where('cost_details_id',$cost_category_id);
        $this->db->where('cost_details_date',$date);
        $query=$this->db->get();
        $result=$query->row();
        return $result->cost_details_amount;
    }




    public function all_publish_income_category_list(){
        $this->db->select('*');
        $this->db->from('account_income_category');
        $query=$this->db->get();
        return $result=$query->result();
    }


    public function all_publish_cost_category_list(){
        $this->db->select('*');
        $this->db->from('account_cost_category');
        $this->db->where('cost_category_is_active',1);
        $query=$this->db->get();
        return $result=$query->result();
    }



    public function all_publish_income_category(){
        $this->db->select('*');
        $this->db->from('account_income_category');
        $this->db->where('income_category_is_active',1);
        $query=$this->db->get();
        return $result=$query->result();
    }




    public function all_cost_report_by_costing_category_by_date($start_date,$end_date,$costing_category_id){
        $this->db->select('*');
        $this->db->from('account_cost_details');
        $this->db->where('cost_details_added_date_time>=',$start_date);
        $this->db->where('cost_details_added_date_time<=',$end_date);
        $this->db->where('cost_category_id',$costing_category_id);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }



    public function all_income_report_by_income_category_id_by_date($start_date,$end_date,$income_category_id){
        $this->db->select('*');
        $this->db->from('account_income_details');
        $this->db->where('income_details_added_date_time>=',$start_date);
        $this->db->where('income_details_added_date_time<=',$end_date);
        $this->db->where('income_category_id',$income_category_id);
        $query=$this->db->get();
        $result=$query->result();
        return $result;
    }






    public function costing_category_name_by_id($costing_category_id){
        $this->db->select('*');
        $this->db->from('account_cost_category');
        $this->db->where('cost_category_id',$costing_category_id);
        $query=$this->db->get();
        return $result=$query->row()->cost_category_name;
    }



    public function income_category_name_by_id($income_category_id){
        $this->db->select('*');
        $this->db->from('account_income_category');
        $this->db->where('income_category_id',$income_category_id);
        $query=$this->db->get();
        return $result=$query->row()->income_category_name;
    }



    



    public function select_all_old_due_received_sum_by_date($date){
        $this->db->select_sum('income_details_due_paid_amount');
        $this->db->from('account_income_details');
        $this->db->where('income_details_due_paid_status',1);
        $this->db->where('income_details_date',$date);
        $query=$this->db->get();
        $result=$query->row();
        return $result->income_details_due_paid_amount;
    }

    

    //Monthly Transaction Report Model End Here....









    
    
}

?>