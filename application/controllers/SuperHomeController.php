<?php
defined('BASEPATH') OR exit('No direct script access allowed');
ob_start();
class SuperHomeController extends CI_Controller {

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




    public function manage_slider(){
        $data['slide_info']=$this->superHomeModel->select_all_image_slider_list();
        $data['admin_main_content']=$this->load->view('Adminpage/Image_slider/manage_image_slider',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

    }





    public function save_image_slider(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageImageSlider');
        }else{

           $data=array();
            $data['image_slider_link']=$this->input->post('image_slider_link',TRUE);
            $data['image_slider_is_active']=$this->input->post('image_slider_is_active',TRUE);
            $data['image_slider_added_time']=date("Y-m-d H:i:s");
            if(($data['image_slider_link']=='') || ($data['image_slider_is_active']=='')){
                $fdata['error_message']="Error. All Red Mark Field Fill Up Mandatory";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageImageSlider');
                exit();
            }else{

               $new_name = time().$_FILES["image_slider_image_name"]['name'];
               $config['file_name'] = $new_name;
               $config['upload_path'] = 'images/image_slider/';
               $config['allowed_types'] = 'gif|jpg|png';
               $config['max_size']    = '18000';
               $config['max_width']   = '10020';
               $config['max_height']  = '7000';
               $config['overwrite']   = false;
               $config['encrypt_name'] = TRUE;
               $this->load->library('upload', $config);
               if (!$this->upload->do_upload('image_slider_image_name'))
               {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageImageSlider');
                exit();
               }
               else
               {
                    $Idata = array('upload_data' => $this->upload->data());    
                     $path=$Idata['upload_data']['full_path'];
                    $configi['image_library'] = 'gd2';
                    $configi['source_image']   = $path;
                    $configi['maintain_ratio'] = false;
                    $configi['quality']        ='100%';
                    $configi['width']  = 1165;
                    $configi['height'] = 365;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($configi);   
                    $this->image_lib->resize();
                    $data['image_slider_image_name']=$config['upload_path'].$Idata['upload_data']['file_name'];
                    $data['image_slider_added_user_id']=$this->session->userdata('user_id');

                   $this->superHomeModel->save_image_slide_info($data);
                
                    $fdata['success_message']="Success! Image Slider Added";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageImageSlider');
               }
            }
        }
    }






    public function unpublish_image_slider($image_slider_id){
        $this->superHomeModel->unpublish_image_slider_info($image_slider_id);
        redirect('Cholotransportowner/ManageImageSlider');
     }
       
     




     public function publish_image_slider($image_slider_id){
         $this->superHomeModel->publish_image_slider_info($image_slider_id);
         redirect('Cholotransportowner/ManageImageSlider');
     }
 





    public function Delete_image_slider($image_slide_id){
        $this->superHomeModel->delete_image_slide_info($image_slide_id);
        $fdata=array();
        $fdata['success_message']="Success! Slide Image Data Deleted";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageImageSlider');
    }









    
    public function manage_truck_lagbe(){
        $data['truck_lagbe_info']=$this->superHomeModel->select_all_truck_lagbe_list();
        $data['truck_lagbe_header_info']=$this->superHomeModel->select_all_truck_lagbe_header_info();
        $data['admin_main_content']=$this->load->view('Adminpage/truck_lagbe/manage_truck_lagbe',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

    }



    public function update_truck_lagbe_header_info(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageTruckLagbe');
        }else{
           $truck_lagbe_head                    = $this->input->post('truck_lagbe_head',true); 
           $truck_lagbe_main_article            = $this->input->post('truck_lagbe_main_article',true);
           $data=array();
           $data['truck_lagbe_head']            = $truck_lagbe_head;
           $data['truck_lagbe_main_article']    = $truck_lagbe_main_article;
          $this->superHomeModel->update_truck_lagbe_header_info_data($data);
            $fdata['success_message']="Success! Truck Lagbe Header Info Updated...";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageTruckLagbe');
        }
        
    }



