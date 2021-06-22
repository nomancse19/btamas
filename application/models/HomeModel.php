<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeModel extends CI_Model{


    public function select_first_publish_slide_image_list(){
        $this->db->select('*');
        $this->db->from('image_slider');
        $this->db->where('image_slider_is_active',1);
        $this->db->order_by('image_slider_id','DESC');
        $this->db->limit(1);
        $query=$this->db->get();
        $all_slide_info=$query->row();
        return $all_slide_info;
    }


    public function select_all_publish_slide_image_list(){
        $this->db->select('*');
        $this->db->from('image_slider');
        $this->db->where('image_slider_is_active',1);
        $this->db->order_by('image_slider_id','DESC');
        $this->db->limit(100,1);
        $query=$this->db->get();
        $all_slide_info=$query->result();
        return $all_slide_info;
    }




    public function select_all_publish_truck_lagbe(){
        $this->db->select('*');
        $this->db->from('truck_lagbe');
        $this->db->where('truck_lagbe_is_active',1);
        $this->db->order_by('truck_lagbe_id','DESC');
        $query=$this->db->get();
        $all_slide_info=$query->result();
        return $all_slide_info;
    }


    public function select_all_publish_choose_us(){
        $this->db->select('*');
        $this->db->from('choose_us');
        $this->db->where('choose_us_is_active',1);
        $this->db->order_by('choose_us_id','DESC');
        $query=$this->db->get();
        $all_slide_info=$query->result();
        return $all_slide_info;
    }



    public function select_all_publish_truck_category(){
        $this->db->select('*');
        $this->db->from('truck_category');
        $this->db->where('truck_category_is_active',1);
        $this->db->order_by('truck_category_id','DESC');
        $query=$this->db->get();
        $all_truck_category=$query->result();
        return $all_truck_category;
    }



    public function select_all_publish_gps_tracking_features(){
        $this->db->select('*');
        $this->db->from('gps_tracker_features');
        $this->db->where('gps_tracker_features_is_active',1);
        $this->db->order_by('gps_tracker_features_id','DESC');
        $query=$this->db->get();
        $all_truck_category=$query->result();
        return $all_truck_category;
    }



    public function select_all_publish_cover_industries(){
        $this->db->select('*');
        $this->db->from('cover_industries');
        $this->db->where('cover_industries_is_active',1);
        $this->db->order_by('cover_industries_id','DESC');
        $query=$this->db->get();
        $all_truck_category=$query->result();
        return $all_truck_category;
    }



    public function select_all_publish_corporate_client(){
        $this->db->select('*');
        $this->db->from('corporate_client');
        $this->db->where('corporate_client_is_active',1);
        $this->db->order_by('corporate_client_id','DESC');
        $query=$this->db->get();
        $all_truck_category=$query->result();
        return $all_truck_category;
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



   














    
    
    
}

?>