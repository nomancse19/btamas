<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class ExporterController extends CI_Controller {

	/**
	 * All Admin Page for this controller.
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



    public function send_exporter_sms(){
        $exporter_number         = trim($this->input->post('exporter_primary_mobile_number',TRUE));
        $exporter_sms_details    = trim($this->input->post('exporter_sms_details',TRUE));
        $exporter_info_id        = trim($this->input->post('exporter_info_id',TRUE));

        $this->form_validation->set_rules('exporter_primary_mobile_number', 'exporter_primary_mobile_number', 'trim|required');
        $this->form_validation->set_rules('exporter_sms_details', 'exporter_sms_details', 'trim|required');
        $this->form_validation->set_rules('exporter_info_id', 'exporter_info_id', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ViewExporterInfo/'.$exporter_info_id);
		}else{

        $sms_send=$this->send_sms($exporter_number,$exporter_sms_details);
        if($sms_send=='SUCCESS'){
            $fdata['success_message']="SMS SuccessFully Send To Exporter User ";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewExporterInfo/'.$exporter_info_id);
        }else{
            $fdata['error_message']="SMS Sending Failed... Because ".$sms_send;
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewExporterInfo/'.$exporter_info_id);
        }

    }

    }








	public function exporter_add()
	{
        if(in_array("add_exporter",$this->session->userdata('user_permission'))){
		$data['admin_main_content']=$this->load->view('Adminpage/Exporter/addexporter','',TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
	}



	private function upload_exporter_nid_card_front_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["exporter_nid_card_front_side_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/exporter_images/';
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
                redirect('Cholotransportowner/AddExporter');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }






	private function upload_exporter_nid_card_back_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["exporter_nid_card_back_side_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/exporter_images/';
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
                redirect('Cholotransportowner/AddExporter');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
	}
	




	private function upload_exporter_profile_photo($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["exporter_profile_photo"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/exporter_images/';
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
                redirect('Cholotransportowner/AddExporter');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }









	public function save_exporter_data(){

        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddExporter');
        }else{
		$data=array();
		$exporter_full_name					= $this->input->post('exporter_full_name',TRUE);
		$exporter_address					= $this->input->post('exporter_address',TRUE);
		$exporter_email_address				= $this->input->post('exporter_email_address',TRUE);
		$exporter_primary_mobile_number		= $this->input->post('exporter_primary_mobile_number',TRUE);
		$exporter_op1_mobile_number			= $this->input->post('exporter_op1_mobile_number',TRUE);
		$exporter_op2_mobile_number			= $this->input->post('exporter_op2_mobile_number',TRUE);
		$exporter_user_name					= $this->input->post('exporter_user_name',TRUE);
		$exporter_user_password				= $this->input->post('exporter_user_password',TRUE);
		$exporter_nid_number			    = $this->input->post('exporter_nid_number',TRUE);
		$exporter_is_active					= $this->input->post('exporter_is_active',TRUE);
		
		$this->form_validation->set_rules('exporter_full_name', 'exporter_full_name', 'required|trim');
		$this->form_validation->set_rules('exporter_address', 'exporter_address', 'trim');
		$this->form_validation->set_rules('exporter_email_address', 'exporter_email_address', 'trim');
		$this->form_validation->set_rules('exporter_primary_mobile_number', 'exporter_primary_mobile_number', 'required|trim');
		$this->form_validation->set_rules('exporter_op1_mobile_number', 'exporter_op1_mobile_number', 'trim');
		$this->form_validation->set_rules('exporter_op2_mobile_number', 'exporter_op2_mobile_number', 'trim');
		$this->form_validation->set_rules('exporter_user_name', 'exporter_user_name', 'trim');
		$this->form_validation->set_rules('exporter_user_password', 'exporter_user_password', 'required|trim');
		$this->form_validation->set_rules('exporter_nid_number', 'exporter_nid_number', 'trim');
		$this->form_validation->set_rules('exporter_is_active', 'exporter_is_active', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddExporter');
		}else{

            $check_exporter_phone_number_is_exist    =$this->exporterModel->check_exporter_phone_number_is_exist($exporter_primary_mobile_number);
            $check_exporter_email_is_exist           =$this->exporterModel->check_exporter_email_is_exist($exporter_email_address);
            if($check_exporter_phone_number_is_exist==1 || $check_exporter_email_is_exist==1){
                $fdata['error_message']="Exporter Mobile Number Or Email Allready Exist in Our System.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddExporter'); 
            }else{
			$data['exporter_full_name']				= $exporter_full_name;
			$data['exporter_address']				= $exporter_address;
			$data['exporter_email_address']			= $exporter_email_address;
			$data['exporter_primary_mobile_number']	= $exporter_primary_mobile_number;
			$data['exporter_op1_mobile_number']		= $exporter_op1_mobile_number;
			$data['exporter_op2_mobile_number']		= $exporter_op2_mobile_number;
			$data['exporter_user_name']				= $exporter_user_name;
			$data['exporter_user_password']			= $exporter_user_password;
			$data['exporter_nid_number']			= $exporter_nid_number;
			if($exporter_is_active=='exporter_active'){
				$data['exporter_is_active']=1;
			}
			elseif($exporter_is_active=='exporter_deactive'){
				$data['exporter_is_active']=0;
			}
			$data['exporter_created_date']          = date("Y-m-d H:i:s");
			$data['exporter_created_user_id']       = $this->session->userdata('user_id');

			if(!empty($_FILES['exporter_nid_card_front_side_image']['name'])){
				$exporter_nid_card_front_side_image="exporter_nid_card_front_side_image";
				$data['exporter_nid_card_front_side_image']    = $this->upload_exporter_nid_card_front_side_image($exporter_nid_card_front_side_image);
			}else{
				$data['exporter_nid_card_front_side_image']    = "";
			}



			if(!empty($_FILES['exporter_nid_card_back_side_image']['name'])){
				$exporter_nid_card_back_side_image="exporter_nid_card_back_side_image";
				$data['exporter_nid_card_back_side_image']    = $this->upload_exporter_nid_card_back_side_image($exporter_nid_card_back_side_image);
			}else{
				$data['exporter_nid_card_back_side_image']    = "";
			}



			if(!empty($_FILES['exporter_profile_photo']['name'])){
				$exporter_profile_photo="exporter_profile_photo";
				$data['exporter_profile_photo']    = $this->upload_exporter_profile_photo($exporter_profile_photo);
			}else{
				$data['exporter_profile_photo']    = "";
			}

             $exporter_data_insert=$this->exporterModel->insert_exporter_info($data);
             $fdata['success_message']="Exporter Info Successfully Added";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddExporter');
        }

    }

    }
    



}








	public function manage_exporter()
	{

        if(in_array("manage_exporter",$this->session->userdata('user_permission'))){
        $data['exporter_data']=$this->exporterModel->select_all_exporter_info();
		$data['admin_main_content']=$this->load->view('Adminpage/Exporter/manageexporter',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        

	}



    public function deactive_exporter($exporter_id){
        if(in_array("publish_exporter",$this->session->userdata('user_permission'))){
        $this->exporterModel->deactive_exporter_account_by_exporter_id($exporter_id);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }




    public function active_exporter($exporter_id){
        if(in_array("publish_exporter",$this->session->userdata('user_permission'))){
        $this->exporterModel->active_exporter_account_by_exporter_id($exporter_id);
        }
        else{
            redirect('Cholotransportowner/Dashboard');
        }
    }



    public function exporterimageview($exporter_id){
        $data['exporter_image_data']=$this->exporterModel->select_exporter_image_data_by_exporter_id($exporter_id);
        $this->load->view('Adminpage/Exporter/exporter_image_view',$data);
    }




    public function edit_exporter_info($exporter_info_id){
        if(in_array("edit_exporter",$this->session->userdata('user_permission'))){
        $data['edit_exporter_data']=$this->exporterModel->select_exporter_info_data_by_exporter_id($exporter_info_id);
        if(empty($data['edit_exporter_data'])){
            redirect('Cholotransportowner/ManageExporter');
        }else{
        $data['admin_main_content']=$this->load->view('Adminpage/Exporter/edit_exporter_info',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }




    public function save_update_exporter_info($exporter_info_id){
        
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditExporterInfo/'.$exporter_info_id);
        }else{
		$data=array();
		$exporter_full_name					        = $this->input->post('exporter_full_name',TRUE);
		$exporter_address					        = $this->input->post('exporter_address',TRUE);
		$exporter_email_address				        = $this->input->post('exporter_email_address',TRUE);
		$exporter_primary_mobile_number		        = $this->input->post('exporter_primary_mobile_number',TRUE);
		$exporter_op1_mobile_number			        = $this->input->post('exporter_op1_mobile_number',TRUE);
		$exporter_op2_mobile_number			        = $this->input->post('exporter_op2_mobile_number',TRUE);
		$exporter_user_name					        = $this->input->post('exporter_user_name',TRUE);
		$exporter_user_password				        = $this->input->post('exporter_user_password',TRUE);
        $exporter_nid_number					        = $this->input->post('exporter_nid_number',TRUE);
        $hidden_exporter_nid_card_front_side_image   = $this->input->post('hidden_exporter_nid_card_front_side_image',TRUE);
        $hidden_exporter_nid_card_back_side_image    = $this->input->post('hidden_exporter_nid_card_back_side_image',TRUE);
        $hidden_exporter_profile_photo               = $this->input->post('hidden_exporter_profile_photo',TRUE);

		$this->form_validation->set_rules('exporter_full_name', 'exporter_full_name', 'required|trim');
		$this->form_validation->set_rules('exporter_address', 'exporter_address', 'trim');
		$this->form_validation->set_rules('exporter_email_address', 'exporter_email_address', 'trim');
		$this->form_validation->set_rules('exporter_primary_mobile_number', 'exporter_primary_mobile_number', 'required|trim');
		$this->form_validation->set_rules('exporter_op1_mobile_number', 'exporter_op1_mobile_number', 'trim');
		$this->form_validation->set_rules('exporter_op2_mobile_number', 'exporter_op2_mobile_number', 'trim');
		$this->form_validation->set_rules('exporter_user_name', 'exporter_user_name', 'trim');
		$this->form_validation->set_rules('exporter_user_password', 'exporter_user_password', 'required|trim');
		$this->form_validation->set_rules('exporter_nid_number', 'exporter_nid_number', 'trim');

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditExporterInfo/'.$exporter_info_id);
		}else{

            $check_exporter_phone_number             = $this->exporterModel->select_exporter_info_data_by_exporter_id($exporter_info_id)->exporter_primary_mobile_number;
            $check_exporter_email_address            = $this->exporterModel->select_exporter_info_data_by_exporter_id($exporter_info_id)->exporter_email_address;
            
            if($check_exporter_phone_number!=$exporter_primary_mobile_number){
             $check_exporter_phone_number_is_exist    =$this->exporterModel->check_exporter_phone_number_is_exist($exporter_primary_mobile_number);
            }else{
                $check_exporter_phone_number_is_exist=0;
            }

            if($check_exporter_email_address!=$exporter_email_address){
             $check_exporter_email_is_exist           =$this->exporterModel->check_exporter_email_is_exist($exporter_email_address);
            }else{
                $check_exporter_email_is_exist=0;
            }
          

            
            if($check_exporter_phone_number_is_exist==1 || $check_exporter_email_is_exist==1){
                $fdata['error_message']="Exporter Mobile Number Or Email Allready Exist in Our System.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditExporterInfo/'.$exporter_info_id); 
            }else{
			$data['exporter_full_name']				= $exporter_full_name;
			$data['exporter_address']				= $exporter_address;
			$data['exporter_email_address']			= $exporter_email_address;
			$data['exporter_primary_mobile_number']	= $exporter_primary_mobile_number;
			$data['exporter_op1_mobile_number']		= $exporter_op1_mobile_number;
			$data['exporter_op2_mobile_number']		= $exporter_op2_mobile_number;
			$data['exporter_user_name']				= $exporter_user_name;
			$data['exporter_user_password']			= $exporter_user_password;
			$data['exporter_nid_number']			= $exporter_nid_number;


			if(!empty($_FILES['exporter_nid_card_front_side_image']['name'])){
                $this->exporterModel->delete_old_exporter_nid_card_front_side_image($exporter_info_id);
				$exporter_nid_card_front_side_image="exporter_nid_card_front_side_image";
				$data['exporter_nid_card_front_side_image']    = $this->upload_exporter_nid_card_front_side_image($exporter_nid_card_front_side_image);
			}else{
				$data['exporter_nid_card_front_side_image']    = $hidden_exporter_nid_card_front_side_image;
			}



			if(!empty($_FILES['exporter_nid_card_back_side_image']['name'])){
                $this->exporterModel->delete_old_exporter_nid_card_back_side_image($exporter_info_id);
				$exporter_nid_card_back_side_image="exporter_nid_card_back_side_image";
				$data['exporter_nid_card_back_side_image']    = $this->upload_exporter_nid_card_back_side_image($exporter_nid_card_back_side_image);
			}else{
				$data['exporter_nid_card_back_side_image']    = $hidden_exporter_nid_card_back_side_image;
			}



			if(!empty($_FILES['exporter_profile_photo']['name'])){
                $this->exporterModel->delete_old_exporter_profile_photo($exporter_info_id);
				$exporter_profile_photo="exporter_profile_photo";
				$data['exporter_profile_photo']    = $this->upload_exporter_profile_photo($exporter_profile_photo);
			}else{
				$data['exporter_profile_photo']    = $hidden_exporter_profile_photo;
            }
            

            $data['exporter_info_id']=$exporter_info_id;
            $exporter_data_update=$this->exporterModel->update_exporter_info($data);

             $fdata['success_message']="Exporter Info Updated Successfully";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditExporterInfo/'.$exporter_info_id);
        }

    }

    }

    }





    public function view_exporter_info($exporter_info_id){
        $data['edit_exporter_data']=$this->exporterModel->select_exporter_info_data_by_exporter_id($exporter_info_id);
        if(empty($data['edit_exporter_data'])){
            redirect('Cholotransportowner/ManageExporter');
        }else{
        $data['admin_main_content']=$this->load->view('Adminpage/Exporter/view_exporter_info',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }
    }

    











}


