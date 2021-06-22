<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class HomeController extends CI_Controller {

	/**
	 * All Home Page for this controller.
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
	



	public function index()
	{
		$data['frist_publish_slide_image']			= $this->homeModel->select_first_publish_slide_image_list();
		$data['publish_slide_image']				= $this->homeModel->select_all_publish_slide_image_list();
		$data['slider']								= $this->load->view('Frontendpage/slider',$data,TRUE);

		$data['publish_truck_lagbe']				= $this->homeModel->select_all_publish_truck_lagbe();
		$data['truck_lagbe_header_info']			= $this->homeModel->select_all_truck_lagbe_header_info();
		$data['truck_lagbe']						= $this->load->view('Frontendpage/truck_lagbe',$data,TRUE);

		$data['publish_choose_us']					= $this->homeModel->select_all_publish_choose_us();
		$data['choose_us_header_info']				= $this->homeModel->select_all_choose_us_header_info();
		$data['choose_us']							= $this->load->view('Frontendpage/choose_us',$data,TRUE);

		$data['publish_truck_category']				= $this->homeModel->select_all_publish_truck_category();
		$data['truck_category']						= $this->load->view('Frontendpage/truck_category',$data,TRUE);


		$data['publish_corporate_client']			= $this->homeModel->select_all_publish_corporate_client();
		$data['corporate_client']					= $this->load->view('Frontendpage/corporate_client',$data,TRUE);

		$data['publish_cover_industries']			= $this->homeModel->select_all_publish_cover_industries();
		$data['cover_industries']					= $this->load->view('Frontendpage/cover_industries',$data,TRUE);


		$data['publish_tracking_features']			= $this->homeModel->select_all_publish_gps_tracking_features();
		$data['tracking_features']				    = $this->load->view('Frontendpage/tracking_features',$data,TRUE);
	    $this->load->view("Frontendpage/master",$data);
	}







	public function request_a_new_vehicles(){
		$data['vehicles_request']					= $this->load->view('Frontendpage/vehicles_request','',TRUE);
		$this->load->view("Frontendpage/master",$data);
	}







	public function request_a_new_user_account(){
		$data['user_account_request']					= $this->load->view('Frontendpage/user_account_request','',TRUE);
		$this->load->view("Frontendpage/master",$data);
	}








	public function save_request_a_new_vehicles(){
		if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('RequestNewVehicles');
        }else{

            $vehicles_request_some_note									= $this->input->post('vehicles_request_some_note',true);
            $vehicles_request_user_name									= $this->input->post('vehicles_request_user_name',true);
			$vehicles_request_user_number								= $this->input->post('vehicles_request_user_number',true);

			$this->form_validation->set_rules('vehicles_request_some_note', 'vehicles_request_some_note', 'trim');
			$this->form_validation->set_rules('vehicles_request_user_name', 'vehicles_request_user_name', 'required|trim');
			$this->form_validation->set_rules('vehicles_request_user_number', 'vehicles_request_user_number', 'required|trim');

			if ($this->form_validation->run() == FALSE)
			{
					$fdata['error_message']="Validation Failed... Red Mark Field Required.";
					$this->session->set_flashdata($fdata);
					redirect('RequestNewVehicles');
			}else{

			if(preg_match('/^[0-9]{11}+$/', $vehicles_request_user_number)){
				
            $vehicles_request_data=array();
            $vehicles_request_data['vehicles_request_user_name']        = $vehicles_request_user_name;
            $vehicles_request_data['vehicles_request_user_number']      = $vehicles_request_user_number;
            $vehicles_request_data['vehicles_request_some_note']        = $vehicles_request_some_note;
            $vehicles_request_data['vehicles_request_user_id']          = NULL;
            $vehicles_request_data['vehicles_request_user_type']        = 'main_site';
            $vehicles_request_data['vehicles_request_created_date']     = date("Y-m-d H:i:s");
            $insert_vehicles_request= $this->superHomeModel->save_user_vehicles_request($vehicles_request_data);
            $this->superHomeModel->active_vehicles_request_notification();
				$fdata['success_message']="Your Vehicles Request is Submitted To Cholo Transport Authority.";
				$this->session->set_flashdata($fdata);
				redirect('RequestNewVehicles');
			}else{
				$fdata['error_message']="Please Provide 11 Digit Phone Number Only....";
				$this->session->set_flashdata($fdata);
				redirect('RequestNewVehicles');
			}

		}

        }
	}











	public function save_request_a_new_user_account(){
		if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('RequestNewUserAccount');
        }else{

            $all_user_account_request_address							= $this->input->post('all_user_account_request_address',true);
            $all_user_account_request_name								= $this->input->post('all_user_account_request_name',true);
			$all_user_account_request_number							= $this->input->post('all_user_account_request_number',true);


			$this->form_validation->set_rules('all_user_account_request_address', 'all_user_account_request_address', 'trim');
			$this->form_validation->set_rules('all_user_account_request_name', 'all_user_account_request_name', 'required|trim');
			$this->form_validation->set_rules('all_user_account_request_number', 'all_user_account_request_number', 'required|trim');


			if ($this->form_validation->run() == FALSE)
			{
					$fdata['error_message']="Validation Failed... Red Mark Field Required.";
					$this->session->set_flashdata($fdata);
					redirect('RequestNewUserAccount');
			}else{

			if(preg_match('/^[0-9]{11}+$/', $all_user_account_request_number)){
				
            $account_request_data=array();
            $account_request_data['all_user_account_request_name']        		= $all_user_account_request_name;
            $account_request_data['all_user_account_request_number']      		= $all_user_account_request_number;
            $account_request_data['all_user_account_request_address']        	= $all_user_account_request_address;
            $account_request_data['all_user_account_request_created_date']     = date("Y-m-d H:i:s");
            $insert_user_account_request= $this->superHomeModel->save_user_account_request($account_request_data);
            $this->superHomeModel->active_account_request_notification();
				$fdata['success_message']="Your New Account Request is Submitted To Cholo Transport Authority.";
				$this->session->set_flashdata($fdata);
				redirect('RequestNewUserAccount');
			}else{
				$fdata['error_message']="Please Provide 11 Digit Phone Number Only....!";
				$this->session->set_flashdata($fdata);
				redirect('RequestNewUserAccount');
			}

		}

        }
	}
















}