    public function save_truck_lagbe(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageTruckLagbe');
        }else{

           $data=array();
          
            if($this->input->post('truck_lagbe_icon_article')){
                $data['truck_lagbe_icon_article']=$this->input->post('truck_lagbe_icon_article',TRUE);
            }else{
                $data['truck_lagbe_icon_article']='';
            }
            $data['truck_lagbe_is_active']=$this->input->post('truck_lagbe_is_active',TRUE);
            $data['truck_lagbe_added_date']=date("Y-m-d H:i:s");
            if(($data['truck_lagbe_is_active']=='')){
                $fdata['error_message']="Error. All Red Mark Field Fill Up Mandatory";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageTruckLagbe');
                exit();
            }else{

               $new_name = time().$_FILES["truck_lagbe_icon"]['name'];
               $config['file_name'] = $new_name;
               $config['upload_path'] = 'images/truck_lagbe/';
               $config['allowed_types'] = 'gif|jpg|png|jpeg';
               $config['max_size']    = '18000';
               $config['max_width']   = '250';
               $config['max_height']  = '250';
               $config['overwrite']   = false;
               $config['encrypt_name'] = TRUE;
               $this->load->library('upload', $config);
               if (!$this->upload->do_upload('truck_lagbe_icon'))
               {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageTruckLagbe');
                exit();
               }
               else
               {
                $upload_data = $this->upload->data();   
                    $data['truck_lagbe_icon']=$config['upload_path'].$upload_data['file_name'];

                   $this->superHomeModel->save_truck_lagbe_info($data);
                
                    $fdata['success_message']="Success! Truck Lagbe Info Added";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageTruckLagbe');
               }
            }
        }
    }








    public function unpublish_truck_lagbe($truck_lagbe_id){
        $this->superHomeModel->unpublish_truck_lagbe_info($truck_lagbe_id);
        redirect('Cholotransportowner/ManageTruckLagbe');
     }
       
     




     public function publish_truck_lagbe($truck_lagbe_id){
         $this->superHomeModel->publish_truck_lagbe_info($truck_lagbe_id);
         redirect('Cholotransportowner/ManageTruckLagbe');
     }
 





    public function Delete_truck_lagbe($truck_lagbe_id){
        $this->superHomeModel->delete_truck_lagbe_info($truck_lagbe_id);
        $fdata=array();
        $fdata['success_message']="Success! Truck Lagbe Image Data Deleted";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageTruckLagbe');
    }








    public function manage_choose_us(){
        $data['choose_us_info']=$this->superHomeModel->select_all_choose_us_list();
        $data['choose_us_header_info']=$this->superHomeModel->select_all_choose_us_header_info();
        $data['admin_main_content']=$this->load->view('Adminpage/choose_us/manage_choose_us',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

    }




    public function update_choose_us_header_info(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageChooseUs');
        }else{
           $choose_us_head                      = $this->input->post('choose_us_head',true); 
           $choose_us_article                   = $this->input->post('choose_us_article',true);
           $data=array();
           $data['choose_us_head']              = $choose_us_head;
           $data['choose_us_article']           = $choose_us_article;

           if(!empty($_FILES["choose_us_image"]['name'])){
           $new_name = time().$_FILES["choose_us_image"]['name'];
           $config['file_name'] = $new_name;
           $config['upload_path'] = 'images/choose_us/';
           $config['allowed_types'] = 'gif|jpg|png|jpeg';
           $config['max_size']    = '18000';
           $config['max_width']   = '10000';
           $config['max_height']  = '7000';
           $config['overwrite']   = false;
           $config['encrypt_name'] = TRUE;
           $this->load->library('upload', $config);
           if (!$this->upload->do_upload('choose_us_image'))
           {
            $error = $this->upload->display_errors();
            $fdata['error_message']=$error;
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageChooseUs');
            exit();
           }
           else
           {
                $Idata = array('upload_data' => $this->upload->data());    
                $path=$Idata['upload_data']['full_path'];
                $configi['image_library'] = 'gd2';
                $configi['source_image']   = $path;
                $configi['maintain_ratio'] = false;
                $configi['quality']        ='100%';
                $configi['width']  = 500;
                $configi['height'] = 280;
                $this->load->library('image_lib');
                $this->image_lib->initialize($configi);   
                $this->image_lib->resize();
                $data['choose_us_image']=$config['upload_path'].$Idata['upload_data']['file_name'];
                }
            }else{
                $choose_us_image1                    = $this->input->post('choose_us_image1',true); 
                $data['choose_us_image']             = $choose_us_image1;
            }

          $this->superHomeModel->update_choose_us_header_info_data($data);
            $fdata['success_message']="Success! Choose Us Header Info Updated...";
            $this->session->set_flashdata($fdata);
            redirect('Cholotransportowner/ManageChooseUs');
        }
        
    }







    public function save_choose_us(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageChooseUs');
        }else{

           $data=array();
            $data['choose_us_box_top_article']      = $this->input->post('choose_us_box_top_article',TRUE);
            $data['choose_us_box_bottom_articles']  = $this->input->post('choose_us_box_bottom_articles',TRUE);
            $data['choose_us_is_active']            = $this->input->post('choose_us_is_active',TRUE);
            $data['choose_us_added_time']           = date("Y-m-d H:i:s");
            if(($data['choose_us_box_top_article']=='') || 
                ($data['choose_us_box_bottom_articles']=='')||($data['choose_us_is_active']==''))
            {
                $fdata['error_message']="Error. All Red Mark Field Fill Up Mandatory";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageChooseUs');
                exit();
            }else{
                   $this->superHomeModel->save_choose_us_info($data);
                    $fdata['success_message']="Success! Choose Us Info Added";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageChooseUs');
               
            }
        }
    }








    
    public function unpublish_choose_us($choose_us_id){
        $this->superHomeModel->unpublish_choose_us_info($choose_us_id);
        redirect('Cholotransportowner/ManageChooseUs');
     }
       
     




     public function publish_choose_us($choose_us_id){
         $this->superHomeModel->publish_choose_us_info($choose_us_id);
         redirect('Cholotransportowner/ManageChooseUs');
     }
 



    public function Delete_choose_us($choose_us_id){
        $this->superHomeModel->delete_choose_us_info($choose_us_id);
        $fdata=array();
        $fdata['success_message']="Success! Choose Us Data Deleted";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageChooseUs');
    }




    public function manage_truck_category(){
        $data['truck_category_info']=$this->superHomeModel->select_all_manage_category_list();
        $data['admin_main_content']=$this->load->view('Adminpage/truck_category/manage_truck_category',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

    }





    public function save_truck_category(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageTruckCategory');
        }else{

           $data=array();
            $data['truck_category_name']=$this->input->post('truck_category_name',TRUE);
            $data['truck_category_article']=$this->input->post('truck_category_article',TRUE);
            $data['truck_category_is_active']=$this->input->post('truck_category_is_active',TRUE);
            $data['truck_category_added_time']=date("Y-m-d H:i:s");
            $data['truck_category_added_user_id']=$this->session->userdata('user_id');
            if(($data['truck_category_name']=='') || ($data['truck_category_article']=='')|| ($data['truck_category_is_active']=='')){
                $fdata['error_message']="Error. All Red Mark Field Fill Up Mandatory";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageTruckCategory');
                exit();
            }else{

               $new_name = time().$_FILES["truck_category_image"]['name'];
               $config['file_name'] = $new_name;
               $config['upload_path'] = 'images/truck_category/';
               $config['allowed_types'] = 'gif|jpg|png|jpeg';
               $config['max_size']    = '18000';
               $config['max_width']   = '10000';
               $config['max_height']  = '7000';
               $config['overwrite']   = false;
               $config['encrypt_name'] = TRUE;
               $this->load->library('upload', $config);
               if (!$this->upload->do_upload('truck_category_image'))
               {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageTruckCategory');
                exit();
               }
               else
               {
                    $Idata = array('upload_data' => $this->upload->data());    
                     $path=$Idata['upload_data']['full_path'];
                    $configi['image_library'] = 'gd2';
                    $configi['source_image']   = $path;
                    $configi['maintain_ratio'] = false;
                    $configi['quality']        ='100%';
                    $configi['width']  = 270;
                    $configi['height'] = 180;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($configi);   
                    $this->image_lib->resize();
                    $data['truck_category_image']=$config['upload_path'].$Idata['upload_data']['file_name'];

                    $this->superHomeModel->save_truck_category_info($data);
                
                    $fdata['success_message']="Success! Truck Category Info Added";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageTruckCategory');
               }
            }
        }
    }




      
    public function unpublish_truck_category($truck_category_id){
        $this->superHomeModel->unpublish_truck_category_info($truck_category_id);
        redirect('Cholotransportowner/ManageTruckCategory');
     }
       
     




     public function publish_truck_category($truck_category_id){
         $this->superHomeModel->publish_truck_category_info($truck_category_id);
         redirect('Cholotransportowner/ManageTruckCategory');
     }
 



    public function Delete_truck_category($truck_category_id){
        $this->superHomeModel->delete_truck_category_info($truck_category_id);
        $fdata=array();
        $fdata['success_message']="Success! Truck Category Data Deleted";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageTruckCategory');
    }




















    public function manage_corporate_client(){
        $data['corporate_client_info']=$this->superHomeModel->select_all_manage_corporate_client_list();
        $data['admin_main_content']=$this->load->view('Adminpage/Corporate_client/manage_corporate_client',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

    }





    public function save_corporate_client(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageCorporateClient');
        }else{

           $data=array();
        
            $data['corporate_client_is_active']=$this->input->post('corporate_client_is_active',TRUE);
            $data['corporate_client_added_time']=date("Y-m-d H:i:s");
    
            if(($data['corporate_client_is_active']=='') ){
                $fdata['error_message']="Error. All Red Mark Field Fill Up Mandatory";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageCorporateClient');
                exit();
            }else{

               $new_name = time().$_FILES["corporate_client_image"]['name'];
               $config['file_name'] = $new_name;
               $config['upload_path'] = 'images/corporate_client/';
               $config['allowed_types'] = 'gif|jpg|png|jpeg';
               $config['max_size']    = '18000';
               $config['max_width']   = '1500';
               $config['max_height']  = '1000';
               $config['overwrite']   = false;
               $config['encrypt_name'] = TRUE;
               $this->load->library('upload', $config);
               if (!$this->upload->do_upload('corporate_client_image'))
               {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageCorporateClient');
                exit();
               }
               else
               {
                    $Idata = array('upload_data' => $this->upload->data());    
                     $path=$Idata['upload_data']['full_path'];
                    $configi['image_library'] = 'gd2';
                    $configi['source_image']   = $path;
                    $configi['maintain_ratio'] = false;
                    $configi['quality']        ='100%';
                    $configi['width']  = 300;
                    $configi['height'] = 170;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($configi);   
                    $this->image_lib->resize();
                    $data['corporate_client_image']=$config['upload_path'].$Idata['upload_data']['file_name'];

                    $this->superHomeModel->save_corporate_client_info($data);
                
                    $fdata['success_message']="Success! Corporate Client Info Added";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageCorporateClient');
               }
            }
        }
    }




      
    public function unpublish_corporate_client($corporate_client_id){
        $this->superHomeModel->unpublish_corporate_client_info($corporate_client_id);
        redirect('Cholotransportowner/ManageCorporateClient');
     }
       
     




     public function publish_corporate_client($corporate_client_id){
         $this->superHomeModel->publish_corporate_client_info($corporate_client_id);
         redirect('Cholotransportowner/ManageCorporateClient');
     }
 



    public function Delete_corporate_client($corporate_client_id){
        $this->superHomeModel->delete_corporate_client_info($corporate_client_id);
        $fdata=array();
        $fdata['success_message']="Success! Corporate Client Data Deleted";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageCorporateClient');
    }





















    public function manage_industries_we_cover(){
        $data['industries_we_cover_info']=$this->superHomeModel->select_all_industries_we_cover_list();
        $data['admin_main_content']=$this->load->view('Adminpage/Industries_we_cover/manage_industries_we_cover',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

    }





    public function save_industries_we_cover(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageIndustriesWeCover');
        }else{

           $data=array();
            $data['cover_industries_name']          = $this->input->post('cover_industries_name',TRUE);
            $data['cover_industries_is_active']     = $this->input->post('cover_industries_is_active',TRUE);
            $data['cover_industries_added_time']    = date("Y-m-d H:i:s");
            $data['cover_industries_added_user_id'] = $this->session->userdata('user_id');
            if(($data['cover_industries_name']=='') || ($data['cover_industries_is_active']=='')){
                $fdata['error_message']="Error. All Red Mark Field Fill Up Mandatory";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIndustriesWeCover');
                exit();
            }else{

               $new_name = time().$_FILES["cover_industries_image"]['name'];
               $config['file_name'] = $new_name;
               $config['upload_path'] = 'images/industries_we_cover/';
               $config['allowed_types'] = 'gif|jpg|png|jpeg';
               $config['max_size']    = '18000';
               $config['max_width']   = '10000';
               $config['max_height']  = '7000';
               $config['overwrite']   = false;
               $config['encrypt_name'] = TRUE;
               $this->load->library('upload', $config);
               if (!$this->upload->do_upload('cover_industries_image'))
               {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageIndustriesWeCover');
                exit();
               }
               else
               {
                    $Idata = array('upload_data' => $this->upload->data());    
                     $path=$Idata['upload_data']['full_path'];
                    $configi['image_library'] = 'gd2';
                    $configi['source_image']   = $path;
                    $configi['maintain_ratio'] = false;
                    $configi['quality']        ='100%';
                    $configi['width']  = 300;
                    $configi['height'] = 220;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($configi);   
                    $this->image_lib->resize();
                    $data['cover_industries_image']=$config['upload_path'].$Idata['upload_data']['file_name'];

                    $this->superHomeModel->save_cover_industries_info($data);
                
                    $fdata['success_message']="Success! Cover Industries We Cover Info Added";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageIndustriesWeCover');
               }
            }
        }
    }






      
    public function unpublish_industries_we_cover($industries_we_cover_id){
        $this->superHomeModel->unpublish_industries_we_cover_info($industries_we_cover_id);
        redirect('Cholotransportowner/ManageIndustriesWeCover');
     }
       
     




     public function publish_industries_we_cover($industries_we_cover_id){
         $this->superHomeModel->publish_industries_we_cover_info($industries_we_cover_id);
         redirect('Cholotransportowner/ManageIndustriesWeCover');
     }
 



    public function Delete_industries_we_cover($industries_we_cover_id){
        $this->superHomeModel->delete_industries_we_cover_info($industries_we_cover_id);
        $fdata=array();
        $fdata['success_message']="Success! Industries We Cover Info Data Deleted";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageIndustriesWeCover');
    }





















    
    public function manage_gps_tracker_features(){
        $data['gps_tracker_features_info']=$this->superHomeModel->select_all_gps_tracker_features_list();
        $data['admin_main_content']=$this->load->view('Adminpage/Gps_tracking_features/manage_gps_tracker_features',$data,TRUE);
        $this->load->view('Adminpage/admin_master',$data);

    }





    public function save_gps_tracker_features(){
        $fdata=array();
        if(empty($this->input->post())){
        $fdata['error_message']="Error! Please Fill Out All Field";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageGpsTrackerFeatures');
        }else{

           $data=array();
            $data['gps_tracker_features_name']=$this->input->post('gps_tracker_features_name',TRUE);
            $data['gps_tracker_features_article']=$this->input->post('gps_tracker_features_article',TRUE);
            $data['gps_tracker_features_is_active']=$this->input->post('gps_tracker_features_is_active',TRUE);
            $data['gps_tracker_features_added_time']=date("Y-m-d H:i:s");
            $data['gps_tracker_features_added_user_id']=$this->session->userdata('user_id');
            if(($data['gps_tracker_features_name']=='') || ($data['gps_tracker_features_article']=='')|| ($data['gps_tracker_features_is_active']=='')){
                $fdata['error_message']="Error. All Red Mark Field Fill Up Mandatory";
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageGpsTrackerFeatures');
                exit();
            }else{

               $new_name = time().$_FILES["gps_tracker_features_image"]['name'];
               $config['file_name'] = $new_name;
               $config['upload_path'] = 'images/truck_category/';
               $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
               $config['max_size']    = '18000';
               $config['max_width']   = '10000';
               $config['max_height']  = '7000';
               $config['overwrite']   = false;
               $config['encrypt_name'] = TRUE;
               $this->load->library('upload', $config);
               if (!$this->upload->do_upload('gps_tracker_features_image'))
               {
                $error = $this->upload->display_errors();
                $fdata['error_message']=$error;
                $this->session->set_flashdata($fdata);
                redirect('Cholotransportowner/ManageGpsTrackerFeatures');
                exit();
               }
               else
               {
                    $Idata = array('upload_data' => $this->upload->data());    
                     $path=$Idata['upload_data']['full_path'];
                    $configi['image_library'] = 'gd2';
                    $configi['source_image']   = $path;
                    $configi['maintain_ratio'] = false;
                    $configi['quality']        ='100%';
                    $configi['width']  = 120;
                    $configi['height'] = 70;
                    $this->load->library('image_lib');
                    $this->image_lib->initialize($configi);   
                    $this->image_lib->resize();
                    $data['gps_tracker_features_image']=$config['upload_path'].$Idata['upload_data']['file_name'];
                    $this->superHomeModel->save_gps_tracker_features_info($data);
                    $fdata['success_message']="Success! Gps Tracker Features Info Added";
                    $this->session->set_flashdata($fdata);
                    redirect('Cholotransportowner/ManageGpsTrackerFeatures');
               }
            }
        }
    }




      
    public function unpublish_gps_tracker_features($gps_tracker_id){
        $this->superHomeModel->unpublish_gps_tracker_features_info($gps_tracker_id);
        redirect('Cholotransportowner/ManageGpsTrackerFeatures');
     }
       
     




     public function publish_gps_tracker_features($gps_tracker_id){
         $this->superHomeModel->publish_gps_tracker_features_info($gps_tracker_id);
         redirect('Cholotransportowner/ManageGpsTrackerFeatures');
     }
 



    public function Delete_gps_tracker_features($gps_tracker_id){
        $this->superHomeModel->delete_gps_tracker_features_info($gps_tracker_id);
        $fdata=array();
        $fdata['success_message']="Success! Gps Tracker Features Data Deleted";
        $this->session->set_flashdata($fdata);
        redirect('Cholotransportowner/ManageGpsTrackerFeatures');
    }






























}
