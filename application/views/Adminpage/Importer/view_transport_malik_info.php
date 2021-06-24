<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/logo/ct_logo.ico" />
  <title>Transport Malik Somity| Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_css_1.7.1.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/noman_animate/noman_animate.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../../code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/jqvmap/jqvmap.min.css">
 <!-- Tempusdominus Bbootstrap 4 -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- jQuery -->
<script src="<?php echo base_url();?>assets/backend/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/backend/noman_toastr/noman_toastr.js"></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/noman_toastr/noman_toastr.css">


    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

  
  
 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/dist/css/adminlte.min.css">


  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/summernote/summernote-bs4.css">

<!-- DataTable -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/custom_dataTables/dataTables.bootstrap.css">






  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
  body{
    padding-top: 5px;
    padding-bottom: 50px;
    background-color: #F7F7F7;
}

.tx-r{
    color:red;
}
.f-24{
    font-size: 24px;
	font-weight: bold;
}
.f-16{
    font-size: 16px;
}
.f-28{
    font-size: 30px;
	font-weight: bold;
}
img{
    margin-top:20px;
    margin-bottom:20px;
}


span#inputGroup-sizing {
    background-color: #cd5c5c00;
    border: 0px;
    font-size: 14px;
}

.input_area {
    padding: 15px 0px 0;
    border-radius: 15px;
}
.input-area-purpal {
    background-color: #FEF3F9;
    border: 1px solid #6D4291;
}

.form-control {
    display: block;
    width: 100%;
    height: calc(1.5em + .75rem + -10px);
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-clip: padding-box;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-
}
input.form-control {
    border: 0px;
    background-color: #ff000000;
}
.form-control:focus{
    background-color: #fff0;
    box-shadow: 0 0 0 0.2rem rgb(0 123 255 / 0%);
}

.border-big {
    width: 70%;
    text-align: center;
    height: 10px;
    margin: 50px auto 0;
    border-radius: 10px 10px 0 0;
}
.border-purple{
    background-color: #6D4291;
}

.input-area-green {
    background-color: #E7F4FA;
    border: 1px solid #1AB4B1;
}
.border-green{
    background-color: #1AB4B1;
}
.input-area-yollow{
    background-color: #FFF9E9;
    border:1px solid #F3CA6A;
}
.border-yollow{
    background-color: #F3CA6A;
}
/* responsive area  */
@media(max-width:425px){

    .f-24{
        font-size: 14px;
    }
    .f-16{
        font-size: 14px;
    }
    .f-28{
        font-size: 18px;
    }
    .input_area{
        padding-left:5px;
        padding-right: 5px;
        padding-top: 5px;
    }
    span#inputGroup-sizing {
        font-size: 11px;
    }
    
    .border-big {
        margin-top: 5px;
    }
    .input-group-text {
        font-size: 8px;
    }
    
}
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <section class="profile_main_area w-720">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="profile_area text-center">
              <h2 class="agency-title tx-r f-28">বেনাপোল ট্রান্সপোর্ট এজেন্সী মালিক সমিতি</h2>
              <h3 class="agency_place f-24" style="line-height:90%">বেনাপোল স্থল বন্দর,বেনাপোল,যশোর</h3>
              <p class="text-center reg_number f-16" style="line-height:90%">রেজি নং: খুলনা-1267</p>
       
             <?php if($edit_importer_data->importer_is_active==1){ ?>
              <img src="<?php echo base_url();?><?php echo $edit_importer_data->importer_profile_photo;?>" alt="profile-image" height="200" width="200" class="rounded-circle">
              <h2 class="person-title f-28"><i class="fa fa-check-circle" style="color:#45C1EE;font-size:28px;" aria-hidden="true"></i><?php echo $edit_importer_data->transport_owner_full_name_bn; ?> </h2>
              <p style="color:blue;font-weight:bold;"><?php echo $edit_importer_data->transport_owner_designation;?> </p>
			  <h3 class="person_agency tx-r f-24" style="line-height:0%"><?php echo $edit_importer_data->transport_name_bn;?> </h3>
				

              <div class="row input_area input-area-purpal my-5" style="margin-bottom: 1rem !important;margin-top: 1rem !important;">
                <div class="col-md-12 col-sm-12 col-12 px-0">
					
				  <div class="input-group">
					 <div class="col-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing">জন্ম তারিখ:</span>
                    </div>
					</div>
              <div class="col-9">
                        <input type="text" class="form-control" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>">
              </div>
                  </div>
				  
                  
				  <div class="input-group">
					 <div class="col-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing">মোবাইল নং:</span>
                    </div>
					</div>
					 <div class="col-9">
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">
					</div>
                  </div>
				  
				 
                  <div class="input-group">
				  <div class="col-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing">বর্তমান ঠিকানা:</span>
                    </div>
					</div>
					 <div class="col-9">
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">
					</div>
                  </div>
				
				  
                  <div class="input-group">
				    <div class="col-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing">স্থায়ী ঠিকানা:</span>
                    </div>
					</div>
					 <div class="col-9">
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">
					</div>
					
                  </div>
				  
                </div>
                
                  <div class="input-group">
				    <div class="col-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing">জাতীয় পরিচয় পত্র নং:</span>
                    </div>
                    </div>
					
					 <div class="col-8">
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">
					</div>
					
                  </div>
                  <div class="input-group">
				  
				   <div class="col-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing">অন্য মোবাইল নং:</span>
                    </div>
                    </div>
					
					 <div class="col-8">
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">

					</div>
                  </div>
                <div class="border-big border-purple"></div>
              </div>


              <!-- second input area  -->
              <div class="row input_area input-area-green my-5" style="margin-bottom: 1rem !important;margin-top: 1rem !important;">
                <div class="col-md-12 col-sm-12 col-12">
                  <div class="input-group">
				     <div class="col-6">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing">wife/Husband/সন্তান-এর নাম:</span>
                    </div>
                    </div>
					
					 <div class="col-6">
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">
					</div>
					
					
                  </div>
                  <div class="input-group">
				  
				   <div class="col-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing">মোবাইল নং:</span>
                    </div>
                    </div>
					
					 <div class="col-9">
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">
					</div>
					
                  </div>
                </div>
                <div class="border-big border-green"></div>
              </div>
              <!-- third area  -->
              <div class="row input_area input-area-yollow">
                <div class="col-md-6 col-sm-6 col-6">
                  <div class="input-group">
				  
				  
                    <div class="input-group-prepend">
                      <span class="input-group-text"  id="inputGroup-sizing">সদস্য নং:</span>
                    </div>
					
					
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">
					
					
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-6">
                  <div class="input-group">
				  
				  
                    <div class="input-group-prepend">
                      <span class="input-group-text"  id="inputGroup-sizing">কাড নং:</span>
                    </div>
					
					
                    <input type="text" value="<?php echo $edit_importer_data->transport_owner_birth_date; ?>" class="form-control">
					
					
                  </div>
                </div>
                <div class="border-big border-yollow"></div>
              </div>
              <?php } else{?>
                <h5 style="text-align:center;color:red;width:100%;font-weight:bold;margin:50px auto;">Member ID Is Deactive. Please Cantact Technical Support..</h5>

              <?php } ?>
              <!-- third area end -->
            </div>
          </div>
        </div>
      </div>
    </section>

    </body>
<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
</html>
