<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class DriverController extends CI_Controller {

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



    public function send_driver_sms(){
        $driver_number         = trim($this->input->post('driver_mobile_number',TRUE));
        $driver_sms_details    = trim($this->input->post('driver_sms_details',TRUE));
        $driver_info_id        = trim($this->input->post('driver_info_id',TRUE));

        $this->form_validation->set_rules('driver_mobile_number', 'driver_mobile_number', 'trim|required');
        $this->form_validation->set_rules('driver_sms_details', 'driver_sms_details', 'trim|required');
        $this->form_validation->set_rules('driver_info_id', 'driver_info_id', 'trim|required');
		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ViewDriverInfo/'.$driver_info_id);
		}else{

        $sms_send=$this->send_sms($driver_number,$driver_sms_details);
        if($sms_send=='SUCCESS'){
            $fdata['success_message']="SMS SuccessFully Send To Vehicles Driver User ";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewDriverInfo/'.$driver_info_id);
        }else{
            $fdata['error_message']="SMS Sending Failed... Because ".$sms_send;
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ViewDriverInfo/'.$driver_info_id);
        }

    }

    }










	
	public function driver_add()
	{
        if(in_array("add_driver",$this->session->userdata('user_permission'))){
		$data['admin_main_content']=$this->load->view('Adminpage/Driver/adddriver','',TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
	}




    private function upload_driver_nid_card_front_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["driver_nid_card_front_side_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/driver_images/';
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
                redirect('Cholotransportowner/AddDriver');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }






	private function upload_driver_nid_card_back_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["driver_nid_card_back_side_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/driver_images/';
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
                redirect('Cholotransportowner/AddDriver');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
	}
	




	private function upload_driver_profile_photo($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["driver_profile_photo"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/driver_images/';
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
                redirect('Cholotransportowner/AddDriver');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }









	public function save_driver_info_data(){

        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddDriver');
        }else{
        $driver_info_data=array();
        
		$driver_name					        = $this->input->post('driver_name',TRUE);
		$driver_address	                        = $this->input->post('driver_address',TRUE);
		$driver_mobile_number		            = $this->input->post('driver_mobile_number',TRUE);
		$driver_op_mobile_number		        = $this->input->post('driver_op_mobile_number',TRUE);
		$driver_card_no			                = $this->input->post('driver_card_no',TRUE);
		$driver_parents_mobile_number			= $this->input->post('driver_parents_mobile_number',TRUE);
		$driver_account_password			    = $this->input->post('driver_account_password',TRUE);
		$driver_license_number			        = $this->input->post('driver_license_number',TRUE);
		$driver_license_end_date			    = $this->input->post('driver_license_end_date',TRUE);
		$driver_nid_card_no			            = $this->input->post('driver_nid_card_no',TRUE);
        $driver_is_active					    = $this->input->post('driver_is_active',TRUE);
      
		$this->form_validation->set_rules('driver_name', 'driver_name', 'required|trim');
		$this->form_validation->set_rules('driver_mobile_number', 'driver_mobile_number', 'required|trim');
		$this->form_validation->set_rules('driver_address', 'driver_address', 'trim');
		$this->form_validation->set_rules('driver_op_mobile_number', 'driver_op_mobile_number', 'trim');
        $this->form_validation->set_rules('driver_card_no', 'driver_card_no', 'trim');
        
		$this->form_validation->set_rules('driver_parents_mobile_number', 'driver_parents_mobile_number', 'trim');
		$this->form_validation->set_rules('driver_account_password', 'driver_account_password', 'trim');
		$this->form_validation->set_rules('driver_license_number', 'driver_license_number', 'trim');
		$this->form_validation->set_rules('driver_license_end_date', 'driver_license_end_date', 'trim');
		$this->form_validation->set_rules('driver_nid_card_no', 'driver_nid_card_no', 'trim');
		

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddDriver');
		}else{

            $check_driver_phone_number_is_exist                     = $this->driverModel->check_driver_phone_number_is_exist($driver_mobile_number);
            if($check_driver_phone_number_is_exist==1){
                $fdata['error_message']="Driver Mobile Number Allready Exist in Our System.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddDriver'); 
            }else{
			$driver_info_data['driver_name']				                = $driver_name;
			$driver_info_data['driver_mobile_number']                       = $driver_mobile_number;
			$driver_info_data['driver_op_mobile_number']			        = $driver_op_mobile_number;
			$driver_info_data['driver_address']	                            = $driver_address;
			$driver_info_data['driver_nid_card_no']		                    = $driver_nid_card_no;
			$driver_info_data['driver_license_number']		                = $driver_license_number;
			$driver_info_data['driver_license_end_date']		            = $driver_license_end_date;
			$driver_info_data['driver_parents_mobile_number']		        = $driver_parents_mobile_number;
			$driver_info_data['driver_card_no']		                        = $driver_card_no;
            $driver_info_data['driver_account_password']		            = $driver_account_password;
        
            if($driver_is_active=='driver_active'){
				$driver_info_data['driver_is_active']=1;
			}
			elseif($driver_is_active=='driver_deactive'){
				$driver_info_data['driver_is_active']=0;
			}
			$driver_info_data['driver_info_created_date']=date("Y-m-d H:i:s");
			$driver_info_data['driver_created_user_id']=$this->session->userdata('user_id');

			if(!empty($_FILES['driver_nid_card_front_side_image']['name'])){
				$driver_nid_card_front_side_image="driver_nid_card_front_side_image";
				$driver_info_data['driver_nid_card_front_side_image']    = $this->upload_driver_nid_card_front_side_image($driver_nid_card_front_side_image);
			}else{
				$driver_info_data['driver_nid_card_front_side_image']    = "";
			}



			if(!empty($_FILES['driver_nid_card_back_side_image']['name'])){
				$driver_nid_card_back_side_image="driver_nid_card_back_side_image";
				$driver_info_data['driver_nid_card_back_side_image']    = $this->upload_driver_nid_card_back_side_image($driver_nid_card_back_side_image);
			}else{
				$driver_info_data['driver_nid_card_back_side_image']    = "";
			}



			if(!empty($_FILES['driver_profile_photo']['name'])){
				$driver_profile_photo="driver_profile_photo";
				$driver_info_data['driver_profile_photo']    = $this->upload_driver_profile_photo($driver_profile_photo);
			}else{
				$driver_info_data['driver_profile_photo']    = "";
			}

             $driver_info_id    =   $this->driverModel->insert_driver_info($driver_info_data);
             $fdata['success_message']=" Driver Info Successfully Added";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageDriverImage/'.$driver_info_id);

        }

    }

    }
    
}




        public function manage_driver_image($driver_info_id)
        {
            $valid_driver_info_id= intval($driver_info_id);
            $driver_info_data = $this->driverModel->select_all_driver_info_by_driver_info_id($valid_driver_info_id);
            if($driver_info_data){
            $data['driver_data']=$driver_info_data;
            $data['driver_image_data']= $this->driverModel->select_all_driver_image_data_by_driver_info_id($driver_info_data->driver_info_id);
            $data['admin_main_content']=$this->load->view('Adminpage/Driver/manage_driver_image',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
           
            }else{
                redirect('Cholotransportowner/AddDriver');
            }


        }


        public function driverimageview($driver_id){
            $data['driver_image_data']=$this->driverModel->select_driver_image_data_by_driver_id($driver_id);
            $this->load->view('Adminpage/Driver/driver_image_view',$data);
        }



        
	private function upload_driver_paper_photo($checkimage,$driver_info_id){
        $sdata=array();
        $new_name = time().$_FILES["driver_images_name"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/driver_images/';
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
                redirect('Cholotransportowner/ManageDriverImage/'.$driver_info_id);
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }




        public function save_driver_image($driver_info_id){
            $driver_image_data=array();
            if(empty($_POST)){
                $fdata['error_message']="Direct Access Not Allowed";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageDriverImage/'.$driver_info_id);
            }else{
                $driver_paper_name	    = trim($this->input->post('driver_paper_name',TRUE));
                $driver_info_id	    = trim($this->input->post('driver_info_id',TRUE));

                if(empty($_FILES['driver_images_name']['name']) || $driver_paper_name==''){
                    $fdata['error_message']="Red Mark Field Must Required.Validation Failed..";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageDriverImage/'.$driver_info_id);
                }else{
                    $driver_images_name                                 = "driver_images_name";
                    $driver_image_data['driver_images_name']            = $this->upload_driver_paper_photo($driver_images_name,$driver_info_id);
                    $driver_image_data['driver_info_id']                = $driver_info_id;
                    $driver_image_data['driver_paper_name']             = $driver_paper_name;
                    $driver_image_data['driver_images_created_date']    = date("Y-m-d H:i:s");
                    $driver_image_data['driver_images_created_user_id'] = $this->session->userdata('user_id');
                    $driver_image_data['driver_images_is_active']       = 1;
                    $save_driver_image_data= $this->driverModel->insert_driver_image_info_data($driver_image_data);
                    $fdata['success_message']="Driver Images Uploaded Success..";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageDriverImage/'.$driver_info_id);


                }



            }

        }




        public function delete_driver_paper_images($driver_images_id){
            $driver_info_id=$this->driverModel->driver_info_id_by_driver_images_id($driver_images_id);
            $this->driverModel->delete_driver_paper_images_with_file($driver_images_id);
            $fdata['success_message']="Driver Uploaded Image Deleted Success..";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageDriverImage/'.$driver_info_id);
        }



        public function manage_driver(){
            if(in_array("manage_driver",$this->session->userdata('user_permission'))){
            $data['driver_data']=$this->driverModel->select_all_driver_info();
            $data['admin_main_content']=$this->load->view('Adminpage/Driver/managedriver',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
            }else{
                redirect('Cholotransportowner/Dashboard');
            }
        }



        public function edit_driver_info($driver_info_id){

            if(in_array("edit_driver",$this->session->userdata('user_permission'))){
            $data['edit_driver_data']=$this->driverModel->select_all_driver_info_by_driver_info_id($driver_info_id);
            if(empty($data['edit_driver_data'])){
                redirect('Cholotransportowner/ManageDriver');
            }else{
            $data['admin_main_content']=$this->load->view('Adminpage/Driver/edit_driver_info',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
            }
            }else{
                redirect('Cholotransportowner/Dashboard');
            }


        }



        public function save_update_driver_info($driver_info_id){
            if(empty($_POST)){
                $fdata['error_message']="Direct Access Not Allowed";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/EditDriverInfo/'.$driver_info_id);
            }else{
            $driver_info_data=array();
            
            $driver_name					        = $this->input->post('driver_name',TRUE);
            $driver_address	                        = $this->input->post('driver_address',TRUE);
            $driver_mobile_number		            = $this->input->post('driver_mobile_number',TRUE);
            $driver_op_mobile_number		        = $this->input->post('driver_op_mobile_number',TRUE);
            $driver_card_no			                = $this->input->post('driver_card_no',TRUE);
            $driver_parents_mobile_number			= $this->input->post('driver_parents_mobile_number',TRUE);
            $driver_account_password			    = $this->input->post('driver_account_password',TRUE);
            $driver_license_number			        = $this->input->post('driver_license_number',TRUE);
            $driver_license_end_date			    = $this->input->post('driver_license_end_date',TRUE);
            $driver_nid_card_no			            = $this->input->post('driver_nid_card_no',TRUE);
            $hidden_driver_nid_card_front_side_image= $this->input->post('hidden_driver_nid_card_front_side_image',TRUE);
            $hidden_driver_nid_card_back_side_image = $this->input->post('hidden_driver_nid_card_back_side_image',TRUE);
            $hidden_driver_profile_photo            = $this->input->post('hidden_driver_profile_photo',TRUE);
          
            $this->form_validation->set_rules('driver_name', 'driver_name', 'required|trim');
            $this->form_validation->set_rules('driver_mobile_number', 'driver_mobile_number', 'required|trim');
            $this->form_validation->set_rules('driver_address', 'driver_address', 'trim');
            $this->form_validation->set_rules('driver_op_mobile_number', 'driver_op_mobile_number', 'trim');
            $this->form_validation->set_rules('driver_card_no', 'driver_card_no', 'trim');
            
            $this->form_validation->set_rules('driver_parents_mobile_number', 'driver_parents_mobile_number', 'trim');
            $this->form_validation->set_rules('driver_account_password', 'driver_account_password', 'trim');
            $this->form_validation->set_rules('driver_license_number', 'driver_license_number', 'trim');
            $this->form_validation->set_rules('driver_license_end_date', 'driver_license_end_date', 'trim');
            $this->form_validation->set_rules('driver_nid_card_no', 'driver_nid_card_no', 'trim');
            
    
            if ($this->form_validation->run() == FALSE)
            {
                    $fdata['error_message']="Validation Failed... Red Mark Field Required.";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/EditDriverInfo/'.$driver_info_id);
            }else{
                
                $check_driver_phone_number                  = $this->driverModel->select_all_driver_info_by_driver_info_id($driver_info_id)->driver_mobile_number;
                if($check_driver_phone_number!=$driver_mobile_number){
                    $check_driver_phone_number_is_exist      = $this->driverModel->check_driver_phone_number_is_exist($driver_mobile_number);
                }else{
                    $check_driver_phone_number_is_exist=0;
                }

                if($check_driver_phone_number_is_exist==1){
                    $fdata['error_message']="Driver Mobile Number Allready Exist in Our System.";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/EditDriverInfo/'.$driver_info_id);
                }else{
                $driver_info_data['driver_name']				                = $driver_name;
                $driver_info_data['driver_mobile_number']                       = $driver_mobile_number;
                $driver_info_data['driver_op_mobile_number']			        = $driver_op_mobile_number;
                $driver_info_data['driver_address']	                            = $driver_address;
                $driver_info_data['driver_nid_card_no']		                    = $driver_nid_card_no;
                $driver_info_data['driver_license_number']		                = $driver_license_number;
                $driver_info_data['driver_license_end_date']		            = $driver_license_end_date;
                $driver_info_data['driver_parents_mobile_number']		        = $driver_parents_mobile_number;
                $driver_info_data['driver_card_no']		                        = $driver_card_no;
                $driver_info_data['driver_account_password']		            = $driver_account_password;
                $driver_info_data['driver_info_id']		                        = $driver_info_id;
                    
   
    
                if(!empty($_FILES['driver_nid_card_front_side_image']['name'])){
                    $driver_nid_card_front_side_image="driver_nid_card_front_side_image";
                    $driver_info_data['driver_nid_card_front_side_image']    = $this->upload_driver_nid_card_front_side_image($driver_nid_card_front_side_image);
                    $this->driverModel->delete_old_driver_nid_card_front_side_image($driver_info_id);
                }else{
                    $driver_info_data['driver_nid_card_front_side_image']    = $hidden_driver_nid_card_front_side_image;
                }
    
    
    
                if(!empty($_FILES['driver_nid_card_back_side_image']['name'])){
                    $driver_nid_card_back_side_image="driver_nid_card_back_side_image";
                    $driver_info_data['driver_nid_card_back_side_image']    = $this->upload_driver_nid_card_back_side_image($driver_nid_card_back_side_image);
                    $this->driverModel->delete_old_driver_nid_back_side_image($driver_info_id);
                  
                }else{
                    $driver_info_data['driver_nid_card_back_side_image']    = $hidden_driver_nid_card_back_side_image;
                }
    
    
    
                if(!empty($_FILES['driver_profile_photo']['name'])){
                    $driver_profile_photo="driver_profile_photo";
                    $driver_info_data['driver_profile_photo']    = $this->upload_driver_profile_photo($driver_profile_photo);
                    $this->driverModel->delete_old_driver_profile_photo($driver_info_id);
                }else{
                    $driver_info_data['driver_profile_photo']    = $hidden_driver_profile_photo;
                }
                 $driver_info_update    =   $this->driverModel->update_driver_info($driver_info_data);
               
                 $fdata['success_message']=" Driver Info Data Successfully Updated";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/EditDriverInfo/'.$driver_info_id);
    
            }
    
        }
    
        }
        }





        public function deactive_driver($driver_id){
            $this->driverModel->deactive_driver_account_by_driver_id($driver_id);
        }
    
    
    
    
        public function active_driver($driver_id){
            $this->driverModel->active_driver_account_by_driver_id($driver_id);
        }




        public function view_driver_info($driver_info_id){
            $data['view_driver_data']=$this->driverModel->select_all_driver_info_by_driver_info_id($driver_info_id);
            if(empty($data['view_driver_data'])){
                redirect('Cholotransportowner/ManageDriver');
            }else{
            $data['admin_main_content']=$this->load->view('Adminpage/Driver/view_driver_info',$data,TRUE);
            $this->load->view("Adminpage/admin_master",$data);
            }
        }



        
	public function barcode()
	{
		// You can put anything here to generate of barcode
		$string = 'CT1234567891012';
		$this->set_barcode($string);
	}
	
	private function set_barcode($code)
	{
	
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        $file = Zend_Barcode::draw('code128', 'image', array('text' => $code), array());
         $store_image = imagepng($file,"images/chalan_bar_code/{$code}.png");
        echo  "images/chalan_bar_code/".$code.'.png';

        
	}
    
        
    
    
    
    



















}
