
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>Edit Or Update Transport Malik Data</h1>
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
                <h3 class="card-title">Update Transport Malik Data</h3>
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
              <form role="form" action="<?php echo base_url();?>Cholotransportowner/SaveUpdateImporterInfo/<?php echo $edit_importer_data->importer_info_id;?>" enctype="multipart/form-data" method="post">
         
                <div class="card-body">
           

                <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="importer_name">Transport Malik Full Name <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_full_name" value="<?php echo $edit_importer_data->importer_full_name;?>" required id="importer_full_name" placeholder="Enter Transport Malik Name">
                  </div>

           

                
                  <div class="form-group">
                    <label for="importer_address">Transport Malik Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_address" value="<?php echo $edit_importer_data->importer_address;?>" id="importer_address" placeholder="Enter Transport Malik Address">
                  </div>

                  
                  <div class="form-group">
                    <label for="importer_email_address">Transport Malik Email Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="email" class="form-control form-control-sm" name="importer_email_address" value="<?php echo $edit_importer_data->importer_email_address;?>" id="importer_email_address" placeholder="Enter Transport Malik Email Address">
                  </div>



                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Mobile Number(Main)<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="importer_primary_mobile_number" value="<?php echo $edit_importer_data->importer_primary_mobile_number;?>" required id="importer_primary_mobile_number" placeholder="Enter Transport Malik Primary Mobile Number">
                  </div>


                  
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Mobile Number(Optional1) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="importer_op1_mobile_number" id="importer_op1_mobile_number" value="<?php echo $edit_importer_data->importer_op1_mobile_number;?>" placeholder="Enter Transport Malik Optional Mobile Number">
                  </div>

                  
                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Blood Group <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_op2_mobile_number" id="importer_op2_mobile_number" value="<?php echo $edit_importer_data->importer_op2_mobile_number;?>" placeholder="Enter Transport Malik Blood Group , You Can Add Multiple Separate By coma">
                  </div>

				  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Account User Name <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_user_name" id="importer_user_name" value="<?php echo $edit_importer_data->importer_user_name;?>" placeholder="Enter Transport Malik User Name">
                  </div>


                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Account Password <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="password" class="form-control form-control-sm" name="importer_user_password" required id="importer_user_password" value="<?php echo $edit_importer_data->importer_user_password;?>" placeholder="Enter Transport Malik User Password">
                  </div>
                  
                  </div>




          <div class="col-sm-6">
				

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="importer_nid_number" id="importer_nid_number" value="<?php echo $edit_importer_data->importer_nid_number;?>" placeholder="Enter Transport Malik NID Card Number">
                  </div>


             



                  <div class="form-group">
                    <label for="importer_mobile_number">NID Card Front Side Picture <span style="color:black;font-weight:bold;font-size:17px;"> * </span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label><br>
                    <img src="<?php echo base_url().$edit_importer_data->importer_nid_card_front_side_image;?>" alt="" width="200" height="100">
                    <input type="hidden" name="hidden_importer_nid_card_front_side_image" value="<?php echo $edit_importer_data->importer_nid_card_front_side_image;?>">
                    <input type="file" class="form-control form-control-sm" name="importer_nid_card_front_side_image" id="importer_nid_card_front_side_image" placeholder="Enter Transport Malik NID Card Number">

                </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">NID Card Back Side Picture <span style="color:black;font-weight:bold;font-size:17px;">*</span><span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label><br>
                    <img src="<?php echo base_url().$edit_importer_data->importer_nid_card_back_side_image;?>" alt="" width="200" height="100">
                    <input type="hidden" name="hidden_importer_nid_card_back_side_image" value="<?php echo $edit_importer_data->importer_nid_card_back_side_image;?>">
                    <input type="file" class="form-control form-control-sm" name="importer_nid_card_back_side_image" id="importer_nid_card_back_side_image" >
                  </div>

                  <div class="form-group">
                    <label for="importer_mobile_number">Transport Malik Profile Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label><br>
                    <img src="<?php echo base_url().$edit_importer_data->importer_profile_photo;?>" alt="" width="200" height="100">
                    <input type="hidden" name="hidden_importer_profile_photo" value="<?php echo $edit_importer_data->importer_profile_photo;?>">
                    <input type="file" class="form-control form-control-sm" name="importer_profile_photo" id="importer_profile_photo" >
                  </div>


 

          </div>
				

				


                  <button type="submit"  class="btn btn-primary right_align">Update Transport Malik Info</button>
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
