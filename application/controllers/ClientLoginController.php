<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class ClientLoginController extends CI_Controller {


	
	public function __construct() {
        parent::__construct();
       
    }
	/**
	 * All Admin Page for this controller.
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
	 * map to /index.php/welcome/<method_name>
	 * @see https://noman-it.com
	 */



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



    public function Dashboard(){
        if($this->session->userdata('user_login')==''){
            redirect('Client/login');
        }else{
        $data['admin_main_content']=$this->load->view('Clientpage/dashboard','',TRUE);
        $this->load->view("Clientpage/client_master",$data);
        }
    }



	public function cholotransportclientlogin()
	{
        if($this->session->userdata('user_login')=='yes'){
            redirect('Client/Dashboard');
        }else{
            $this->load->view("Clientpage/client_login");
        }

        
	}


	public function client_login_check(){
        if(empty($this->input->post())){
            $fdata['error_message']="Please Fill Data. Then Try.";
            $this->session->set_flashdata($fdata);
            redirect('Client/login');
            }else{
                $input_data           = trim($this->input->post('user_email_or_phone',TRUE));
                if(filter_var($input_data, FILTER_VALIDATE_EMAIL)){
                    $user_email= $input_data;
                    $user_number= '';
                }else{
                    if (preg_match('/^[0-9]+$/',$input_data)){
                      $user_number= $input_data;
                    }else{
                      $user_number= '';
                    }
                    $user_email= '';
                }
         $user_password          = trim($this->input->post('user_password',true));
         $user_type              = trim($this->input->post('user_type',true));
        if($input_data=='' ||  $user_password=='' || $user_type==''){
            $fdata=array();
            $fdata['error_message']="You Must Field Up All Data";
            $this->session->set_flashdata($fdata);
            redirect("Client/login");
        }else{





            if($user_type=='cnf'){
                if(!empty($user_email)){
                    $data['cnf_email_address']=$user_email;
                    $data['cnf_user_password']=$user_password;
                $found_cnf_admin_by_email=$this->clientControllerModel->check_cnf_admin_login_info_by_email($data);
                if($found_cnf_admin_by_email){
                    $sdata=array();
                    $sdata['cnf_info_id']=$found_cnf_admin_by_email->cnf_info_id;
                    $sdata['client_fullname']=$found_cnf_admin_by_email->cnf_full_name;
                    $sdata['cnf_primary_mobile_number']=$found_cnf_admin_by_email->cnf_primary_mobile_number;
                    $sdata['user_login']='yes';
                    $this->session->set_userdata($sdata);
                    redirect('Client/Dashboard');
                }else{
                    $sdata=array();
                    $sdata['error_message']="Your Email Or Mobile Number Not Matching Or Account Deactivated";
                    $this->session->set_flashdata($sdata);
                    redirect("Client/login");
                }
            }

            else if(!empty($user_number)){
                $data['cnf_primary_mobile_number']=$user_number;
                    $data['cnf_user_password']=$user_password;
                $found_cnf_admin_by_number=$this->clientControllerModel->check_cnf_admin_login_info_by_mobile_number($data);
                if($found_cnf_admin_by_number){
                    $sdata=array();
                    $sdata['cnf_info_id']=$found_cnf_admin_by_number->cnf_info_id;
                    $sdata['client_fullname']=$found_cnf_admin_by_number->cnf_full_name;
                    $sdata['cnf_primary_mobile_number']=$found_cnf_admin_by_number->cnf_primary_mobile_number;
                    $sdata['user_login']='yes';
                    $this->session->set_userdata($sdata);
                    redirect('Client/Dashboard');
                }else{
                    $sdata=array();
                    $sdata['error_message']="Your Username Or Password Not Matching Or User Deactivated";
                    $this->session->set_flashdata($sdata);
                    redirect("Client/login");
                }
            }
        }














            if($user_type=='importer'){
                if(!empty($user_email)){
                    $data['importer_email_address']=$user_email;
                    $data['importer_user_password']=$user_password;
                $found_importer_admin_by_email=$this->clientControllerModel->check_importer_admin_login_info_by_email($data);
                if($found_importer_admin_by_email){
                    $sdata=array();
                    $sdata['importer_info_id']=$found_importer_admin_by_email->importer_info_id;
                    $sdata['client_fullname']=$found_importer_admin_by_email->importer_full_name;
                    $sdata['importer_primary_mobile_number']=$found_importer_admin_by_email->importer_primary_mobile_number;
                    $sdata['user_login']='yes';
                    $this->session->set_userdata($sdata);
                    redirect('Client/Dashboard');
                }else{
                    $sdata=array();
                    $sdata['error_message']="Your Username Or Password Not Matching Or User Deactivated";
                    $this->session->set_flashdata($sdata);
                    redirect("Client/login");
                }


            }

            else if(!empty($user_number)){
                $data['importer_primary_mobile_number']=$user_number;
                $data['importer_user_password']=$user_password;
            $found_importer_admin_by_number=$this->clientControllerModel->check_importer_admin_login_info_by_number($data);
                if($found_importer_admin_by_number){
                    $sdata=array();
                    $sdata['importer_info_id']=$found_importer_admin_by_number->importer_info_id;
                    $sdata['client_fullname']=$found_importer_admin_by_number->importer_full_name;
                    $sdata['importer_primary_mobile_number']=$found_importer_admin_by_number->importer_primary_mobile_number;
                    $sdata['user_login']='yes';
                    $this->session->set_userdata($sdata);
                    redirect('Client/Dashboard');
                }else{
                    $sdata=array();
                    $sdata['error_message']="Your Username Or Password Not Matching Or User Deactivated";
                    $this->session->set_flashdata($sdata);
                    redirect("Client/login");
                }
            }

            }



















            
            if($user_type=='exporter'){
                if(!empty($user_email)){
                    $data['exporter_email_address']=$user_email;
                    $data['exporter_user_password']=$user_password;
                $found_exporter_admin_by_email=$this->clientControllerModel->check_exporter_admin_login_info_by_email($data);
                if($found_exporter_admin_by_email){
                    $sdata=array();
                    $sdata['exporter_info_id']=$found_exporter_admin_by_email->importer_info_id;
                    $sdata['client_fullname']=$found_exporter_admin_by_email->importer_full_name;
                    $sdata['exporter_primary_mobile_number']=$found_exporter_admin_by_email->exporter_primary_mobile_number;
                    $sdata['user_login']='yes';
                    $this->session->set_userdata($sdata);
                    redirect('Client/Dashboard');
                }else{
                    $sdata=array();
                    $sdata['error_message']="Your Username Or Password Not Matching Or User Deactivated";
                    $this->session->set_flashdata($sdata);
                    redirect("Client/login");
                }


            }

            else if(!empty($user_number)){
                $data['exporter_primary_mobile_number']=$user_number;
                $data['exporter_user_password']=$user_password;
            $found_exporter_admin_by_number=$this->clientControllerModel->check_exporter_admin_login_info_by_number($data);
                if($found_exporter_admin_by_number){
                    $sdata=array();
                    $sdata['exporter_info_id']  = $found_exporter_admin_by_number->exporter_info_id;
                    $sdata['client_fullname']          = $found_exporter_admin_by_number->exporter_full_name;
                    $sdata['exporter_primary_mobile_number']  = $found_exporter_admin_by_number->exporter_primary_mobile_number;
                    $sdata['user_login']='yes';
                    $this->session->set_userdata($sdata);
                    redirect('Client/Dashboard');
                }else{
                    $sdata=array();
                    $sdata['error_message']="Your Username Or Password Not Matching Or User Deactivated";
                    $this->session->set_flashdata($sdata);
                    redirect("Client/login");
                }
            }

            }
















            if($user_type=='vehicles_owner'){
                if(!empty($user_email)){
                    $data['exporter_email_address']=$user_email;
                    $data['exporter_user_password']=$user_password;
                $found_exporter_admin_by_email=$this->clientControllerModel->check_exporter_admin_login_info_by_email($data);
                if($found_exporter_admin_by_email){
                    $sdata=array();
                    $sdata['exporter_info_id']=$found_exporter_admin_by_email->importer_info_id;
                    $sdata['client_fullname']=$found_exporter_admin_by_email->importer_full_name;
                    $sdata['user_login']='yes';
                    $this->session->set_userdata($sdata);
                    redirect('Client/Dashboard');
                }else{
                    $sdata=array();
                    $sdata['error_message']="Your Username Or Password Not Matching Or User Deactivated";
                    $this->session->set_flashdata($sdata);
                    redirect("Client/login");
                }


            }

            else if(!empty($user_number)){
                $data['exporter_primary_mobile_number']=$user_number;
                $data['exporter_user_password']=$user_password;
            $found_exporter_admin_by_number=$this->clientControllerModel->check_exporter_admin_login_info_by_number($data);
                if($found_exporter_admin_by_number){
                    $sdata=array();
                    $sdata['exporter_info_id']  = $found_exporter_admin_by_number->exporter_info_id;
                    $sdata['client_fullname']          = $found_exporter_admin_by_number->exporter_full_name;
                    $sdata['user_login']='yes';
                    $this->session->set_userdata($sdata);
                    redirect('Client/Dashboard');
                }else{
                    $sdata=array();
                    $sdata['error_message']="Your Username Or Password Not Matching Or User Deactivated";
                    $this->session->set_flashdata($sdata);
                    redirect("Client/login");
                }
            }

            }


















    

    }
}
}





































    public function logout(){
        $session_array=array('cnf_info_id','importer_info_id','exporter_info_id','client_fullname','user_login');
           $this->session->unset_userdata($session_array);
           $logdata=array();
           $logdata['success_message']="You Are SuccessFully Logout";
           $this->session->set_flashdata($logdata);
           redirect('Client/login');
   }





}
