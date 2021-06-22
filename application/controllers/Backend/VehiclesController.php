<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class VehiclesController extends CI_Controller {

	/**
	 * All Vehicles Page for this controller.
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



    public function send_vehicles_owner_sms(){
        $vehicles_owner_number         = trim($this->input->post('vehicles_owner_primary_mobile_number',TRUE));
        $vehicles_owner_sms_details    = trim($this->input->post('vehicles_owner_sms_details',TRUE));
        $vehicles_info_id        = trim($this->input->post('vehicles_info_id',TRUE));

        $this->form_validation->set_rules('vehicles_owner_primary_mobile_number', 'vehicles_owner_primary_mobile_number', 'trim|required');
        $this->form_validation->set_rules('vehicles_owner_sms_details', 'vehicles_owner_sms_details', 'trim|required');
        $this->form_validation->set_rules('vehicles_info_id', 'vehicles_info_id', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ViewVehiclesInfo/'.$vehicles_info_id);
		}else{

        $sms_send=$this->send_sms($vehicles_owner_number,$vehicles_owner_sms_details);
        if($sms_send=='SUCCESS'){
            $fdata['success_message']="SMS SuccessFully Send To Vehicles Owner User ";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewVehiclesInfo/'.$vehicles_info_id);
        }else{
            $fdata['error_message']="SMS Sending Failed... Because ".$sms_send;
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewVehiclesInfo/'.$vehicles_info_id);
        }

    }

    }







	
	public function vehicles_add()
	{
        if(in_array("add_vehicles",$this->session->userdata('user_permission'))){
		$data['admin_main_content']=$this->load->view('Adminpage/Vehicles/addvehicles','',TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
	}




    private function upload_vehicles_owner_nid_card_front_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["vehicles_owner_nid_front_side_photo"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/vehicles_images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 7000;
        $config['max_height']           = 4000;
        $config['overwrite']            = false;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($checkimage))
        {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddVehicles');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }






	private function upload_vehicles_owner_nid_card_back_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["vehicles_owner_nid_back_side_photo"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/vehicles_images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 7000;
        $config['max_height']           = 4000;
        $config['overwrite']            = false;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($checkimage))
        {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddVehicles');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
	}
	




	private function upload_vehicles_owner_profile_photo($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["vehicles_owner_profile_photo"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/vehicles_images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 7000;
        $config['max_height']           = 4000;
        $config['overwrite']            = false;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($checkimage))
        {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddVehicles');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }









	public function save_vehicles_info_data(){

        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddVehicles');
        }else{
		$vehicles_owner_data=array();
        $vehicles_data=array();
        
		$vehicles_owner_name					= $this->input->post('vehicles_owner_name',TRUE);
		$vehicles_owner_primary_mobile_number	= $this->input->post('vehicles_owner_primary_mobile_number',TRUE);
		$vehicles_owner_op_mobile_number		= $this->input->post('vehicles_owner_op_mobile_number',TRUE);
		$vehicles_owner_address		            = $this->input->post('vehicles_owner_address',TRUE);
		$vehicles_owner_nid_no			        = $this->input->post('vehicles_owner_nid_no',TRUE);
    
        $vehicles_no					        = $this->input->post('vehicles_no',TRUE);
		$vehicles_engine_no				        = $this->input->post('vehicles_engine_no',TRUE);
		$vehicles_chassis_no			        = $this->input->post('vehicles_chassis_no',TRUE);
		$vehicles_tax_token_no			        = $this->input->post('vehicles_tax_token_no',TRUE);
		$vehicles_license_no			        = $this->input->post('vehicles_license_no',TRUE);
		$vehicles_gps_mobile_number		        = $this->input->post('vehicles_gps_mobile_number',TRUE);
		$vehicles_gps_tracking_id		        = $this->input->post('vehicles_gps_tracking_id',TRUE);
		$vehicles_fitness_paper_no			    = $this->input->post('vehicles_fitness_paper_no',TRUE);
		$vehicles_brta_paper_no				    = $this->input->post('vehicles_brta_paper_no',TRUE);
		$vehicles_fitness_paper_end_date	    = $this->input->post('vehicles_fitness_paper_end_date',TRUE);
		$vehicles_tax_token_end_date		    = $this->input->post('vehicles_tax_token_end_date',TRUE);
		$vehicles_brta_paper_end_date		    = $this->input->post('vehicles_brta_paper_end_date',TRUE);
		$vehicles_tax_token_end_date		    = $this->input->post('vehicles_tax_token_end_date',TRUE);
		
		$this->form_validation->set_rules('vehicles_owner_name', 'vehicles_owner_name', 'required|trim');
		$this->form_validation->set_rules('vehicles_owner_primary_mobile_number', 'vehicles_owner_primary_mobile_number', 'required|trim');
		$this->form_validation->set_rules('vehicles_owner_op_mobile_number', 'vehicles_owner_op_mobile_number', 'trim');
		$this->form_validation->set_rules('vehicles_owner_address', 'vehicles_owner_address', 'trim');
        $this->form_validation->set_rules('vehicles_owner_nid_no', 'vehicles_owner_nid_no', 'trim');
        
		$this->form_validation->set_rules('vehicles_no', 'vehicles_no', 'trim|required');
		$this->form_validation->set_rules('vehicles_engine_no', 'vehicles_engine_no', 'trim');
		$this->form_validation->set_rules('vehicles_chassis_no', 'vehicles_chassis_no', 'trim');
		$this->form_validation->set_rules('vehicles_tax_token_no', 'vehicles_tax_token_no', 'trim');
		$this->form_validation->set_rules('vehicles_license_no', 'vehicles_license_no', 'trim');
		$this->form_validation->set_rules('vehicles_gps_mobile_number', 'vehicles_gps_mobile_number', 'trim|required');
		$this->form_validation->set_rules('vehicles_gps_tracking_id', 'vehicles_gps_tracking_id', 'trim');
		$this->form_validation->set_rules('vehicles_fitness_paper_no', 'vehicles_fitness_paper_no', 'trim');
		$this->form_validation->set_rules('vehicles_brta_paper_no', 'vehicles_brta_paper_no', 'trim');
		$this->form_validation->set_rules('vehicles_fitness_paper_end_date', 'vehicles_fitness_paper_end_date', 'trim');
		$this->form_validation->set_rules('vehicles_brta_paper_end_date', 'vehicles_brta_paper_end_date', 'trim');
		$this->form_validation->set_rules('vehicles_tax_token_end_date', 'vehicles_tax_token_end_date', 'trim');

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddVehicles');
		}else{

            $check_vehicles_owner_phone_number_is_exist                     = $this->vehiclesModel->check_vehicles_owner_phone_number_is_exist($vehicles_owner_primary_mobile_number);
            $check_vehicles_gps_number_is_exist                             = $this->vehiclesModel->check_vehicles_gps_number_is_exist($vehicles_gps_mobile_number);
            if($check_vehicles_owner_phone_number_is_exist==1 || $check_vehicles_gps_number_is_exist==1){
                $fdata['error_message']="Vehicles Owner Mobile Number Or Vehicles Number Allready Exist in Our System.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddVehicles'); 
            }else{
			$vehicles_owner_data['vehicles_owner_name']				         = $vehicles_owner_name;
			$vehicles_owner_data['vehicles_owner_primary_mobile_number']     = $vehicles_owner_primary_mobile_number;
			$vehicles_owner_data['vehicles_owner_op_mobile_number']			 = $vehicles_owner_op_mobile_number;
			$vehicles_owner_data['vehicles_owner_address']	                 = $vehicles_owner_address;
			$vehicles_owner_data['vehicles_owner_nid_no']		             = $vehicles_owner_nid_no;
            $vehicles_owner_data['vehicles_owner_created_date']              = date("Y-m-d H:i:s");
            $vehicles_owner_data['vehicles_owner_created_user_id']           = $this->session->userdata('user_id');

		

			if(!empty($_FILES['vehicles_owner_nid_front_side_photo']['name'])){
				$vehicles_owner_nid_front_side_photo="vehicles_owner_nid_front_side_photo";
				$vehicles_owner_data['vehicles_owner_nid_front_side_photo']    = $this->upload_vehicles_owner_nid_card_front_side_image($vehicles_owner_nid_front_side_photo);
			}else{
				$vehicles_owner_data['vehicles_owner_nid_front_side_photo']    = "";
			}



			if(!empty($_FILES['vehicles_owner_nid_back_side_photo']['name'])){
				$vehicles_owner_nid_back_side_photo="vehicles_owner_nid_back_side_photo";
				$vehicles_owner_data['vehicles_owner_nid_back_side_photo']    = $this->upload_vehicles_owner_nid_card_back_side_image($vehicles_owner_nid_back_side_photo);
			}else{
				$vehicles_owner_data['vehicles_owner_nid_back_side_photo']    = "";
			}



			if(!empty($_FILES['vehicles_owner_profile_photo']['name'])){
				$vehicles_owner_profile_photo="vehicles_owner_profile_photo";
				$vehicles_owner_data['vehicles_owner_profile_photo']    = $this->upload_vehicles_owner_profile_photo($vehicles_owner_profile_photo);
			}else{
				$vehicles_owner_data['vehicles_owner_profile_photo']    = "";
			}



             $vehicles_owner_id=$this->vehiclesModel->insert_vehicles_owner_info($vehicles_owner_data);




            $vehicles_data['vehicles_owner_id']				= $vehicles_owner_id;
			$vehicles_data['vehicles_no']                       = $vehicles_no;
			$vehicles_data['vehicles_engine_no']			    = $vehicles_engine_no;
			$vehicles_data['vehicles_chassis_no']	            = $vehicles_chassis_no;
            $vehicles_data['vehicles_tax_token_no']		        = $vehicles_tax_token_no;
            $vehicles_data['vehicles_license_no']		        = $vehicles_license_no;
            $vehicles_data['vehicles_gps_mobile_number']		= $vehicles_gps_mobile_number;
            $vehicles_data['vehicles_gps_tracking_id']		    = $vehicles_gps_tracking_id;
            $vehicles_data['vehicles_fitness_paper_no']		    = $vehicles_fitness_paper_no;
            $vehicles_data['vehicles_fitness_paper_no']		    = $vehicles_fitness_paper_no;
            $vehicles_data['vehicles_brta_paper_no']		    = $vehicles_brta_paper_no;
            $vehicles_data['vehicles_fitness_paper_end_date']	= $vehicles_fitness_paper_end_date;
            $vehicles_data['vehicles_tax_token_end_date']		= $vehicles_tax_token_end_date;
            $vehicles_data['vehicles_brta_paper_end_date']		= $vehicles_brta_paper_end_date;

            $vehicles_data['vehicles_info_created_date']        =date("Y-m-d H:i:s");
            $vehicles_data['vehicles_info_is_active']           =1;

            $vehicles_info_id=$this->vehiclesModel->insert_vehicles_info($vehicles_data);



             $fdata['success_message']="Vehicles Info Successfully Added";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageVehiclesImage/'.$vehicles_info_id);

        }

    }

    }
    
}




        public function manage_vehicles_image($vehicles_info_id)
        {
            $valid_vehicles_info_id= intval($vehicles_info_id);
            $vehicles_info_data = $this->vehiclesModel->select_all_vehicles_info_by_vehicles_info_id($valid_vehicles_info_id);
            if($vehicles_info_data){
            $data['vehicles_data']=$vehicles_info_data;
            $data['vehicles_image_data']= $this->vehiclesModel->select_all_vehicles_image_data_by_vehicles_info_id($vehicles_info_data->vehicles_info_id);
            $data['admin_main_content']=$this->load->view('Adminpage/Vehicles/manage_vehicles_image',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
           
            }else{
                redirect('Cholotransportowner/AddVehicles');
            }


        }




        
	private function upload_vehicles_paper_photo($checkimage,$vehicles_info_id){
        $sdata=array();
        $new_name = time().$_FILES["vehicles_images_name"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/vehicles_images/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 10000;
        $config['max_width']            = 7000;
        $config['max_height']           = 4000;
        $config['overwrite']            = false;
        $config['encrypt_name']         = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($checkimage))
        {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageVehiclesImage/'.$vehicles_info_id);
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }


        public function save_vehicles_image($vehicles_info_id){
            $vehicles_image_data=array();
            if(empty($_POST)){
                $fdata['error_message']="Direct Access Not Allowed";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageVehiclesImage/'.$vehicles_info_id);
            }else{
                $vehicles_paper_name	= trim($this->input->post('vehicles_paper_name',TRUE));
                $vehicles_owner_id	    = trim($this->input->post('vehicles_owner_id',TRUE));
                $vehicles_info_id	    = trim($this->input->post('vehicles_info_id',TRUE));

                if(empty($_FILES['vehicles_images_name']['name']) || $vehicles_paper_name==''){
                    $fdata['error_message']="Red Mark Field Must Required.Validation Failed..";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageVehiclesImage/'.$vehicles_info_id);
                }else{
                    $vehicles_images_name                                   = "vehicles_images_name";
                    $vehicles_image_data['vehicles_images_name']            = $this->upload_vehicles_paper_photo($vehicles_images_name,$vehicles_info_id);
                    $vehicles_image_data['vehicles_info_id']                = $vehicles_info_id;
                    $vehicles_image_data['vehicles_owner_id']               = $vehicles_owner_id;
                    $vehicles_image_data['vehicles_paper_name']             = $vehicles_paper_name;
                    $vehicles_image_data['vehicles_images_created_date']    = date("Y-m-d H:i:s");
                    $vehicles_image_data['vehicles_images_created_user_id'] = $this->session->userdata('user_id');
                    $vehicles_image_data['vehicles_images_is_active']       = 1;
                    $save_vehicles_image_data= $this->vehiclesModel->insert_vehicles_image_info_data($vehicles_image_data);
                    $fdata['success_message']="Vehicles Images Uploaded Success..";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageVehiclesImage/'.$vehicles_info_id);


                }



            }

        }




        public function delete_vehicles_paper_images($vehicles_images_id){
            $vehicles_info_id=$this->vehiclesModel->vehicles_info_id_by_vehicles_images_id($vehicles_images_id);
            $this->vehiclesModel->delete_vehicles_paper_images_with_file($vehicles_images_id);
            $fdata['success_message']="Vehicles Uploaded Image Deleted Success..";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageVehiclesImage/'.$vehicles_info_id);
        }



        public function manage_vehicles(){
            if(in_array("manage_vehicles",$this->session->userdata('user_permission'))){
            $data['join_vehicles_data']=$this->vehiclesModel->select_all_join_vehicles_info();
            $data['admin_main_content']=$this->load->view('Adminpage/Vehicles/managevehicles',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
            }else{
                redirect('Cholotransportowner/Dashboard');
            }

        }



        public function edit_vehicles_info($vehicles_info_id){
            if(in_array("edit_vehicles",$this->session->userdata('user_permission'))){
            $data['edit_vehicles_data']=$this->vehiclesModel->select_all_vehicles_info_by_vehicles_info_id($vehicles_info_id);
            if(empty($data['edit_vehicles_data'])){
                redirect('Cholotransportowner/ManageVehicles');
            }else{
            $data['admin_main_content']=$this->load->view('Adminpage/Vehicles/edit_vehicles_info',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
            }
            }else{
                redirect('Cholotransportowner/Dashboard');
            }

        }



        public function save_update_vehicles_info($vehicles_info_id){
            if(empty($_POST)){
                $fdata['error_message']="Direct Access Not Allowed";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/EditVehiclesInfo/'.$vehicles_info_id);
            }else{
            $vehicles_owner_data=array();
            $vehicles_data=array();
            
            $vehicles_owner_name					= $this->input->post('vehicles_owner_name',TRUE);
            $vehicles_owner_primary_mobile_number	= $this->input->post('vehicles_owner_primary_mobile_number',TRUE);
            $vehicles_owner_op_mobile_number		= $this->input->post('vehicles_owner_op_mobile_number',TRUE);
            $vehicles_owner_address		            = $this->input->post('vehicles_owner_address',TRUE);
            $vehicles_owner_nid_no			        = $this->input->post('vehicles_owner_nid_no',TRUE);
            $vehicles_owner_id			            = $this->input->post('vehicles_owner_id',TRUE);

            $hidden_vehicles_owner_nid_front_side_photo  = $this->input->post('hidden_vehicles_owner_nid_front_side_photo',TRUE);
            $hidden_vehicles_owner_nid_back_side_photo  = $this->input->post('hidden_vehicles_owner_nid_back_side_photo',TRUE);
            $hidden_vehicles_owner_profile_photo        = $this->input->post('hidden_vehicles_owner_profile_photo',TRUE);
            
        
            $vehicles_no					        = $this->input->post('vehicles_no',TRUE);
            $vehicles_engine_no				        = $this->input->post('vehicles_engine_no',TRUE);
            $vehicles_chassis_no			        = $this->input->post('vehicles_chassis_no',TRUE);
            $vehicles_tax_token_no			        = $this->input->post('vehicles_tax_token_no',TRUE);
            $vehicles_license_no			        = $this->input->post('vehicles_license_no',TRUE);
            $vehicles_gps_mobile_number		        = $this->input->post('vehicles_gps_mobile_number',TRUE);
            $vehicles_gps_tracking_id		        = $this->input->post('vehicles_gps_tracking_id',TRUE);
            $vehicles_fitness_paper_no			    = $this->input->post('vehicles_fitness_paper_no',TRUE);
            $vehicles_brta_paper_no				    = $this->input->post('vehicles_brta_paper_no',TRUE);
            $vehicles_fitness_paper_end_date	    = $this->input->post('vehicles_fitness_paper_end_date',TRUE);
            $vehicles_tax_token_end_date		    = $this->input->post('vehicles_tax_token_end_date',TRUE);
            $vehicles_brta_paper_end_date		    = $this->input->post('vehicles_brta_paper_end_date',TRUE);
            $vehicles_tax_token_end_date		    = $this->input->post('vehicles_tax_token_end_date',TRUE);
            
            $this->form_validation->set_rules('vehicles_owner_name', 'vehicles_owner_name', 'required|trim');
            $this->form_validation->set_rules('vehicles_owner_primary_mobile_number', 'vehicles_owner_primary_mobile_number', 'required|trim');
            $this->form_validation->set_rules('vehicles_owner_op_mobile_number', 'vehicles_owner_op_mobile_number', 'trim');
            $this->form_validation->set_rules('vehicles_owner_address', 'vehicles_owner_address', 'trim');
            $this->form_validation->set_rules('vehicles_owner_nid_no', 'vehicles_owner_nid_no', 'trim');
            
            $this->form_validation->set_rules('vehicles_no', 'vehicles_no', 'trim|required');
            $this->form_validation->set_rules('vehicles_engine_no', 'vehicles_engine_no', 'trim');
            $this->form_validation->set_rules('vehicles_chassis_no', 'vehicles_chassis_no', 'trim');
            $this->form_validation->set_rules('vehicles_tax_token_no', 'vehicles_tax_token_no', 'trim');
            $this->form_validation->set_rules('vehicles_license_no', 'vehicles_license_no', 'trim');
            $this->form_validation->set_rules('vehicles_gps_mobile_number', 'vehicles_gps_mobile_number', 'trim|required');
            $this->form_validation->set_rules('vehicles_gps_tracking_id', 'vehicles_gps_tracking_id', 'trim');
            $this->form_validation->set_rules('vehicles_fitness_paper_no', 'vehicles_fitness_paper_no', 'trim');
            $this->form_validation->set_rules('vehicles_brta_paper_no', 'vehicles_brta_paper_no', 'trim');
            $this->form_validation->set_rules('vehicles_fitness_paper_end_date', 'vehicles_fitness_paper_end_date', 'trim');
            $this->form_validation->set_rules('vehicles_brta_paper_end_date', 'vehicles_brta_paper_end_date', 'trim');
            $this->form_validation->set_rules('vehicles_tax_token_end_date', 'vehicles_tax_token_end_date', 'trim');
    
            if ($this->form_validation->run() == FALSE)
            {
                    $fdata['error_message']="Validation Failed... Red Mark Field Required.";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/EditVehiclesInfo/'.$vehicles_info_id);
            }else{


                $check_vehicles_info_data           = $this->vehiclesModel->select_vehicles_info_data_by_vehicles_id($vehicles_info_id);
                $check_vehicles_gps_number          = $check_vehicles_info_data->vehicles_gps_mobile_number;
                $check_vehicle_owner_phone_number   = $this->vehiclesModel->select_vehicles_owner_info_data_by_vehicles_owner_id($vehicles_owner_id)->vehicles_owner_primary_mobile_number;
               
                
                if($check_vehicle_owner_phone_number!=$vehicles_owner_primary_mobile_number){
                    $check_vehicles_owner_phone_number_is_exist           = $this->vehiclesModel->check_vehicles_owner_phone_number_is_exist($vehicles_owner_primary_mobile_number);
                }else{
                    $check_vehicles_owner_phone_number_is_exist=0;
                }
                 
                 if($check_vehicles_gps_number!=$vehicles_gps_mobile_number){
                    $check_vehicles_gps_number_is_exist                    = $this->vehiclesModel->check_vehicles_gps_number_is_exist($vehicles_gps_mobile_number);
                }else{
    
                    $check_vehicles_gps_number_is_exist=0;
                }



    

              
        

                if($check_vehicles_owner_phone_number_is_exist==1 || $check_vehicles_gps_number_is_exist==1){
                    $fdata['error_message']=" Vehicles Owner Mobile Number Or Vehicles Number Allready Exist in Our System.";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/EditVehiclesInfo/'.$vehicles_info_id); 
                }else{
                $vehicles_owner_data['vehicles_owner_name']				         = $vehicles_owner_name;
                $vehicles_owner_data['vehicles_owner_primary_mobile_number']     = $vehicles_owner_primary_mobile_number;
                $vehicles_owner_data['vehicles_owner_op_mobile_number']			 = $vehicles_owner_op_mobile_number;
                $vehicles_owner_data['vehicles_owner_address']	                 = $vehicles_owner_address;
                $vehicles_owner_data['vehicles_owner_nid_no']		             = $vehicles_owner_nid_no;
                $vehicles_owner_data['vehicles_owner_id']		                 = $vehicles_owner_id;
                    
                    
            
    
                if(!empty($_FILES['vehicles_owner_nid_front_side_photo']['name'])){
                    $this->vehiclesModel->delete_old_vehicles_owner_nid_front_side_image($vehicles_owner_id);
                    $vehicles_owner_nid_front_side_photo="vehicles_owner_nid_front_side_photo";
                    $vehicles_owner_data['vehicles_owner_nid_front_side_photo']    = $this->upload_vehicles_owner_nid_card_front_side_image($vehicles_owner_nid_front_side_photo);
                }else{
                    $vehicles_owner_data['vehicles_owner_nid_front_side_photo']    = $hidden_vehicles_owner_nid_front_side_photo;
                }
    
    
    
                if(!empty($_FILES['vehicles_owner_nid_back_side_photo']['name'])){
                    $this->vehiclesModel->delete_old_vehicles_owner_nid_back_side_image($vehicles_owner_id);
                    $vehicles_owner_nid_back_side_photo="vehicles_owner_nid_back_side_photo";
                    $vehicles_owner_data['vehicles_owner_nid_back_side_photo']    = $this->upload_vehicles_owner_nid_card_back_side_image($vehicles_owner_nid_back_side_photo);
                }else{
                    $vehicles_owner_data['vehicles_owner_nid_back_side_photo']    = $hidden_vehicles_owner_nid_back_side_photo;
                }
    
    
    
                if(!empty($_FILES['vehicles_owner_profile_photo']['name'])){
                    $this->vehiclesModel->delete_old_vehicles_owner_profile_photo($vehicles_owner_id);
                    $vehicles_owner_profile_photo="vehicles_owner_profile_photo";
                    $vehicles_owner_data['vehicles_owner_profile_photo']    = $this->upload_vehicles_owner_profile_photo($vehicles_owner_profile_photo);
                }else{
                    $vehicles_owner_data['vehicles_owner_profile_photo']    = $hidden_vehicles_owner_profile_photo;
                }
    
                
    
                 $vehicles_owner_id=$this->vehiclesModel->update_vehicles_owner_info($vehicles_owner_data);
    
    
    
    
                $vehicles_data['vehicles_no']                       = $vehicles_no;
                $vehicles_data['vehicles_info_id']                  = $vehicles_info_id;
                $vehicles_data['vehicles_engine_no']			    = $vehicles_engine_no;
                $vehicles_data['vehicles_chassis_no']	            = $vehicles_chassis_no;
                $vehicles_data['vehicles_tax_token_no']		        = $vehicles_tax_token_no;
                $vehicles_data['vehicles_license_no']		        = $vehicles_license_no;
                $vehicles_data['vehicles_gps_mobile_number']		= $vehicles_gps_mobile_number;
                $vehicles_data['vehicles_gps_tracking_id']		    = $vehicles_gps_tracking_id;
                $vehicles_data['vehicles_fitness_paper_no']		    = $vehicles_fitness_paper_no;
                $vehicles_data['vehicles_fitness_paper_no']		    = $vehicles_fitness_paper_no;
                $vehicles_data['vehicles_brta_paper_no']		    = $vehicles_brta_paper_no;
                $vehicles_data['vehicles_fitness_paper_end_date']	= $vehicles_fitness_paper_end_date;
                $vehicles_data['vehicles_tax_token_end_date']		= $vehicles_tax_token_end_date;
                $vehicles_data['vehicles_brta_paper_end_date']		= $vehicles_brta_paper_end_date;
    
                $this->vehiclesModel->update_vehicles_info($vehicles_data);
    
    
                 $fdata['success_message']="Vehicles Info Successfully Updated";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/EditVehiclesInfo/'.$vehicles_info_id);
    
            }
    
        }
    
        }
        }





        public function deactive_vehicles($vehicles_id){
            if(in_array("publish_vehicles",$this->session->userdata('user_permission'))){
            $this->vehiclesModel->deactive_vehicles_account_by_vehicles_id($vehicles_id);
            }else{
                redirect('Cholotransportowner/Dashboard');
            }

        }
    
    
    
    
        public function active_vehicles($vehicles_id){
            if(in_array("publish_vehicles",$this->session->userdata('user_permission'))){
            $this->vehiclesModel->active_vehicles_account_by_vehicles_id($vehicles_id);
            }else{
                redirect('Cholotransportowner/Dashboard');
            }

        }




        public function view_vehicles_info($vehicles_info_id){
            $data['view_vehicles_join_data']=$this->vehiclesModel->select_vehicles_join_info_data_by_vehicles_info_id($vehicles_info_id);
            if(empty($data['view_vehicles_join_data'])){
                redirect('Cholotransportowner/ManageVehicles');
            }else{
            $data['admin_main_content']=$this->load->view('Adminpage/Vehicles/view_vehicles_info',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
            }
        }



        public function add_driver_in_vehicles($vehicles_info_id){
            if(in_array("vehicles_change_driver",$this->session->userdata('user_permission'))){
            $valid_vehicles_info_id= intval($vehicles_info_id);
            $vehicles_info_data = $this->vehiclesModel->select_all_vehicles_info_by_vehicles_info_id($valid_vehicles_info_id);
            if($vehicles_info_data){
            $data['vehicles_data']=$vehicles_info_data;
            $data['all_driver_data_for_select']=$this->driverModel->select_all_active_driver_info();
            $data['driver_data']= $this->vehiclesModel->select_driver_info_by_vehicles_info_id($vehicles_info_id);
            $data['admin_main_content']=$this->load->view('Adminpage/Vehicles/add_driver_in_vehicles',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
           
            }else{
                redirect('Cholotransportowner/ManageVehicles');
            }
            }else{
                redirect('Cholotransportowner/Dashboard');
            }



        }




        public function save_driver_in_vehicles($vehicles_info_id){
            if(empty($_POST)){
                $fdata['error_message']="Direct Access Not Allowed";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/AddDriverInVehicles/'.$vehicles_info_id);
            }else{
                $vehicles_info_id= $this->input->post('vehicles_info_id',true);
                $vehicles_info_id=trim(intval($vehicles_info_id));
                $driver_info_id= trim($this->input->post('driver_info_id',true));
                if($driver_info_id==''){
                    $fdata['error_message']="You Must Select At Least One Driver..";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/AddDriverInVehicles/'.$vehicles_info_id);
                }else{
                    $old_driver_id= $this->vehiclesModel->select_old_driver_id_by_vehicles_id($vehicles_info_id);
                    $update_previous_driver_info=$this->vehiclesModel->update_previous_driver_info_by_vehicles_driver_info_id($old_driver_id);
                    
                    $update_driver_info_table=  $this->vehiclesModel->update_driver_info_by_vehicles_driver_info_id($driver_info_id,$vehicles_info_id);
                   
                    $update_vehicles_info_table=$this->vehiclesModel->update_vehicles_info_by_driver_vehicles_info_id($driver_info_id,$vehicles_info_id);
                   
                    $fdata['success_message']="Driver Assign In Selected Vehicles Success..";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/AddDriverInVehicles/'.$vehicles_info_id);
                }

            }
        }




        public function delete_driver_in_vehicles($driver_info_id){

            if(in_array("delete_vehicles",$this->session->userdata('user_permission'))){
                $driver_info_id= trim(intval($driver_info_id));
                $vehicles_info_id=$this->vehiclesModel->select_vehicles_info_id_by_driver_id($driver_info_id);
                $remove_driver= $this->vehiclesModel->update_previous_driver_info_by_vehicles_driver_info_id($driver_info_id);
                $remove_vehicles=$this->vehiclesModel->remove_vehicles_info_by_vehicles_driver_info_id($vehicles_info_id);
                $fdata['success_message']="Driver Remove Success..";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/AddDriverInVehicles/'.$vehicles_info_id);
            }else{
                redirect('Cholotransportowner/Dashboard');
            }

            
        }





    
    
    
        public function ViewVehiclesLiveLocation($vehicles_info_id){
            $vehicles_info=$this->vehiclesModel->select_vehicles_info_data_by_vehicles_id($vehicles_info_id);
            $chalan_imei_number=$vehicles_info->vehicles_gps_tracking_id;
            if($chalan_imei_number){
                $api_key = "138A0E23D52CFB56EE0845D410C74A58";
                $endpoint = "https://safetyvts.com/api/api.php";
       
              // $url = "https://safetyvts.com/api/api.php?api=user&ver=1.0&key=138A0E23D52CFB56EE0845D410C74A58&cmd=OBJECT_GET_LOCATIONS,*";
             
              $data= array(
                    'api'=>'user',
                    'ver'=>'1.0',
                    'key' =>'138A0E23D52CFB56EE0845D410C74A58',
                    'cmd'=>'OBJECT_GET_LOCATIONS,'.$chalan_imei_number,
                ); // Add parameters in key value
                $ch = curl_init(); // Initialize cURL
                $url = $endpoint . '?' . http_build_query($data);
                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $smsresult = json_decode(curl_exec($ch));
                if($smsresult){
                    foreach($smsresult as $result){
                    $data['lat']          = $result->lat;
                    $data['lng']          = $result->lng;
                    $data['name']         = $result->name;
                    $data['speed']        = $result->speed;
                }
            }
                $data['vehicles_info']    = $vehicles_info;
                $data['vehicles_gps_tracking_id']    = $vehicles_info->vehicles_gps_tracking_id;

             $data['admin_main_content']= $this->load->view('Adminpage/Vehicles/vehicles_live_track',$data,TRUE);

            $this->load->view("Adminpage/admin_master",$data);
            }else{
                $fdata['error_message']="Vehicles Device Tracker Id Not Found...";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageVehicles');
            }
        }





        public function get_vehicles_live_location_json_data($vehicles_tracker_id){
            if($vehicles_tracker_id){
                $api_key = "138A0E23D52CFB56EE0845D410C74A58";
                $endpoint = "https://safetyvts.com/api/api.php";
              // $url = "https://safetyvts.com/api/api.php?api=user&ver=1.0&key=138A0E23D52CFB56EE0845D410C74A58&cmd=OBJECT_GET_LOCATIONS,*";
             
              $data= array(
                    'api'=>'user',
                    'ver'=>'1.0',
                    'key' =>'138A0E23D52CFB56EE0845D410C74A58',
                    'cmd'=>'OBJECT_GET_LOCATIONS,'.$vehicles_tracker_id,
                ); // Add parameters in key value
                $ch = curl_init(); // Initialize cURL
                $url = $endpoint . '?' . http_build_query($data);
                curl_setopt($ch, CURLOPT_URL,$url);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $smsresult = json_decode(curl_exec($ch));
                if($smsresult){
                    foreach($smsresult as $result){
                    $data['lat']          = $result->lat;
                    $data['lng']          = $result->lng;
                    $data['name']         = $result->name;
                    $data['speed']        = $result->speed;
                    $batlevel=$result->params->batl;

                    $batstatus=$result->params->bats;
                    if($batstatus==1){
                        $bat_status="Charging";
                    }else{
                        $bat_status="Not Charging";
                    }
                    $data['details'] = "Vehicles Name: ,".$data["name"].", Speed: ".$data['speed'].", Battery Status: ".$bat_status.", Battery Level: ".$batlevel;
                   
                }
                echo json_encode($data);
            }
        }

    }
    
    

    
        
    
    
    
    



















}
