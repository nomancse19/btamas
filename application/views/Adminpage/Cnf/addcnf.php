
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>Add CNF Data</h1>
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
                <h3 class="card-title">Add CNF Info</h3>
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
              <form role="form" action="<?php echo base_url();?>Cholotransportowner/Savecnf" enctype="multipart/form-data" method="post">
              <input type="hidden" name="<?=CnfController::csrf_name();?>" value="<?=CnfController::csrf_token();?>" />
                <div class="card-body">
           

                <div class="row">
                  <div class="col-sm-6">
                  <div class="form-group">
                    <label for="cnf_name">CNF Full Name <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="cnf_full_name" required id="cnf_full_name" placeholder="Enter CNf Name">
                  </div>

           

                
                  <div class="form-group">
                    <label for="cnf_address">CNF Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="cnf_address" id="cnf_address" placeholder="Enter CNF Address">
                  </div>

                  
                  <div class="form-group">
                    <label for="cnf_email_address">CNF Email Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="email" class="form-control form-control-sm" name="cnf_email_address" id="cnf_email_address" placeholder="Enter CNF Email Address">
                  </div>



                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Mobile Number(Main)<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="cnf_primary_mobile_number" required id="cnf_primary_mobile_number" placeholder="Enter CNF Primary Mobile Number">
                  </div>


                  
                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Mobile Number(Optional1) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="cnf_op1_mobile_number" id="cnf_op1_mobile_number" placeholder="Enter CNF Optional Mobile Number">
                  </div>

                  
                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Mobile Number(Optional2) <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="cnf_op2_mobile_number" id="cnf_op2_mobile_number" placeholder="Enter CNF Optional Number , You Can Add Multiple Separate By coma">
                  </div>
				  
                  
                  </div>




				<div class="col-sm-6">
				          <div class="form-group">
                    <label for="cnf_mobile_number">CNF Account User Name <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="cnf_user_name" id="cnf_user_name" placeholder="Enter CNF User Name">
                  </div>


                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Account Password <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="password" class="form-control form-control-sm" name="cnf_user_password" required id="cnf_user_password" placeholder="Enter CNF User Password">
                  </div>

                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="cnf_nid_number" id="cnf_nid_number" placeholder="Enter CNF NID Card Number">
                  </div>


             



                  <div class="form-group">
                    <label for="cnf_mobile_number">NID Card Front Side Picture <span style="color:black;font-weight:bold;font-size:17px;"> * </span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="cnf_nid_card_front_side_image" id="cnf_nid_card_front_side_image" placeholder="Enter CNF NID Card Number">
                  </div>

                  <div class="form-group">
                    <label for="cnf_mobile_number">NID Card Back Side Picture <span style="color:black;font-weight:bold;font-size:17px;">*</span><span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="cnf_nid_card_back_side_image" id="cnf_nid_card_back_side_image" >
                  </div>

                  <div class="form-group">
                    <label for="cnf_mobile_number">CNF Profile Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                    <input type="file" class="form-control form-control-sm" name="cnf_profile_photo" id="cnf_profile_photo" >
                  </div>


              <div class="row">
                  <div class="col-sm-3">
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio1" value="cnf_active" name="cnf_is_active" checked>
                      <label for="customRadio1" class="custom-control-label">CNF Active</label>
                    </div>
                  </div>
                  </div>

                  <div class="col-sm-4">
                  <div class="form-group">
                    <div class="custom-control custom-radio">
                      <input class="custom-control-input" type="radio" id="customRadio2" value="cnf_deactive" name="cnf_is_active">
                      <label for="customRadio2" class="custom-control-label">CNF Deactive</label>
                    </div>
                  </div>
                  </div>
              </div>

          </div>
				

				


                  <button type="submit"  class="btn btn-primary right_align">Save CNF Info</button>
                  </div>
                </div>
                
                </form>
                </div>
             </div>
                <!-- /.card-body -->
         </div>
      </div>
            <!-- /.card -->





    
    </section>
    <!-- /.content -->
</div>




  <script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
