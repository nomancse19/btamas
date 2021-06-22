<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class AccountController extends CI_Controller {

	/**
	 * All Cnf Page for this controller.
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
	 * map to /index.php/welcome/<method_name>
	 * @see https://noman-it.com
	 */
	
	public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_id')){
            redirect('/');
        }
    }
	 
	public static function csrf_name(){
        $ci =&get_instance();
        $name=$ci->security->get_csrf_token_name();
        return $name;
    }


    public static function csrf_token(){
        $ci =&get_instance();
        $token=$ci->security->get_csrf_hash();
        return $token;
    }









	public function save_income_category(){

        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeCategory');
        }else{
		$data=array();
		$income_category_name					= $this->input->post('income_category_name',TRUE);
		$income_category_is_active				= $this->input->post('income_category_is_active',TRUE);
		
		$this->form_validation->set_rules('income_category_name', 'income_category_name', 'required|trim');
		$this->form_validation->set_rules('income_category_is_active', 'income_category_is_active', 'required|trim');
		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeCategory');
		}else{

			$data['income_category_name']			    = $income_category_name;
			$data['income_category_is_active']			= $income_category_is_active;
			$data['income_category_added_time']         = date("Y-m-d H:i:s");
			$data['income_category_added_user_id']      = $this->session->userdata('user_id');

             $account_data_insert=$this->accountModel->insert_income_category_info($data);
             $fdata['success_message']="Income Category Info Successfully Added";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeCategory');
        }

    }



}








	public function manage_income_category()
	{
        if(in_array("manage_income_category",$this->session->userdata('user_permission'))){
        $data['income_category_data']=$this->accountModel->select_all_income_category_info();
		$data['admin_main_content']=$this->load->view('Adminpage/Account/manage_income_category',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
	}



    public function unpublish_income_category($income_category){
        if(in_array("publish_income_category",$this->session->userdata('user_permission'))){
        $this->accountModel->deactive_income_category_by_income_category_id($income_category);
        redirect('Cholotransportowner/ManageIncomeCategory');
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }




    public function publish_income_category($income_category){
        if(in_array("publish_income_category",$this->session->userdata('user_permission'))){
        $this->accountModel->active_income_category_by_income_category_id($income_category);
        redirect('Cholotransportowner/ManageIncomeCategory');
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }




    public function edit_income_category_info($income_category_id){

        if(in_array("edit_income_category",$this->session->userdata('user_permission'))){
        $data['edit_income_category_data']=$this->accountModel->select_income_category_info_by_income_category_id($income_category_id);
        if(empty($data['edit_income_category_data'])){
            redirect('Cholotransportowner/ManageIncomeCategory');
        }else{
        $this->load->view('Adminpage/Account/edit_income_category',$data);
        }
        }else{
            redirect('Cholotransportowner/Dashboard');
        }


    }




    public function update_income_category($income_category_id){
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeCategory');
        }else{
		$data=array();
		$income_category_name					= $this->input->post('income_category_name',TRUE);
		$this->form_validation->set_rules('income_category_name', 'income_category_name', 'required|trim');

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeCategory');
		}else{

			$data['income_category_name']			    = $income_category_name;

             $update_account_data_insert=$this->accountModel->update_income_category_info($data,$income_category_id);
             $fdata['success_message']="Income Category Info Updated Successfully Added";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeCategory');
        }

    }




    }







    public function manage_income_details()
	{

        if(in_array("manage_income_details",$this->session->userdata('user_permission'))){
        $data['income_details_data']=$this->accountModel->select_all_income_details_info();
        $data['publish_income_category']=$this->accountModel->select_all_publish_income_category_info();
		$data['admin_main_content']=$this->load->view('Adminpage/Account/manage_income_details',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        

	}





    public function save_income_details(){

        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeDetails');
        }else{
		$data=array();
		$income_details_name					= $this->input->post('income_details_name',TRUE);
		$income_details_original_amount			= $this->input->post('income_details_original_amount',TRUE);
		$income_details_sell_amount				= $this->input->post('income_details_sell_amount',TRUE);
		$income_details_date				    = $this->input->post('income_details_date',TRUE);
		$income_category_id				        = $this->input->post('income_category_id',TRUE);
		
		$this->form_validation->set_rules('income_details_original_amount', 'income_details_original_amount', 'required|trim');
		$this->form_validation->set_rules('income_details_sell_amount', 'income_details_sell_amount', 'required|trim');
		$this->form_validation->set_rules('income_details_date', 'income_details_date', 'required|trim');
		$this->form_validation->set_rules('income_category_id', 'income_category_id', 'required|trim');
		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeDetails');
		}else{


         

            $income_category_name=$this->accountModel->get_income_category_name_by_income_category_id($income_category_id);

            $data['income_category_id']			            = $income_category_id;
            $data['income_category_name']			        = $income_category_name;
            $data['income_details_name']			        = $income_details_name;
            $data['income_details_original_amount']			= $income_details_original_amount;
            $data['income_details_sell_amount']			    = $income_details_sell_amount;
            $data['income_details_date']			        = $income_details_date;
			$data['income_details_added_date_time']         = $income_details_date.' '.date("H:i:s");
			$data['income_details_due_status']              = 'paid';
			$data['income_details_added_by']                = 'manual';
			$data['income_details_due_paid_status']         = 0;
			$data['income_details_is_profit']               = 1;
			$data['income_details_added_user_id']           = $this->session->userdata('user_id');

             $account_data_insert=$this->accountModel->insert_income_details_info($data);
             $fdata['success_message']="New Income Details Added Successfully";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIncomeDetails');
        }

    }



}





public function edit_income_details_info($income_details_id){
    if(in_array("edit_income_details",$this->session->userdata('user_permission'))){
    $data['publish_income_category']=$this->accountModel->select_all_publish_income_category_info();
    $data['edit_income_details_data']=$this->accountModel->select_income_details_info_by_income_details_id($income_details_id);
    if(empty($data['edit_income_details_data'])){
        redirect('Cholotransportowner/ManageIncomeDetails');
    }else{
    $this->load->view('Adminpage/Account/edit_income_details_info',$data);
    }
}else{
    redirect('Cholotransportowner/Dashboard');
}


}







public function save_update_income_details($income_details_id){

    if(empty($_POST)){
        $fdata['error_message']="Direct Access Not Allowed";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageIncomeDetails');
    }else{
    $data=array();
    $income_details_name					= $this->input->post('income_details_name',TRUE);
    $income_details_original_amount			= $this->input->post('income_details_original_amount',TRUE);
    $income_details_sell_amount				= $this->input->post('income_details_sell_amount',TRUE);
    $income_details_date				    = $this->input->post('income_details_date',TRUE);
    $income_category_id				        = $this->input->post('income_category_id',TRUE);
    
    $this->form_validation->set_rules('income_details_original_amount', 'income_details_original_amount', 'required|trim');
    $this->form_validation->set_rules('income_details_sell_amount', 'income_details_sell_amount', 'required|trim');
    $this->form_validation->set_rules('income_details_date', 'income_details_date', 'required|trim');
    $this->form_validation->set_rules('income_category_id', 'income_category_id', 'required|trim');
    if ($this->form_validation->run() == FALSE)
    {
            $fdata['error_message']="Validation Failed... Red Mark Field Required.";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageIncomeDetails');
    }else{


     

        $income_category_name=$this->accountModel->get_income_category_name_by_income_category_id($income_category_id);

        $data['income_details_id']			            = $income_details_id;
        $data['income_category_id']			            = $income_category_id;
        $data['income_category_name']			        = $income_category_name;
        $data['income_details_name']			        = $income_details_name;
        $data['income_details_original_amount']			= $income_details_original_amount;
        $data['income_details_sell_amount']			    = $income_details_sell_amount;
        $data['income_details_date']			        = $income_details_date;
        $data['income_details_added_date_time']         = $income_details_date.' '.date("H:i:s");

         $account_data_update=$this->accountModel->update_income_details_info($data);
         $fdata['success_message']="Income Details Updated Successfully";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageIncomeDetails');
    }

}



}




public function delete_income_details_info($income_details_id){
    if(in_array("delete_income_details",$this->session->userdata('user_permission'))){
    $this->accountModel->delete_income_details_info($income_details_id);
    $fdata['success_message']="Income Details Deleted Successfully";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageIncomeDetails');
    }else{
        redirect('Cholotransportowner/Dashboard');
    }

}
    









public function save_cost_category(){

    if(empty($_POST)){
        $fdata['error_message']="Direct Access Not Allowed";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageIncomeCategory');
    }else{
    $data=array();
    $cost_category_name					    = $this->input->post('cost_category_name',TRUE);
    $cost_category_is_active				= $this->input->post('cost_category_is_active',TRUE);
    
    $this->form_validation->set_rules('cost_category_name', 'cost_category_name', 'required|trim');
    $this->form_validation->set_rules('cost_category_is_active', 'cost_category_is_active', 'required|trim');
    if ($this->form_validation->run() == FALSE)
    {
            $fdata['error_message']="Validation Failed... Red Mark Field Required.";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageCostCategory');
    }else{

        $data['cost_category_name']			        = $cost_category_name;
        $data['cost_category_is_active']			= $cost_category_is_active;
        $data['cost_category_added_time']           = date("Y-m-d H:i:s");
        $data['cost_category_added_user_id']        = $this->session->userdata('user_id');

         $account_data_insert=$this->accountModel->insert_cost_category_info($data);
         $fdata['success_message']="Cost Category Info Successfully Added";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageCostCategory');
    }

}



}








public function manage_cost_category()
{
    if(in_array("manage_costing_category",$this->session->userdata('user_permission'))){
    $data['cost_category_data']=$this->accountModel->select_all_cost_category_info();
    $data['admin_main_content']=$this->load->view('Adminpage/Account/manage_cost_category',$data,TRUE);
    $this->load->view("Adminpage/admin_master",$data);
    }else{
        redirect('Cholotransportowner/Dashboard');
    }


}



public function unpublish_cost_category($cost_category){
    if(in_array("publish_costing_category",$this->session->userdata('user_permission'))){
    $this->accountModel->deactive_cost_category_by_cost_category_id($cost_category);
    redirect('Cholotransportowner/ManageCostCategory');
    }else{
        redirect('Cholotransportowner/Dashboard');
    }

}




public function publish_cost_category($cost_category){
    if(in_array("publish_costing_category",$this->session->userdata('user_permission'))){
    $this->accountModel->active_cost_category_by_cost_category_id($cost_category);
    redirect('Cholotransportowner/ManageCostCategory');
    }else{
        redirect('Cholotransportowner/Dashboard');
    }
}






public function edit_cost_category_info($cost_category_id){
    if(in_array("edit_costing_category",$this->session->userdata('user_permission'))){
    $data['edit_cost_category_data']=$this->accountModel->select_cost_category_info_by_cost_category_id($cost_category_id);
    if(empty($data['edit_cost_category_data'])){
        redirect('Cholotransportowner/ManageCostCategory');
    }else{
    $this->load->view('Adminpage/Account/edit_cost_category',$data);
    }
    }else{
        redirect('Cholotransportowner/Dashboard');
    }


}




public function update_cost_category($cost_category_id){
    if(empty($_POST)){
        $fdata['error_message']="Direct Access Not Allowed";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageCostCategory');
    }else{
    $data=array();
    $cost_category_name					= $this->input->post('cost_category_name',TRUE);
    $this->form_validation->set_rules('cost_category_name', 'cost_category_name', 'required|trim');
    if ($this->form_validation->run() == FALSE)
    {
            $fdata['error_message']="Validation Failed... Red Mark Field Required.";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageCostCategory');
    }else{
        $data['cost_category_name']			    = $cost_category_name;
         $update_account_data_insert=$this->accountModel->update_cost_category_info($data,$cost_category_id);
         $fdata['success_message']="Cost Category Info Updated Successfully";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageCostCategory');
    }

}




}








    

public function manage_cost_details()
{
    if(in_array("manage_costing_details",$this->session->userdata('user_permission'))){
    $data['cost_details_data']          = $this->accountModel->select_all_cost_details_info();
    $data['publish_cost_category']      = $this->accountModel->select_all_publish_cost_category_info();
    $data['admin_main_content']         = $this->load->view('Adminpage/Account/manage_cost_details',$data,TRUE);
    $this->load->view("Adminpage/admin_master",$data);
    }else{
        redirect('Cholotransportowner/Dashboard');
    }

}





public function save_cost_details(){

    if(empty($_POST)){
        $fdata['error_message']="Direct Access Not Allowed";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageCostDetails');
    }else{
    $data=array();
    $cost_details_name					= $this->input->post('cost_details_name',TRUE);
    $cost_details_amount			    = $this->input->post('cost_details_amount',TRUE);
    $cost_details_date				    = $this->input->post('cost_details_date',TRUE);
    $cost_category_id				    = $this->input->post('cost_category_id',TRUE);
    
    $this->form_validation->set_rules('cost_details_amount', 'cost_details_amount', 'required|trim');
    $this->form_validation->set_rules('cost_details_date', 'cost_details_date', 'required|trim');
    $this->form_validation->set_rules('cost_category_id', 'cost_category_id', 'required|trim');
    if ($this->form_validation->run() == FALSE)
    {
            $fdata['error_message']="Validation Failed... Red Mark Field Required.";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageCostDetails');
    }else{


     

        $cost_category_name=$this->accountModel->get_cost_category_name_by_cost_category_id($cost_category_id);

        $data['cost_category_id']			            = $cost_category_id;
        $data['cost_category_name']			            = $cost_category_name;
        $data['cost_details_name']			            = $cost_details_name;
        $data['cost_details_amount']			        = $cost_details_amount;

        $data['cost_details_date']			            = $cost_details_date;
        $data['cost_details_added_date_time']           = $cost_details_date.' '.date("H:i:s");
        $data['cost_details_added_user_id']             = $this->session->userdata('user_id');

         $account_data_insert                           = $this->accountModel->insert_cost_details_info($data);
         $fdata['success_message']="New Costing Details Added Successfully";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageCostDetails');
    }

}



}





public function edit_cost_details_info($cost_details_id){
    if(in_array("edit_costing_details",$this->session->userdata('user_permission'))){
$data['publish_cost_category']=$this->accountModel->select_all_publish_income_category_info();
$data['edit_cost_details_data']=$this->accountModel->select_income_details_info_by_income_details_id($cost_details_id);
if(empty($data['edit_cost_details_data'])){
    redirect('Cholotransportowner/ManageCostDetails');
}else{
$this->load->view('Adminpage/Account/edit_cost_details_info',$data);
}
    }else{
        redirect('Cholotransportowner/Dashboard');
    }


}








public function save_update_cost_details($income_details_id){

if(empty($_POST)){
    $fdata['error_message']="Direct Access Not Allowed";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageIncomeDetails');
}else{
$data=array();
$income_details_name					= $this->input->post('income_details_name',TRUE);
$income_details_original_amount			= $this->input->post('income_details_original_amount',TRUE);
$income_details_sell_amount				= $this->input->post('income_details_sell_amount',TRUE);
$income_details_date				    = $this->input->post('income_details_date',TRUE);
$income_category_id				        = $this->input->post('income_category_id',TRUE);

$this->form_validation->set_rules('income_details_original_amount', 'income_details_original_amount', 'required|trim');
$this->form_validation->set_rules('income_details_sell_amount', 'income_details_sell_amount', 'required|trim');
$this->form_validation->set_rules('income_details_date', 'income_details_date', 'required|trim');
$this->form_validation->set_rules('income_category_id', 'income_category_id', 'required|trim');
if ($this->form_validation->run() == FALSE)
{
        $fdata['error_message']="Validation Failed... Red Mark Field Required.";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageIncomeDetails');
}else{


 

    $income_category_name=$this->accountModel->get_income_category_name_by_income_category_id($income_category_id);

    $data['income_details_id']			            = $income_details_id;
    $data['income_category_id']			            = $income_category_id;
    $data['income_category_name']			        = $income_category_name;
    $data['income_details_name']			        = $income_details_name;
    $data['income_details_original_amount']			= $income_details_original_amount;
    $data['income_details_sell_amount']			    = $income_details_sell_amount;
    $data['income_details_date']			        = $income_details_date;
    $data['income_details_added_date_time']         = $income_details_date.' '.date("H:i:s");

     $account_data_update=$this->accountModel->update_income_details_info($data);
     $fdata['success_message']="Income Details Updated Successfully";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageIncomeDetails');
}

}



}




public function delete_cost_details_info($costing_details_id){
    if(in_array("delete_costing_details",$this->session->userdata('user_permission'))){
$this->accountModel->delete_costing_details_info($costing_details_id);
$fdata['success_message']="Costing Details Deleted Successfully";
$this->session->set_flashdata($fdata);
redirect('Cholotransportowner/ManageCostDetails');
    }else{
        redirect('Cholotransportowner/Dashboard');
    }

}

































}
