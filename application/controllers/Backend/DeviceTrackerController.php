<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class DeviceTrackerController extends CI_Controller {

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



    private function send_customer_sms($date,$customer_number){
        $token = "14732954-55ae-4704-b0cd-381395a1ffa1";
        $url = "https://smsplus.sslwireless.com/api/v3/send-sms";
        $msg='প্রিয় গ্রাহক,আপনার 
যানবাহনে জিপিএস ট্র্যাকার সেট-আপের তারিখ: '.$date.'  নির্ধারণ করা হয়েছে।
ধন্যবাদন্তরে ,
চলো ট্রান্সপোর্ট বিডি
হটলাইন: ০১৮৮৮০৫২৯৯৯';
        $data= array(
        'api_token'=>$token,
        'msisdn'=>$customer_number,
        'sid'=>"Chologroupmask",
        'sms'=>$msg,
        'csms_id'=>rand(),
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = json_decode(curl_exec($ch));
        return $smsresult->status.$smsresult->error_message;
        
    }


    private function send_install_man_sms($man_name,$man_number,$date,$address,$customer_number,$vehicles_model){
        $token = "14732954-55ae-4704-b0cd-381395a1ffa1";
        $url = "https://smsplus.sslwireless.com/api/v3/send-sms";
        $msg='প্রিয়, '.$man_name.'
আপনার নতুন কাজের তারিখ: '.$date.', 
স্থান: '.$address.'  গ্রাহকের নাম্বার: '.$customer_number.' গাড়ির মডেল: '.$vehicles_model.'';
        $data= array(
        'api_token'=>$token,
        'msisdn'=>$man_number,
        'sid'=>"Chologroupmask",
        'sms'=>$msg,
        'csms_id'=>rand(),
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = json_decode(curl_exec($ch));
        return $smsresult->status.$smsresult->error_message;
        
    }



    public function all_device_schedule_request(){
        $data['all_device_request']=$this->deviceTrackerListModel->all_device_tracker_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Device_tracker/all_device_tracker_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }


    public function save_device_schedule_request(){
            
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AllDeviceScheduleRequest');
        }else{
		$data=array();
		$customer_name					    = $this->input->post('customer_name',TRUE);
		$customer_sms					    = $this->input->post('customer_sms',TRUE);
		$install_man_sms				    = $this->input->post('install_man_sms',TRUE);
		$customer_mobile_number				= $this->input->post('customer_mobile_number',TRUE);
		$customer_address					= $this->input->post('customer_address',TRUE);
		$tracker_device_model				= $this->input->post('tracker_device_model',TRUE);
		$vehicles_model				        = $this->input->post('vehicles_model',TRUE);
		$device_install_date_time			= $this->input->post('device_install_date_time',TRUE);
		$device_install_man_name			= $this->input->post('device_install_man_name',TRUE);
		$device_install_man_number			= $this->input->post('device_install_man_number',TRUE);
		$device_install_status				= $this->input->post('device_install_status',TRUE);
	
		
		$this->form_validation->set_rules('customer_name', 'customer_name', 'required|trim');
		$this->form_validation->set_rules('customer_mobile_number', 'customer_mobile_number', 'required|trim');
		$this->form_validation->set_rules('device_install_date_time', 'device_install_date_time', 'required|trim');
		$this->form_validation->set_rules('device_install_man_name', 'device_install_man_name', 'required|trim');
		$this->form_validation->set_rules('device_install_man_number', 'device_install_man_number', 'required|trim');
		$this->form_validation->set_rules('device_install_status', 'device_install_status', 'required|trim');
		

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AllDeviceScheduleRequest');
		}else{


            if($device_install_status==2){
                $device_original_price			 = $this->input->post('device_original_price',TRUE);
                $device_sell_price				 = $this->input->post('device_sell_price',TRUE);
                if($device_original_price==''|| $device_sell_price==''){
                    $fdata['error_message']="Validation Failed...Device Original Or Sell Amount Field Required.";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/AllDeviceScheduleRequest');
                    exit();
                }else{
                    $income_data=array();
                    $income_data['income_category_id']              = 1;
                    $income_data['income_category_name']            = 'Tracker Device Sell A/C';
                    $income_data['income_details_name']             = $customer_name;
                    $income_data['income_details_name_number']      = $customer_mobile_number;
                    $income_data['income_details_original_amount']  = $device_original_price;
                    $income_data['income_details_sell_amount']      = $device_sell_price;
                    $income_data['income_details_due_paid_status']  = 0;
                    $income_data['income_details_is_profit']        = 1;
                    $income_data['income_details_due_status']       = 'paid';
                    $income_data['income_details_added_user_id']    = $this->session->userdata('user_id');
                    $income_data['income_details_added_date_time']  = date("Y-m-d H:i:s");
                    $income_data['income_details_date']             = date("Y-m-d");
                    $this->deviceTrackerListModel->save_tracker_details_data_in_account($income_data);
                }
             }


            if($customer_sms=='yes'){
               $this->send_customer_sms($device_install_date_time,$customer_mobile_number);
            }

            if($install_man_sms=='yes'){
                $this->send_install_man_sms($device_install_man_name,$device_install_man_number,$device_install_date_time,$customer_address,$customer_mobile_number,$vehicles_model);
            }


            $data['customer_name']              = $customer_name;
            $data['customer_mobile_number']     = $customer_mobile_number;
            $data['customer_address']           = $customer_address;
            $data['tracker_device_model']       = $tracker_device_model;
            $data['vehicles_model']             = $vehicles_model;
            $data['device_install_date_time']   = $device_install_date_time;
            $data['device_install_man_name']    = $device_install_man_name;
            $data['device_install_man_number']  = $device_install_man_number;
            $data['device_install_status']      = $device_install_status;
            $data['device_added_date_time']     = date("Y-m-d H:i:s");
           
             $data_insert=$this->deviceTrackerListModel->insert_device_tracker_info($data);
             $fdata['success_message']="Device Tracker Schedule Successfully Added";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AllDeviceScheduleRequest');
        }


    }
    }





    public function update_device_schedule_request($vehicles_device_tracker_id){
            
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AllDeviceScheduleRequest');
        }else{
		$data=array();
		$customer_name					    = $this->input->post('customer_name',TRUE);
		$customer_sms					    = $this->input->post('customer_sms',TRUE);
		$install_man_sms					= $this->input->post('install_man_sms',TRUE);
		$customer_mobile_number				= $this->input->post('customer_mobile_number',TRUE);
		$customer_address					= $this->input->post('customer_address',TRUE);
		$tracker_device_model				= $this->input->post('tracker_device_model',TRUE);
		$vehicles_model				        = $this->input->post('vehicles_model',TRUE);
		$device_install_date_time			= $this->input->post('device_install_date_time',TRUE);
		$device_install_man_name			= $this->input->post('device_install_man_name',TRUE);
		$device_install_man_number			= $this->input->post('device_install_man_number',TRUE);
		$device_install_status				= $this->input->post('device_install_status',TRUE);
	
		
		$this->form_validation->set_rules('customer_name', 'customer_name', 'required|trim');
		$this->form_validation->set_rules('customer_mobile_number', 'customer_mobile_number', 'required|trim');
		$this->form_validation->set_rules('device_install_date_time', 'device_install_date_time', 'required|trim');
		$this->form_validation->set_rules('device_install_man_name', 'device_install_man_name', 'required|trim');
		$this->form_validation->set_rules('device_install_man_number', 'device_install_man_number', 'required|trim');
		$this->form_validation->set_rules('device_install_status', 'device_install_status', 'required|trim');
		

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AllDeviceScheduleRequest');
		}else{

            if($device_install_status==2){
                $device_original_price			 = $this->input->post('device_original_price',TRUE);
                $device_sell_price				 = $this->input->post('device_sell_price',TRUE);
                if($device_original_price==''|| $device_sell_price==''){
                    $fdata['error_message']="Validation Failed...Device Original Or Sell Amount Field Required.";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/AllDeviceScheduleRequest');
                    exit();
                }else{
                    $income_data=array();
                    $income_data['income_category_id']              = 1;
                    $income_data['income_category_name']            = 'Tracker Device Sell A/C';
                    $income_data['income_details_name']             = $customer_name;
                    $income_data['income_details_name_number']      = $customer_mobile_number;
                    $income_data['income_details_original_amount']  = $device_original_price;
                    $income_data['income_details_sell_amount']      = $device_sell_price;
                    $income_data['income_details_due_paid_status']  = 0;
                    $income_data['income_details_is_profit']        = 1;
                    $income_data['income_details_due_status']       = 'paid';
                    $income_data['income_details_added_user_id']    = $this->session->userdata('user_id');
                    $income_data['income_details_added_date_time']  = date("Y-m-d H:i:s");
                    $income_data['income_details_date']             = date("Y-m-d");
                    $this->deviceTrackerListModel->save_tracker_details_data_in_account($income_data);
                }
             }


            if($customer_sms=='yes'){
                $this->send_customer_sms($device_install_date_time,$customer_mobile_number);
             }
 
             if($install_man_sms=='yes'){
                 $this->send_install_man_sms($device_install_man_name,$device_install_man_number,$device_install_date_time,$customer_address,$customer_mobile_number,$vehicles_model);
             }

            


            $data['customer_name']              = $customer_name;
            $data['customer_mobile_number']     = $customer_mobile_number;
            $data['customer_address']           = $customer_address;
            $data['tracker_device_model']       = $tracker_device_model;
            $data['vehicles_model']             = $vehicles_model;
            $data['device_install_date_time']   = $device_install_date_time;
            $data['device_install_man_name']    = $device_install_man_name;
            $data['device_install_man_number']  = $device_install_man_number;
            $data['device_install_status']      = $device_install_status;
           
             $update_data_insert=$this->deviceTrackerListModel->update_device_tracker_info($data,$vehicles_device_tracker_id);
             $fdata['success_message']="Device Tracker Schedule Successfully Updated";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AllDeviceScheduleRequest');
        }


    }
    }

    

    public function all_pending_vehicles_request(){
        $data['all_vehicles_request']=$this->deviceTrackerListModel->all_pending_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_pending_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }




    public function all_processing_vehicles_request(){
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_processing_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_processing_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }

    public function all_accepted_vehicles_request(){
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_accepted_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_accepted_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }

    public function all_completed_vehicles_request(){
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_completed_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_completed_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }

    public function all_cancel_vehicles_request(){
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_cancel_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_cancel_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }





    public function change_device_tracker_request_status($vehicles_device_tracker_id){
        if(in_array("device_tracking_scheduling_status",$this->session->userdata('user_permission'))){
        $data['device_tracker_request_data']=$this->deviceTrackerListModel->all_vehicles_tracker_request_by_id($vehicles_device_tracker_id);
        $this->load->view('Adminpage/Device_tracker/change_device_tracker_request_status',$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
    }




    public function update_vehicles_request_status($vehicles_request_id){
        $vehicles_request_id=trim(intval($vehicles_request_id));
        $vehicles_request_status=trim($this->input->post('vehicles_request_status',true));
        $update_request_status=$this->vehiclesRequestModel->update_vehicles_request_status($vehicles_request_id,$vehicles_request_status);
    }




    











}
