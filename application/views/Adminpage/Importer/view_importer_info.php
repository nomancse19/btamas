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
            <h1>View Full Transport Malik Data</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddImporter">Add New Transport Malik Data</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageImporter">Manage Transport Malik Info</a></li>
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
                <h3 class="card-title">View Transport Malik Data</h3>
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
                        Send SMS Transport Malik Number...
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">


                  <form role="form" action="<?php echo base_url();?>Backend/ImporterController/send_importer_sms" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="<?=ImporterController::csrf_name();?>" value="<?=ImporterController::csrf_token();?>" />
                          <div class="row">
                          <div class="col-sm-5">
                            <div class="form-group">
                            <label for="image_slider_link">Enter Your SMS<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <textarea class="form-control" required="" placeholder="Enter SMS That You Send To Transport Malik User....." name="importer_sms_details" id="" cols="1" rows="1"></textarea>
                          </div>

                            </div>

                            <div class="col-sm-3">
                            <div class="form-group">

                              <label for="image_slider_is_active">Transport Malik Primary Number<span style="color:red;font-weight:bold;font-size:17px;">*</span> </label>
                              <input type="text" class="form-control" required="" name="importer_primary_mobile_number" value="<?php echo $edit_importer_data->importer_primary_mobile_number;?>">
                              <input type="hidden" name="importer_info_id"  value="<?php echo $edit_importer_data->importer_info_id;?>">
                            </div>

                        
                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                            <label for="vehicles_images_name"></label>
                            <button type="submit"  class="btn btn-primary form-control ">Send Transport Malik SMS</button>
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
                    <label for="importer_name">Transport Malik Name (Bangla)<span style="color:red;font-weight:bold;border:none;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_full_name_bn" readonly value="<?php echo $edit_importer_data->transport_owner_full_name_bn;?>" required id="transport_owner_full_name_bn" placeholder="Enter Transport Malik Name">
                  </div>


                  <div class="form-group">
                    <label for="importer_name">Transport Malik Name (English)<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_full_name_en" readonly value="<?php echo $edit_importer_data->transport_owner_full_name_en;?>" required id="transport_owner_full_name_en" placeholder="Enter Transport Malik Name">
                  </div>

           

                
                  <div class="form-group">
                    <label for="importer_address">Transport Malik Present Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_address" readonly value="<?php echo $edit_importer_data->importer_address;?>" id="importer_address" placeholder="Enter Transport Malik Address">
                  </div>


                  <div class="form-group">
                    <label for="importer_address">Transport Malik Permanent Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_permanent_address" readonly value="<?php echo $edit_importer_data->transport_owner_permanent_address;?>" id="transport_owner_permanent_address" placeholder="Enter Transport Malik Address">
                  </div>

                  
                  <div class="form-group">
                    <label for="importer_email_address">Transport Malik Email Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="email" class="form-control form-control-sm" name="importer_email_address" readonly value="<?php echo $edit_importer_data->importer_email_address;?>" id="importer_email_address" placeholder="Enter Transport Malik Email Address">
                  </div>



                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Mobile Number(Main)<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="importer_primary_mobile_number" readonly value="<?php echo $edit_importer_data->importer_primary_mobile_number;?>" required id="importer_primary_mobile_number" placeholder="Enter Transport Malik Primary Mobile Number">
                  </div>


                  
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Mobile Number(Optional1) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="importer_op1_mobile_number" readonly id="importer_op1_mobile_number" value="<?php echo $edit_importer_data->importer_op1_mobile_number;?>" placeholder="Enter Transport Malik Optional Mobile Number">
                  </div>

                  
                 

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Wife/Husband/Children Name <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" readonly class="form-control form-control-sm" name="transport_owner_relative_name" id="transport_owner_relative_name" value="<?php echo $edit_importer_data->transport_owner_relative_name;?>" placeholder="Enter Transport Malik Wife/Husband/Children Name">
                  </div>
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Wife/Husband/Children Number <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" readonly name="transport_owner_relative_number" id="transport_owner_relative_number" value="<?php echo $edit_importer_data->transport_owner_relative_number;?>" placeholder="Enter Transport Malik Wife/Husband/Children Number">
                  </div>
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Name (English) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" readonly class="form-control form-control-sm" name="transport_name_en" id="transport_name_en" value="<?php echo $edit_importer_data->transport_name_en;?>" placeholder="Enter Transport Name in English">
                  </div>
				          <div class="form-group">
                    <label for="importer_mobile_number">Transport Name (Bangla) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" readonly class="form-control form-control-sm" name="transport_name_bn" id="transport_name_bn" value="<?php echo $edit_importer_data->transport_name_bn;?>" placeholder="Enter Transport Name in Bangla">
                  </div>


                  </div>





              <div class="col-sm-6">
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Blood Group <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_blood_group" readonly id="transport_owner_blood_group" value="<?php echo $edit_importer_data->transport_owner_blood_group;?>" placeholder="Enter Transport Malik Blood Groupr , You Can Add Multiple Separate By coma">
                  </div>
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Owner Member No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" readonly class="form-control form-control-sm" name="transport_owner_member_no" id="transport_owner_member_no" value="<?php echo $edit_importer_data->transport_owner_member_no;?>" placeholder="Enter transport_owner_member_no">
                  </div>


                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_card_no" value="<?php echo $edit_importer_data->transport_owner_card_no;?>" id="transport_owner_card_no" placeholder="Enter Transport Malik Card No....">
                  </div>
                  
				          <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik QR Code No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="transport_owner_QRcode_no" id="transport_owner_QRcode_no" value="<?php echo $edit_importer_data->transport_owner_QRcode_no;?>" placeholder="Enter Transport Malik QR Code No...">
                  </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Account Password <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_user_password" readonly required id="importer_user_password" value="<?php echo $edit_importer_data->importer_user_password;?>" placeholder="Enter Transport Malik User Password">
                  </div>


                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_nid_number" readonly id="importer_nid_number" value="<?php echo $edit_importer_data->importer_nid_number;?>" placeholder="Enter Transport Malik NID Card Number">
                  </div>


              



                  <div class="form-group">
                    <label for="importer_mobile_number">NID Card Front Side Picture <span style="color:black;font-weight:bold;font-size:17px;"> * </span></label><br>
                    <img src="<?php echo base_url().$edit_importer_data->importer_nid_card_front_side_image;?>"  alt="" width="200" height="100">
                    

                </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Signature <span style="color:black;font-weight:bold;font-size:17px;">*</span></label><br>
                    <img src="<?php echo base_url().$edit_importer_data->importer_nid_card_back_side_image;?>" alt="" width="200" height="100">
                  
                  </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Profile Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> </label><br>
                    <img src="<?php echo base_url().$edit_importer_data->importer_profile_photo;?>" alt="" width="200" height="100">
                  
                  </div>

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
