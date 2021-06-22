<style>
#info-block section {
    border: 3px solid #DEE2E6;
}

.file-marker > div {
    padding: 0 3px;
    height: 100px auto;
    margin-top: -0.8em;
    
}

.box-title {
    background: white none repeat scroll 0 0;
    display: inline-block;
    padding: 0 2px;
    margin-left: 3em;
    font-weight: bold;
    color:green;
}

.box-contents{
  padding:10px;
}

.card-header{
  margin-top:-24px;
}

</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>View Full Vehicles Driver Info Data</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddDriver">Add New Driver Data</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageDriver">Manage Driver Info</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 animated headShake">
         
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Driver Data</h3>
                <h3 class="card-title">
              <?php
              $success_message=$this->session->flashdata('success_message');
              $error_message = $this->session->flashdata('error_message');
              if($success_message){
              echo '<script type="text/javascript">toastr.success("'.$success_message.'")</script>';
              }
              if($error_message){
                  echo '<script type="text/javascript">toastr.error("'.$error_message.'")</script>';
                  
                  }

              ?>
              </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
            
            
                <div class="card-body">
           


                <aside id="info-block">
                <section class="file-marker">
                  <div>
                    <div class="box-title">
                        Send SMS Vehicles Driver Number...
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">


                  <form role="form" action="<?php echo base_url();?>Backend/DriverController/send_driver_sms" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="<?=DriverController::csrf_name();?>" value="<?=DriverController::csrf_token();?>" />
                          <div class="row">
                          <div class="col-sm-5">
                            <div class="form-group">
                            <label for="">Enter Your SMS<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <textarea class="form-control" required="" placeholder="Enter SMS That You Send To Vehicles Driver User....." name="driver_sms_details" id="" cols="1" rows="1"></textarea>
                          </div>

                            </div>

                            <div class="col-sm-3">
                            <div class="form-group">

                              <label for="image_slider_is_active">Vehicles Driver Number<span style="color:red;font-weight:bold;font-size:17px;">*</span> </label>
                              <input type="text" class="form-control" required="" name="driver_mobile_number" value="<?php echo $view_driver_data->driver_mobile_number;?>">
                              <input type="hidden" name="driver_info_id"  value="<?php echo $view_driver_data->driver_info_id;?>">
                            </div>

                        
                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                            <label for=""></label>
                            <button type="submit"  class="btn btn-primary form-control ">Send Vehicles Driver SMS</button>
                            </div>
                        
                          
                          </div>

                            </div>

                          </form>



                      </div>
                    </div>
                  </div>
                </section>
              </aside>









                <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="importer_name">Driver Name</label>
                    <span class="form-control form-control-sm"><?php echo $view_driver_data->driver_name;?></span>
                  </div>


                  <div class="form-group">
                    <label for="importer_name">Driver Mobile Number</label>
                    <span class="form-control form-control-sm"><?php echo $view_driver_data->driver_mobile_number;?></span>
                  </div>
                  
                  <div class="form-group">
                    <label for="importer_name">Driver Opt. Number</label>
                    <span class="form-control form-control-sm"><?php echo $view_driver_data->driver_op_mobile_number;?></span>
                  </div>


                  <div class="form-group">
                    <label for="importer_name">Driver Address</label>
                    <span class="form-control form-control-sm"><?php echo $view_driver_data->driver_address;?></span>
                  </div>

                  <div class="form-group">
                    <label for="importer_name">Driver NID No</label>
                    <span class="form-control form-control-sm"><?php echo $view_driver_data->driver_nid_card_no;?></span>
                  </div>

                  <div class="form-group">
                    <label for="importer_name">Driver Info Created Date</label>
                    <span class="form-control form-control-sm"><?php echo $view_driver_data->driver_info_created_date;?></span>
                  </div>

                    
                  <div class="form-group">
                    <label for="importer_name">Driver Account Password</label>
                    <span class="form-control form-control-sm"><?php echo $view_driver_data->driver_account_password;?></span>
                  </div>

                  


                  <?php 
                    $total_fitness_day = (strtotime($view_driver_data->driver_license_end_date))-(strtotime(date("Y-m-d")));
                    $fitness_remain_day = floor($total_fitness_day /(60*60*24));
                  if($fitness_remain_day<=0){
                  ?>
                  <div class="form-group" style="color:red;">
                    <label for="importer_name">Driver license End Date</label>
                    <span class="form-control form-control-sm" style="color:red;font-weight:bold;border:2px solid red;"><?php echo $view_driver_data->driver_license_end_date;?></span>
                  </div>
                  <?php } else{?>

                    <div class="form-group">
                    <label for="importer_name">Driver license End Date</label>
                    <span class="form-control form-control-sm"><?php echo $view_driver_data->driver_license_end_date;?></span>
                  </div>
                  <?php } ?>

                  </div>




            <div class="col-sm-6">
				
              
        


                  <div class="form-group">
                    <label for="importer_name">Driver Profile Photo</label>
                    <span> <img src="<?php echo base_url().$view_driver_data->driver_profile_photo;?>" width="100%" height="150" alt=""></span>
                  </div>

                  
                  <div class="form-group">
                    <label for="importer_name">Driver NID Front Side Photo <span style="margin-left:11px;"> :</span></label>
                    <img src="<?php echo base_url().$view_driver_data->driver_nid_card_front_side_image; ?>" width="100%" height="150" alt="">
                  </div>

                  <div class="form-group">
                    <label for="importer_name">Driver NID Back Side Photo <span style="margin-left:15px;"> :</span></label>
                    <img src="<?php echo base_url().$view_driver_data->driver_nid_card_back_side_image;?>" width="100%" height="150" alt="">
                  </div>
                 

 

          </div>
				

				


                
                  </div>
                </div>
                






                 



               
                </div>

                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->





          </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
