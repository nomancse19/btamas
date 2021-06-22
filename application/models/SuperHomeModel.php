<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuperHomeModel extends CI_Model{


    public function get_new_vehicles_request_notification(){
        $this->db->select('*');
        $this->db->from('request_notification');
        $query=$this->db->get();
        $all_catgory_info_id=$query->row();
        return $all_catgory_info_id;
    }



    public function active_vehicles_request_notification(){
        $this->db->set('vehicles_request_status',1);
        $this->db->update('request_notification');
    }



    public function active_account_request_notification(){
        $this->db->set('account_request_status',1);
        $this->db->update('request_notification');
    }



    
    public function deactive_vehicles_request_notification(){
        $this->db->set('vehicles_request_status',0);
        $this->db->update('request_notification');
    }



    public function deactive_account_request_notification(){
        $this->db->set('account_request_status',0);
        $this->db->update('request_notification');
    }



    public function save_user_vehicles_request($vehicles_request_data){
        $this->db->insert('all_vehicles_request',$vehicles_request_data);
    }


    public function save_user_account_request($account_request_data){
        $this->db->insert('all_user_account_request',$account_request_data);
    }



    public function select_all_image_slider_list(){
        $this->db->select('*');
        $this->db->from('image_slider');
        $this->db->order_by('image_slider_id','DESC');
        $query=$this->db->get();
        $all_slide_info=$query->result();
        return $all_slide_info;
    }


    public function select_all_truck_lagbe_list(){
        $this->db->select('*');
        $this->db->from('truck_lagbe');
        $this->db->order_by('truck_lagbe_id','DESC');
        $query=$this->db->get();
        $info=$query->result();
        return $info;
    }



    public function select_all_choose_us_list(){
        $this->db->select('*');
        $this->db->from('choose_us');
        $this->db->order_by('choose_us_id','DESC');
        $query=$this->db->get();
        $info=$query->result();
        return $info;
    }


    public function select_all_manage_category_list(){
        $this->db->select('*');
        $this->db->from('truck_category');
        $this->db->order_by('truck_category_id','DESC');
        $query=$this->db->get();
        $info=$query->result();
        return $info;
    }



    public function select_all_gps_tracker_features_list(){
        $this->db->select('*');
        $this->db->from('gps_tracker_features');
        $this->db->order_by('gps_tracker_features_id','DESC');
        $query=$this->db->get();
        $info=$query->result();
        return $info;
    }



    public function select_all_industries_we_cover_list(){
        $this->db->select('*');
        $this->db->from('cover_industries');
        $this->db->order_by('cover_industries_id','DESC');
        $query=$this->db->get();
        $info=$query->result();
        return $info;
    }



    public function select_all_manage_corporate_client_list(){
        $this->db->select('*');
        $this->db->from('corporate_client');
        $this->db->order_by('corporate_client_id','DESC');
        $query=$this->db->get();
        $info=$query->result();
        return $info;
    }



    public function select_all_truck_lagbe_header_info(){
        $this->db->select('*');
        $this->db->from('truck_lagbe_head');
        $query=$this->db->get();
        $info=$query->row();
        return $info;
    }


    public function select_all_choose_us_header_info(){
        $this->db->select('*');
        $this->db->from('choose_us_head');
        $query=$this->db->get();
        $info=$query->row();
        return $info;
    }



    public function update_truck_lagbe_header_info_data($data){
        $this->db->set('truck_lagbe_head',$data['truck_lagbe_head']);
        $this->db->set('truck_lagbe_main_article',$data['truck_lagbe_main_article']);
        $this->db->update('truck_lagbe_head');
    }


    public function update_choose_us_header_info_data($data){
        $this->db->set('choose_us_head',$data['choose_us_head']);
        $this->db->set('choose_us_article',$data['choose_us_article']);
        $this->db->set('choose_us_image',$data['choose_us_image']);
        $this->db->update('choose_us_head');
    }





    public function save_image_slide_info($data){
        $this->db->insert('image_slider',$data);
    }

    public function save_truck_lagbe_info($data){
        $this->db->insert('truck_lagbe',$data);
    }

    public function save_truck_category_info($data){
        $this->db->insert('truck_category',$data);
    }


    public function save_gps_tracker_features_info($data){
        $this->db->insert('gps_tracker_features',$data);
    }


    public function save_cover_industries_info($data){
        $this->db->insert('cover_industries',$data);
    }


    public function save_corporate_client_info($data){
        $this->db->insert('corporate_client',$data);
    }


    public function save_choose_us_info($data){
        $this->db->insert('choose_us',$data);
    }



    public function unpublish_image_slider_info($image_slider_id){
        $this->db->set('image_slider_is_active',0);
        $this->db->where('image_slider_id',$image_slider_id);
        $this->db->update('image_slider');
    }


    public function unpublish_truck_lagbe_info($truck_lagbe_id){
        $this->db->set('truck_lagbe_is_active',0);
        $this->db->where('truck_lagbe_id',$truck_lagbe_id);
        $this->db->update('truck_lagbe');
    }


    public function unpublish_choose_us_info($choose_us){
        $this->db->set('choose_us_is_active',0);
        $this->db->where('choose_us_id',$choose_us);
        $this->db->update('choose_us');
    }



    public function unpublish_truck_category_info($truck_category_id ){
        $this->db->set('truck_category_is_active',0);
        $this->db->where('truck_category_id',$truck_category_id );
        $this->db->update('truck_category');
    }



    public function unpublish_gps_tracker_features_info($gps_tracker_features_id){
        $this->db->set('gps_tracker_features_is_active',0);
        $this->db->where('gps_tracker_features_id',$gps_tracker_features_id );
        $this->db->update('gps_tracker_features');
    }



    public function unpublish_industries_we_cover_info($industries_we_cover_id ){
        $this->db->set('cover_industries_is_active',0);
        $this->db->where('cover_industries_id',$industries_we_cover_id );
        $this->db->update('cover_industries');
    }





    public function unpublish_corporate_client_info($corporate_client_id ){
        $this->db->set('corporate_client_is_active',0);
        $this->db->where('corporate_client_id',$corporate_client_id );
        $this->db->update('corporate_client');
    }




    public function publish_truck_lagbe_info($truck_lagbe_id){
        $this->db->set('truck_lagbe_is_active',1);
        $this->db->where('truck_lagbe_id',$truck_lagbe_id);
        $this->db->update('truck_lagbe');
    }


    public function publish_choose_us_info($choose_us){
        $this->db->set('choose_us_is_active',1);
        $this->db->where('choose_us_id',$choose_us);
        $this->db->update('choose_us');
    }



    public function publish_truck_category_info($truck_category_id){
        $this->db->set('truck_category_is_active',1);
        $this->db->where('truck_category_id',$truck_category_id);
        $this->db->update('truck_category');
    }


    public function publish_gps_tracker_features_info($gps_tracker_features_id){
        $this->db->set('gps_tracker_features_is_active',1);
        $this->db->where('gps_tracker_features_id',$gps_tracker_features_id);
        $this->db->update('gps_tracker_features');
    }



    public function publish_industries_we_cover_info($industries_we_cover_id){
        $this->db->set('cover_industries_is_active',1);
        $this->db->where('cover_industries_id',$industries_we_cover_id);
        $this->db->update('cover_industries');
    }




    public function publish_corporate_client_info($corporate_client_id){
        $this->db->set('corporate_client_is_active',1);
        $this->db->where('corporate_client_id',$corporate_client_id);
        $this->db->update('corporate_client');
    }


    public function publish_image_slider_info($image_slider_id){
        $this->db->set('image_slider_is_active',1);
        $this->db->where('image_slider_id',$image_slider_id);
        $this->db->update('image_slider');
    }



    public function delete_image_slide_info($image_slider_id){
        $query_get_image =$this->db->get_where('image_slider', array('image_slider_id' =>$image_slider_id));
        $file_name=$query_get_image->row('image_slider_image_name');
        unlink(FCPATH.$file_name);
        $this->db->where('image_slider_id',$image_slider_id);
        $this->db->delete('image_slider');

    }


    public function delete_truck_lagbe_info($truck_lagbe_id){
        $query_get_image =$this->db->get_where('truck_lagbe', array('truck_lagbe_id' =>$truck_lagbe_id));
        $file_name=$query_get_image->row('truck_lagbe_icon');
        unlink(FCPATH.$file_name);
        $this->db->where('truck_lagbe_id',$truck_lagbe_id);
        $this->db->delete('truck_lagbe');

    }


    public function delete_choose_us_info($choose_us_id){
        $this->db->where('choose_us_id',$choose_us_id);
        $this->db->delete('choose_us');
    }




    public function delete_truck_category_info($truck_category_id){
        $query_get_image =$this->db->get_where('truck_category', array('truck_category_id' =>$truck_category_id));
        $file_name=$query_get_image->row('truck_category_image');
        unlink(FCPATH.$file_name);
        $this->db->where('truck_category_id',$truck_category_id);
        $this->db->delete('truck_category');

    }



    public function delete_gps_tracker_features_info($gps_tracker_features_id){
        $query_get_image =$this->db->get_where('gps_tracker_features', array('gps_tracker_features_id' =>$gps_tracker_features_id));
        $file_name=$query_get_image->row('gps_tracker_features_image');
        unlink(FCPATH.$file_name);
        $this->db->where('gps_tracker_features_id',$gps_tracker_features_id);
        $this->db->delete('gps_tracker_features');

    }



    public function delete_industries_we_cover_info($industries_we_cover_id){
        $query_get_image =$this->db->get_where('cover_industries', array('cover_industries_id' =>$industries_we_cover_id));
        $file_name=$query_get_image->row('cover_industries_image');
        unlink(FCPATH.$file_name);
        $this->db->where('cover_industries_id',$industries_we_cover_id);
        $this->db->delete('cover_industries');

    }



    public function delete_corporate_client_info($corporate_client_id){
        $query_get_image =$this->db->get_where('corporate_client', array('corporate_client_id' =>$corporate_client_id));
        $file_name=$query_get_image->row('corporate_client_image');
        unlink(FCPATH.$file_name);
        $this->db->where('corporate_client_id',$corporate_client_id);
        $this->db->delete('corporate_client');

    }















    
    
    
}

?>