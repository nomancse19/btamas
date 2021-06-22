<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class CnfClientController extends CI_Controller {

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
        if(!$this->session->userdata('cnf_info_id')){
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


    public function cnf_all_chalan(){
        $data['cnf_chalan_info']=$this->clientControllerModel->all_cnf_chalan_info_by_cnf_id($this->session->userdata('cnf_info_id'));
        $data['admin_main_content']=$this->load->view('Clientpage/cnf_all_chalan',$data,TRUE);
	    $this->load->view("Clientpage/client_master",$data);
    }


    


    public function cnf_vehicles_live_tracking($chalan_no){
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
            $data['admin_main_content']=$this->load->view('Clientpage/cnf_vehicles_live_track',$data,TRUE);
            $this->load->view("Clientpage/client_master",$data);
        }else{
            $fdata['error_message']="Vehicles Device Tracker Id Not Found...";
            $this->session->set_flashdata($fdata);
            redirect('Client/CnfChalanInfo');
        }
            }else{
            $fdata['error_message']="Vehicles Location is Not Tracking...Beacause Your Chalan is Not on Way...";
            $this->session->set_flashdata($fdata);
            redirect('Client/CnfChalanInfo');
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














    public function view_cnf_chalan_info($chalan_info_id){
        $session_cnf_info_id= $this->session->userdata('cnf_info_id');
        $checking_cnf_chalan_info= $this->clientControllerModel->all_cnf_chalan_checking_info_by_cnf_id($session_cnf_info_id);
      if(in_array($chalan_info_id,$checking_cnf_chalan_info)){

        $data['chalan_data']=$this->chalanModel->all_chalan_info_by_chalan_id($chalan_info_id);
        if($data['chalan_data']){
         $data['admin_main_content']= $this->load->view('Clientpage/cnf_view_chalan',$data,TRUE);
        $this->load->view("Clientpage/client_master",$data);
        }else{
            $fdata['error_message']="Access is Forbidden !....";
            $this->session->set_flashdata($fdata);
            redirect('Client/CnfChalanInfo');
        }

    }else{
        $fdata['error_message']="Chalan Info Is Invalid.. !....";
        $this->session->set_flashdata($fdata);
        redirect('Client/CnfChalanInfo');
    }

    }









    public function cnf_all_vehicles_request(){
        $cnf_info_id=$this->session->userdata('cnf_info_id');
        $data['cnf_all_request']=$this->clientControllerModel->all_cnf_vehicles_request_by_cnf_info($cnf_info_id);
        $data['admin_main_content']=$this->load->view('Clientpage/cnf_all_vehicles_request',$data,TRUE);
	    $this->load->view("Clientpage/client_master",$data);
    }


    public function add_cnf_vehicles_request(){
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Client/CnfAllVehiclesRequest');
        }else{

            $vehicles_request_some_note=trim($this->input->post('vehicles_request_some_note',true));
            $vehicles_request_data=array();
            $vehicles_request_data['vehicles_request_user_name']        = $this->session->userdata('client_fullname');
            $vehicles_request_data['vehicles_request_user_number']      = $this->session->userdata('cnf_primary_mobile_number');
            $vehicles_request_data['vehicles_request_some_note']        = $vehicles_request_some_note;
            $vehicles_request_data['vehicles_request_user_id']          = $this->session->userdata('cnf_info_id');
            $vehicles_request_data['vehicles_request_user_type']        = 'cnf';
            $vehicles_request_data['vehicles_request_created_date']     = date("Y-m-d H:i:s");
            $insert_cnf_vehicles_request= $this->clientControllerModel->save_cnf_vehicles_request($vehicles_request_data);
            $this->superHomeModel->active_vehicles_request_notification();
            $fdata['success_message']="Your Vehicles Request is Submitted To Cholo Transport Authority.";
            $this->session->set_flashdata($fdata);
            redirect('Client/CnfAllVehiclesRequest');

        }
    }




    public function download_cnf_chalan_info($chalan_info_id){
        $data=array();
        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4-L'.('orientation' == 'L' ? '-L' : ''),
            'orientation' => 'L',
            'margin_left' => 0,
            'margin_right' => 0,
            'margin_top' => 0,
            'margin_bottom' => 0,
            'margin_header' => 0,
            'margin_footer' => 0,
            ]); 
            //$html = $this->load->view('html_to_pdf',[],true);
            $htmls = '<p style="font-family:nikosh;"> 
               আমাকে আমার প্রত্যাশিত আউটপুট দিয়েছে। আমি এই লাইব্রেরিটি আমার লারাভেল       
            </p>';
            $data['chalan_data']=$this->clientControllerModel->all_single_cnf_chalan_info_by_cnf_id($chalan_info_id);
        
          $html=$this->load->view('Clientpage/download_chalan',$data,true);
           // echo $html;

           //$stylesheet = file_get_contents(base_url().'assets/backend/dist/css/adminlte.min.css'); // external css
          // $mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
        //$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);
           //echo $stylesheet;
           //exit();
           //$mpdf->WriteHTML($stylesheet,1);
            $mpdf->WriteHTML($html);
            $mpdf->Output(); // opens in browser

    }

    











}
