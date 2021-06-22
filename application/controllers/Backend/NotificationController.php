<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class NotificationController extends CI_Controller {

	/**
	 * All NotificationController Page for this controller.
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



    public function notification_control(){
        $data['admin_main_content']=$this->load->view('Adminpage/Notification/notification_control','',TRUE);
	    $this->load->view("Adminpage/admin_master",$data);
    }


	public function manage_flash_notification()
	{
        if(in_array("manage_flash_notification",$this->session->userdata('user_permission'))){
        $data['flash_notification']= $this->notificationModel->select_all_flash_notification();
		$data['admin_main_content']=$this->load->view('Adminpage/Notification/manage_flash_notifications',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
        
    }
    



    public function save_flash_notification(){
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageFlashNotification');
        }else{
            $data=array();
		$flash_notification_title					= $this->input->post('flash_notification_title',TRUE);
		$flash_notification_details					= $this->input->post('flash_notification_details',TRUE);

		
		$this->form_validation->set_rules('flash_notification_title', 'flash_notification_title', 'required|trim');
		$this->form_validation->set_rules('flash_notification_details', 'flash_notification_details', 'required|trim');
		

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageFlashNotification');
		}else{
            if(!empty($_FILES['flash_notification_image']['name'])){
				$flash_notification_image="flash_notification_image";
				$data['flash_notification_image']    = $this->upload_flash_notification_image($flash_notification_image);
			}else{
				$data['flash_notification_image']    = "";
            }
            

            $data['flash_notification_title']               = $flash_notification_title;
            $data['flash_notification_details']             = $flash_notification_details;
            $data['flash_notification_is_active']           = 1;
            $data['flash_notification_added_time']          = date("Y-m-d H:i:s");
            $data['flash_notification_added_user_id']       = $this->session->userdata('user_id');

            $insert_flash_notification= $this->notificationModel->insert_flash_notification($data);
            $fdata['success_message']="Success! Flash Notification Added Success..";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageFlashNotification');




        }
    }

}



	private function upload_flash_notification_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["flash_notification_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/notification_images/';
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
                redirect('Cholotransportowner/ManageFlashNotification');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }






    public function assign_flash_notification_in_cnf_user($flash_notification_id){
        $flash_notification_id= $this->security->xss_clean($flash_notification_id);
        $flash_notification_id=(int)($flash_notification_id);
        $check_data= $this->notificationModel->Check_flash_notification_is_publish($flash_notification_id);
        if($check_data == False){
            $fdata['error_message']="Error ! Your Flash Notification ID Is Invalid..";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageFlashNotification');
        }else{
   
        $all_cnf_user_without_flash_notification=$this->notificationModel->select_all_active_cnf_user_without_flash_notification();
        $all_cnf_user_by_flash_notification_id=$this->notificationModel->select_all_active_cnf_user_by_flash_notification_id($flash_notification_id);
       
        $user_data=array();
        if($all_cnf_user_by_flash_notification_id){
        foreach($all_cnf_user_by_flash_notification_id as $all_cnf_user_list_by_flash_notification_id){
            $user_data[]=array(
                $all_cnf_user_list_by_flash_notification_id->cnf_info_id,
                $all_cnf_user_list_by_flash_notification_id->cnf_info_created_date,
                $all_cnf_user_list_by_flash_notification_id->cnf_full_name,
                $all_cnf_user_list_by_flash_notification_id->cnf_primary_mobile_number,

              //  $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_by_seasonal_category_id->seasonal_category_id),
            );
        }
    }
       foreach($all_cnf_user_without_flash_notification as $all_cnf_user_list_without_flash_notification){
            $user_data[]=array(
                $all_cnf_user_list_without_flash_notification->cnf_info_id,
                $all_cnf_user_list_without_flash_notification->cnf_info_created_date,
                $all_cnf_user_list_without_flash_notification->cnf_full_name,
                $all_cnf_user_list_without_flash_notification->cnf_primary_mobile_number,

              // $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_without_seasonal_category->seasonal_category_id),
            );
       }

       $output = array(
        "data" => $user_data

      );
      if($all_cnf_user_by_flash_notification_id){
        $flash_notification_cnf_user=array();
      foreach($all_cnf_user_by_flash_notification_id as $all_cnf_user_id_by_flash_notification_id){
          $flash_notification_cnf_user[]=$all_cnf_user_id_by_flash_notification_id->cnf_info_id;
      }
      $list = implode("','", $flash_notification_cnf_user); 
      $target_id="['".$list."']";
      $data['selected_data']=$target_id;
    } else{
       $data['selected_data']="[]";
    }
     //header('Content-Type: application/json');
      $json_product_data=json_encode( $output);
        $data['json_product_data']=$json_product_data;

        $selected_flash_info=$this->notificationModel->select_flash_notification_info_by_id($flash_notification_id);
        $data['selected_flash_info']=$selected_flash_info;
        $data['admin_main_content']=$this->load->view('Adminpage/Notification/assign_flash_notification_in_cnf_user',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        
    }


 }











 public function save_assign_flash_notification_in_cnf_user(){

        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! You Can't Direct Access This Method";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageFlashNotification');
        }else{

             $cnf_info_id=$this->input->post('id',TRUE);
             $flash_notification_id=$this->input->post('flash_notification_id',TRUE);

             if($flash_notification_id==''){
                  $fdata['error_message']="Error! Fill Up All Field";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageFlashNotification');
             }else{


            if(empty($cnf_info_id)){
            $all_flash_notification_cnf_user= $this->notificationModel->select_all_cnf_user_info_by_flash_notification_id($flash_notification_id);  
           if(!empty($all_flash_notification_cnf_user)){
            foreach($all_flash_notification_cnf_user as $all_flash_notification_cnf_user_info){
                $cnf_main_info=array();
                $cnf_main_info['cnf_info_id']=$all_flash_notification_cnf_user_info->cnf_info_id;
                $this->notificationModel->update_cnf_info_by_flash_notification_id($cnf_main_info);
            }           

         }
            $fdata=array();
                $fdata['success_message']="Success! Your Flash Notification Added in Cnf User Account";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AssignCnfFlashNotification/'.$flash_notification_id);
            }
         else{
          
            $all_flash_notification_cnf_user= $this->notificationModel->select_all_cnf_user_info_by_flash_notification_id($flash_notification_id);  
            if(!empty($all_flash_notification_cnf_user)){
             foreach($all_flash_notification_cnf_user as $all_flash_notification_cnf_user_info){
                 $cnf_main_info=array();
                 $cnf_main_info['cnf_info_id']=$all_flash_notification_cnf_user_info->cnf_info_id;
                 $this->notificationModel->update_cnf_info_by_flash_notification_id($cnf_main_info);
             }  
                
            }
            foreach($cnf_info_id as $cnf_info_row_id){
                $this->notificationModel->update_all_cnf_info_by_flash_notification_id($cnf_info_row_id,$flash_notification_id);
            }

            $fdata=array();
            $fdata['success_message']="Success! Your Flash Notification Added in Cnf User Account";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/AssignCnfFlashNotification/'.$flash_notification_id);
   

        }


        }

    }

 }










 public function assign_flash_notification_in_importer_user($flash_notification_id){
    $flash_notification_id= $this->security->xss_clean($flash_notification_id);
    $flash_notification_id=(int)($flash_notification_id);
    $check_data= $this->notificationModel->Check_flash_notification_is_publish($flash_notification_id);
    if($check_data == False){
        $fdata['error_message']="Error ! Your Flash Notification ID Is Invalid..";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageFlashNotification');
    }else{

    $all_importer_user_without_flash_notification=$this->notificationModel->select_all_active_importer_user_without_flash_notification();
    $all_importer_user_by_flash_notification_id=$this->notificationModel->select_all_active_importer_user_by_flash_notification_id($flash_notification_id);
   
    $user_data=array();
    if($all_importer_user_by_flash_notification_id){
    foreach($all_importer_user_by_flash_notification_id as $all_importer_user_list_by_flash_notification_id){
        $user_data[]=array(
            $all_importer_user_list_by_flash_notification_id->importer_info_id,
            $all_importer_user_list_by_flash_notification_id->importer_created_date,
            $all_importer_user_list_by_flash_notification_id->importer_full_name,
            $all_importer_user_list_by_flash_notification_id->importer_primary_mobile_number,

          //  $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_by_seasonal_category_id->seasonal_category_id),
        );
    }
}
   foreach($all_importer_user_without_flash_notification as $all_importer_user_list_without_flash_notification){
        $user_data[]=array(
            $all_importer_user_list_without_flash_notification->importer_info_id,
            $all_importer_user_list_without_flash_notification->importer_created_date,
            $all_importer_user_list_without_flash_notification->importer_full_name,
            $all_importer_user_list_without_flash_notification->importer_primary_mobile_number,

          // $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_without_seasonal_category->seasonal_category_id),
        );
   }

   $output = array(
    "data" => $user_data

  );
  if($all_importer_user_by_flash_notification_id){
    $flash_notification_importer_user=array();
  foreach($all_importer_user_by_flash_notification_id as $all_importer_user_id_by_flash_notification_id){
      $flash_notification_importer_user[]=$all_importer_user_id_by_flash_notification_id->importer_info_id;
  }
  $list = implode("','", $flash_notification_importer_user); 
  $target_id="['".$list."']";
  $data['selected_data']=$target_id;
} else{
   $data['selected_data']="[]";
}
 //header('Content-Type: application/json');
  $json_product_data=json_encode( $output);
    $data['json_product_data']=$json_product_data;

    $selected_flash_info=$this->notificationModel->select_flash_notification_info_by_id($flash_notification_id);
    $data['selected_flash_info']=$selected_flash_info;
    $data['admin_main_content']=$this->load->view('Adminpage/Notification/assign_flash_notification_in_importer_user',$data,TRUE);
    $this->load->view('Adminpage/admin_master',$data);
    
}


}

















public function save_assign_flash_notification_in_importer_user(){

    $fdata=array();
    if(empty($this->input->post())){
    $fdata['error_message']="Error! You Can't Direct Access This Method";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageFlashNotification');
    }else{

         $importer_info_id=$this->input->post('id',TRUE);
         $flash_notification_id=$this->input->post('flash_notification_id',TRUE);

         if($flash_notification_id==''){
              $fdata['error_message']="Error! Fill Up All Field";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageFlashNotification');
         }else{


        if(empty($importer_info_id)){
        $all_flash_notification_importer_user= $this->notificationModel->select_all_importer_user_info_by_flash_notification_id($flash_notification_id);  
       if(!empty($all_flash_notification_importer_user)){
        foreach($all_flash_notification_importer_user as $all_flash_notification_importer_user_info){
            $importer_main_info=array();
            $importer_main_info['importer_info_id']=$all_flash_notification_importer_user_info->importer_info_id;
            $this->notificationModel->update_importer_info_by_flash_notification_id($importer_main_info);
        }           

     }
        $fdata=array();
            $fdata['success_message']="Success! Your Flash Notification Added in Cnf User Account";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/AssignImporterFlashNotification/'.$flash_notification_id);
        }
     else{
      
        $all_flash_notification_importer_user= $this->notificationModel->select_all_importer_user_info_by_flash_notification_id($flash_notification_id);  
        if(!empty($all_flash_notification_importer_user)){
         foreach($all_flash_notification_importer_user as $all_flash_notification_importer_user_info){
             $importer_main_info=array();
             $importer_main_info['importer_info_id']=$all_flash_notification_importer_user_info->importer_info_id;
             $this->notificationModel->update_importer_info_by_flash_notification_id($importer_main_info);
         }  
            
        }
        foreach($importer_info_id as $importer_info_row_id){
            $this->notificationModel->update_all_importer_info_by_flash_notification_id($importer_info_row_id,$flash_notification_id);
        }
        $fdata=array();
        $fdata['success_message']="Success! Your Flash Notification Added in Cnf User Account";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/AssignImporterFlashNotification/'.$flash_notification_id);


    }


    }

}

}
















public function assign_flash_notification_in_exporter_user($flash_notification_id){
    $flash_notification_id= $this->security->xss_clean($flash_notification_id);
    $flash_notification_id=(int)($flash_notification_id);
    $check_data= $this->notificationModel->Check_flash_notification_is_publish($flash_notification_id);
    if($check_data == False){
        $fdata['error_message']="Error ! Your Flash Notification ID Is Invalid..";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageFlashNotification');
    }else{

    $all_exporter_user_without_flash_notification=$this->notificationModel->select_all_active_exporter_user_without_flash_notification();
    $all_exporter_user_by_flash_notification_id=$this->notificationModel->select_all_active_exporter_user_by_flash_notification_id($flash_notification_id);
   
    $user_data=array();
    if($all_exporter_user_by_flash_notification_id){
    foreach($all_exporter_user_by_flash_notification_id as $all_exporter_user_list_by_flash_notification_id){
        $user_data[]=array(
            $all_exporter_user_list_by_flash_notification_id->exporter_info_id,
            $all_exporter_user_list_by_flash_notification_id->exporter_created_date,
            $all_exporter_user_list_by_flash_notification_id->exporter_full_name,
            $all_exporter_user_list_by_flash_notification_id->exporter_primary_mobile_number,

          //  $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_by_seasonal_category_id->seasonal_category_id),
        );
    }
}
   foreach($all_exporter_user_without_flash_notification as $all_exporter_user_list_without_flash_notification){
        $user_data[]=array(
            $all_exporter_user_list_without_flash_notification->exporter_info_id,
            $all_exporter_user_list_without_flash_notification->exporter_created_date,
            $all_exporter_user_list_without_flash_notification->exporter_full_name,
            $all_exporter_user_list_without_flash_notification->exporter_primary_mobile_number,

          // $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_without_seasonal_category->seasonal_category_id),
        );
   }

   $output = array(
    "data" => $user_data

  );
  if($all_exporter_user_by_flash_notification_id){
    $flash_notification_exporter_user=array();
  foreach($all_exporter_user_by_flash_notification_id as $all_exporter_user_id_by_flash_notification_id){
      $flash_notification_exporter_user[]=$all_exporter_user_id_by_flash_notification_id->exporter_info_id;
  }
  $list = implode("','", $flash_notification_exporter_user); 
  $target_id="['".$list."']";
  $data['selected_data']=$target_id;
} else{
   $data['selected_data']="[]";
}
 //header('Content-Type: application/json');
  $json_product_data=json_encode( $output);
    $data['json_product_data']=$json_product_data;

    $selected_flash_info=$this->notificationModel->select_flash_notification_info_by_id($flash_notification_id);
    $data['selected_flash_info']=$selected_flash_info;
    $data['admin_main_content']=$this->load->view('Adminpage/Notification/assign_flash_notification_in_exporter_user',$data,TRUE);
    $this->load->view('Adminpage/admin_master',$data);
    
}


}













public function save_assign_flash_notification_in_exporter_user(){

    $fdata=array();
    if(empty($this->input->post())){
    $fdata['error_message']="Error! You Can't Direct Access This Method";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageFlashNotification');
    }else{

         $exporter_info_id=$this->input->post('id',TRUE);
         $flash_notification_id=$this->input->post('flash_notification_id',TRUE);

         if($flash_notification_id==''){
              $fdata['error_message']="Error! Fill Up All Field";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageFlashNotification');
         }else{


        if(empty($exporter_info_id)){
        $all_flash_notification_exporter_user= $this->notificationModel->select_all_exporter_user_info_by_flash_notification_id($flash_notification_id);  
       if(!empty($all_flash_notification_exporter_user)){
        foreach($all_flash_notification_exporter_user as $all_flash_notification_exporter_user_info){
            $exporter_main_info=array();
            $exporter_main_info['exporter_info_id']=$all_flash_notification_exporter_user_info->exporter_info_id;
            $this->notificationModel->update_exporter_info_by_flash_notification_id($exporter_main_info);
        }           

     }
        $fdata=array();
            $fdata['success_message']="Success! Your Flash Notification Added in Exporter User Account";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/AssignExporterFlashNotification/'.$flash_notification_id);
        }
     else{
      
        $all_flash_notification_exporter_user= $this->notificationModel->select_all_exporter_user_info_by_flash_notification_id($flash_notification_id);  
        if(!empty($all_flash_notification_exporter_user)){
         foreach($all_flash_notification_exporter_user as $all_flash_notification_exporter_user_info){
             $exporter_main_info=array();
             $exporter_main_info['exporter_info_id']=$all_flash_notification_exporter_user_info->exporter_info_id;
             $this->notificationModel->update_exporter_info_by_flash_notification_id($exporter_main_info);
         }  
            
        }
        foreach($exporter_info_id as $exporter_info_row_id){
            $this->notificationModel->update_all_exporter_info_by_flash_notification_id($exporter_info_row_id,$flash_notification_id);
        }
        $fdata=array();
        $fdata['success_message']="Success! Your Flash Notification Added in Exporter User Account";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/AssignExporterFlashNotification/'.$flash_notification_id);


    }


    }

}

}













    public function deactive_flash_notification($flash_notification_id){
        $this->notificationModel->deactive_flash_notification_info($flash_notification_id);
        redirect('Cholotransportowner/ManageFlashNotification');
    }




    public function active_flash_notification($flash_notification_id){
        $this->notificationModel->active_flash_notification_info($flash_notification_id);
        redirect('Cholotransportowner/ManageFlashNotification');
    }



    public function delete_flash_notification($flash_notification_id){
        if(in_array("delete_flash_notification",$this->session->userdata('user_permission'))){
        $all_flash_notification_cnf_user= $this->notificationModel->select_all_cnf_user_info_by_flash_notification_id($flash_notification_id);  
        if(!empty($all_flash_notification_cnf_user)){
         foreach($all_flash_notification_cnf_user as $all_flash_notification_cnf_user_info){
             $cnf_main_info=array();
             $cnf_main_info['cnf_info_id']=$all_flash_notification_cnf_user_info->cnf_info_id;
             $this->notificationModel->update_cnf_info_by_flash_notification_id($cnf_main_info);
         } 
        }

         $all_flash_notification_importer_user= $this->notificationModel->select_all_importer_user_info_by_flash_notification_id($flash_notification_id);  
         if(!empty($all_flash_notification_importer_user)){
          foreach($all_flash_notification_importer_user as $all_flash_notification_importer_user_info){
              $importer_main_info=array();
              $importer_main_info['importer_info_id']=$all_flash_notification_importer_user_info->importer_info_id;
              $this->notificationModel->update_importer_info_by_flash_notification_id($importer_main_info);
          } 
        }


          $all_flash_notification_exporter_user= $this->notificationModel->select_all_exporter_user_info_by_flash_notification_id($flash_notification_id);  
          if(!empty($all_flash_notification_exporter_user)){
           foreach($all_flash_notification_exporter_user as $all_flash_notification_exporter_user_info){
               $exporter_main_info=array();
               $exporter_main_info['exporter_info_id']=$all_flash_notification_exporter_user_info->exporter_info_id;
               $this->notificationModel->update_exporter_info_by_flash_notification_id($exporter_main_info);
           }
        }


        $this->notificationModel->delete_flash_notification_with_image($flash_notification_id);
        $fdata=array();
        $fdata['success_message']="Success! Your Flash Notification Deleted Success";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageFlashNotification');
    }else{
        redirect('Cholotransportowner/Dashboard');
    }


    }





























    public function manage_normal_notification()
	{
        if(in_array("manage_normal_notification",$this->session->userdata('user_permission'))){
        $data['normal_notification']= $this->notificationModel->select_all_normal_notification();
		$data['admin_main_content']=$this->load->view('Adminpage/Notification/manage_normal_notifications',$data,TRUE);
        $this->load->view("Adminpage/admin_master",$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
    }
    





    public function save_normal_notification(){
        if(empty($_POST)){
            $fdata['error_message']="Direct Access Not Allowed";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageNormalNotification');
        }else{
            $data=array();
		$normal_notification_title					    = $this->input->post('normal_notification_title',TRUE);
		$normal_notification_details					= $this->input->post('normal_notification_details',TRUE);

		
		$this->form_validation->set_rules('normal_notification_title', 'normal_notification_title', 'required|trim');
		$this->form_validation->set_rules('normal_notification_details', 'normal_notification_details', 'required|trim');
		

		if ($this->form_validation->run() == FALSE)
		{
				$fdata['error_message']="Validation Failed... Red Mark Field Required.";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageNormalNotification');
		}else{
            if(!empty($_FILES['normal_notification_image']['name'])){
				$normal_notification_image="normal_notification_image";
				$data['normal_notification_image']    = $this->upload_normal_notification_image($normal_notification_image);
			}else{
				$data['normal_notification_image']    = "";
            }
            

            $data['normal_notification_title']               = $normal_notification_title;
            $data['normal_notification_details']             = $normal_notification_details;
            $data['normal_notification_is_active']           = 1;
            $data['normal_notification_added_time']          = date("Y-m-d H:i:s");
            $data['normal_notification_added_user_id']       = $this->session->userdata('user_id');

            $insert_normal_notification= $this->notificationModel->insert_normal_notification($data);
            $fdata['success_message']="Success! Normal Notification Added Success..";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageNormalNotification');

        }
    }

}







	private function upload_normal_notification_image($checkimage){
        $sdata=array();
        $new_name = time().$_FILES["normal_notification_image"]['name'];
        $config['file_name'] = $new_name;
        $config['upload_path']          = 'images/notification_images/';
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
                redirect('Cholotransportowner/ManageNormalNotification');
                exit();
        }
        else
        {
        $sdata =$this->upload->data();
       return $config['upload_path'].$sdata['file_name'];
        }
    }



    public function deactive_normal_notification($normal_notification_id){
        $this->notificationModel->deactive_normal_notification_info($normal_notification_id);
        redirect('Cholotransportowner/ManageNormalNotification');
    }




    public function active_normal_notification($normal_notification_id){
        $this->notificationModel->active_normal_notification_info($normal_notification_id);
        redirect('Cholotransportowner/ManageNormalNotification');
    }








    public function assign_normal_notification_in_cnf_user($normal_notification_id){
        $normal_notification_id= $this->security->xss_clean($normal_notification_id);
        $normal_notification_id=(int)($normal_notification_id);
        $check_data= $this->notificationModel->Check_normal_notification_is_publish($normal_notification_id);
        if($check_data == False){
            $fdata['error_message']="Error ! Your Flash Notification ID Is Invalid..";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageNormalNotification');
        }else{
   
        $all_cnf_user_without_normal_notification=$this->notificationModel->select_all_active_cnf_user_without_normal_notification();
        $all_cnf_user_by_normal_notification_id=$this->notificationModel->select_all_active_cnf_user_by_normal_notification_id($normal_notification_id);
       
        $user_data=array();
        if($all_cnf_user_by_normal_notification_id){
        foreach($all_cnf_user_by_normal_notification_id as $all_cnf_user_list_by_normal_notification_id){
            $user_data[]=array(
                $all_cnf_user_list_by_normal_notification_id->cnf_info_id,
                $all_cnf_user_list_by_normal_notification_id->cnf_info_created_date,
                $all_cnf_user_list_by_normal_notification_id->cnf_full_name,
                $all_cnf_user_list_by_normal_notification_id->cnf_primary_mobile_number,

              //  $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_by_seasonal_category_id->seasonal_category_id),
            );
        }
    }
       foreach($all_cnf_user_without_normal_notification as $all_cnf_user_list_without_normal_notification){
            $user_data[]=array(
                $all_cnf_user_list_without_normal_notification->cnf_info_id,
                $all_cnf_user_list_without_normal_notification->cnf_info_created_date,
                $all_cnf_user_list_without_normal_notification->cnf_full_name,
                $all_cnf_user_list_without_normal_notification->cnf_primary_mobile_number,

              // $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_without_seasonal_category->seasonal_category_id),
            );
       }

       $output = array(
        "data" => $user_data

      );
      if($all_cnf_user_by_normal_notification_id){
        $normal_notification_cnf_user=array();
      foreach($all_cnf_user_by_normal_notification_id as $all_cnf_user_id_by_normal_notification_id){
          $normal_notification_cnf_user[]=$all_cnf_user_id_by_normal_notification_id->cnf_info_id;
      }
      $list = implode("','", $normal_notification_cnf_user); 
      $target_id="['".$list."']";
      $data['selected_data']=$target_id;
    } else{
       $data['selected_data']="[]";
    }
     //header('Content-Type: application/json');
      $json_product_data=json_encode( $output);
        $data['json_product_data']=$json_product_data;

        $selected_normal_info=$this->notificationModel->select_normal_notification_info_by_id($normal_notification_id);
        $data['selected_normal_info']=$selected_normal_info;
        $data['admin_main_content']=$this->load->view('Adminpage/Notification/assign_normal_notification_in_cnf_user',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        
    }


 }











 public function save_assign_normal_notification_in_cnf_user(){

        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! You Can't Direct Access This Method";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageNormalNotification');
        }else{

             $cnf_info_id=$this->input->post('id',TRUE);
             $normal_notification_id=$this->input->post('normal_notification_id',TRUE);

             if($normal_notification_id==''){
                  $fdata['error_message']="Error! Fill Up All Field";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageNormalNotification');
             }else{


            if(empty($cnf_info_id)){
            $all_normal_notification_cnf_user= $this->notificationModel->select_all_cnf_user_info_by_normal_notification_id($normal_notification_id);  
           if(!empty($all_normal_notification_cnf_user)){
            foreach($all_normal_notification_cnf_user as $all_normal_notification_cnf_user_info){
                $cnf_main_info=array();
                $cnf_main_info['cnf_info_id']=$all_normal_notification_cnf_user_info->cnf_info_id;
                $this->notificationModel->update_cnf_info_by_normal_notification_id($cnf_main_info);
            }           

         }
            $fdata=array();
                $fdata['success_message']="Success! Your Normal Notification Added in Cnf User Account";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/AssignCnfNormalNotification/'.$normal_notification_id);
            }
         else{
          
            $all_normal_notification_cnf_user= $this->notificationModel->select_all_cnf_user_info_by_normal_notification_id($normal_notification_id);  
            if(!empty($all_normal_notification_cnf_user)){
             foreach($all_normal_notification_cnf_user as $all_normal_notification_cnf_user_info){
                 $cnf_main_info=array();
                 $cnf_main_info['cnf_info_id']=$all_normal_notification_cnf_user_info->cnf_info_id;
                 $this->notificationModel->update_cnf_info_by_normal_notification_id($cnf_main_info);
             }  
                
            }
            foreach($cnf_info_id as $cnf_info_row_id){
                $this->notificationModel->update_all_cnf_info_by_normal_notification_id($cnf_info_row_id,$normal_notification_id);
            }

            $fdata=array();
            $fdata['success_message']="Success! Your Normal Notification Added in Cnf User Account";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/AssignCnfNormalNotification/'.$normal_notification_id);
   

        }


        }

    }

 }



















 public function assign_normal_notification_in_importer_user($normal_notification_id){
    $normal_notification_id= $this->security->xss_clean($normal_notification_id);
    $normal_notification_id=(int)($normal_notification_id);
    $check_data= $this->notificationModel->Check_normal_notification_is_publish($normal_notification_id);
    if($check_data == False){
        $fdata['error_message']="Error ! Your Normal Notification ID Is Invalid..";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageNormalNotification');
    }else{

    $all_importer_user_without_normal_notification=$this->notificationModel->select_all_active_importer_user_without_normal_notification();
    $all_importer_user_by_normal_notification_id=$this->notificationModel->select_all_active_importer_user_by_normal_notification_id($normal_notification_id);
   
    $user_data=array();
    if($all_importer_user_by_normal_notification_id){
    foreach($all_importer_user_by_normal_notification_id as $all_importer_user_list_by_normal_notification_id){
        $user_data[]=array(
            $all_importer_user_list_by_normal_notification_id->importer_info_id,
            $all_importer_user_list_by_normal_notification_id->importer_created_date,
            $all_importer_user_list_by_normal_notification_id->importer_full_name,
            $all_importer_user_list_by_normal_notification_id->importer_primary_mobile_number,

          //  $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_by_seasonal_category_id->seasonal_category_id),
        );
    }
}
   foreach($all_importer_user_without_normal_notification as $all_importer_user_list_without_normal_notification){
        $user_data[]=array(
            $all_importer_user_list_without_normal_notification->importer_info_id,
            $all_importer_user_list_without_normal_notification->importer_created_date,
            $all_importer_user_list_without_normal_notification->importer_full_name,
            $all_importer_user_list_without_normal_notification->importer_primary_mobile_number,

          // $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_without_seasonal_category->seasonal_category_id),
        );
   }

   $output = array(
    "data" => $user_data

  );
  if($all_importer_user_by_normal_notification_id){
    $normal_notification_importer_user=array();
  foreach($all_importer_user_by_normal_notification_id as $all_importer_user_id_by_normal_notification_id){
      $normal_notification_importer_user[]=$all_importer_user_id_by_normal_notification_id->importer_info_id;
  }
  $list = implode("','", $normal_notification_importer_user); 
  $target_id="['".$list."']";
  $data['selected_data']=$target_id;
} else{
   $data['selected_data']="[]";
}
 //header('Content-Type: application/json');
  $json_product_data=json_encode( $output);
    $data['json_product_data']=$json_product_data;

    $selected_normal_info=$this->notificationModel->select_normal_notification_info_by_id($normal_notification_id);
    $data['selected_normal_info']=$selected_normal_info;
    $data['admin_main_content']=$this->load->view('Adminpage/Notification/assign_normal_notification_in_importer_user',$data,TRUE);
    $this->load->view('Adminpage/admin_master',$data);
    
}


}

















public function save_assign_normal_notification_in_importer_user(){

    $fdata=array();
    if(empty($this->input->post())){
    $fdata['error_message']="Error! You Can't Direct Access This Method";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageNormalNotification');
    }else{

         $importer_info_id=$this->input->post('id',TRUE);
         $normal_notification_id=$this->input->post('normal_notification_id',TRUE);

         if($normal_notification_id==''){
              $fdata['error_message']="Error! Fill Up All Field";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageNormalNotification');
         }else{


        if(empty($importer_info_id)){
        $all_normal_notification_importer_user= $this->notificationModel->select_all_importer_user_info_by_normal_notification_id($normal_notification_id);  
       if(!empty($all_normal_notification_importer_user)){
        foreach($all_normal_notification_importer_user as $all_normal_notification_importer_user_info){
            $importer_main_info=array();
            $importer_main_info['importer_info_id']=$all_normal_notification_importer_user_info->importer_info_id;
            $this->notificationModel->update_importer_info_by_normal_notification_id($importer_main_info);
        }           

     }
        $fdata=array();
            $fdata['success_message']="Success! Your Normal Notification Added in Cnf User Account";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/AssignImporterNormalNotification/'.$normal_notification_id);
        }
     else{
      
        $all_normal_notification_importer_user= $this->notificationModel->select_all_importer_user_info_by_normal_notification_id($normal_notification_id);  
        if(!empty($all_normal_notification_importer_user)){
         foreach($all_normal_notification_importer_user as $all_normal_notification_importer_user_info){
             $importer_main_info=array();
             $importer_main_info['importer_info_id']=$all_normal_notification_importer_user_info->importer_info_id;
             $this->notificationModel->update_importer_info_by_normal_notification_id($importer_main_info);
         }  
            
        }
        foreach($importer_info_id as $importer_info_row_id){
            $this->notificationModel->update_all_importer_info_by_normal_notification_id($importer_info_row_id,$normal_notification_id);
        }
        $fdata=array();
        $fdata['success_message']="Success! Your Normal Notification Added in Cnf User Account";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/AssignImporterNormalNotification/'.$normal_notification_id);


    }


    }

}

}




















public function assign_normal_notification_in_exporter_user($normal_notification_id){
    $normal_notification_id= $this->security->xss_clean($normal_notification_id);
    $normal_notification_id=(int)($normal_notification_id);
    $check_data= $this->notificationModel->Check_normal_notification_is_publish($normal_notification_id);
    if($check_data == False){
        $fdata['error_message']="Error ! Your Flash Notification ID Is Invalid..";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageNormalNotification');
    }else{

    $all_exporter_user_without_normal_notification=$this->notificationModel->select_all_active_exporter_user_without_normal_notification();
    $all_exporter_user_by_normal_notification_id=$this->notificationModel->select_all_active_exporter_user_by_normal_notification_id($normal_notification_id);
   
    $user_data=array();
    if($all_exporter_user_by_normal_notification_id){
    foreach($all_exporter_user_by_normal_notification_id as $all_exporter_user_list_by_normal_notification_id){
        $user_data[]=array(
            $all_exporter_user_list_by_normal_notification_id->exporter_info_id,
            $all_exporter_user_list_by_normal_notification_id->exporter_created_date,
            $all_exporter_user_list_by_normal_notification_id->exporter_full_name,
            $all_exporter_user_list_by_normal_notification_id->exporter_primary_mobile_number,

          //  $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_by_seasonal_category_id->seasonal_category_id),
        );
    }
}
   foreach($all_exporter_user_without_normal_notification as $all_exporter_user_list_without_normal_notification){
        $user_data[]=array(
            $all_exporter_user_list_without_normal_notification->exporter_info_id,
            $all_exporter_user_list_without_normal_notification->exporter_created_date,
            $all_exporter_user_list_without_normal_notification->exporter_full_name,
            $all_exporter_user_list_without_normal_notification->exporter_primary_mobile_number,

          // $this->notificationModel->select_only_seasonal_category_name_by_id($all_product_list_without_seasonal_category->seasonal_category_id),
        );
   }

   $output = array(
    "data" => $user_data

  );
  if($all_exporter_user_by_normal_notification_id){
    $normal_notification_exporter_user=array();
  foreach($all_exporter_user_by_normal_notification_id as $all_exporter_user_id_by_normal_notification_id){
      $normal_notification_exporter_user[]=$all_exporter_user_id_by_normal_notification_id->exporter_info_id;
  }
  $list = implode("','", $normal_notification_exporter_user); 
  $target_id="['".$list."']";
  $data['selected_data']=$target_id;
} else{
   $data['selected_data']="[]";
}
 //header('Content-Type: application/json');
  $json_product_data=json_encode( $output);
    $data['json_product_data']=$json_product_data;

    $selected_normal_info=$this->notificationModel->select_normal_notification_info_by_id($normal_notification_id);
    $data['selected_normal_info']=$selected_normal_info;
    $data['admin_main_content']=$this->load->view('Adminpage/Notification/assign_normal_notification_in_exporter_user',$data,TRUE);
    $this->load->view('Adminpage/admin_master',$data);
    
}


}













public function save_assign_normal_notification_in_exporter_user(){

    $fdata=array();
    if(empty($this->input->post())){
    $fdata['error_message']="Error! You Can't Direct Access This Method";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageNormalNotification');
    }else{

         $exporter_info_id=$this->input->post('id',TRUE);
         $normal_notification_id=$this->input->post('normal_notification_id',TRUE);

         if($normal_notification_id==''){
              $fdata['error_message']="Error! Fill Up All Field";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageNormalNotification');
         }else{


        if(empty($exporter_info_id)){
        $all_normal_notification_exporter_user= $this->notificationModel->select_all_exporter_user_info_by_normal_notification_id($normal_notification_id);  
       if(!empty($all_normal_notification_exporter_user)){
        foreach($all_normal_notification_exporter_user as $all_normal_notification_exporter_user_info){
            $exporter_main_info=array();
            $exporter_main_info['exporter_info_id']=$all_normal_notification_exporter_user_info->exporter_info_id;
            $this->notificationModel->update_exporter_info_by_normal_notification_id($exporter_main_info);
        }           

     }
        $fdata=array();
            $fdata['success_message']="Success! Your Normal Notification Added in Exporter User Account";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/AssignExporterNormalNotification/'.$normal_notification_id);
        }
     else{
      
        $all_normal_notification_exporter_user= $this->notificationModel->select_all_exporter_user_info_by_normal_notification_id($normal_notification_id);  
        if(!empty($all_normal_notification_exporter_user)){
         foreach($all_normal_notification_exporter_user as $all_normal_notification_exporter_user_info){
             $exporter_main_info=array();
             $exporter_main_info['exporter_info_id']=$all_normal_notification_exporter_user_info->exporter_info_id;
             $this->notificationModel->update_exporter_info_by_normal_notification_id($exporter_main_info);
         }  
            
        }
        foreach($exporter_info_id as $exporter_info_row_id){
            $this->notificationModel->update_all_exporter_info_by_normal_notification_id($exporter_info_row_id,$normal_notification_id);
        }
        $fdata=array();
        $fdata['success_message']="Success! Your Normal Notification Added in Exporter User Account";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/AssignExporterNormalNotification/'.$normal_notification_id);


    }


    }

}

}



public function delete_normal_notification($normal_notification_id){
    if(in_array("delete_normal_notification",$this->session->userdata('user_permission'))){
    $all_normal_notification_cnf_user= $this->notificationModel->select_all_cnf_user_info_by_normal_notification_id($normal_notification_id);  
    if(!empty($all_normal_notification_cnf_user)){
     foreach($all_normal_notification_cnf_user as $all_normal_notification_cnf_user_info){
         $cnf_main_info=array();
         $cnf_main_info['cnf_info_id']=$all_normal_notification_cnf_user_info->cnf_info_id;
         $this->notificationModel->update_cnf_info_by_normal_notification_id($cnf_main_info);
     } 
    }

     $all_normal_notification_importer_user= $this->notificationModel->select_all_importer_user_info_by_normal_notification_id($normal_notification_id);  
     if(!empty($all_normal_notification_importer_user)){
      foreach($all_normal_notification_importer_user as $all_normal_notification_importer_user_info){
          $importer_main_info=array();
          $importer_main_info['importer_info_id']=$all_normal_notification_importer_user_info->importer_info_id;
          $this->notificationModel->update_importer_info_by_normal_notification_id($importer_main_info);
      } 
    }


      $all_normal_notification_exporter_user= $this->notificationModel->select_all_exporter_user_info_by_normal_notification_id($normal_notification_id);  
      if(!empty($all_normal_notification_exporter_user)){
       foreach($all_normal_notification_exporter_user as $all_normal_notification_exporter_user_info){
           $exporter_main_info=array();
           $exporter_main_info['exporter_info_id']=$all_normal_notification_exporter_user_info->exporter_info_id;
           $this->notificationModel->update_exporter_info_by_normal_notification_id($exporter_main_info);
       }
    }


    $this->notificationModel->delete_normal_notification_with_image($normal_notification_id);
    $fdata=array();
    $fdata['success_message']="Success! Your Normal Notification Deleted Success";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageNormalNotification');
    }else{
        redirect('Cholotransportowner/Dashboard');
    }


}




















































}
