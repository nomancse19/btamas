<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NotificationModel extends CI_Model{
    


    public function insert_flash_notification($data){
        $this->db->insert('flash_notification',$data);
    }
    
    public function insert_normal_notification($data){
        $this->db->insert('normal_notification',$data);
    }
    







    
    public function Check_flash_notification_is_publish($flash_notification_id){
        $this->db->select('*');
        $this->db->from('flash_notification');
        $this->db->where('flash_notification_is_active',1);
        $this->db->where('flash_notification_id',$flash_notification_id);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }

    public function Check_normal_notification_is_publish($normal_notification_id){
        $this->db->select('*');
        $this->db->from('normal_notification');
        $this->db->where('normal_notification_is_active',1);
        $this->db->where('normal_notification_id',$normal_notification_id);
        $query_result=$this->db->get()->num_rows();
        return $query_result;
    }








    public function select_all_flash_notification(){
        $this->db->select('*');
        $this->db->from('flash_notification');
        $this->db->order_by('flash_notification_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }

    public function select_all_normal_notification(){
        $this->db->select('*');
        $this->db->from('normal_notification');
        $this->db->order_by('normal_notification_id','DESC');
        $query=$this->db->get();
        $query_result=$query->result();
        return $query_result;
    }


    







    public function select_all_active_cnf_user_without_flash_notification(){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_is_active',1);
        $this->db->where('cnf_is_flash_notification',0);
        $this->db->order_by('cnf_info_id','ASC');
        $query=$this->db->get();
        $all_cnf_info=$query->result();
        return $all_cnf_info;
    }
    public function select_all_active_importer_user_without_flash_notification(){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_is_active',1);
        $this->db->where('importer_is_flash_notification',0);
        $this->db->order_by('importer_info_id','ASC');
        $query=$this->db->get();
        $all_importer_info=$query->result();
        return $all_importer_info;
    }
    public function select_all_active_exporter_user_without_flash_notification(){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_is_active',1);
        $this->db->where('exporter_is_flash_notification',0);
        $this->db->order_by('exporter_info_id','ASC');
        $query=$this->db->get();
        $all_exporter_info=$query->result();
        return $all_exporter_info;
    }















    public function select_all_active_cnf_user_without_normal_notification(){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_is_active',1);
        $this->db->where('cnf_is_normal_notification',0);
        $this->db->order_by('cnf_info_id','ASC');
        $query=$this->db->get();
        $all_cnf_info=$query->result();
        return $all_cnf_info;
    }
    public function select_all_active_importer_user_without_normal_notification(){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_is_active',1);
        $this->db->where('importer_is_normal_notification',0);
        $this->db->order_by('importer_info_id','ASC');
        $query=$this->db->get();
        $all_importer_info=$query->result();
        return $all_importer_info;
    }
    public function select_all_active_exporter_user_without_normal_notification(){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_is_active',1);
        $this->db->where('exporter_is_normal_notification',0);
        $this->db->order_by('exporter_info_id','ASC');
        $query=$this->db->get();
        $all_exporter_info=$query->result();
        return $all_exporter_info;
    }




















    public function select_all_active_cnf_user_by_flash_notification_id($flash_notification_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_is_active',1);
        $this->db->where('cnf_is_flash_notification',1);
        $this->db->where('flash_notification_id',$flash_notification_id);
        $this->db->order_by('cnf_info_id','ASC');
        $query=$this->db->get();
        $all_cnf_user_info=$query->result();
        return $all_cnf_user_info;
    } 

    public function select_all_active_importer_user_by_flash_notification_id($flash_notification_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_is_active',1);
        $this->db->where('importer_is_flash_notification',1);
        $this->db->where('flash_notification_id',$flash_notification_id);
        $this->db->order_by('importer_info_id','ASC');
        $query=$this->db->get();
        $all_importer_user_info=$query->result();
        return $all_importer_user_info;
    }

    public function select_all_active_exporter_user_by_flash_notification_id($flash_notification_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_is_active',1);
        $this->db->where('exporter_is_flash_notification',1);
        $this->db->where('flash_notification_id',$flash_notification_id);
        $this->db->order_by('exporter_info_id','ASC');
        $query=$this->db->get();
        $all_exporter_user_info=$query->result();
        return $all_exporter_user_info;
    }
    














    public function select_all_active_cnf_user_by_normal_notification_id($normal_notification_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_is_active',1);
        $this->db->where('cnf_is_normal_notification',1);
        $this->db->where('normal_notification_id',$normal_notification_id);
        $this->db->order_by('cnf_info_id','ASC');
        $query=$this->db->get();
        $all_cnf_user_info=$query->result();
        return $all_cnf_user_info;
    } 

    public function select_all_active_importer_user_by_normal_notification_id($normal_notification_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_is_active',1);
        $this->db->where('importer_is_normal_notification',1);
        $this->db->where('normal_notification_id',$normal_notification_id);
        $this->db->order_by('importer_info_id','ASC');
        $query=$this->db->get();
        $all_importer_user_info=$query->result();
        return $all_importer_user_info;
    }

    public function select_all_active_exporter_user_by_normal_notification_id($normal_notification_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_is_active',1);
        $this->db->where('exporter_is_normal_notification',1);
        $this->db->where('normal_notification_id',$normal_notification_id);
        $this->db->order_by('exporter_info_id','ASC');
        $query=$this->db->get();
        $all_exporter_user_info=$query->result();
        return $all_exporter_user_info;
    }
    
























    public function select_flash_notification_info_by_id($flash_notification_id){
        $this->db->select('*');
        $this->db->from('flash_notification');
        $this->db->where('flash_notification_id',$flash_notification_id);
        $query=$this->db->get();
        $all_flash_info=$query->row();
        return $all_flash_info;
    }

    public function select_normal_notification_info_by_id($normal_notification_id){
        $this->db->select('*');
        $this->db->from('normal_notification');
        $this->db->where('normal_notification_id',$normal_notification_id);
        $query=$this->db->get();
        $all_flash_info=$query->row();
        return $all_flash_info;
    }












    

    public function select_all_cnf_user_info_by_flash_notification_id($flash_notification_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('flash_notification_id',$flash_notification_id);
        $query=$this->db->get();
        $all_cnf_info=$query->result();
        return $all_cnf_info;
        
    }
    public function select_all_importer_user_info_by_flash_notification_id($flash_notification_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('flash_notification_id',$flash_notification_id);
        $query=$this->db->get();
        $all_importer_info=$query->result();
        return $all_importer_info;
        
    }
    public function select_all_exporter_user_info_by_flash_notification_id($flash_notification_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('flash_notification_id',$flash_notification_id);
        $query=$this->db->get();
        $all_exporter_info=$query->result();
        return $all_exporter_info;
        
    }











    public function select_all_cnf_user_info_by_normal_notification_id($normal_notification_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('normal_notification_id',$normal_notification_id);
        $query=$this->db->get();
        $all_cnf_info=$query->result();
        return $all_cnf_info;
        
    }
    public function select_all_importer_user_info_by_normal_notification_id($normal_notification_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('normal_notification_id',$normal_notification_id);
        $query=$this->db->get();
        $all_importer_info=$query->result();
        return $all_importer_info;
        
    }
    public function select_all_exporter_user_info_by_normal_notification_id($normal_notification_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('normal_notification_id',$normal_notification_id);
        $query=$this->db->get();
        $all_exporter_info=$query->result();
        return $all_exporter_info;
        
    }


























    public function update_cnf_info_by_flash_notification_id($cnf_main_info){
        $this->db->set('flash_notification_id',NULL);
        $this->db->set('cnf_is_flash_notification',0);
        $this->db->where('cnf_info_id',$cnf_main_info['cnf_info_id']);
        $this->db->update('cnf_info');
    }


    
    public function update_importer_info_by_flash_notification_id($importer_main_info){
        $this->db->set('flash_notification_id',NULL);
        $this->db->set('importer_is_flash_notification',0);
        $this->db->where('importer_info_id',$importer_main_info['importer_info_id']);
        $this->db->update('importer_info');
    }


    public function update_exporter_info_by_flash_notification_id($exporter_main_info){
        $this->db->set('flash_notification_id',NULL);
        $this->db->set('exporter_is_flash_notification',0);
        $this->db->where('exporter_info_id',$exporter_main_info['exporter_info_id']);
        $this->db->update('exporter_info');
    }















    
    public function update_cnf_info_by_normal_notification_id($cnf_main_info){
        $this->db->set('normal_notification_id',NULL);
        $this->db->set('cnf_is_normal_notification',0);
        $this->db->where('cnf_info_id',$cnf_main_info['cnf_info_id']);
        $this->db->update('cnf_info');
    }


    
    public function update_importer_info_by_normal_notification_id($importer_main_info){
        $this->db->set('normal_notification_id',NULL);
        $this->db->set('importer_is_normal_notification',0);
        $this->db->where('importer_info_id',$importer_main_info['importer_info_id']);
        $this->db->update('importer_info');
    }


    public function update_exporter_info_by_normal_notification_id($exporter_main_info){
        $this->db->set('normal_notification_id',NULL);
        $this->db->set('exporter_is_normal_notification',0);
        $this->db->where('exporter_info_id',$exporter_main_info['exporter_info_id']);
        $this->db->update('exporter_info');
    }





















    public function update_all_cnf_info_by_flash_notification_id($cnf_id,$flash_notification_id){
        $this->db->set('flash_notification_id',$flash_notification_id);
        $this->db->set('cnf_is_flash_notification',1);
        $this->db->where('cnf_info_id',$cnf_id);
        $this->db->update('cnf_info');
    }


    public function update_all_importer_info_by_flash_notification_id($importer_id,$flash_notification_id){
        $this->db->set('flash_notification_id',$flash_notification_id);
        $this->db->set('importer_is_flash_notification',1);
        $this->db->where('importer_info_id',$importer_id);
       return  $this->db->update('importer_info');
    }
    public function update_all_exporter_info_by_flash_notification_id($exporter_id,$flash_notification_id){
        $this->db->set('flash_notification_id',$flash_notification_id);
        $this->db->set('exporter_is_flash_notification',1);
        $this->db->where('exporter_info_id',$exporter_id);
       return  $this->db->update('exporter_info');
    }















    public function update_all_cnf_info_by_normal_notification_id($cnf_id,$normal_notification_id){
        $this->db->set('normal_notification_id',$normal_notification_id);
        $this->db->set('cnf_is_normal_notification',1);
        $this->db->where('cnf_info_id',$cnf_id);
        $this->db->update('cnf_info');
    }
    public function update_all_importer_info_by_normal_notification_id($importer_id,$normal_notification_id){
        $this->db->set('normal_notification_id',$normal_notification_id);
        $this->db->set('importer_is_normal_notification',1);
        $this->db->where('importer_info_id',$importer_id);
       return  $this->db->update('importer_info');
    }
    public function update_all_exporter_info_by_normal_notification_id($exporter_id,$normal_notification_id){
        $this->db->set('normal_notification_id',$normal_notification_id);
        $this->db->set('exporter_is_normal_notification',1);
        $this->db->where('exporter_info_id',$exporter_id);
       return  $this->db->update('exporter_info');
    }
















    
    public function deactive_flash_notification_info($flash_notification_id){
        $this->db->set('flash_notification_is_active',0);
        $this->db->where('flash_notification_id',$flash_notification_id);
        $this->db->update('flash_notification');
    }
    public function active_flash_notification_info($flash_notification_id){
        $this->db->set('flash_notification_is_active',1);
        $this->db->where('flash_notification_id',$flash_notification_id);
        $this->db->update('flash_notification');
    }






    
    public function deactive_normal_notification_info($normal_notification_id){
        $this->db->set('normal_notification_is_active',0);
        $this->db->where('normal_notification_id',$normal_notification_id);
        $this->db->update('normal_notification');
    }
    public function active_normal_notification_info($normal_notification_id){
        $this->db->set('normal_notification_is_active',1);
        $this->db->where('normal_notification_id',$normal_notification_id);
        $this->db->update('normal_notification');
    }











 










    public function delete_flash_notification_with_image($flash_notification_id){
        $query_get_image =$this->db->get_where('flash_notification', array('flash_notification_id' =>$flash_notification_id));
        $file_name=$query_get_image->row('flash_notification_image');
        unlink(FCPATH.$file_name);
        $this->db->where('flash_notification_id',$flash_notification_id);
        $this->db->delete('flash_notification');
    }




    public function delete_normal_notification_with_image($normal_notification_id){
        $query_get_image =$this->db->get_where('normal_notification', array('normal_notification_id' =>$normal_notification_id));
        $file_name=$query_get_image->row('normal_notification_image');
        unlink(FCPATH.$file_name);
        $this->db->where('normal_notification_id',$normal_notification_id);
        $this->db->delete('normal_notification');
    }



    
    
    
}

?>