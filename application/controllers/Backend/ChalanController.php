<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class ChalanController extends CI_Controller {

	/**
	 * All Chalan Page for this controller.
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



    private function send_chalan_sms($vehicles_no,$target_location,$date,$chalan_no,$number){
         $token = "14732954-55ae-4704-b0cd-381395a1ffa1";
         $url = "https://smsplus.sslwireless.com/api/v3/send-sms";
         $msg='প্রিয়, স্যার/ ম্যাডাম
 আপনার মালামালের চালান নং: '. $chalan_no.'
 তারিখ: '.$date.', বেনাপোল হইতে : '.$target_location.'  ট্রাক নং:'.$vehicles_no.' । লাইভ লোকেশন দেখার জন্য www.cholotransport.com.bd  আপনার একাউন্ট লগইন করে দেখুন অথবা হটলাইনে: ০১৮৮৮ ০৫২ ৯৯৯ কল করুন।
 ধন্যবাদন্তরে ,
 চলো ট্রান্সপোর্ট বিডি';
         $data= array(
         'api_token'=>$token,
         'msisdn'=>$number,
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
 
  


     

	public function chalan_add()
	{
        if(in_array("add_chalan",$this->session->userdata('user_permission'))){
        $data['importer_info']=$this->chalanModel->all_active_importer_info();
        $data['exporter_info']=$this->chalanModel->all_active_exporter_info();
        $data['vehicles_info']=$this->chalanModel->all_active_vehicles_info();
        $data['cnf_info']=$this->chalanModel->all_active_cnf_info();

		$data['admin_main_content']=$this->load->view('Adminpage/Chalan/addchalan',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
	}



    public function get_vehicles_all_info(){
        $vehicles_info_id=$this->input->post('vehicles_info_id');

       $joint_vehicles_info=$this->chalanModel->join_vehicles_info_by_vehicles_info_id($vehicles_info_id);
       $returnArr = [
                $joint_vehicles_info->driver_name,
                $joint_vehicles_info->driver_license_number,
                $joint_vehicles_info->vehicles_owner_name.','.$joint_vehicles_info->vehicles_owner_address,
                $joint_vehicles_info->driver_card_no,
            ];    
        echo json_encode($returnArr);
    }




    private function en2ban($number){
        $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
        $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    return str_replace($en, $bn, $number);
}

    private function ban2en($number){
        $bn = ["১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০"];
        $en = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    return str_replace($bn, $en, $number);
}


    private function make_chalan_no(){
            $query = $this->db->select('chalan_no')
            ->from('chalan_info')
            ->get();
            $row = $query->last_row();
            if($row->chalan_no){
            $previous_chalan_no=  intval(preg_replace('/\D+/','',$row->chalan_no));
            $nextId = $previous_chalan_no +1;
            $next_chalan="CT".$nextId;
            return $next_chalan;
            }
            else{
            $next_chalan = 'CT100000000001';
            return $next_chalan;
            }  
    }



    private function make_chalan_bar_code_image($string){
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        $file = Zend_Barcode::draw('code128', 'image', array('text' => $string), array());
         $store_image = imagepng($file,"images/chalan_bar_code/{$string}.png");
        $image_name=  "images/chalan_bar_code/".$string.'.png';
        return $image_name;
    }

    private function test(){
        $string="CT656568565dfgdfg25dfgdgd5g4dgdg1dgd4fg";
        echo intval(preg_replace('/\D+/', '', $string));
    }







    public function save_chalan(){

        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddChalan');
        }else{
            $chalan_data_info=array();

            $chalan_be_no_c			= $this->input->post('chalan_be_no_c',TRUE);
            $chalan_be_no_c_date	= $this->input->post('chalan_be_no_c_date',TRUE);
            $chalan_lc_no	        = $this->input->post('chalan_lc_no',TRUE);
            $chalan_lc_no_date	    = $this->input->post('chalan_lc_no_date',TRUE);
            $chalan_date	        = $this->input->post('chalan_date',TRUE);

            $chalan_importer_id	    = trim($this->input->post('chalan_importer_name',TRUE));
            $chalan_exporter_id	    = trim($this->input->post('chalan_exporter_name',TRUE));

            if($chalan_importer_id=='' && $chalan_exporter_id==''){
                $fdata['error_message']=" Importer Or Exporter One Is Required..";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddChalan');
                exit();
            }

            if($chalan_importer_id!='' && $chalan_exporter_id!=''){
                $fdata['error_message']=" Importer Or Exporter One Is Required..";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddChalan');
                exit();
            }
            if($chalan_importer_id=='' && $chalan_exporter_id!=''){
                $exporter_info= $this->chalanModel->exporter_info_exporter_info_id($chalan_exporter_id);
                $chalan_exporter_name=$exporter_info->exporter_full_name;
                $exporter_info_id=$exporter_info->exporter_info_id;

                $exporter_primary_mobile_number=$exporter_info->exporter_primary_mobile_number;

                $chalan_importer_name='';
                $importer_info_id=NULL;
            }

            if($chalan_importer_id!='' && $chalan_exporter_id==''){
                $importer_info= $this->chalanModel->importer_info_importer_info_id($chalan_importer_id);
                $chalan_importer_name=$importer_info->importer_full_name;
                $importer_info_id=$importer_info->importer_info_id;

                $importer_primary_mobile_number=$importer_info->importer_primary_mobile_number;

                $chalan_exporter_name='';
                $exporter_info_id=NULL;
            }

            $chalan_ac_no	    = $this->input->post('chalan_ac_no',TRUE);
            $chalan_extra_ac_no	= $this->input->post('chalan_extra_ac_no',TRUE);
            $chalan_vehicles_no	= $this->input->post('chalan_vehicles_no',TRUE);
            $chalan_driver_name	= $this->input->post('chalan_driver_name',TRUE);
            $chalan_driver_license_no	= $this->input->post('chalan_driver_license_no',TRUE);

            $chalan_cnf_id	= trim($this->input->post('chalan_cnf_name',TRUE));
        

            $chalan_vehicles_owner_address	                = $this->input->post('chalan_vehicles_owner_address',TRUE);
            $chalan_scoter_name	                            = $this->input->post('chalan_scoter_name',TRUE);
            $chalan_scoter_number	                        = $this->input->post('chalan_scoter_number',TRUE);
            $chalan_driver_card_no	                        = $this->input->post('chalan_driver_card_no',TRUE);
            $chalan_target_location	                        = $this->input->post('chalan_target_location',TRUE);
            $chalan_silgala_no	                            = $this->input->post('chalan_silgala_no',TRUE);
            $chalan_product_sign	                        = $this->input->post('chalan_product_sign',TRUE);
            $chalan_product_quantity	                    = $this->input->post('chalan_product_quantity',TRUE);
            $chalan_product_description	                    = $this->input->post('chalan_product_description',TRUE);
           
            $chalan_vehicles_original_rent	                = $this->input->post('chalan_vehicles_original_rent',TRUE);
           
            $chalan_vehicles_chalan_rent	                = $this->input->post('chalan_vehicles_chalan_rent',TRUE);
            $chalan_vehicles_rent_advance_amount	        = $this->input->post('chalan_vehicles_rent_advance_amount',TRUE);
            $chalan_vehicles_rent_due_amount	            = $this->input->post('chalan_vehicles_rent_due_amount',TRUE);
            $chalan_vehicles_driver_rec_due_amount	        = $this->input->post('chalan_vehicles_driver_rec_due_amount',TRUE);
      

            $chalan_vehicles_party_rent	                    = $this->input->post('chalan_vehicles_party_rent',TRUE);
            $chalan_vehicles_party_advance_rent	            = $this->input->post('chalan_vehicles_party_advance_rent',TRUE);
            $chalan_vehicles_party_due_rent	                = $this->input->post('chalan_vehicles_party_due_rent',TRUE);


            $this->form_validation->set_rules('chalan_date', 'chalan_date', 'required|trim');
            $this->form_validation->set_rules('chalan_vehicles_no', 'chalan_vehicles_no', 'required|trim');
            $this->form_validation->set_rules('chalan_driver_name', 'chalan_driver_name', 'required|trim');
            $this->form_validation->set_rules('chalan_driver_license_no', 'chalan_driver_license_no', 'required|trim');
            $this->form_validation->set_rules('chalan_cnf_name', 'chalan_cnf_name', 'required|trim');
            $this->form_validation->set_rules('chalan_vehicles_owner_address', 'chalan_vehicles_owner_address', 'required|trim');
            $this->form_validation->set_rules('chalan_driver_card_no', 'chalan_driver_card_no', 'required|trim');
            $this->form_validation->set_rules('chalan_vehicles_chalan_rent', 'chalan_vehicles_chalan_rent', 'required|trim');
           
            $this->form_validation->set_rules('chalan_vehicles_party_rent', 'chalan_vehicles_party_rent', 'required|trim');
            $this->form_validation->set_rules('chalan_vehicles_party_advance_rent', 'chalan_vehicles_party_advance_rent', 'required|trim');
            $this->form_validation->set_rules('chalan_vehicles_party_due_rent', 'chalan_vehicles_party_due_rent', 'trim');
    
            if ($this->form_validation->run() == FALSE)
            {
                    $fdata['error_message']="Validation Failed... Red Mark Field Required.";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/AddChalan');
            }else{
                $cnf_info                   = $this->chalanModel->cnf_info_by_cnf_id($chalan_cnf_id);
                $cnf_info_id                = $cnf_info->cnf_info_id;
                $chalan_cnf_name            = $cnf_info->cnf_full_name;
                $cnf_primary_mobile_number  = $cnf_info->cnf_primary_mobile_number;

                $join_vehicles_info         = $this->chalanModel->join_vehicles_info_by_vehicles_id($chalan_vehicles_no);
                $chalan_vehicles_no         = $join_vehicles_info->vehicles_no;
                $vehicles_gps_tracking_id   = $join_vehicles_info->vehicles_gps_tracking_id;
                $vehicles_info_id           = $join_vehicles_info->vehicles_info_id;

                $vehicles_owner_primary_mobile_number=$join_vehicles_info->vehicles_owner_primary_mobile_number;



                $chalan_vehicles_owner_phone_number         = $join_vehicles_info->vehicles_owner_primary_mobile_number;
                $vehicles_owner_id                          = $join_vehicles_info->vehicles_owner_id;
                $driver_info_id                             = $join_vehicles_info->driver_info_id;


                $chalan_data_info['chalan_be_no_c']                         =$chalan_be_no_c;
                $chalan_data_info['chalan_be_no_c_date']                    =$chalan_be_no_c_date;
                $chalan_data_info['chalan_lc_no']                           =$chalan_lc_no;
                $chalan_data_info['chalan_lc_no_date']                      =$chalan_lc_no_date;

                $chalan_data_info['chalan_no']                              =$this->make_chalan_no();
                $chalan_data_info['chalan_no_barcode_image_name']           =$this->make_chalan_bar_code_image($chalan_data_info['chalan_no']);
                $chalan_data_info['chalan_date']                            =$chalan_date;
                $chalan_data_info['chalan_importer_name']                   =$chalan_importer_name;
                $chalan_data_info['chalan_exporter_name']                   =$chalan_exporter_name;
                $chalan_data_info['chalan_ac_no']                           =$chalan_ac_no;
                $chalan_data_info['chalan_extra_ac_no']                     =$chalan_extra_ac_no;
                $chalan_data_info['chalan_vehicles_no']                     =$chalan_vehicles_no;
                $chalan_data_info['vehicles_gps_tracking_id']               =$vehicles_gps_tracking_id;
                $chalan_data_info['chalan_driver_name']                     =$chalan_driver_name;
                $chalan_data_info['chalan_driver_license_no']               =$chalan_driver_license_no;
                $chalan_data_info['chalan_cnf_name']                        =$chalan_cnf_name;

                $chalan_data_info['chalan_vehicles_owner_address']          =$chalan_vehicles_owner_address;
                $chalan_data_info['chalan_vehicles_owner_phone_number']     =$chalan_vehicles_owner_phone_number;
                $chalan_data_info['chalan_scoter_name']                     =$chalan_scoter_name;
                $chalan_data_info['chalan_scoter_number']                   =$chalan_scoter_number;

                $chalan_data_info['chalan_driver_card_no']                  =$chalan_driver_card_no;
                $chalan_data_info['chalan_target_location']                 =$chalan_target_location;
                $chalan_data_info['chalan_silgala_no']                      =$chalan_silgala_no;
                $chalan_data_info['chalan_product_sign']                    =$chalan_product_sign;

                $chalan_data_info['chalan_product_quantity']                =$chalan_product_quantity;
                $chalan_data_info['chalan_product_description']             =$chalan_product_description;
                $chalan_data_info['chalan_vehicles_original_rent']          =$chalan_vehicles_original_rent;

                $chalan_data_info['chalan_vehicles_chalan_rent']            =$chalan_vehicles_chalan_rent;
                $chalan_data_info['chalan_vehicles_rent_advance_amount']    =$chalan_vehicles_rent_advance_amount;

                $chalan_data_info['chalan_vehicles_rent_due_amount']        =$chalan_vehicles_rent_due_amount;
                $chalan_data_info['chalan_vehicles_driver_rec_due_amount']  =$chalan_vehicles_driver_rec_due_amount;
              
                $chalan_data_info['chalan_vehicles_party_rent']            = $chalan_vehicles_party_rent;
                $chalan_data_info['chalan_vehicles_party_advance_rent']    = $chalan_vehicles_party_advance_rent;
                $chalan_data_info['chalan_vehicles_party_due_rent']        = $chalan_vehicles_party_due_rent;
              
                $chalan_data_info['cnf_info_id']                            =$cnf_info_id;
                $chalan_data_info['importer_info_id']                       =$importer_info_id;

                $chalan_data_info['exporter_info_id']                       =$exporter_info_id;
                $chalan_data_info['vehicles_info_id']                       =$vehicles_info_id;
                $chalan_data_info['vehicles_owner_id']                      =$vehicles_owner_id;
                $chalan_data_info['driver_info_id']                         =$driver_info_id;
                $chalan_data_info['chalan_status']                          =0;
                //0= pending, 1=on the way, 2=complete, 3=cancel
                if($chalan_vehicles_party_due_rent==0){
                    $chalan_data_info['chalan_payment_status']=1;
                    //1 = payment_status_paid...
                }else{
                    $chalan_data_info['chalan_payment_status']=0;
                    //0 = payment status Due..
                }
              
                $chalan_data_info['chalan_created_date']=date("Y-m-d H:i:s");





                $chalan_sms_data= $this->chalanModel->all_chalan_sms_data();

                if($chalan_sms_data->chalan_cnf_sms==1){
                 $this->send_chalan_sms($chalan_vehicles_no,$chalan_target_location,$chalan_date,$chalan_data_info['chalan_no'],$cnf_primary_mobile_number);
                }


                if($chalan_sms_data->chalan_exporter_sms==1){
                 $this->send_chalan_sms($chalan_vehicles_no,$chalan_target_location,$chalan_date,$chalan_data_info['chalan_no'],$exporter_primary_mobile_number);
                }

                if($chalan_sms_data->chalan_importer_sms==1){
                 $this->send_chalan_sms($chalan_vehicles_no,$chalan_target_location,$chalan_date,$chalan_data_info['chalan_no'],$importer_primary_mobile_number);
                }

                $chalan_info_id     =$this->chalanModel->insert_chalan_info($chalan_data_info);
               


                
                if($chalan_vehicles_party_due_rent>0){
                    // Due amount.....
                    $income_data=array();
                    $income_data['income_category_id']              = 2;
                    $income_data['income_category_name']            = 'Chalan A/C';
                    $income_data['income_details_id_no']            = $chalan_data_info['chalan_no'];
                    $income_data['chalan_info_id']                  = $chalan_info_id;
                    $income_data['income_details_name']             = $chalan_importer_name.$chalan_exporter_name;
                    $income_data['income_details_name_number']      = $importer_primary_mobile_number.$exporter_primary_mobile_number;
                    $income_data['income_details_original_amount']  = $chalan_vehicles_original_rent;
                    $income_data['income_details_sell_amount']      = $chalan_vehicles_party_rent;
                    $income_data['income_details_due_amount']       = $chalan_vehicles_party_due_rent;
                    $income_data['income_details_due_paid_status']  = 0;
                    $income_data['income_details_is_profit']        = 0;
                    $income_data['income_details_due_status']       = 'due';
                    $income_data['income_details_added_user_id']    = $this->session->userdata('user_id');
                    $income_data['income_details_added_date_time']  = date("Y-m-d H:i:s");
                    $income_data['income_details_date']             = date("Y-m-d");
                    $this->chalanModel->save_chalan_details_data_in_account($income_data);

                }


                if($chalan_vehicles_party_due_rent==0){
                    //paid amount....

                    $income_data=array();
                    $income_data['income_category_id']              = 2;
                    $income_data['income_category_name']            = 'Chalan A/C';
                    $income_data['income_details_id_no']            = $chalan_data_info['chalan_no'];
                    $income_data['chalan_info_id']                  = $chalan_info_id;
                    $income_data['income_details_name']             = $chalan_importer_name.$chalan_exporter_name;
                    $income_data['income_details_name_number']      = $importer_primary_mobile_number.$exporter_primary_mobile_number;
                    $income_data['income_details_original_amount']  = $chalan_vehicles_original_rent;
                    $income_data['income_details_sell_amount']      = $chalan_vehicles_party_rent;
                    $income_data['income_details_due_amount']       = 0;
                    $income_data['income_details_due_paid_status']  = 0;
                    $income_data['income_details_is_profit']        = 1;
                    $income_data['income_details_due_status']       = 'paid';
                    $income_data['income_details_added_user_id']    = $this->session->userdata('user_id');
                    $income_data['income_details_added_date_time']  = date("Y-m-d H:i:s");
                    $income_data['income_details_date']             = date("Y-m-d");
                    $this->chalanModel->save_chalan_details_data_in_account($income_data);

                }

                $this->chalanModel->booked_vehicles_info_for_chalan($vehicles_info_id);
              
                $fdata['success_message']="Chalan Info Save Success.....";
                $fdata['chalan_id']=$chalan_info_id;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AddChalan');


            }









        }
    }





    public function manage_chalan(){

        if(in_array("manage_chalan",$this->session->userdata('user_permission'))){
        $data['chalan_data']=$this->chalanModel->select_all_chalan_info();
        $data['admin_main_content']=$this->load->view('Adminpage/Chalan/managechalan',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }


    }




    public function change_chalan_status($chalan_info_id){
        if(in_array("chalan_status_change",$this->session->userdata('user_permission'))){
        $data['chalan_info_data']=$this->chalanModel->all_chalan_info_by_chalan_id($chalan_info_id);
        $data['admin_main_content']=$this->load->view('Adminpage/Chalan/change_chalan_status',$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }


    public function update_chalan_status($chalan_info_id){
        $fdata=array();
        $chalan_info_id                     = trim(intval($chalan_info_id));
        $chalan_status                      = trim($this->input->post('chalan_status',true));
        $system_chalan_status               = trim($this->input->post('system_chalan_status',true));
        $vehicles_info_id                   = trim($this->input->post('vehicles_info_id',true));
        $vehicles_is_avaiable               = trim($this->input->post('vehicles_is_avaiable',true));
        $chalan_vehicles_rent_due_amount    = trim($this->input->post('chalan_vehicles_rent_due_amount',true));
        $chalan_no                          = trim($this->input->post('chalan_no',true));

        
        if($system_chalan_status==0 || $system_chalan_status==1){ //IF chalan status allready not completed Or Cancel then working this method....

        if($chalan_status=='2'){ // if chalan status click completed....

            if($vehicles_is_avaiable=='on'){
                $this->chalanModel->cancel_booking_vehicles_info_for_chalan($vehicles_info_id);
            }else{
                $this->chalanModel->booked_vehicles_info_for_chalan($vehicles_info_id);
            }





            if($chalan_vehicles_rent_due_amount==0){ //  if chalan vehicles rent have no due ... paid chalan ...
                $this->chalanModel->update_chalan_info_status_change($chalan_status,$chalan_info_id);
                $fdata['success_message']="Chalan Status Info Updated Success.....";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageChalan');
    
            }else{ // when chalan amount due ... so adjust collect due amount in accounts...

                $income_data=array();
                $income_data['income_category_id']              = 2;
                $income_data['income_category_name']            = 'Chalan A/C';
                $income_data['income_details_id_no']            = $chalan_no;
                $income_data['chalan_info_id']                  = $chalan_info_id;
                $income_data['income_details_due_amount']       = 0;
                $income_data['income_details_due_paid_amount']  = $chalan_vehicles_rent_due_amount;
                $income_data['income_details_due_paid_status']  = 1; //due collection amount..
                $income_data['income_details_is_profit']        = 0; // no profit calculation... 
                $income_data['income_details_due_status']       = 'oldduepaid';
                $income_data['income_details_added_user_id']    = $this->session->userdata('user_id');
                $income_data['income_details_added_date_time']  = date("Y-m-d H:i:s");
                $income_data['income_details_date']             = date("Y-m-d");
                $this->chalanModel->save_chalan_details_data_in_account($income_data);


                //update previous chalan profit calculate status...
                $this->chalanModel->update_previous_chalan_due_paid_profit_calculate($chalan_info_id);

                $this->chalanModel->update_chalan_info_status_change($chalan_status,$chalan_info_id);
              
                $chalan_payment_info=1; //  update chalan payment adjust.... chanage payment status due to full paid...
                $this->chalanModel->update_chalan_payment_info_status_change($chalan_payment_info,$chalan_info_id);
                $fdata['success_message']="Chalan Status Info Updated Success.....";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageChalan');
            }

        }
        

        if($chalan_status=='3'){// if chalan status click Cancel....Then Clear Account Income Details Data...

            $delete_chalan_income_accounts_data=$this->chalanModel->delete_chalan_income_accounts_data_chalan_cancel($chalan_info_id);
            $this->chalanModel->update_chalan_info_status_change($chalan_status,$chalan_info_id);
            $fdata['success_message']="Chalan Status Info Updated Success.....";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageChalan');

        }
        
        
        else{
            $this->chalanModel->update_chalan_info_status_change($chalan_status,$chalan_info_id);
         
            $fdata['success_message']="Chalan Status Info Updated Success.....";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageChalan');
        }
    }else{ // if chalan status allready completed Or Cancel then no need update any status ... so just need vehicles info update...
        
     
        if($vehicles_is_avaiable=='on'){
            $this->chalanModel->cancel_booking_vehicles_info_for_chalan($vehicles_info_id);
        }else{
            $this->chalanModel->booked_vehicles_info_for_chalan($vehicles_info_id);
        }

        $fdata['success_message']="Chalan Status Info Updated Success.....";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageChalan');
        
    }




    }




    

    public function print_chalan($chalan_info_id){
        if(in_array("chalan_print",$this->session->userdata('user_permission'))){
        $data['chalan_data']=$this->chalanModel->all_chalan_info_by_chalan_id($chalan_info_id);
        $this->load->view('Adminpage/Chalan/print_chalan',$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

    }



    public function view_chalan_info($chalan_info_id){
        $data['chalan_data']=$this->chalanModel->all_chalan_info_by_chalan_id($chalan_info_id);
        if($data['chalan_data']){
         $data['admin_main_content']= $this->load->view('Adminpage/Chalan/view_chalan',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            $fdata['error_message']="Access is Forbidden !....";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageChalan');
        }
    }








    public function get_live_location($chalan_no){
        if(in_array("chalan_gps_location",$this->session->userdata('user_permission'))){
        $chalan_info=$this->chalanModel->all_chalan_info_by_chalan_no($chalan_no);
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
            $data['chalan_data']                 = $chalan_info;
            $data['vehicles_gps_tracking_id']    = $chalan_info->vehicles_gps_tracking_id;
         $data['admin_main_content']= $this->load->view('Adminpage/Chalan/chalan_vehicles_live_track',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            $fdata['error_message']="Vehicles Device Tracker Id Not Found...";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageChalan');
        }
        }else{
            redirect('Cholotransportowner/Dashboard');
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












    public function sms_control(){
        $data['admin_main_content']=$this->load->view('Adminpage/Chalan/sms_control_page','',TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        
    }



    public function chalan_sms_control(){
        $data['chalan_sms_data']= $this->chalanModel->all_chalan_sms_data();
        $data['admin_main_content']=$this->load->view('Adminpage/Chalan/chalan_sms_control',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
    }




    public function active_cnf_sms_notification(){
        $this->chalanModel->do_active_cnf_sms_notification();
    }

    public function deactive_cnf_sms_notification(){
        $this->chalanModel->do_deactive_cnf_sms_notification();
    }



    public function active_importer_sms_notification(){
        $this->chalanModel->do_active_importer_sms_notification();
    }

    public function deactive_importer_sms_notification(){
        $this->chalanModel->do_deactive_importer_sms_notification();
    }



    public function active_exporter_sms_notification(){
        $this->chalanModel->do_active_exporter_sms_notification();
    }

    public function deactive_exporter_sms_notification(){
        $this->chalanModel->do_deactive_exporter_sms_notification();
    }

















	public function manage_cnf()
	{
        $data['cnf_data']=$this->cnfModel->select_all_cnf_info();
		$data['admin_main_content']=$this->load->view('Adminpage/Cnf/managecnf',$data,TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
	}



    public function deactive_cnf($cnf_id){
        $this->cnfModel->deactive_cnf_account_by_cnf_id($cnf_id);
    }




    public function active_cnf($cnf_id){
        $this->cnfModel->active_cnf_account_by_cnf_id($cnf_id);
    }


    public function cnfimageview($cnf_id){
        $data['cnf_image_data']=$this->cnfModel->select_cnf_image_data_by_cnf_id($cnf_id);
        $this->load->view('Adminpage/Cnf/cnf_image_view',$data);
    }




    public function edit_cnf_info($cnf_info_id){
        $data['edit_cnf_data']=$this->cnfModel->select_cnf_info_data_by_cnf_id($cnf_info_id);
        if(empty($data['edit_cnf_data'])){
            redirect('Cholotransportowner/ManageCnf');
        }else{
        $data['admin_main_content']=$this->load->view('Adminpage/Cnf/edit_cnf_info',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
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

    











}
