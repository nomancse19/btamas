<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class ReportController extends CI_Controller {

	/**
	 * All Home Page for this controller.
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



    public function manage_all_report(){
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/manage_all_report','',TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }




    public function get_result(){
       $result= $this->reportModel->get_combine_result();
       echo "<pre>";
        print_r($result);
        echo "<pre>";
    }





    public function today_transaction_report(){
        $data['total_sell_income_data']=$this->reportModel->sum_of_total_sell_amount_of_income_list_daily_transcaction();
        $data['total_due_income_data']=$this->reportModel->sum_of_total_due_amount_of_income_list_daily_transcaction();
        $data['total_old_rec_due_income_data']=$this->reportModel->sum_of_total_old_due_amount_of_income_list_daily_transcaction();

        $data['total_cost_details_amount']=$this->reportModel->sum_of_total_cost_details_amount_of_costing_list_daily_transcaction();

        $data['income_data']= $this->reportModel->income_list_by_daily_transaction();
        $data['costing_data']= $this->reportModel->costing_list_by_daily_transaction();
        $data['old_due_income_data']= $this->reportModel->old_due_received_income_list_by_daily_transaction();
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/today_transaction_report',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }





    public function daily_transaction_report(){
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/daily_transaction_report','',TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }





    public function get_daily_transaction_report(){
        $report_start_date= trim($this->input->get('report_start_date',true));
        $report_end_date= trim($this->input->get('report_end_date',true));
        if($report_start_date=='' || $report_end_date==''){
        $fdata['error_message']="Please Select Start Date And End Date..";
        $this->session->set_flashdata($fdata);
        redirect('CholoshopOwner/DailyTransactionReport');

        }else{

        $data['start_date']= $report_start_date;
        $data['end_date']=  $report_end_date;

        $data['total_sell_income_data']=$this->reportModel->sum_of_total_sell_amount_of_income_list_daily_transcaction_by_date($report_start_date,$report_end_date);
        $data['total_due_income_data']=$this->reportModel->sum_of_total_due_amount_of_income_list_daily_transcaction_by_date($report_start_date,$report_end_date);
        $data['total_old_rec_due_income_data']=$this->reportModel->sum_of_total_old_due_amount_of_income_list_daily_transcaction_by_date($report_start_date,$report_end_date);
        $data['total_cost_details_amount']=$this->reportModel->sum_of_total_cost_details_amount_of_costing_list_daily_transcaction_by_date($report_start_date,$report_end_date);
        $data['income_data']= $this->reportModel->income_list_by_daily_transaction_by_date($report_start_date,$report_end_date);
        $data['costing_data']= $this->reportModel->costing_list_by_daily_transaction_by_date($report_start_date,$report_end_date);
        $data['old_due_income_data']= $this->reportModel->old_due_received_income_list_by_daily_transaction_by_date($report_start_date,$report_end_date);
        


        $data['admin_main_content']=$this->load->view('Adminpage/All_report/daily_transaction_report',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

        }

    }





    
    public function due_income_report(){
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/due_income_report','',TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }





    public function get_due_income_report(){
        $report_start_date= trim($this->input->get('report_start_date',true));
        $report_end_date= trim($this->input->get('report_end_date',true));
        if($report_start_date=='' || $report_end_date==''){
        $fdata['error_message']="Please Select Start Date And End Date..";
        $this->session->set_flashdata($fdata);
        redirect('CholoshopOwner/DueIncomeReport');

        }else{

        $data['start_date']= $report_start_date;
        $data['end_date']=  $report_end_date;
        $data['due_income_data']= $this->reportModel->due_income_list_by_due_income_report_by_date($report_start_date,$report_end_date);
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/due_income_report',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

        }

    }





    public function all_income_report(){
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/all_income_report','',TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }



    public function all_income_report_by_income_category(){
        $data['all_publish_income_category']=$this->reportModel->all_publish_income_category();
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/income_report_by_income_category',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }





    public function get_all_income_report_by_income_category(){
        $report_start_date= trim($this->input->get('report_start_date',true));
        $report_end_date= trim($this->input->get('report_end_date',true));
        $income_category_id= trim($this->input->get('income_category_id',true));
        if($report_start_date=='' || $report_end_date=='' || $income_category_id==''){
        $fdata['error_message']="Please Select Start Date And End Date..";
        $this->session->set_flashdata($fdata);
        redirect('CholoshopOwner/CategoryWiseIncomeReport');

        }else{

        $data['start_date']= $report_start_date;
        $data['end_date']=  $report_end_date;
        $data['income_category_id']=  $income_category_id;
        $data['all_publish_income_category']=$this->reportModel->all_publish_income_category();
        $data['income_category_name']=  $this->reportModel->income_category_name_by_id($income_category_id);
        $data['all_income_data']= $this->reportModel->all_income_report_by_income_category_id_by_date($report_start_date,$report_end_date,$income_category_id);
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/income_report_by_income_category',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

        }

    }



    public function get_all_income_report(){
        $report_start_date= trim($this->input->get('report_start_date',true));
        $report_end_date= trim($this->input->get('report_end_date',true));
        if($report_start_date=='' || $report_end_date==''){
        $fdata['error_message']="Please Select Start Date And End Date..";
        $this->session->set_flashdata($fdata);
        redirect('CholoshopOwner/AllIncomeReport');

        }else{

        $data['start_date']= $report_start_date;
        $data['end_date']=  $report_end_date;
        $data['all_income_data']= $this->reportModel->all_income_list_all_income_report_by_date($report_start_date,$report_end_date);
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/all_income_report',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

        }

    }





    public function all_cost_report(){
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/all_cost_report','',TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }





    public function all_cost_report_by_cost_category(){
        $data['all_publish_costing_category']= $this->reportModel->all_publish_cost_category_list();
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/cost_report_by_cost_category',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }







    public function get_all_cost_report(){
        $report_start_date= trim($this->input->get('report_start_date',true));
        $report_end_date= trim($this->input->get('report_end_date',true));
        if($report_start_date=='' || $report_end_date==''){
        $fdata['error_message']="Please Select Start Date And End Date..";
        $this->session->set_flashdata($fdata);
        redirect('CholoshopOwner/AllCostReport');
        }else{
        $data['start_date']= $report_start_date;
        $data['end_date']=  $report_end_date;
        $data['all_cost_data']= $this->reportModel->all_cost_list_all_cost_report_by_date($report_start_date,$report_end_date);
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/all_cost_report',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        }
    }






    public function get_all_cost_report_by_costing_category(){
        $report_start_date      = trim($this->input->get('report_start_date',true));
        $report_end_date        = trim($this->input->get('report_end_date',true));
        $costing_category_id    = trim($this->input->get('costing_category_id',true));
        if($report_start_date=='' || $report_end_date=='' || $costing_category_id==''){
        $fdata['error_message']="Please Select Start Date And End Date..";
        $this->session->set_flashdata($fdata);
        redirect('CholoshopOwner/CategoryWiseCostingReport');
        }else{
        $data['start_date']             = $report_start_date;
        $data['end_date']               = $report_end_date;
        $data['costing_category_id']    = $costing_category_id;
        $data['costing_category_name']  = $this->reportModel->costing_category_name_by_id($costing_category_id);
        $data['all_publish_costing_category']= $this->reportModel->all_publish_cost_category_list();
        $data['all_cost_data']          = $this->reportModel->all_cost_report_by_costing_category_by_date($report_start_date,$report_end_date,$costing_category_id);
        $data['admin_main_content']     = $this->load->view('Adminpage/All_report/cost_report_by_cost_category',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        }
    }






    public function all_profit_report(){
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/all_profit_report','',TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }

    

    public function get_all_profit_report(){
        $report_start_date= trim($this->input->get('report_start_date',true));
        $report_end_date= trim($this->input->get('report_end_date',true));
        if($report_start_date=='' || $report_end_date==''){
        $fdata['error_message']="Please Select Start Date And End Date..";
        $this->session->set_flashdata($fdata);
        redirect('CholoshopOwner/AllCostReport');
        }else{
        $data['start_date']= $report_start_date;
        $data['end_date']=  $report_end_date;
        $data['all_profit_data']= $this->reportModel->all_profit_calculate_by_date($report_start_date,$report_end_date);
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/all_profit_report',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        }
    }




    public function monthly_transaction_report(){
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/monthly_transaction_report','',TRUE);
        $this->load->view('Adminpage/admin_master',$data);
    }





    public function get_monthly_transaction_report(){
        $report_start_date= trim($this->input->get('report_start_date',true));
        $report_end_date= trim($this->input->get('report_end_date',true));
        if($report_start_date=='' || $report_end_date==''){
        $fdata['error_message']="Please Select Start Date And End Date..";
        $this->session->set_flashdata($fdata);
        redirect('CholoshopOwner/MonthlyTransactionReport');

        }else{

        $data['start_date']= $report_start_date;
        $data['end_date']=  $report_end_date;
        $data['income_category_list']=$this->reportModel->all_publish_income_category_list();
        $data['cost_category_list']=$this->reportModel->all_publish_cost_category_list();
        $data['admin_main_content']=$this->load->view('Adminpage/All_report/monthly_transaction_report',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        }
    }


























}
