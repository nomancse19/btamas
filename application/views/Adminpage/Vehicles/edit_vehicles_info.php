
<style>
  @import url('https://fonts.googleapis.com/css?family=Roboto');
/*------------------------*/


input:focus,
button:focus,
.form-control:focus{
	outline: none;
	box-shadow: none;
}
.form-control:disabled, .form-control[readonly]{
	background-color: #fff;
}


/*----------step-wizard------------*/
.d-flex{
	display: flex;
}
.justify-content-center{
	justify-content: center;
}
.align-items-center{
	align-items: center;
}

/*---------signup-step-------------*/
.bg-color{
	background-color: #333;
}
.signup-step-container{
	padding: 30px 40px;
	padding-bottom: 60px;
}




    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard > div.wizard-inner {
            position: relative;
    margin-bottom: -21px;
    text-align: center;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 75%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 15px;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 30px;
    height: 30px;
    line-height: 30px;
    display: inline-block;
    border-radius: 50%;
    background: #fff;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 16px;
    color: #0e214b;
    font-weight: 500;
    border: 1px solid #ddd;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
        background: #0db02b;
    color: #fff;
    border-color: #0db02b;
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}
.wizard .nav-tabs > li.active > a i{
	color: #0db02b;
}

.wizard .nav-tabs > li {
    width: 25%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: red;
    transition: 0.1s ease-in-out;
}



.wizard .nav-tabs > li a {
    width: 30px;
    height: 30px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
    background-color: transparent;
    position: relative;
    top: 0;
}
.wizard .nav-tabs > li a i{
	position: absolute;
    top: -15px;
    font-style: normal;
    font-weight: 400;
    white-space: nowrap;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    font-weight: 700;
    color: #000;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 0px;
}


.wizard h3 {
    margin-top: 0;
}
.prev-step,
.next-step{
    font-size: 13px;
    padding: 8px 24px;
    border: none;
    border-radius: 4px;
    margin-top: 30px;
}

.skip-btn{
	background-color: #cec12d;
}
.step-head{
    font-size: 20px;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
}
.term-check{
	font-size: 14px;
	font-weight: 400;
}
.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 40px;
    margin-bottom: 0;
}
.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 40px;
    margin: 0;
    opacity: 0;
}
.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: 40px;
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 2;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 38px;
    padding: .375rem .75rem;
    line-height: 2;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0;
}
.footer-link{
	margin-top: 30px;
}

.list-content{
	margin-bottom: 10px;
}
.list-content a{
	padding: 10px 15px;
    width: 100%;
    display: inline-block;
    background-color: #f5f5f5;
    position: relative;
    color: #565656;
    font-weight: 400;
    border-radius: 4px;
}
.list-content a[aria-expanded="true"] i{
	transform: rotate(180deg);
}
.list-content a i{
	text-align: right;
    position: absolute;
    top: 15px;
    right: 10px;
    transition: 0.5s;
}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #fdfdfd;
}
.list-box{
	padding: 10px;
}
.signup-logo-header .logo_area{
	width: 200px;
}
.signup-logo-header .nav > li{
	padding: 0;
}
.signup-logo-header .header-flex{
	display: flex;
	justify-content: center;
	align-items: center;
}
.list-inline li{
    display: inline-block;
}
.pull-right{
    float: right;
}
/*-----------custom-checkbox-----------*/
/*----------Custom-Checkbox---------*/
input[type="checkbox"]{
    position: relative;
    display: inline-block;
    margin-right: 5px;
}
input[type="checkbox"]::before,
input[type="checkbox"]::after {
    position: absolute;
    content: "";
    display: inline-block;   
}
input[type="checkbox"]::before{
    height: 16px;
    width: 16px;
    border: 1px solid #999;
    left: 0px;
    top: 0px;
    background-color: #fff;
    border-radius: 2px;
}
input[type="checkbox"]::after{
    height: 5px;
    width: 9px;
    left: 4px;
    top: 4px;
}
input[type="checkbox"]:checked::after{
    content: "";
    border-left: 1px solid #fff;
    border-bottom: 1px solid #fff;
    transform: rotate(-45deg);
}
input[type="checkbox"]:checked::before{
    background-color: #18ba60;
    border-color: #18ba60;
}






