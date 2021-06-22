<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class GpsUserController extends CI_Controller {

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


    private function send_sms($sms_number,$msg){
        $token = "14732954-55ae-4704-b0cd-381395a1ffa1";
        $url = "https://smsplus.sslwireless.com/api/v3/send-sms";
        $data= array(
        'api_token'=>$token,
        'msisdn'=>$sms_number,
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



    public function send_cnf_sms(){
        $cnf_number         = trim($this->input->post('cnf_primary_mobile_number',TRUE));
        $cnf_sms_details    = trim($this->input->post('cnf_sms_details',TRUE));
        $cnf_info_id        = trim($this->input->post('cnf_info_id',TRUE));

        $this->form_validation->set_rules('cnf_primary_mobile_number', 'cnf_primary_mobile_number', 'trim|required');
        $this->form_validation->set_rules('cnf_sms_details', 'cnf_sms_details', 'trim|required');
        $this->form_validation->set_rules('cnf_info_id', 'cnf_info_id', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ViewCnfInfo/'.$cnf_info_id);
		}else{

        $sms_send=$this->send_sms($cnf_number,$cnf_sms_details);
        if($sms_send=='SUCCESS'){
            $fdata['success_message']="SMS SuccessFully Send To Cnf User ";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewCnfInfo/'.$cnf_info_id);
        }else{
            $fdata['error_message']="SMS Sending Failed... Because ".$sms_send;
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewCnfInfo/'.$cnf_info_id);
        }

    }

    }



	public function cnf_add()
	{
        if(in_array("add_cnf",$this->session->userdata('user_permission'))){
		$data['admin_main_content']=$this->load->view('Adminpage/Cnf/addcnf','',TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
	}














}
