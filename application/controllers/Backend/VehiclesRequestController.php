<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class VehiclesRequestController extends CI_Controller {

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




    public function all_vehicles_request(){
        $this->superHomeModel->deactive_vehicles_request_notification();
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }

    public function all_pending_vehicles_request(){
        $this->superHomeModel->deactive_vehicles_request_notification();
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_pending_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_pending_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }

    public function all_processing_vehicles_request(){
        $this->superHomeModel->deactive_vehicles_request_notification();
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_processing_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_processing_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }

    public function all_accepted_vehicles_request(){
        $this->superHomeModel->deactive_vehicles_request_notification();
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_accepted_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_accepted_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }

    public function all_completed_vehicles_request(){
        $this->superHomeModel->deactive_vehicles_request_notification();
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_completed_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_completed_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }

    public function all_cancel_vehicles_request(){
        $this->superHomeModel->deactive_vehicles_request_notification();
        $data['all_vehicles_request']=$this->vehiclesRequestModel->all_cancel_vehicles_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_cancel_vehicles_request',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }





    public function change_vehicles_request_status($vehicles_request_id){
        if(in_array("vehicles_request_change_status",$this->session->userdata('user_permission'))){
        $data['vehicles_request_data']=$this->vehiclesRequestModel->all_vehicles_request_by_id($vehicles_request_id);
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/change_vehicles_request_status',$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
    }




    public function update_vehicles_request_status($vehicles_request_id){
        $vehicles_request_id=trim(intval($vehicles_request_id));
        $vehicles_request_status=trim($this->input->post('vehicles_request_status',true));
        $update_request_status=$this->vehiclesRequestModel->update_vehicles_request_status($vehicles_request_id,$vehicles_request_status);
    }




    public function all_user_account_request(){
        if(in_array("user_registration_request",$this->session->userdata('user_permission'))){
        $this->superHomeModel->deactive_account_request_notification();
        $data['all_user_account_request']=$this->vehiclesRequestModel->all_user_account_request();
        $data['admin_main_content']=$this->load->view('Adminpage/Vehicles_Request/all_user_account_request',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
    }



    public function delete_user_account_request($user_account_request_id){
        if(in_array("user_registration_request_delete",$this->session->userdata('user_permission'))){
        $this->vehiclesRequestModel->delete_user_account_request($user_account_request_id);
        $sdata=array();
        $sdata['success_message']="User Account Request Deleted Success";
        $this->session->set_flashdata($sdata);
        redirect("Cholotransportowner/UserAccountRequest");
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }



    











}