@media (max-width: 767px){
	.sign-content h3{
		font-size: 40px;
	}
	.wizard .nav-tabs > li a i{
		display: none;
	}
	.signup-logo-header .navbar-toggle{
		margin: 0;
		margin-top: 8px;
	}
	.signup-logo-header .logo_area{
		margin-top: 0;
	}
	.signup-logo-header .header-flex{
		display: block;
	}
}

</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>Update Vehicles Data</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddVehicles">Add New Vehicles Info</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageVehicles">Manage Vehicles Info</a></li>
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
                <h3 class="card-title">Update Vehicles Info</h3>
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
           



    <section class="signup-step-container">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line" style="display:none;"></div>
                            <ul class="nav nav-tabs" role="tablist" style="display:none;">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
                                </li>

                            </ul>
                        </div>
        
                        <form action="<?php echo base_url();?>Cholotransportowner/SaveUpdateVehiclesInfo/<?php echo $edit_vehicles_data->vehicles_owner_id; ?>" method="post" id="my_from" class="login-box1" enctype="multipart/form-data">
                            <div class="tab-content" id="main_form">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h4 class="text-center">Vehicles Owner Info</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label for="cnf_name">Vehicles Owner Name <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                                              <input type="text" class="form-control form-control-sm" name="vehicles_owner_name" value="<?php echo $edit_vehicles_data->vehicles_owner_name;?>" onblur="hasvalue()" required id="vehicles_owner_name" placeholder="Enter Vehicles Owner Name">
                                            </div>
                                            <input type="hidden" name="vehicles_owner_id" value="<?php echo $edit_vehicles_data->vehicles_owner_id;?>">
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group">
                                              <label for="cnf_name">Vehicles Owner Main Mobile Number<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                                              <input type="number" class="form-control form-control-sm" name="vehicles_owner_primary_mobile_number" value="<?php echo $edit_vehicles_data->vehicles_owner_primary_mobile_number;?>" onblur="hasvalue()" required id="vehicles_owner_primary_mobile_number" placeholder="Enter Vehicles Owner Main Mobile Number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="cnf_name">Vehicles Owner Optional Mobile <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_owner_op_mobile_number" value="<?php echo $edit_vehicles_data->vehicles_owner_op_mobile_number;?>" required id="vehicles_owner_op_mobile_number" placeholder="Enter Vehicles Owner Optional Mobile Number , Add Mutiple by Adding Coma">
                                              </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="cnf_name">Vehicles Owner Address <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_owner_address" required id="vehicles_owner_address" value="<?php echo $edit_vehicles_data->vehicles_owner_address;?>" placeholder="Enter Vehicles Owner Address">
                                              </div>
                                        </div>


                                        <div class="col-md-6">
                                              <div class="form-group">
                                                <label for="cnf_name">Vehicles Owner NID Card No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_owner_nid_no" required id="vehicles_owner_nid_no" value="<?php echo $edit_vehicles_data->vehicles_owner_nid_no;?>"  placeholder="Enter Vehicles Owner NID No">
                                              </div>
                                        </div>


                                        <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="cnf_mobile_number">Vehicles Owner Profile Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                                                  <img src="<?php echo base_url().$edit_vehicles_data->vehicles_owner_profile_photo;?>" alt="" width="50" height="50">
                                                  <input type="file" class="form-control form-control-sm" name="vehicles_owner_profile_photo" id="vehicles_owner_profile_photo" >
                                                  <input type="hidden" name="hidden_vehicles_owner_profile_photo" value="<?php echo $edit_vehicles_data->vehicles_owner_profile_photo;?>" >
                                                </div>
                                        </div>

                                        
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="cnf_mobile_number">Vehicles Owner NID Front Side Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                                                  <img src="<?php echo base_url().$edit_vehicles_data->vehicles_owner_nid_front_side_photo;?>" alt="" width="50" height="50">
                                                  <input type="file" class="form-control form-control-sm" name="vehicles_owner_nid_front_side_photo" id="vehicles_owner_nid_front_side_photo" >
                                                  <input type="hidden" name="hidden_vehicles_owner_nid_front_side_photo" value="<?php echo $edit_vehicles_data->vehicles_owner_nid_front_side_photo;?>" >
                                                </div>
                                        </div>

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="cnf_mobile_number">Vehicles Owner NID Back Side Photo <span style="color:black;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                                                  <img src="<?php echo base_url().$edit_vehicles_data->vehicles_owner_nid_back_side_photo;?>" alt="" width="50" height="50">
                                                  <input type="file" class="form-control form-control-sm" name="vehicles_owner_nid_back_side_photo" id="vehicles_owner_nid_back_side_photo" >
                                                  <input type="hidden" name="hidden_vehicles_owner_nid_back_side_photo" value="<?php echo $edit_vehicles_data->vehicles_owner_nid_back_side_photo;?>" >
                                                </div>
                                        </div>



                                        
                                        
                                    </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="btn btn-primary next-step">Continue To Next Step</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <h4 class="text-center">Vehicles Info</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cnf_name">Vehicles No <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_no" value="<?php echo $edit_vehicles_data->vehicles_no;?>"  onblur="hasvalue()"  required id="vehicles_no" placeholder="Enter Vehicles No, DHAKA METRO-BA-11-0418 Or ঢাকা মেট্রো-গ-০৪১৮...">
                                              </div>
                                        </div>
                                    
                                    <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="cnf_name">Vehicles Engine No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_engine_no" value="<?php echo $edit_vehicles_data->vehicles_engine_no;?>" required id="vehicles_engine_no" placeholder="Enter Vehicles Engine No....">
                                              </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cnf_name">Vehicles Chassis No<span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_chassis_no" value="<?php echo $edit_vehicles_data->vehicles_chassis_no;?>" required id="vehicles_chassis_no" placeholder="Enter Vehicles chassis no....">
                                              </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cnf_name">Vehicles Fitness Paper No<span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_fitness_paper_no" value="<?php echo $edit_vehicles_data->vehicles_fitness_paper_no;?>" required id="vehicles_fitness_paper_no" placeholder="Enter Vehicles Fitness Paper No....">
                                              </div>
                                    </div>
                                    
                                   
                            
                                    <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="cnf_name">Vehicles Tax Token No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_tax_token_no" value="<?php echo $edit_vehicles_data->vehicles_tax_token_no;?>" required id="vehicles_tax_token_no" placeholder="Enter Vehicles tax token no...">
                                              </div>
                                    </div>

                                    <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="cnf_name">Vehicles License No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_license_no" value="<?php echo $edit_vehicles_data->vehicles_license_no;?>" required id="vehicles_license_no" placeholder="Vehicles License No...">
                                              </div>
                                    </div>
                                    <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="cnf_name">Vehicles GPS Tracking Mobile Number: <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_gps_mobile_number" value="<?php echo $edit_vehicles_data->vehicles_gps_mobile_number;?>" onblur="hasvalue()" required id="vehicles_gps_mobile_number" placeholder="Vehicles GPS Tracking Mobile Number...">
                                              </div>
                                    </div>
                                    <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="cnf_name">Vehicles GPS Tracking ID: <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_gps_tracking_id" value="<?php echo $edit_vehicles_data->vehicles_gps_tracking_id;?>" required id="vehicles_gps_tracking_id" placeholder="Vehicles GPS Tracking ID...">
                                              </div>
                                    </div>
                                    <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="cnf_name">Vehicles Brta Paper No <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_brta_paper_no" value="<?php echo $edit_vehicles_data->vehicles_brta_paper_no;?>" required id="vehicles_brta_paper_no" placeholder="Vehicles Brta Paper No...">
                                              </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cnf_name">Vehicles Fitness Paper End Date<span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm"   id="fitness_datepicker"  name="vehicles_fitness_paper_end_date" value="<?php echo $edit_vehicles_data->vehicles_fitness_paper_end_date;?>"  placeholder="Vehicles fitness Paper End Date....">
                                              </div>
                                    </div>

                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cnf_name">Vehicles Tax Token End Date<span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_tax_token_end_date" value="<?php echo $edit_vehicles_data->vehicles_tax_token_end_date;?>" id="tax_token_datepicker" >
                                              </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="cnf_name">Vehicles Brta Paper End Date <span style="color:black;font-weight:bold;font-size:17px;">*</span></label>
                                                <input type="text" class="form-control form-control-sm" name="vehicles_brta_paper_end_date" value="<?php echo $edit_vehicles_data->vehicles_brta_paper_end_date;?>"  id="brta_paper_datepicker">
                                              </div>
                                    </div>



                                   </div>
                                    
                                    
                                    <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary prev-step">Back</button></li>
                                        <li><button type="button" id="submit_btn" class="btn btn-success next-step">Update Vehicles Owner & Vehicles info</button></li>
                                    </ul>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>












                </div>
                


                </div>
                <!-- /.card-body -->
              </div>
            </div>
            <!-- /.card -->



        <!-- /.row -->
      </div><!-- /.container-fluid -->

    <!-- /.content -->

  </section>
  </div>
  <script>
  function hasvalue(){
        var  vehicles_owner_name = $('#vehicles_owner_name').val();
        var  vehicles_owner_primary_mobile_number = $('#vehicles_owner_primary_mobile_number').val();
        var  vehicles_no = $('#vehicles_no').val();
        var  vehicles_gps_mobile_number = $('#vehicles_gps_mobile_number').val();
        if(vehicles_owner_name!=''){
            $("#vehicles_owner_name").css({"border":"1px solid green"});
        }
        if(vehicles_owner_primary_mobile_number!=''){
            $("#vehicles_owner_primary_mobile_number").css({"border":"1px solid green"});
        }
        if(vehicles_no!=''){
            $("#vehicles_no").css({"border":"1px solid green"});
        }
        if(vehicles_gps_mobile_number!=''){
            $("#vehicles_gps_mobile_number").css({"border":"1px solid green"});
        }


  

    }
