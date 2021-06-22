<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ClientControllerModel extends CI_Model{


    public function save_cnf_vehicles_request($vehicles_request_data){
        $this->db->insert('all_vehicles_request',$vehicles_request_data);
    }

    public function check_cnf_admin_login_info_by_email($data){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_email_address',$data['cnf_email_address']);
        $this->db->where('cnf_user_password',($data['cnf_user_password']));
        $this->db->where('cnf_is_active',1);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        if($has==1){
        $result=$qresult->row();
        return $result;
        }
    }

    public function check_cnf_admin_login_info_by_mobile_number($data){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_primary_mobile_number',$data['cnf_primary_mobile_number']);
        $this->db->where('cnf_user_password',($data['cnf_user_password']));
        $this->db->where('cnf_is_active',1);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        if($has==1){
        $result=$qresult->row();
        return $result;
        }
    }


    public function check_importer_admin_login_info_by_email($data){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_email_address',$data['importer_email_address']);
        $this->db->where('importer_user_password',($data['importer_user_password']));
        $this->db->where('importer_is_active ',1);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        if($has==1){
        $result=$qresult->row();
        return $result;
        }
    }


    public function check_importer_admin_login_info_by_number($data){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_primary_mobile_number',$data['importer_primary_mobile_number']);
        $this->db->where('importer_user_password',($data['importer_user_password']));
        $this->db->where('importer_is_active ',1);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        if($has==1){
        $result=$qresult->row();
        return $result;
        }
    }


    public function check_exporter_admin_login_info_by_email($data){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_email_address',$data['exporter_email_address']);
        $this->db->where('exporter_user_password',($data['exporter_user_password']));
        $this->db->where('exporter_is_active',1);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        if($has==1){
        $result=$qresult->row();
        return $result;
        }
    }


    public function check_exporter_admin_login_info_by_number($data){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_primary_mobile_number',$data['exporter_primary_mobile_number']);
        $this->db->where('exporter_user_password',($data['exporter_user_password']));
        $this->db->where('exporter_is_active',1);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        if($has==1){
        $result=$qresult->row();
        return $result;
        }
    }


    public function all_cnf_vehicles_request_by_cnf_info($cnf_info_id){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_user_id',$cnf_info_id);
        $this->db->where('vehicles_request_user_type','cnf');
        $this->db->order_by('vehicles_request_id','DESC');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }


    public function all_importer_vehicles_request_by_importer_info($importer_info_id){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_user_id',$importer_info_id);
        $this->db->where('vehicles_request_user_type','importer');
        $this->db->order_by('vehicles_request_id','DESC');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }


    public function all_exporter_vehicles_request_by_exporter_info($exporter_info_id){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_user_id',$exporter_info_id);
        $this->db->where('vehicles_request_user_type','exporter');
        $this->db->order_by('vehicles_request_id','DESC');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }


    public function save_importer_vehicles_request($vehicles_request_data){
        $this->db->insert('all_vehicles_request',$vehicles_request_data);
    }

    public function save_exporter_vehicles_request($vehicles_request_data){
        $this->db->insert('all_vehicles_request',$vehicles_request_data);
    }



    public function all_cnf_chalan_info_by_cnf_id($cnf_info_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('cnf_info_id',$cnf_info_id);
        $this->db->order_by('chalan_info_id','DESC');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }



    public function all_single_cnf_chalan_info_by_cnf_id($chalan_info_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_info_id',$chalan_info_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }


    public function all_cnf_chalan_checking_info_by_cnf_id($cnf_info_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('cnf_info_id',$cnf_info_id);
        $qresult=$this->db->get();
        $result=$qresult->result();
        $checking_cnf_chalan_id=array();
        foreach($result as $all_result){
            $chalan_info_id=$all_result->chalan_info_id;
            array_push($checking_cnf_chalan_id,$chalan_info_id);
        }
        return $checking_cnf_chalan_id;
     
    }




    public function all_importer_chalan_checking_info_by_importer_id($importer_info_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('importer_info_id',$importer_info_id);
        $qresult=$this->db->get();
        $result=$qresult->result();
        $checking_importer_chalan_id=array();
        foreach($result as $all_result){
            $chalan_info_id=$all_result->chalan_info_id;
            array_push($checking_importer_chalan_id,$chalan_info_id);
        }
        return $checking_importer_chalan_id;
    }



    public function all_importer_chalan_info_by_importer_id($importer_info_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('importer_info_id',$importer_info_id);
        $this->db->order_by('chalan_info_id','DESC');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }




    public function all_exporter_chalan_checking_info_by_exporter_id($exporter_info_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('exporter_info_id',$exporter_info_id);
        $qresult=$this->db->get();
        $result=$qresult->result();
        $checking_exporter_chalan_id=array();
        foreach($result as $all_result){
            $chalan_info_id=$all_result->chalan_info_id;
            array_push($checking_exporter_chalan_id,$chalan_info_id);
        }
        return $checking_exporter_chalan_id;
    }




    public function all_exporter_chalan_info_by_exporter_id($exporter_info_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('exporter_info_id',$exporter_info_id);
        $this->db->order_by('chalan_info_id','DESC');
        $qresult=$this->db->get();
        $result=$qresult->result();
        return $result;
    }


    public function all_chalan_info_by_chalan_no($chalan_no){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_no',$chalan_no);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }


    public function get_cnf_normal_notification_by_cnf_user_id($cnf_info_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_is_normal_notification',1);
        $this->db->where('cnf_info_id',$cnf_info_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }


    public function get_cnf_flash_notification_by_cnf_user_id($cnf_info_id){
        $this->db->select('*');
        $this->db->from('cnf_info');
        $this->db->where('cnf_is_flash_notification',1);
        $this->db->where('cnf_info_id',$cnf_info_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }


    public function get_importer_flash_notification_by_cnf_user_id($importer_info_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_is_flash_notification',1);
        $this->db->where('importer_info_id',$importer_info_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }


    public function get_exporter_flash_notification_by_cnf_user_id($exporter_info_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_is_flash_notification',1);
        $this->db->where('exporter_info_id',$exporter_info_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }





    public function get_importer_normal_notification_by_importer_user_id($importer_info_id){
        $this->db->select('*');
        $this->db->from('importer_info');
        $this->db->where('importer_is_normal_notification',1);
        $this->db->where('importer_info_id',$importer_info_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }


    public function get_exporter_normal_notification_by_importer_user_id($exporter_info_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_is_normal_notification',1);
        $this->db->where('exporter_info_id',$exporter_info_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }


    public function get_exporter_normal_notification_by_exporter_user_id($exporter_info_id){
        $this->db->select('*');
        $this->db->from('exporter_info');
        $this->db->where('exporter_is_normal_notification',1);
        $this->db->where('exporter_info_id',$exporter_info_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }

    

    public function get_normal_notification_details_by_id($notification_id){
        $this->db->select('*');
        $this->db->from('normal_notification');
        $this->db->where('normal_notification_is_active',1);
        $this->db->where('normal_notification_id',$notification_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }


    public function get_flash_notification_details_by_id($notification_id){
        $this->db->select('*');
        $this->db->from('flash_notification');
        $this->db->where('flash_notification_is_active',1);
        $this->db->where('flash_notification_id',$notification_id);
        $qresult=$this->db->get();
        $result=$qresult->row();
        return $result;
    }




    public function count_cnf_pending_request($cnf_id){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',0);
        $this->db->where('vehicles_request_user_id',$cnf_id);
        $this->db->where('vehicles_request_user_type','cnf');
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }


    public function count_importer_pending_request($importer_id){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',0);
        $this->db->where('vehicles_request_user_id',$importer_id);
        $this->db->where('vehicles_request_user_type','importer');
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }

    public function count_exporter_pending_request($exporter_id){
        $this->db->select('*');
        $this->db->from('all_vehicles_request');
        $this->db->where('vehicles_request_status',0);
        $this->db->where('vehicles_request_user_id',$exporter_id);
        $this->db->where('vehicles_request_user_type','exporter');
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }


    public function count_cnf_on_the_way_chalan($cnf_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',1);
        $this->db->where('cnf_info_id',$cnf_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }


    public function count_importer_on_the_way_chalan($importer_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',1);
        $this->db->where('importer_info_id',$importer_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }


    public function count_exporter_on_the_way_chalan($exporter_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',1);
        $this->db->where('exporter_info_id',$exporter_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }


    public function count_cnf_on_complete_chalan($cnf_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',2);
        $this->db->where('cnf_info_id',$cnf_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }


    public function count_importer_on_complete_chalan($importer_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',2);
        $this->db->where('importer_info_id',$importer_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }


    public function count_exporter_on_complete_chalan($exporter_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',2);
        $this->db->where('importer_info_id',$exporter_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }



    public function count_cnf_on_cancel_chalan($cnf_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',3);
        $this->db->where('cnf_info_id',$cnf_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }

    public function count_importer_on_cancel_chalan($importer_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',3);
        $this->db->where('importer_info_id',$importer_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }

    public function count_exporter_on_cancel_chalan($exporter_id){
        $this->db->select('*');
        $this->db->from('chalan_info');
        $this->db->where('chalan_status',3);
        $this->db->where('exporter_info_id',$exporter_id);
        $qresult=$this->db->get();
        $has=$qresult->num_rows();
        return $has;

    }




    public function get_user_permissin_data($user_id){
        $this->db->select('*');
        $this->db->from('users_permission');
        $this->db->where('user_id',$user_id);
        $this->db->where('is_permission',1);
        $qresult=$this->db->get();
        $result=$qresult->result();
        $permission_name=array();
       foreach($result as $all_result){
           $permission_role_name=$all_result->permission_role_name;
           array_push($permission_name,$permission_role_name);
       }
       return $permission_name;
       
    }
    
    

    
    
    
    
}

?>