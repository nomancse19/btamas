<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class ImporterClientController extends CI_Controller {

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
        if(!$this->session->userdata('importer_info_id')){
            redirect('Client/login');
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


    public function importer_all_chalan(){
        $data['importer_chalan_info']=$this->clientControllerModel->all_importer_chalan_info_by_importer_id($this->session->userdata('importer_info_id'));
        $data['admin_main_content']=$this->load->view('Clientpage/importer_all_chalan',$data,TRUE);
	    $this->load->view("Clientpage/client_master",$data);
    }


    public function importer_vehicles_live_tracking($chalan_no){

        $chalan_info=$this->clientControllerModel->all_chalan_info_by_chalan_no($chalan_no);
        if($chalan_info->chalan_status=='1'){
        $chalan_imei_number=$chalan_info->vehicles_gps_tracking_id;
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
            $data['chalan_data']      =$chalan_info;
            $data['vehicles_gps_tracking_id']    = $chalan_info->vehicles_gps_tracking_id;
            $data['admin_main_content']=$this->load->view('Clientpage/importer_vehicles_live_track',$data,TRUE);
            $this->load->view("Clientpage/client_master",$data);
        }else{
            $fdata['error_message']="Vehicles Device Tracker Id Not Found...";
            $this->session->set_flashdata($fdata);
            redirect('Client/ImporterChalanInfo');
        }
            }else{
            $fdata['error_message']="Vehicles Location is Not Tracking...Beacause Your Chalan is Not on Way...";
            $this->session->set_flashdata($fdata);
            redirect('Client/ImporterChalanInfo');
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










    public function view_importer_chalan_info($chalan_info_id){
        $data['chalan_data']=$this->chalanModel->all_chalan_info_by_chalan_id($chalan_info_id);
        if($data['chalan_data']){
         $data['admin_main_content']= $this->load->view('Clientpage/importer_view_chalan',$data,TRUE);
        $this->load->view("Clientpage/client_master",$data);
        }else{
            $fdata['error_message']="Access is Forbidden !....";
            $this->session->set_flashdata($fdata);
            redirect('Client/ImporterChalanInfo');
        }
    }





    public function importer_all_vehicles_request(){
        $importer_info_id=$this->session->userdata('importer_info_id');
        $data['importer_all_request']=$this->clientControllerModel->all_importer_vehicles_request_by_importer_info($importer_info_id);
        $data['admin_main_content']=$this->load->view('Clientpage/importer_all_vehicles_request',$data,TRUE);
	    $this->load->view("Clientpage/client_master",$data);
    }


    public function add_importer_vehicles_request(){
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Client/ImporterAllVehiclesRequest');
        }else{

            $vehicles_request_some_note=trim($this->input->post('vehicles_request_some_note',true));
            $vehicles_request_data=array();
            $vehicles_request_data['vehicles_request_user_name']        = $this->session->userdata('client_fullname');
            $vehicles_request_data['vehicles_request_user_number']      = $this->session->userdata('importer_primary_mobile_number');
            $vehicles_request_data['vehicles_request_some_note']        = $vehicles_request_some_note;
            $vehicles_request_data['vehicles_request_user_id']          = $this->session->userdata('importer_info_id');
            $vehicles_request_data['vehicles_request_user_type']        = 'importer';
            $vehicles_request_data['vehicles_request_created_date']     = date("Y-m-d H:i:s");
            $insert_cnf_vehicles_request= $this->clientControllerModel->save_importer_vehicles_request($vehicles_request_data);
            $this->superHomeModel->active_vehicles_request_notification();
            $fdata['success_message']="Your Vehicles Request is Submitted To Cholo Transport Authority.";
            $this->session->set_flashdata($fdata);
            redirect('Client/ImporterAllVehiclesRequest');

        }
    }


    











}
