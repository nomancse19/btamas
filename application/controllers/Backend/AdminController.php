<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class AdminController extends CI_Controller {


	
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

    public function singleSms($msisdn, $messageBody, $csmsId)
    {
        $params = [
            "api_token" =>"14732954-55ae-4704-b0cd-381395a1ffa1",
            "sid" => "Chologroupmask",
            "msisdn" => $msisdn,
            "sms" => $messageBody,
            "batch_csms_id" => $csmsId
        ];
        $url = trim('https://smsplus.sslwireless.com', '/')."/api/v3/send-sms/bulk";
        $params = json_encode($params);
    
        echo $this->callApi($url, $params);
    }
    
    
    public function callApi($url, $params)
    {
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($params),
            'accept:application/json'
        ));
    
        $response = json_decode(curl_exec($ch));
        
        curl_close($ch);
    
        return $response->status. $response->error_message;
    }

    private function send_sms(){
       // $json_data=$this->singleSms('01772068908','hello',rand());
       
       // $msisdn = ["01772068908", "01521451354"]; // msisdn must be array
       // $messageBody = "আপনার Message Body";
      //  $batchCsmsId = rand(); // csms id must be unique

      //  echo $this->singleSms($msisdn, $messageBody, $batchCsmsId);
      //  exit();
       //  echo $json_data['status'];
        $token = "14732954-55ae-4704-b0cd-381395a1ffa1";
        $url = "https://smsplus.sslwireless.com/api/v3/send-sms/bulk";
        $msg="আপনার Message Body";
        $number=array("01521451354","01772068908");
        $data= array(
            "api_token" =>"14732954-55ae-4704-b0cd-381395a1ffa1",
            "sid" => "Chologroupmask",
            "msisdn" =>$number,
            "sms" => $msg,
            "batch_csms_id" =>rand(),
        ); // Add parameters in key value
        $ch = curl_init(); // Initialize cURL
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_ENCODING, '');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $smsresult = json_decode(curl_exec($ch));
        print_r($smsresult);
       // echo $smsresult->status;
       // echo $smsresult->error_message;
        

    }









    
    private function get_location(){
         $api_key = "138A0E23D52CFB56EE0845D410C74A58";
         $imei=358657100631956;
         $endpoint = "https://safetyvts.com/api/api.php";

       // $url = "https://safetyvts.com/api/api.php?api=user&ver=1.0&key=138A0E23D52CFB56EE0845D410C74A58&cmd=OBJECT_GET_LOCATIONS,*";
      
       $data= array(
             'api'=>'user',
             'ver'=>'1.0',
             'key' =>'138A0E23D52CFB56EE0845D410C74A58',
             'cmd'=>'OBJECT_GET_LOCATIONS,'.$imei,
         ); // Add parameters in key value
         $ch = curl_init(); // Initialize cURL
         $url = $endpoint . '?' . http_build_query($data);
         curl_setopt($ch, CURLOPT_URL,$url);
         curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
         curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        // echo http_build_query($data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         $smsresult = json_decode(curl_exec($ch));
        // var_dump($smsresult);
        echo "<pre>";
        print_r($smsresult);

        // echo $smsresult[358657100631956]->name;
       // $user = $smsresult->fetch_object();
      //  print_r($user);
     // $x = new StdClass();
     // echo $x->{'name'};
     foreach($smsresult as $result){
        echo($result->lat);
        echo($result->lng);
    }
 
     }
 
 













	public function cholotransportadminbackendcontrol()
	{
		$this->load->view("Adminpage/admin_login");
    }
    


private function getBrowser(){ 
  $u_agent = $_SERVER['HTTP_USER_AGENT'];
  $bname = 'Unknown';
  $platform = 'Unknown';
  $version= "";
  //First get the platform?

  if (preg_match('/linux/i', $u_agent)) {
    $platform = 'linux';
  }elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
    $platform = 'mac';
  }elseif (preg_match('/windows|win32/i', $u_agent)) {
    $platform = 'windows';
  }
  // Next get the name of the useragent yes seperately and for good reason
  if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }elseif(preg_match('/Firefox/i',$u_agent)){
    $bname = 'Mozilla Firefox';
    $ub = "Firefox";
  }elseif(preg_match('/OPR/i',$u_agent)){
    $bname = 'Opera';
    $ub = "Opera";
  }elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
    $bname = 'Google Chrome';
    $ub = "Chrome";
  }elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
    $bname = 'Apple Safari';
    $ub = "Safari";
  }elseif(preg_match('/Netscape/i',$u_agent)){
    $bname = 'Netscape';
    $ub = "Netscape";
  }elseif(preg_match('/Edge/i',$u_agent)){
    $bname = 'Edge';
    $ub = "Edge";
  }elseif(preg_match('/Trident/i',$u_agent)){
    $bname = 'Internet Explorer';
    $ub = "MSIE";
  }
  // finally get the correct version number
  $known = array('Version', $ub, 'other');
  $pattern = '#(?<browser>' . join('|', $known) .
