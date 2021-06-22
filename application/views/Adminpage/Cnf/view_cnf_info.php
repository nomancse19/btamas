
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
            <h1>View Full CNF Data</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddCnf">Add New CNF Data</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageCnf">Manage CNF Info</a></li>
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
                <h3 class="card-title">View CNF Data</h3>
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
                        Send SMS CNF Number...
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">


                  <form role="form" action="<?php echo base_url();?>Backend/CnfController/send_cnf_sms" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="<?=CnfController::csrf_name();?>" value="<?=CnfController::csrf_token();?>" />
                          <div class="row">
                          <div class="col-sm-5">
                            <div class="form-group">
                            <label for="image_slider_link">Enter Your SMS<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <textarea class="form-control" required="" placeholder="Enter SMS That You Send To CNF User....." name="cnf_sms_details" id="" cols="1" rows="1"></textarea>
                          </div>

                            </div>

                            <div class="col-sm-3">
                            <div class="form-group">

                              <label for="image_slider_is_active">CNF Primary Number<span style="color:red;font-weight:bold;font-size:17px;">*</span> </label>
                              <input type="text" class="form-control" required="" name="cnf_primary_mobile_number" value="<?php echo $edit_cnf_data->cnf_primary_mobile_number;?>">
                              <input type="hidden" name="cnf_info_id"  value="<?php echo $edit_cnf_data->cnf_info_id;?>">
                            </div>

                        
                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                            <label for="vehicles_images_name"></label>
                            <button type="submit"  class="btn btn-primary form-control ">Send CNF SMS</button>
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
                    <label for="cnf_name">CNF Full Name <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control-plaintext form-control-sm" name="cnf_full_name" readonly value="<?php echo $edit_cnf_data->cnf_full_name;?>" required id="cnf_full_name" placeholder="Enter CNf Name">
                  </div>

           

                
                  <div class="form-group">
                    <label for="cnf_address">CNF Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control-plaintext form-control-sm" name="cnf_address" readonly value="<?php echo $edit_cnf_data->cnf_address;?>" id="cnf_address" placeholder="Enter CNF Address">
                  </div>

                  
                  <div class="form-group">
                    <label for="cnf_email_address">CNF Email Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="email" class="form-control-plaintext form-control-sm" name="cnf_email_address" readonly value="<?php echo $edit_cnf_data->cnf_email_address;?>" id="cnf_email_address" placeholder="Enter CNF Email Address">
                  </div>



                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Mobile Number(Main)<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control-plaintext form-control-sm" name="cnf_primary_mobile_number" readonly value="<?php echo $edit_cnf_data->cnf_primary_mobile_number;?>" required id="cnf_primary_mobile_number" placeholder="Enter CNF Primary Mobile Number">
                  </div>


                  
                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Mobile Number(Optional1) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control-plaintext form-control-sm" name="cnf_op1_mobile_number" readonly id="cnf_op1_mobile_number" value="<?php echo $edit_cnf_data->cnf_op1_mobile_number;?>" placeholder="Enter CNF Optional Mobile Number">
                  </div>

                  
                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Mobile Number(Optional2) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control-plaintext form-control-sm" name="cnf_op2_mobile_number" readonly id="cnf_op2_mobile_number" value="<?php echo $edit_cnf_data->cnf_op2_mobile_number;?>" placeholder="Enter CNF Optional Number , You Can Add Multiple Separate By coma">
                  </div>

				  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Account User Name <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control-plaintext form-control-sm" name="cnf_user_name" readonly id="cnf_user_name" value="<?php echo $edit_cnf_data->cnf_user_name;?>" placeholder="Enter CNF User Name">
                  </div>


                 
                  
                  </div>




          <div class="col-sm-6">
				
                 <div class="form-group">
                    <label for="cnf_mobile_number">CNF Account Password <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control-plaintext form-control-sm" name="cnf_user_password" readonly required id="cnf_user_password" value="<?php echo $edit_cnf_data->cnf_user_password;?>" placeholder="Enter CNF User Password">
                  </div>


                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control-plaintext form-control-sm" name="cnf_nid_number" readonly id="cnf_nid_number" value="<?php echo $edit_cnf_data->cnf_nid_number;?>" placeholder="Enter CNF NID Card Number">
                  </div>


             



                  <div class="form-group">
                    <label for="cnf_mobile_number">NID Card Front Side Picture <span style="color:black;font-weight:bold;font-size:17px;"> * </span></label><br>
                    <img src="<?php echo base_url().$edit_cnf_data->cnf_nid_card_front_side_image;?>"  alt="" width="200" height="100">
                   

                </div>

                  <div class="form-group">
                    <label for="cnf_mobile_number">NID Card Back Side Picture <span style="color:black;font-weight:bold;font-size:17px;">*</span></label><br>
                    <img src="<?php echo base_url().$edit_cnf_data->cnf_nid_card_back_side_image;?>" alt="" width="200" height="100">
                  
                  </div>

                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Profile Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> </label><br>
                    <img src="<?php echo base_url().$edit_cnf_data->cnf_profile_photo;?>" alt="" width="200" height="100">
                  
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