$(document).ready(function(){

    $("#submit_btn").click(function(){  

        var  vehicles_no = $('#vehicles_no').val();
        var  vehicles_gps_mobile_number = $('#vehicles_gps_mobile_number').val();
        if(vehicles_no==''){
            $("#vehicles_no").css({"border":"2px solid red"});
            $("#vehicles_no").focus();
        }

        if(vehicles_gps_mobile_number==''){
            $("#vehicles_gps_mobile_number").css({"border":"2px solid red"});
            $("#vehicles_gps_mobile_number").focus();
        }else{

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);
        $("#my_from").submit(); // Submit the form
        }


    });


  

});

</script>
<script>
  // ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {
        var  vehicles_owner_name = $('#vehicles_owner_name').val();
        var  vehicles_owner_primary_mobile_number = $('#vehicles_owner_primary_mobile_number').val();
        if(vehicles_owner_name==''){
            $("#vehicles_owner_name").css({"border":"2px solid red"});
            $("#vehicles_owner_name").focus();
        }
        if(vehicles_owner_primary_mobile_number==''){
            $("#vehicles_owner_primary_mobile_number").css({"border":"2px solid red"});
            $("#vehicles_owner_primary_mobile_number").focus();
        }
        
        else{
        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);
        }

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});



</script>

  

  <script>
 
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script src="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_jquery_1.7.1.js"></script>
<script type="text/javascript">
    $('#fitness_datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#fitness_datepicker').datepicker("setDate", "<?php echo $edit_vehicles_data->vehicles_fitness_paper_end_date;?>");


    $('#brta_paper_datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#brta_paper_datepicker').datepicker("setDate", "<?php echo $edit_vehicles_data->vehicles_brta_paper_end_date;?>");




    $('#tax_token_datepicker').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#tax_token_datepicker').datepicker("setDate", "<?php echo $edit_vehicles_data->vehicles_tax_token_end_date;?>");
   
</script>