')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
  if (!preg_match_all($pattern, $u_agent, $matches)) {
    // we have no matching number just continue
  }
  // see how many we have
  $i = count($matches['browser']);
  if ($i != 1) {
    //we will have two since we are not using 'other' argument yet
    //see if version is before or after the name
    if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
        $version= $matches['version'][0];
    }else {
        $version= $matches['version'][1];
    }
  }else {
    $version= $matches['version'][0];
  }
  // check if we have a number
  if ($version==null || $version=="") {$version="?";}
  return array(
    'userAgent' => $u_agent,
    'name'      => $bname,
    'version'   => $version,
    'platform'  => $platform,
    'pattern'    => $pattern
  );
} 






	public function admin_login_check(){
        if(empty($this->input->post())){
            $fdata['error_message']="Please Fill Data. Then Try.";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/admin/01521451354');
            }else{
        $data['user_email']=	trim($this->input->post('user_email',true));
        $data['user_password']=	trim($this->input->post('user_password',true));
        if($data['user_email']=='' ||  $data['user_password']==''){
            $fdata=array();
            $fdata['error_message']="You Must Field Up All Data";
            $this->session->set_flashdata($fdata);
            redirect("Cholotransportowner/admin/01521451354");
        }else{
        $found_admin=$this->adminModel->check_admin_login_info($data);
        if($found_admin){
            $sdata=array();
            $sdata['user_id']=$found_admin->user_id;
            $sdata['user_permission']=$this->adminModel->get_user_permissin_data($sdata['user_id']);
            $sdata['username']=$found_admin->username;
            $sdata['fullname']=$found_admin->fullname;
            $sdata['user_email']=$found_admin->user_email;
            $sdata['access_level']=$found_admin->access_level;
            $sdata['activation_status']=$found_admin->activation_status;
            $sdata['user_is_login']=$found_admin->user_is_login;
            $this->session->set_userdata($sdata);


            $user_log=array();
            $user_log['user_id']                = $sdata['user_id'];
            $user_log['user_name']              = $sdata['username'];
            $user_log['user_email']             = $sdata['user_email'];
            $user_log['user_login_time']        = date("Y-m-d H:i:s");
            $user_log['user_logout_time']       =  NULL;
            $user_log['user_ip_address']        = $_SERVER['REMOTE_ADDR'];
            $ua=$this->getBrowser();
            $yourbrowser= $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'];
            $user_log['user_browser']           = $yourbrowser;


            $cURLConnection = curl_init('http://ip-api.com/php/'.$user_log['user_ip_address']);
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
            $apiResponse = curl_exec($cURLConnection);
            curl_close($cURLConnection);
            $new_array=unserialize($apiResponse);
            if($new_array['status']=='success'){
            $object = (object)$new_array;
            $user_log['user_location']          = $object->lat.','.$object->lon;
            $user_log['user_country']           = $object->country;
            $user_log['user_city']              = $object->city;
            $user_log['user_region']            = $object->regionName;
            }else{
                $user_log['user_location']          = NULL;
                $user_log['user_country']           = NULL;
                $user_log['user_city']              = NULL;
                $user_log['user_region']            = NULL;
            }
            $user_log['user_log_added_time']    = date("Y-m-d H:i:s");
            $this->userModel->save_login_user_data($user_log);

            $this->userModel->update_login_user_is_login_true($user_log['user_id'] );

            redirect('Cholotransportowner/Dashboard');
        }else{
            $sdata=array();
            $sdata['error_message']="Your Username Or Password Not Matching Or User Deactivated";
            $this->session->set_flashdata($sdata);
            redirect("Cholotransportowner/admin/01521451354");
        }

    }
}
        
    }









	public function Dashboard()
	{
        if(!$this->session->userdata('user_id')){
            redirect('/');
        }
		$data['admin_main_content']=$this->load->view('Adminpage/dashboard','',TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
	   
	}






























    public function logout(){

        $this->userModel->update_login_user_is_login_false($this->session->userdata('user_id'));
        $user_log=array();
        $user_log['user_id']                = $this->session->userdata('user_id');
        $user_log['user_name']              = $this->session->userdata('username');
        $user_log['user_email']             = $this->session->userdata('user_email');
        $user_log['user_login_time']        = NULL;
        $user_log['user_logout_time']       =  date("Y-m-d H:i:s");
        $user_log['user_ip_address']        = $_SERVER['REMOTE_ADDR'];
        $ua=$this->getBrowser();
        $yourbrowser= $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'];
        $user_log['user_browser']           = $yourbrowser;


        $cURLConnection = curl_init('http://ip-api.com/php/'.$user_log['user_ip_address']);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        $apiResponse = curl_exec($cURLConnection);
        curl_close($cURLConnection);
        $new_array=unserialize($apiResponse);
        if($new_array['status']=='success'){
        $object = (object)$new_array;
        $user_log['user_location']          = $object->lat.','.$object->lon;
        $user_log['user_country']           = $object->country;
        $user_log['user_city']              = $object->city;
        $user_log['user_region']            = $object->regionName;
        }else{
            $user_log['user_location']          = NULL;
            $user_log['user_country']           = NULL;
            $user_log['user_city']              = NULL;
            $user_log['user_region']            = NULL;
        }
        $user_log['user_log_added_time']    = date("Y-m-d H:i:s");
        $this->userModel->save_login_user_data($user_log);



        $session_array=array('user_id','username','user_email','fullname','access_level','activation_status');
           $this->session->unset_userdata($session_array);
           $logdata=array();
           $logdata['success_message']="You Are SuccessFully Logout";
           $this->session->set_flashdata($logdata);
           redirect('Cholotransportowner/admin/01521451354');



   }





}
