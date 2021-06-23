<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class ImporterController extends CI_Controller {

	/**
	 * All ImporterController Page for this controller.
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



    public function send_importer_sms(){
        $importer_number         = trim($this->input->post('importer_primary_mobile_number',TRUE));
        $importer_sms_details    = trim($this->input->post('importer_sms_details',TRUE));
        $importer_info_id        = trim($this->input->post('importer_info_id',TRUE));

        $this->form_validation->set_rules('importer_primary_mobile_number', 'importer_primary_mobile_number', 'trim|required');
        $this->form_validation->set_rules('importer_sms_details', 'importer_sms_details', 'trim|required');
        $this->form_validation->set_rules('importer_info_id', 'importer_info_id', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ViewImporterInfo/'.$importer_info_id);
		}else{

        $sms_send=$this->send_sms($importer_number,$importer_sms_details);
        if($sms_send=='SUCCESS'){
            $fdata['success_message']="SMS SuccessFully Send To Importer User ";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewImporterInfo/'.$importer_info_id);
        }else{
            $fdata['error_message']="SMS Sending Failed... Because ".$sms_send;
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewImporterInfo/'.$importer_info_id);
        }

    }

    }





	public function importer_add()
	{
        if(in_array("add_importer",$this->session->userdata('user_permission'))){
		$data['admin_main_content']=$this->load->view('Adminpage/Importer/addimporter','',TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
	}



	private function upload_importer_nid_card_front_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["importer_nid_card_front_side_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/importer_images/';
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
                redirect('Cholotransportowner/AddImporter');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }






	private function upload_importer_nid_card_back_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["importer_nid_card_back_side_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/importer_images/';
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
                redirect('Cholotransportowner/AddImporter');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
	}
	




	private function upload_importer_profile_photo($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["importer_profile_photo"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/importer_images/';
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
                redirect('Cholotransportowner/AddImporter');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }









	public function save_importer_data(){
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddImporter');
        }else{
		$data=array();
		$transport_owner_full_name_bn					= $this->input->post('transport_owner_full_name_bn',TRUE);
		$transport_owner_full_name_en					= $this->input->post('transport_owner_full_name_en',TRUE);
		$transport_owner_permanent_address			    = $this->input->post('transport_owner_permanent_address',TRUE);
		$importer_address					            = $this->input->post('importer_address',TRUE);
		$importer_email_address				            = $this->input->post('importer_email_address',TRUE);
		$importer_primary_mobile_number		            = $this->input->post('importer_primary_mobile_number',TRUE);
		$importer_op1_mobile_number			            = $this->input->post('importer_op1_mobile_number',TRUE);
		
		$transport_name_en					            = $this->input->post('transport_name_en',TRUE);
		$transport_name_bn					            = $this->input->post('transport_name_bn',TRUE);
		$transport_owner_blood_group		            = $this->input->post('transport_owner_blood_group',TRUE);
		$transport_owner_birth_date		                = $this->input->post('transport_owner_birth_date',TRUE);
		$transport_owner_member_no		                = $this->input->post('transport_owner_member_no',TRUE);
		$transport_owner_card_no		                = $this->input->post('transport_owner_card_no',TRUE);
		$transport_owner_QRcode_no		                = $this->input->post('transport_owner_QRcode_no',TRUE);
		$transport_owner_designation		            = $this->input->post('transport_owner_designation',TRUE);
		$importer_user_password				            = $this->input->post('importer_user_password',TRUE);
		$importer_nid_number			                = $this->input->post('importer_nid_number',TRUE);
		$importer_is_active					            = $this->input->post('importer_is_active',TRUE);
		$transport_owner_member_type					= $this->input->post('transport_owner_member_type',TRUE);
		$transport_owner_relative_name					= $this->input->post('transport_owner_relative_name',TRUE);
		$transport_owner_relative_number				= $this->input->post('transport_owner_relative_number',TRUE);
		
		$this->form_validation->set_rules('transport_owner_full_name_bn', 'transport_owner_full_name_bn', 'required|trim');
		$this->form_validation->set_rules('importer_address', 'importer_address', 'trim');
		$this->form_validation->set_rules('importer_email_address', 'importer_email_address', 'trim');
		$this->form_validation->set_rules('importer_primary_mobile_number', 'importer_primary_mobile_number', 'required|trim');
		$this->form_validation->set_rules('importer_op1_mobile_number', 'importer_op1_mobile_number', 'trim');
		
		$this->form_validation->set_rules('importer_user_password', 'importer_user_password', 'required|trim');
		$this->form_validation->set_rules('importer_nid_number', 'importer_nid_number', 'trim');
		$this->form_validation->set_rules('importer_is_active', 'importer_is_active', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddImporter');
		}else{

            $check_importer_phone_number_is_exist    =$this->importerModel->check_importer_phone_number_is_exist($importer_primary_mobile_number);
            if($check_importer_phone_number_is_exist==1){
                $fdata['error_message']="Importer Mobile Number Allready Exist in Our System.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddImporter'); 
            }else{
			$data['transport_owner_full_name_bn']				= $transport_owner_full_name_bn;
			$data['transport_owner_full_name_en']				= $transport_owner_full_name_en;

			$data['importer_address']				= $importer_address;
			$data['importer_email_address']			= $importer_email_address;
			$data['importer_primary_mobile_number']	= $importer_primary_mobile_number;
			$data['importer_op1_mobile_number']		= $importer_op1_mobile_number;

			$data['transport_owner_permanent_address']				= $transport_owner_permanent_address;

			$data['transport_name_en']				= $transport_name_en;
			$data['transport_name_bn']				= $transport_name_bn;
			$data['transport_owner_blood_group']				= $transport_owner_blood_group;
			$data['transport_owner_birth_date']				= $transport_owner_birth_date;
			$data['transport_owner_member_no']				= $transport_owner_member_no;
			$data['transport_owner_card_no']				= $transport_owner_card_no;
			$data['transport_owner_QRcode_no']				= $transport_owner_QRcode_no;
			$data['transport_owner_relative_name']				= $transport_owner_relative_name;
			$data['transport_owner_relative_number']				= $transport_owner_relative_number;
			$data['importer_user_password']			= $importer_user_password;
			$data['importer_nid_number']			= $importer_nid_number;
			$data['transport_owner_designation']			= $transport_owner_designation;
			if($importer_is_active=='importer_active'){
				$data['importer_is_active']=1;
			}
			elseif($importer_is_active=='importer_deactive'){
				$data['importer_is_active']=0;
			}




			if($transport_owner_member_type=='transport_owner_member'){
				$data['transport_owner_member_type']='Member';
			}
			elseif($transport_owner_member_type=='transport_owner_president'){
				$data['transport_owner_member_type']="President";
			}


			$data['importer_created_date']=date("Y-m-d H:i:s");
			$data['importer_created_user_id']=$this->session->userdata('user_id');

			if(!empty($_FILES['importer_nid_card_front_side_image']['name'])){
				$importer_nid_card_front_side_image="importer_nid_card_front_side_image";
				$data['importer_nid_card_front_side_image']    = $this->upload_importer_nid_card_front_side_image($importer_nid_card_front_side_image);
			}else{
				$data['importer_nid_card_front_side_image']    = "";
			}



			if(!empty($_FILES['importer_nid_card_back_side_image']['name'])){
				$importer_nid_card_back_side_image="importer_nid_card_back_side_image";
				$data['importer_nid_card_back_side_image']    = $this->upload_importer_nid_card_back_side_image($importer_nid_card_back_side_image);
			}else{
				$data['importer_nid_card_back_side_image']    = "";
			}



			if(!empty($_FILES['importer_profile_photo']['name'])){
				$importer_profile_photo="importer_profile_photo";
				$data['importer_profile_photo']    = $this->upload_importer_profile_photo($importer_profile_photo);
			}else{
				$data['importer_profile_photo']    = "";
			}

             $importer_data_insert=$this->importerModel->insert_importer_info($data);
             $fdata['success_message']="importer Info Successfully Added";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddImporter');
        }

    }

    }
    



}








	public function manage_importer()
	{
        if(in_array("manage_importer",$this->session->userdata('user_permission'))){
        $data['member_importer_data']=$this->importerModel->select_all_member_importer_info();
        $data['president_importer_data']=$this->importerModel->select_all_president_importer_info();
		$data['admin_main_content']=$this->load->view('Adminpage/Importer/manageimporter',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
	}



    public function deactive_importer($importer_id){
        if(in_array("publish_importer",$this->session->userdata('user_permission'))){
        $this->importerModel->deactive_importer_account_by_importer_id($importer_id);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }   
    }




    public function active_importer($importer_id){

        if(in_array("publish_importer",$this->session->userdata('user_permission'))){
        $this->importerModel->active_importer_account_by_importer_id($importer_id);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
    
    }


    public function importerimageview($importer_id){
        $data['importer_image_data']=$this->importerModel->select_importer_image_data_by_importer_id($importer_id);
        $this->load->view('Adminpage/Importer/importer_image_view',$data);
    }




    public function edit_importer_info($importer_info_id){
        if(in_array("edit_importer",$this->session->userdata('user_permission'))){
        $data['edit_importer_data']=$this->importerModel->select_importer_info_data_by_importer_id($importer_info_id);
        if(empty($data['edit_importer_data'])){
            redirect('Cholotransportowner/ManageImporter');
        }else{
        $data['admin_main_content']=$this->load->view('Adminpage/Importer/edit_importer_info',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }




    public function save_update_importer_info($importer_info_id){
        
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditImporterInfo/'.$importer_info_id);
        }else{
		$data=array();
        $transport_owner_full_name_bn					= $this->input->post('transport_owner_full_name_bn',TRUE);
		$transport_owner_full_name_en					= $this->input->post('transport_owner_full_name_en',TRUE);
		$transport_owner_permanent_address			    = $this->input->post('transport_owner_permanent_address',TRUE);
		$importer_address					            = $this->input->post('importer_address',TRUE);
		$importer_email_address				            = $this->input->post('importer_email_address',TRUE);
		$importer_primary_mobile_number		            = $this->input->post('importer_primary_mobile_number',TRUE);
		$importer_op1_mobile_number			            = $this->input->post('importer_op1_mobile_number',TRUE);
		
		$transport_name_en					            = $this->input->post('transport_name_en',TRUE);
		$transport_name_bn					            = $this->input->post('transport_name_bn',TRUE);
		$transport_owner_blood_group		            = $this->input->post('transport_owner_blood_group',TRUE);
		$transport_owner_birth_date		                = $this->input->post('transport_owner_birth_date',TRUE);
		$transport_owner_member_no		                = $this->input->post('transport_owner_member_no',TRUE);
		$transport_owner_card_no		                = $this->input->post('transport_owner_card_no',TRUE);
		$transport_owner_QRcode_no		                = $this->input->post('transport_owner_QRcode_no',TRUE);
		$transport_owner_designation		            = $this->input->post('transport_owner_designation',TRUE);
		$importer_user_password				            = $this->input->post('importer_user_password',TRUE);
		$importer_nid_number			                = $this->input->post('importer_nid_number',TRUE);
		$importer_is_active					            = $this->input->post('importer_is_active',TRUE);
		$transport_owner_member_type					= $this->input->post('transport_owner_member_type',TRUE);
		$transport_owner_relative_name					= $this->input->post('transport_owner_relative_name',TRUE);
		$transport_owner_relative_number				= $this->input->post('transport_owner_relative_number',TRUE);
		$hidden_importer_nid_card_front_side_image		= $this->input->post('hidden_importer_nid_card_front_side_image',TRUE);
		$hidden_importer_nid_card_back_side_image		= $this->input->post('hidden_importer_nid_card_back_side_image',TRUE);
		$hidden_importer_profile_photo		            = $this->input->post('hidden_importer_profile_photo',TRUE);
		
		$this->form_validation->set_rules('transport_owner_full_name_bn', 'transport_owner_full_name_bn', 'required|trim');
		$this->form_validation->set_rules('importer_address', 'importer_address', 'trim');
		$this->form_validation->set_rules('importer_email_address', 'importer_email_address', 'trim');
		$this->form_validation->set_rules('importer_primary_mobile_number', 'importer_primary_mobile_number', 'required|trim');
		$this->form_validation->set_rules('importer_op1_mobile_number', 'importer_op1_mobile_number', 'trim');
		

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditImporterInfo/'.$importer_info_id);
		}else{

            $check_importer_phone_number             = $this->importerModel->select_importer_info_data_by_importer_id($importer_info_id)->importer_primary_mobile_number;

            
            if($check_importer_phone_number!=$importer_primary_mobile_number){
             $check_importer_phone_number_is_exist    =$this->importerModel->check_importer_phone_number_is_exist($importer_primary_mobile_number);
            }else{
                $check_importer_phone_number_is_exist=0;
            }
             
          

            if($check_importer_phone_number_is_exist==1){
                $fdata['error_message']="Importer Mobile Number Allready Exist in Our System.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditImporterInfo/'.$importer_info_id); 
            }else{
			
                $data['transport_owner_full_name_bn']				= $transport_owner_full_name_bn;
                $data['transport_owner_full_name_en']				= $transport_owner_full_name_en;
    
                $data['importer_address']				= $importer_address;
                $data['importer_email_address']			= $importer_email_address;
                $data['importer_primary_mobile_number']	= $importer_primary_mobile_number;
                $data['importer_op1_mobile_number']		= $importer_op1_mobile_number;
    
                $data['transport_owner_permanent_address']				= $transport_owner_permanent_address;
    
                $data['transport_name_en']				= $transport_name_en;
                $data['transport_name_bn']				= $transport_name_bn;
                $data['transport_owner_blood_group']				= $transport_owner_blood_group;
                $data['transport_owner_birth_date']				= $transport_owner_birth_date;
                $data['transport_owner_member_no']				= $transport_owner_member_no;
                $data['transport_owner_card_no']				= $transport_owner_card_no;
                $data['transport_owner_QRcode_no']				= $transport_owner_QRcode_no;
                $data['transport_owner_relative_name']				= $transport_owner_relative_name;
                $data['transport_owner_relative_number']				= $transport_owner_relative_number;
                $data['importer_user_password']			= $importer_user_password;
                $data['importer_nid_number']			= $importer_nid_number;
                $data['transport_owner_designation']			= $transport_owner_designation;


			if(!empty($_FILES['importer_nid_card_front_side_image']['name'])){
                $this->importerModel->delete_old_importer_nid_card_front_side_image($importer_info_id);
				$importer_nid_card_front_side_image="importer_nid_card_front_side_image";
				$data['importer_nid_card_front_side_image']    = $this->upload_importer_nid_card_front_side_image($importer_nid_card_front_side_image);
			}else{
				$data['importer_nid_card_front_side_image']    = $hidden_importer_nid_card_front_side_image;
			}



			if(!empty($_FILES['importer_nid_card_back_side_image']['name'])){
                $this->importerModel->delete_old_importer_nid_card_back_side_image($importer_info_id);
				$importer_nid_card_back_side_image="importer_nid_card_back_side_image";
				$data['importer_nid_card_back_side_image']    = $this->upload_importer_nid_card_back_side_image($importer_nid_card_back_side_image);
			}else{
				$data['importer_nid_card_back_side_image']    = $hidden_importer_nid_card_back_side_image;
			}



			if(!empty($_FILES['importer_profile_photo']['name'])){
                $this->importerModel->delete_old_importer_profile_photo($importer_info_id);
				$importer_profile_photo="importer_profile_photo";
				$data['importer_profile_photo']    = $this->upload_importer_profile_photo($importer_profile_photo);
			}else{
				$data['importer_profile_photo']    = $hidden_importer_profile_photo;
            }
            
            $data['importer_info_id']=$importer_info_id;

            $importer_data_update=$this->importerModel->update_importer_info($data);

             $fdata['success_message']="Importer Info Updated Successfully";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditImporterInfo/'.$importer_info_id);
        }

    }

    }

    }





    public function view_importer_info($importer_info_id){
        $data['edit_importer_data']=$this->importerModel->select_importer_info_data_by_importer_id($importer_info_id);
        if(empty($data['edit_importer_data'])){
            redirect('Cholotransportowner/ManageImporter');
        }else{
        $data['admin_main_content']=$this->load->view('Adminpage/Importer/view_importer_info',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }
    }

    
    











}
