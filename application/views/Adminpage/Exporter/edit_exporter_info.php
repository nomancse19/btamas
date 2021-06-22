
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>Edit Or Update Exporter Data</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddExporter">Add New Exporter Data</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageExporter">Manage Exporter Info</a></li>
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
                <h3 class="card-title">Update Exporter Data</h3>
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
              <form role="form" action="<?php echo base_url();?>Cholotransportowner/SaveUpdateExporterInfo/<?php echo $edit_exporter_data->exporter_info_id;?>" enctype="multipart/form-data" method="post">
         
                <div class="card-body">
           

                <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="exporter_name">Exporter Full Name <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="exporter_full_name" value="<?php echo $edit_exporter_data->exporter_full_name;?>" required id="exporter_full_name" placeholder="Enter exporter Name">
                  </div>

           

                
                  <div class="form-group">
                    <label for="exporter_address">Exporter Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="exporter_address" value="<?php echo $edit_exporter_data->exporter_address;?>" id="exporter_address" placeholder="Enter exporter Address">
                  </div>

                  
                  <div class="form-group">
                    <label for="exporter_email_address">Exporter Email Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="email" class="form-control form-control-sm" name="exporter_email_address" value="<?php echo $edit_exporter_data->exporter_email_address;?>" id="exporter_email_address" placeholder="Enter exporter Email Address">
                  </div>



                  <div class="form-group">
                    <label for="exporter_mobile_number">Exporter Mobile Number(Main)<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="exporter_primary_mobile_number" value="<?php echo $edit_exporter_data->exporter_primary_mobile_number;?>" required id="exporter_primary_mobile_number" placeholder="Enter exporter Primary Mobile Number">
                  </div>


                  
                  <div class="form-group">
                    <label for="exporter_mobile_number">Exporter Mobile Number(Optional1) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="exporter_op1_mobile_number" id="exporter_op1_mobile_number" value="<?php echo $edit_exporter_data->exporter_op1_mobile_number;?>" placeholder="Enter exporter Optional Mobile Number">
                  </div>

                  
                  <div class="form-group">
                    <label for="exporter_mobile_number">Exporter Mobile Number(Optional2) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="exporter_op2_mobile_number" id="exporter_op2_mobile_number" value="<?php echo $edit_exporter_data->exporter_op2_mobile_number;?>" placeholder="Enter exporter Optional Number , You Can Add Multiple Separate By coma">
                  </div>

				  <div class="form-group">
                    <label for="exporter_mobile_number">Exporter Account User Name <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="exporter_user_name" id="exporter_user_name" value="<?php echo $edit_exporter_data->exporter_user_name;?>" placeholder="Enter exporter User Name">
                  </div>


                  <div class="form-group">
                    <label for="exporter_mobile_number">Exporter Account Password <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="password" class="form-control form-control-sm" name="exporter_user_password" required id="exporter_user_password" value="<?php echo $edit_exporter_data->exporter_user_password;?>" placeholder="Enter exporter User Password">
                  </div>
                  
                  </div>




          <div class="col-sm-6">
				

                  <div class="form-group">
                    <label for="exporter_mobile_number">Exporter NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="exporter_nid_number" id="exporter_nid_number" value="<?php echo $edit_exporter_data->exporter_nid_number;?>" placeholder="Enter exporter NID Card Number">
                  </div>


             



                  <div class="form-group">
                    <label for="exporter_mobile_number">NID Card Front Side Picture <span style="color:black;font-weight:bold;font-size:17px;"> * </span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label><br>
                    <img src="<?php echo base_url().$edit_exporter_data->exporter_nid_card_front_side_image;?>" alt="" width="200" height="100">
                    <input type="hidden" name="hidden_exporter_nid_card_front_side_image" value="<?php echo $edit_exporter_data->exporter_nid_card_front_side_image;?>">
                    <input type="file" class="form-control form-control-sm" name="exporter_nid_card_front_side_image" id="exporter_nid_card_front_side_image" placeholder="Enter exporter NID Card Number">

                </div>

                  <div class="form-group">
                    <label for="exporter_mobile_number">NID Card Back Side Picture <span style="color:black;font-weight:bold;font-size:17px;">*</span><span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label><br>
                    <img src="<?php echo base_url().$edit_exporter_data->exporter_nid_card_back_side_image;?>" alt="" width="200" height="100">
                    <input type="hidden" name="hidden_exporter_nid_card_back_side_image" value="<?php echo $edit_exporter_data->exporter_nid_card_back_side_image;?>">
                    <input type="file" class="form-control form-control-sm" name="exporter_nid_card_back_side_image" id="exporter_nid_card_back_side_image" >
                  </div>

                  <div class="form-group">
                    <label for="exporter_mobile_number">Exporter Profile Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label><br>
                    <img src="<?php echo base_url().$edit_exporter_data->exporter_profile_photo;?>" alt="" width="200" height="100">
                    <input type="hidden" name="hidden_exporter_profile_photo" value="<?php echo $edit_exporter_data->exporter_profile_photo;?>">
                    <input type="file" class="form-control form-control-sm" name="exporter_profile_photo" id="exporter_profile_photo" >
                  </div>


 

          </div>
				

				


                  <button type="submit"  class="btn btn-primary right_align">Update Exporter Info</button>
                  </div>
                </div>
                






                 



               
                </div>
                </form>
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
