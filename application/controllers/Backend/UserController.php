<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class UserController extends CI_Controller {

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




    public function manage_user(){
        if(in_array("manage_user",$this->session->userdata('user_permission'))){
        $data['user_info']=$this->userModel->select_all_user_info_list();
        $data['admin_main_content']=$this->load->view('Adminpage/User/manage_user',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }


    }





    public function save_new_user(){
       
        $fdata=array();
        $data=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageUser');
        }else{

            $data['username']           = trim($this->input->post('username',true));
            $data['fullname']           = trim($this->input->post('fullname',true));
            $data['user_email']         = trim($this->input->post('user_email',true));
            $data['password']           = md5(trim($this->input->post('password',true)));
            $data['activation_status']  = trim($this->input->post('activation_status',true));


            $this->form_validation->set_rules('username', 'username', 'trim|required');
            $this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
            $this->form_validation->set_rules('user_email', 'user_email', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('activation_status', 'activation_status', 'required');
            if($this->form_validation->run() === FALSE){
                $fdata['error_message']="Please Fill Out All Field Must";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageUser');
            }else{

               $check_exist_user_email=$this->userModel->check_user_email_is_exist($data['user_email']);
            if($check_exist_user_email==TRUE){
                $fdata['error_message']="Sorry! Your Email Allreday Registerd in Our System...";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageUser');
            }else{

              $insert_user_id=  $this->userModel->save_user_info($data);
             
              $get_permission_list=$this->userModel->get_all_permission_list();
                    $permit=array();
                foreach($get_permission_list as $get_all_permission_list){
                        $permit['user_id']= $insert_user_id;
                        $permit['permission_role_id']           = $get_all_permission_list->permission_role_id;
                        $permit['permission_role_name']         = $get_all_permission_list->permission_role_name;
                        $permit['permission_role_details']      = $get_all_permission_list->permission_role_details;
                        $permit['is_permission']                = 0;
                        $this->userModel->save_new_user_empty_permission($permit);
                }

                $fdata['success_message']="Success! New User Created .Now Assign User Permission...";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageUser');

            }

            }

        }


    }















public function assign_user_permission($user_id){
    if(in_array("assign_user_permission",$this->session->userdata('user_permission'))){
    $user_id= $this->security->xss_clean($user_id);
    $user_id=(int)($user_id);
    $check_data= $this->userModel->Check_user_is_active($user_id);
    if($check_data == False){
        $fdata['error_message']="Error ! Your User ID Is  Invalid..";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageUser');
    }else{

    $all_permission_without_no_permission=$this->userModel->select_all_permission_without_no_permit($user_id);
    $all_permission_with_yes_permission=$this->userModel->select_all_permission_with_yes_permit($user_id);
   
    $permission_data=array();
    if($all_permission_with_yes_permission){
    foreach($all_permission_with_yes_permission as $all_permission_list_with_yes_permission){
        $permission_data[]=array(
            $all_permission_list_with_yes_permission->users_permission_id,
            $all_permission_list_with_yes_permission->permission_role_id,
            $all_permission_list_with_yes_permission->permission_role_name,
            $all_permission_list_with_yes_permission->permission_role_details,
        );
    }
}
   foreach($all_permission_without_no_permission as $all_permission_list_without_no_permission){
        $permission_data[]=array(
            $all_permission_list_without_no_permission->users_permission_id,
            $all_permission_list_without_no_permission->permission_role_id,
            $all_permission_list_without_no_permission->permission_role_name,
            $all_permission_list_without_no_permission->permission_role_details,
        );
   }

   $output = array(
    "data" => $permission_data

  );
  if($all_permission_with_yes_permission){
    $selected_permission=array();
  foreach($all_permission_with_yes_permission as $all_permission_list_with_yes_permission){
      $selected_permission[]=$all_permission_list_with_yes_permission->users_permission_id;
  }
  $list = implode("','", $selected_permission); 
  $target_id="['".$list."']";
  $data['selected_data']=$target_id;
} else{
   $data['selected_data']="[]";
}
 //header('Content-Type: application/json');
  $json_user_data=json_encode( $output);
    $data['json_user_data']=$json_user_data;

    $all_user_info=$this->userModel->select_all_user_info_by_user_id($user_id);
    foreach($all_user_info as $all_user_info_by_id){
        $data['fullname']=$all_user_info_by_id->fullname;
        $data['user_id']=$user_id;
    }

    $data['admin_main_content']=$this->load->view('Adminpage/User/assign_user_permission',$data,TRUE);
    $this->load->view('Adminpage/admin_master',$data);
    
}
    }else{
        redirect('Cholotransportowner/Dashboard');
    }

}









public function save_assign_user_permission(){

    $fdata=array();
    if(empty($this->input->post())){
    $fdata['error_message']="Error! You Can't Direct Access This Method";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageUser');
    }else{

         $users_permission_id   =$this->input->post('id',TRUE);
         $user_id = trim($this->input->post('user_id',TRUE));

         if($user_id==''){
              $fdata['error_message']="Error! Fill Up All Field";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageUser');
         }else{


        if(empty($users_permission_id)){
        $all_permission_by_user= $this->userModel->select_all_permission_info_by_user_id($user_id);  
       if(!empty($all_permission_by_user)){
        foreach($all_permission_by_user as $all_permission_data_by_user){
            $permission_main_info=array();
            $permission_main_info['users_permission_id']=$all_permission_data_by_user->users_permission_id;
            $this->userModel->update_user_permission_info_by_user_permission_id($permission_main_info);
        }           

     }
        $fdata=array();
            $fdata['success_message']="Success! Your User permission Assign Success";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/AssignUserPermission/'.$user_id);
        }
     else{
      
        $all_permission_by_user= $this->userModel->select_all_permission_info_by_user_id($user_id);  
        if(!empty($all_permission_by_user)){
            foreach($all_permission_by_user as $all_permission_data_by_user){
                $permission_main_info=array();
                $permission_main_info['users_permission_id']=$all_permission_data_by_user->users_permission_id;
                $this->userModel->update_user_permission_info_by_user_permission_id($permission_main_info);
            }           
    
         }
        foreach($users_permission_id as $users_permission_row_id){
            $this->userModel->update_all_permission_info_by_user_id($users_permission_row_id,$user_id);
        }
        $fdata=array();
        $fdata['success_message']="Success! Your User permission Assign Success";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/AssignUserPermission/'.$user_id);

    }

    }


    }

}












public function empty_user_permission($user_id){
    if(in_array("assign_user_empty_permission",$this->session->userdata('user_permission'))){
    if(!$user_id){
        $fdata['error_message']="Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageUser');
        }else{  

    $check_user_permission= $this->userModel->check_user_permission_is_exist($user_id);
    if(count($check_user_permission)>0){
        $get_permission_list=$this->userModel->get_all_user_permission_list_by_user_id($user_id);
        $permit=array();
    foreach($get_permission_list as $get_all_permission_list){

       $permit['users_permission_id']          = $get_all_permission_list->users_permission_id;
       $permit['is_permission']                = 0;
       $this->userModel->update_user_empty_permission($permit);
       }

    }
    
    else{

    $get_permission_list=$this->userModel->get_all_permission_list();
    $permit=array();
     foreach($get_permission_list as $get_all_permission_list){
        $permit['user_id']= $user_id;
        $permit['permission_role_id']           = $get_all_permission_list->permission_role_id;
        $permit['permission_role_name']         = $get_all_permission_list->permission_role_name;
        $permit['permission_role_details']      = $get_all_permission_list->permission_role_details;
        $permit['is_permission']                = 0;
        $this->userModel->save_new_user_empty_permission($permit);
        }

    }

        $fdata['success_message']="Success! User All Permission is Now Empty.....";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageUser');
}

    }else{
        redirect('Cholotransportowner/Dashboard');
    }

}



public function delete_user_permission($user_id){
    if(!$user_id){
        $fdata['error_message']="Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageUser');
        }else{ 
            $delete_user_permission=$this->userModel->delete_user_all_permission($user_id);
            $fdata['success_message']="Success! User All Permission Deleted......";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageUser');


        }
}





public function Unpublish_User($user_id){
    if(in_array("publish_user",$this->session->userdata('user_permission'))){
    $this->userModel->unpublish_user_info($user_id);
    $fdata['success_message']="Success! User All Permission Deleted......";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageUser');
    }else{
        redirect('Cholotransportowner/Dashboard');
    }


}






 public function Publish_User($user_id){
    if(in_array("publish_user",$this->session->userdata('user_permission'))){
    $this->userModel->publish_user_info($user_id);
    $fdata['success_message']="Success! User All Permission Deleted......";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/ManageUser');
    }else{
        redirect('Cholotransportowner/Dashboard');
    }



}








public function user_logged_info(){
    if(in_array("admin_power",$this->session->userdata('user_permission'))){
        $data['user_logged_info']=$this->userModel->select_all_user_logged_info_list();
        $data['admin_main_content']=$this->load->view('Adminpage/User/user_logged_info',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }

}


public function delete_all_user_log(){
    $this->userModel->delete_all_user_log_info();
    $fdata['success_message']="Success! All UserLog Info Deleted......";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/UserLoggedInfo');
}


public function delete_user_log_by_id($user_log_id){
    $this->userModel->delete_selected_user_log_info($user_log_id);
    $fdata['success_message']="Success! Selected UserLog Info Deleted......";
    $this->session->set_flashdata($fdata);
    redirect('Cholotransportowner/UserLoggedInfo');
}



public function active_logged_user(){
    if(in_array("admin_sp_power",$this->session->userdata('user_permission'))){
        $data['active_user_logged_info']=$this->userModel->select_all_active_user_logged_info_list();
        $data['admin_main_content']=$this->load->view('Adminpage/User/active_user_log_info',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);
        }else{
            redirect('Cholotransportowner/Dashboard');
        }
}

public function do_force_logout_system_user($user_id){
    $this->userModel->update_login_user_is_login_false($user_id);
    redirect('Cholotransportowner/Dashboard');
}



















}
