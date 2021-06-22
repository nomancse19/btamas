<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class CnfController extends CI_Controller {

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



	private function upload_cnf_nid_card_front_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["cnf_nid_card_front_side_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/cnf_images/';
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
                redirect('Cholotransportowner/AddCnf');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }






	private function upload_cnf_nid_card_back_side_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["cnf_nid_card_back_side_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/cnf_images/';
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
                redirect('Cholotransportowner/AddCnf');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
	}
	




	private function upload_cnf_profile_photo($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["cnf_profile_photo"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/cnf_images/';
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
                redirect('Cholotransportowner/AddCnf');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }









	public function save_cnf_data(){

        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddCnf');
        }else{
		$data=array();
		$cnf_full_name					= $this->input->post('cnf_full_name',TRUE);
		$cnf_address					= $this->input->post('cnf_address',TRUE);
		$cnf_email_address				= $this->input->post('cnf_email_address',TRUE);
		$cnf_primary_mobile_number		= $this->input->post('cnf_primary_mobile_number',TRUE);
		$cnf_op1_mobile_number			= $this->input->post('cnf_op1_mobile_number',TRUE);
		$cnf_op2_mobile_number			= $this->input->post('cnf_op2_mobile_number',TRUE);
		$cnf_user_name					= $this->input->post('cnf_user_name',TRUE);
		$cnf_user_password				= $this->input->post('cnf_user_password',TRUE);
		$cnf_nid_number					= $this->input->post('cnf_nid_number',TRUE);
		$cnf_is_active					= $this->input->post('cnf_is_active',TRUE);
		
		$this->form_validation->set_rules('cnf_full_name', 'cnf_full_name', 'required|trim');
		$this->form_validation->set_rules('cnf_address', 'cnf_address', 'trim');
		$this->form_validation->set_rules('cnf_email_address', 'cnf_email_address', 'trim');
		$this->form_validation->set_rules('cnf_primary_mobile_number', 'cnf_primary_mobile_number', 'required|trim');
		$this->form_validation->set_rules('cnf_op1_mobile_number', 'cnf_op1_mobile_number', 'trim');
		$this->form_validation->set_rules('cnf_op2_mobile_number', 'cnf_op2_mobile_number', 'trim');
		$this->form_validation->set_rules('cnf_user_name', 'cnf_user_name', 'trim');
		$this->form_validation->set_rules('cnf_user_password', 'cnf_user_password', 'required|trim');
		$this->form_validation->set_rules('cnf_nid_number', 'cnf_nid_number', 'trim');
		$this->form_validation->set_rules('cnf_is_active', 'cnf_is_active', 'trim|required');

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddCnf');
		}else{

            $check_cnf_phone_number_is_exist    =$this->cnfModel->check_cnf_phone_number_is_exist($cnf_primary_mobile_number);
            $check_cnf_email_is_exist           =$this->cnfModel->check_cnf_email_is_exist($cnf_email_address);
            if($check_cnf_phone_number_is_exist==1 || $check_cnf_email_is_exist==1){
                $fdata['error_message']="CNF Mobile Number Or Email Allready Exist in Our System.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddCnf'); 
            }else{
			$data['cnf_full_name']				= $cnf_full_name;
			$data['cnf_address']				= $cnf_address;
			$data['cnf_email_address']			= $cnf_email_address;
			$data['cnf_primary_mobile_number']	= $cnf_primary_mobile_number;
			$data['cnf_op1_mobile_number']		= $cnf_op1_mobile_number;
			$data['cnf_op2_mobile_number']		= $cnf_op2_mobile_number;
			$data['cnf_user_name']				= $cnf_user_name;
			$data['cnf_user_password']			= $cnf_user_password;
			$data['cnf_nid_number']				= $cnf_nid_number;
			if($cnf_is_active=='cnf_active'){
				$data['cnf_is_active']=1;
			}
			elseif($cnf_is_active=='cnf_deactive'){
				$data['cnf_is_active']=0;
			}
			$data['cnf_info_created_date']=date("Y-m-d H:i:s");
			$data['cnf_created_user_id']=$this->session->userdata('user_id');

			if(!empty($_FILES['cnf_nid_card_front_side_image']['name'])){
				$cnf_nid_card_front_side_image="cnf_nid_card_front_side_image";
				$data['cnf_nid_card_front_side_image']    = $this->upload_cnf_nid_card_front_side_image($cnf_nid_card_front_side_image);
			}else{
				$data['cnf_nid_card_front_side_image']    = "";
			}



			if(!empty($_FILES['cnf_nid_card_back_side_image']['name'])){
				$cnf_nid_card_back_side_image="cnf_nid_card_back_side_image";
				$data['cnf_nid_card_back_side_image']    = $this->upload_cnf_nid_card_back_side_image($cnf_nid_card_back_side_image);
			}else{
				$data['cnf_nid_card_back_side_image']    = "";
			}



			if(!empty($_FILES['cnf_profile_photo']['name'])){
				$cnf_profile_photo="cnf_profile_photo";
				$data['cnf_profile_photo']    = $this->upload_cnf_profile_photo($cnf_profile_photo);
			}else{
				$data['cnf_profile_photo']    = "";
			}

             $cnf_data_insert=$this->cnfModel->insert_cnf_info($data);
             $fdata['success_message']="Cnf Info Successfully Added";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddCnf');
        }

    }

    }
    



}








	public function manage_cnf()
	{
        if(in_array("manage_cnf",$this->session->userdata('user_permission'))){
        $data['cnf_data']=$this->cnfModel->select_all_cnf_info();
		$data['admin_main_content']=$this->load->view('Adminpage/Cnf/managecnf',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
	}



    public function deactive_cnf($cnf_id){
        if(in_array("publish_cnf",$this->session->userdata('user_permission'))){
        $this->cnfModel->deactive_cnf_account_by_cnf_id($cnf_id);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }




    public function active_cnf($cnf_id){
        if(in_array("publish_cnf",$this->session->userdata('user_permission'))){
        $this->cnfModel->active_cnf_account_by_cnf_id($cnf_id);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
    }


    public function cnfimageview($cnf_id){
        $data['cnf_image_data']=$this->cnfModel->select_cnf_image_data_by_cnf_id($cnf_id);
        $this->load->view('Adminpage/Cnf/cnf_image_view',$data);
    }




    public function edit_cnf_info($cnf_info_id){
        if(in_array("edit_cnf",$this->session->userdata('user_permission'))){
        $data['edit_cnf_data']=$this->cnfModel->select_cnf_info_data_by_cnf_id($cnf_info_id);
        if(empty($data['edit_cnf_data'])){
            redirect('Cholotransportowner/ManageCnf');
        }else{
        $data['admin_main_content']=$this->load->view('Adminpage/Cnf/edit_cnf_info',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }




    public function save_update_cnf_info($cnf_info_id){
        
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditCnfInfo/'.$cnf_info_id);
        }else{
		$data=array();
		$cnf_full_name					        = $this->input->post('cnf_full_name',TRUE);
		$cnf_address					        = $this->input->post('cnf_address',TRUE);
		$cnf_email_address				        = $this->input->post('cnf_email_address',TRUE);
		$cnf_primary_mobile_number		        = $this->input->post('cnf_primary_mobile_number',TRUE);
		$cnf_op1_mobile_number			        = $this->input->post('cnf_op1_mobile_number',TRUE);
		$cnf_op2_mobile_number			        = $this->input->post('cnf_op2_mobile_number',TRUE);
		$cnf_user_name					        = $this->input->post('cnf_user_name',TRUE);
		$cnf_user_password				        = $this->input->post('cnf_user_password',TRUE);
        $cnf_nid_number					        = $this->input->post('cnf_nid_number',TRUE);
        $hidden_cnf_nid_card_front_side_image   = $this->input->post('hidden_cnf_nid_card_front_side_image',TRUE);
        $hidden_cnf_nid_card_back_side_image    = $this->input->post('hidden_cnf_nid_card_back_side_image',TRUE);
        $hidden_cnf_profile_photo               = $this->input->post('hidden_cnf_profile_photo',TRUE);

		$this->form_validation->set_rules('cnf_full_name', 'cnf_full_name', 'required|trim');
		$this->form_validation->set_rules('cnf_address', 'cnf_address', 'trim');
		$this->form_validation->set_rules('cnf_email_address', 'cnf_email_address', 'trim');
		$this->form_validation->set_rules('cnf_primary_mobile_number', 'cnf_primary_mobile_number', 'required|trim');
		$this->form_validation->set_rules('cnf_op1_mobile_number', 'cnf_op1_mobile_number', 'trim');
		$this->form_validation->set_rules('cnf_op2_mobile_number', 'cnf_op2_mobile_number', 'trim');
		$this->form_validation->set_rules('cnf_user_name', 'cnf_user_name', 'trim');
		$this->form_validation->set_rules('cnf_user_password', 'cnf_user_password', 'required|trim');
		$this->form_validation->set_rules('cnf_nid_number', 'cnf_nid_number', 'trim');

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditCnfInfo/'.$cnf_info_id);
		}else{

            $check_cnf_phone_number             = $this->cnfModel->select_cnf_info_data_by_cnf_id($cnf_info_id)->cnf_primary_mobile_number;
            $check_cnf_email_address            = $this->cnfModel->select_cnf_info_data_by_cnf_id($cnf_info_id)->cnf_email_address;
            
            if($check_cnf_phone_number!=$cnf_primary_mobile_number){
             $check_cnf_phone_number_is_exist    =$this->cnfModel->check_cnf_phone_number_is_exist($cnf_primary_mobile_number);
            }else{
                $check_cnf_phone_number_is_exist=0;
            }


             if($check_cnf_email_address!=$cnf_email_address){
             $check_cnf_email_is_exist           =$this->cnfModel->check_cnf_email_is_exist($cnf_email_address);
            }else{
                $check_cnf_email_is_exist=0;
            }
          
            if($check_cnf_phone_number_is_exist==1 || $check_cnf_email_is_exist==1){
                $fdata['error_message']="CNF Mobile Number Or Email Allready Exist in Our System.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditCnfInfo/'.$cnf_info_id); 
            }else{
			$data['cnf_full_name']				= $cnf_full_name;
			$data['cnf_address']				= $cnf_address;
			$data['cnf_email_address']			= $cnf_email_address;
			$data['cnf_primary_mobile_number']	= $cnf_primary_mobile_number;
			$data['cnf_op1_mobile_number']		= $cnf_op1_mobile_number;
			$data['cnf_op2_mobile_number']		= $cnf_op2_mobile_number;
			$data['cnf_user_name']				= $cnf_user_name;
			$data['cnf_user_password']			= $cnf_user_password;
			$data['cnf_nid_number']				= $cnf_nid_number;


			if(!empty($_FILES['cnf_nid_card_front_side_image']['name'])){
                $this->cnfModel->delete_old_cnf_nid_card_front_side_image($cnf_info_id);
				$cnf_nid_card_front_side_image="cnf_nid_card_front_side_image";
				$data['cnf_nid_card_front_side_image']    = $this->upload_cnf_nid_card_front_side_image($cnf_nid_card_front_side_image);
			}else{
				$data['cnf_nid_card_front_side_image']    = $hidden_cnf_nid_card_front_side_image;
			}



			if(!empty($_FILES['cnf_nid_card_back_side_image']['name'])){
                $this->cnfModel->delete_old_cnf_nid_card_back_side_image($cnf_info_id);
				$cnf_nid_card_back_side_image="cnf_nid_card_back_side_image";
				$data['cnf_nid_card_back_side_image']    = $this->upload_cnf_nid_card_back_side_image($cnf_nid_card_back_side_image);
			}else{
				$data['cnf_nid_card_back_side_image']    = $hidden_cnf_nid_card_back_side_image;
			}



			if(!empty($_FILES['cnf_profile_photo']['name'])){
                $this->cnfModel->delete_old_cnf_profile_photo($cnf_info_id);
				$cnf_profile_photo="cnf_profile_photo";
				$data['cnf_profile_photo']    = $this->upload_cnf_profile_photo($cnf_profile_photo);
			}else{
				$data['cnf_profile_photo']    = $hidden_cnf_profile_photo;
            }
            
            $data['cnf_info_id']=$cnf_info_id;

            $cnf_data_update=$this->cnfModel->update_cnf_info($data);

             $fdata['success_message']="Cnf Info Updated Successfully";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/EditCnfInfo/'.$cnf_info_id);
        }

    }

    }

    }





    public function view_cnf_info($cnf_info_id){
        $data['edit_cnf_data']=$this->cnfModel->select_cnf_info_data_by_cnf_id($cnf_info_id);
        if(empty($data['edit_cnf_data'])){
            redirect('Cholotransportowner/ManageCnf');
        }else{
        $data['admin_main_content']=$this->load->view('Adminpage/Cnf/view_cnf_info',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }
    }




    public function get_pdf(){
        // $mpdf = new \Mpdf\Mpdf();
       $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8',
        'format' => 'A4'.('orientation' == 'L' ? '-L' : ''),
        'orientation' => 0,
        'margin_left' => 3,
        'margin_right' => 3,
        'margin_top' => 3,
        'margin_bottom' => 0,
        'margin_header' => 0,
        'margin_footer' => 0,
        ]); 
        //$html = $this->load->view('html_to_pdf',[],true);
        $html = '<p style="font-family:nikosh;"> 
        সিকিউরিটি ভেরিফিকেশন ফরম 
        মনে করি আমি এই সমস্যার সমাধান খুঁজে পেয়েছি। আমি কিছু লাইব্রেরি (dompdf, TCPDF, FPDF, mPDF) চেষ্টা করেছি যা পিএইচপি সমর্থন করে তবে সবগুলিই সঠিকভাবে কাজ করছে না। আমি dompdf সহ কোনও ইউনিকোড সমর্থন পাইনি, tcpdf কাজ করেছে তবে ফন্টগুলি নষ্ট হয়েছে। সুতরাং আমি এমপিডিএফ চেষ্টা করেছি এবং এটি আমাকে আমার প্রত্যাশিত আউটপুট দিয়েছে। আমি এই লাইব্রেরিটি আমার লারাভেল প্রকল্পে ব্যবহার করছি। ল্যারাভেল প্রকল্পের সাথে এমপিডিএফ ব্যবহার করতে আপনাকে ডকুমেন্টেশনটি অনুসরণ করতে হবে
        </p>';
        $mpdf->WriteHTML($html);
        $mpdf->Output(); // opens in browser
    }

    











}
