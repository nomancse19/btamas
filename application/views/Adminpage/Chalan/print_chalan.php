<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
  <title>Cholo Transport---Chalan Details Copy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/plugins/fontawesome-free/css/all.min.css">
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


  
  
 
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/dist/css/adminlte.min.css">


 



  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">




<style>
@media print {
    #main_print{ page-break-after: always; }
}
	
   *{
    padding: 0;
    margin: 0;
}
.headsection div img{
	width: 150px!important;
        margin-left: 30%;
        margin-right: 30%

}
.border-dark{
    border: 2px solid black!important;
    padding: 10px;
    padding-bottom: 3px;
}

.bg{
    background-color: red;
    font-size: 18px;
    padding: 7px 30px!important;
}

.driveduebalance{
    padding: 0;
    height: 15px;
	border: 0px;
    /*border-bottom:1px solid;*/
    border-radius: 0;
	font-size:12px;
}

.adjustrow{
    border-bottom: 1px solid;
    height: 26px;
    margin-bottom: 0px!important;
}
.form-control {
    border: 0px;
    /*border-bottom:1px solid;*/
    border-radius: 0;
    height: 20px;
	font-size:12px;
}
label{
    font-weight: 600!important;
    font-size: 12px;
}

.inputrows>.col-md-4 {
    padding-right: 0;
}
.inputrows>.col-md-5 {
    padding-right: 0;
}
.inputrows>.col-md-2 {
    padding-right: 0;
}
.invoice {
    font-size: 10px;
    border: 1px solid;
    height: 25px;
    width: 100%;
    text-align: center;
    padding-top: 4px;
    margin-top: 2px;
}
.bigrow{
    height: 160px!important;

}
.smallrow{
    height: 133px!important;
}
.exsmallrow{
    height: 109px!important;
}
.agent {
    margin-top: auto;
}

.label-design{
    display: inline-block;
	border: 1px solid black;
    width: 100%;
    text-align: center;/*
    font-weight: 600!important;*/
    margin-bottom: 2px;
    padding-top: 4px;
    padding-bottom: 3px; 

}
textarea{
    border: 1px solid black!important;
}
textarea.form-control {
	padding-top:5px;
    padding-left: 10px;
    padding-right: 10px;
}
.table-p {
    font-size: 10px;
}

.sign {
    border-top: solid 1px;
    width: 165px;
    margin-top: 50px;
    margin-left: auto;
    margin-right: auto;
    font-size: 12px;
    font-weight: 600;
    text-align: center;
    display: inline-block;
    width: 70%;
	font-weight:100;
    
}
p{
	font-size: 14px;
    font-weight: 400;
}
.inputrows {
    height: 26px;
}
.rowintotable{
    /* border: 1px solid black;
    margin-left: 0px;
    margin-right: 0;
    height: 44px;
    padding-top: 11px; */
    margin-left: 0px;
    margin-right: 0;
    font-size: 10px;
    border: 1px solid;
    height: 25px;
    width: 100%;
    text-align: center;
    padding-top: 4px;
    overflow: hidden;
}
#driverwillhave{
    padding-top: 20px;
}
.total{
    border: 1px solid black;
    margin-left: 0px;
    margin-right: 0;
    border-top: 0;
    height: 24px;
}
.privacy div p {
    font-size: 11px;
    font-weight: 600;
}
/*all changes for print copy*/
/*label{display: none!important;}
.form-group {
    margin-bottom: 0;
}*/
.newdisplay{
    display: none!important;
}
.form-group{
    margin-bottom: 0;
}
.be_no{
	margin-left:-23px;
}

.lc_no{
	margin-left:-12px;
}

.chalan_no{
	margin-left:-12px;
}

.be_no_date{
	margin-left:-23px;
}

.lc_no_date{
	margin-left:-23px;
}

.chalan_date{
	margin-left:-23px;
}
.importer_exporter{
	margin-left:-55px;
}

.scot_name{
	margin-left:-28px;
}

.scot_mobile_number{
	margin-left:-12px;
}
.driver_name{
	margin-left:-2px;
}
.driver_card_no{
	margin-left:-12px;
}
.license_no{
	margin-left:-19px;
}

.silgala_no{
	margin-left:-72px;
}

.from_location{
	margin-left:-49px;
}
.truck_no{
	margin-left:-23px;
}

.vehicles_owner_address{
	margin-left:-60px;
}
.cnf_name{
	margin-left:-66px;
}

.ac_no {
    width: 850px;
    margin-left: -115px;
}

.extra_sign{
	margin-top:34px;
}

.change_first_row{
	height:26px;
	margin-top:-8px;
}

.adjus-width{
    width: 92%;
    margin-left: 7%;
}

.form-control{
	padding:0;
	height: 25px;
	
}

/* botstrap colo adjustment */

.coladdjusment,.smallcol {
    padding: 2px;
}

.tablesection{
    overflow: hidden;
    width: 100%;
    padding-left: 5px;
    padding-right: 2px;
}
.driverpabe{
    padding: 0 2px;
}

/* barcode */
.barcode{
    height: 35px;
    position: relative;
    overflow: hidden;
    
   
}
.barcode p{
    position: absolute;
    right: 0;
    border: 1px solid #000;
    width: 200px;
    height: 28px;
    text-align: center;
    margin: auto;
}
.barcode img{
    position: absolute;
    right: 0;
	height: 34px;
	width: 156px;
    text-align: center;
    margin: auto;
}

</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->

  <!-- /.navbar -->


	<!-- form start data page in replace table -->
    <div class="container-flude adjus-width" id="main_print">
      <!-- start headsection -->
	  
     <!-- <div class="headsection row d-flex flex-row newdisplay">
        
		<div class=" col-md-2 p-2 d-flex align-items-center"><img src="logo.png">
        </div>
        <div class="col-md-8 flex-grow-1 headcenter text-center">
          <h1>????????????????????? ????????? ??????????????????????????????????????? ?????????????????????</h1>
          <p class="">?????????????????? ??????????????? ?????????????????? ??????????????????????????? ?????????, ?????????????????????, ??????????????? ???????????????????????????????????? ????????? ?????????</p><h6 style="font-size: 16px;">Hot line : 01888 052 999
          www.cholotransport.com.bd</h5>
        </div>
        <div class="col-md-2 agent p-2 d-flex flex-column align-items-center">
          <h3 class="bg p-2 text-white text-center ">??????????????? ???????????????</h3>
          <p>??????????????? ??????????????? ???????????????</p>
          <h3 class="border border-dark p-2 text-dark text-center" style="font-size: 18px;padding: 6px 30px!important">Barcode</h3>
          
        </div>
		
		
      </div>-->
	  
	  
      <!-- space for header -->
      <div style="height: 80px;"></div>
      <!-- end head section -->
      <div class="barcode d-flex" >
        <img class="bar_code" src="<?php echo base_url().$chalan_data->chalan_no_barcode_image_name;?>" alt="">
      </div>
      <!-- start form  -->
      <form>
       <div class="border border-dark">
        <div class="form-group adjustrow row change_first_row">
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-4">
                <label for="be-no">??????/??? ??????  ????????? </label>
              </div>
              <div class="col-md-8">
                <input type="text" readonly class="form-control be_no" id="be_no" value="<?php echo $chalan_data->chalan_be_no_c;?>">
              </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="lc-no">??????/?????? ?????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control lc_no" id="lc_no" readonly value="<?php echo $chalan_data->chalan_lc_no;?>">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="chalan">??????????????? ?????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control chalan_no" id="chalan_no" readonly value="<?php echo $chalan_data->chalan_no;?>">
              </div>
            </div>
          </div>
        </div>

        <div class="form-group adjustrow row">
        	<div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control be_no_date" id="be_no_date" readonly value="<?php echo $chalan_data->chalan_be_no_c_date;?>">
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control lc_no_date" id="lc_no_date" readonly value="<?php echo $chalan_data->chalan_lc_no_date;?>">
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control chalan_date" id="chalan_date" readonly value="<?php echo $chalan_data->chalan_created_date;?>">
	              </div>
	            </div>
            </div>
        </div>

        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="to-ms">?????????????????? ????????????????????????</label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control importer_exporter" id="importer_exporter" readonly value="<?php echo $chalan_data->chalan_importer_name.$chalan_data->chalan_exporter_name;?>">
              </div>
            </div>
        </div>
		
		
        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="ac-no">???/?????????</label><!-- ???/?????? -->
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ac_no" id="ac_no"  value="<?php echo $chalan_data->chalan_ac_no;?>">
              </div>
            </div>
          </div> 
      

        <?php if($chalan_data->chalan_extra_ac_no!='') {?>  
	       <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
               
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ac_no" id="ac_no" readonly  value="<?php echo $chalan_data->chalan_extra_ac_no;?>">
              </div>
            </div>
          </div>
        <?php } ?>
          
		  
            <div class="form-group adjustrow row">
            <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-3">
                  <label for="truk-no">??????????????? ?????????</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control truck_no" id="truck_no" readonly value="<?php echo $chalan_data->chalan_vehicles_no;?>">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="driver-name">?????????????????????????????? ????????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" name="name" class="form-control driver_name" readonly id="driver_name" value="<?php echo $chalan_data->chalan_driver_name;?>" > 
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="license-no">???????????????????????? ?????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control license_no" id="license_no" readonly value="<?php echo $chalan_data->chalan_driver_license_no;?>">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="name-t-o" >??????????????? ????????????????????? ????????? ??? ?????????????????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control vehicles_owner_address" readonly id="vehicles_owner_address" value="<?php echo $chalan_data->chalan_vehicles_owner_address;?>">
              </div>
            </div>
          </div>
          <div class="form-group adjustrow">
          	<div class="row inputrows">
	            <div class="col-md-3">
	                <label for="cf-agent">?????? ???????????? ?????? ???????????????????????? ?????????:</label>
	            </div>
	            <div class="col-md-9">
	                <input type="text" class="form-control cnf_name" id="cnf_name" readonly value="<?php echo $chalan_data->chalan_cnf_name;?>">
	            </div>
            </div> 
          </div>

          <div class="form-group adjustrow row">
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-4">
                  <label for="scot-name">?????????????????? ????????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control scot_name" readonly id="scot_name" value="<?php echo $chalan_data->chalan_scoter_name;?>">
                </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-5">
                  <label for="scot-m-n">?????????????????? ?????????????????? ?????????</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="name" class="form-control scot_mobile_number"  id="scot_mobile_number" readonly value="<?php echo $chalan_data->chalan_scoter_number;?>">
                </div>
              </div>
              </div>
              <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-5">
                  <label for="driver-card-no">?????????????????????????????? ??????????????? ?????????</label>
                </div>
                <div class="col-md-7">
                  <input type="text" class="form-control driver_card_no" id="driver_card_no" readonly value="<?php echo $chalan_data->chalan_driver_card_no;?>">
                </div>
              </div>
              </div>
            </div>

                <div class="form-group adjustrow row">
                <div class="col-md-6">
                  <div class="row inputrows">
                  <div class="col-md-4">
                    <label for="f-place">????????????????????? ???????????????</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control from_location" id="from_location" readonly value="<?php echo $chalan_data->chalan_target_location;?>"> 
                  </div>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="row inputrows">
                <div class="col-md-4">
                  <label for="silgala-no">????????????????????? ?????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control silgala_no" id="silgala_no" readonly value="<?php echo $chalan_data->chalan_silgala_no;?>">
                </div>
              </div>
                </div>
              </div>
             </div>
  <!-- table start -->
          <div class="tablesection">
                  <div class="form-group row pt-1">
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-sign">??????????????? ???????????????</label>
                    <textarea class="form-control bigrow" readonly style="border-left:2px solid black !important;" id="sign-product" rows="6" ><?php echo $chalan_data->chalan_product_sign;?></textarea>
                  </div>
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-quantity">??????????????? ??????????????????</label>
                    <textarea class="form-control bigrow" readonly id="product-quantity" rows="6"><?php echo $chalan_data->chalan_product_quantity;?></textarea>
                  </div>
                  <div class="col-md-3 coladdjusment">
                    <label class="label-design" for="product-description">??????????????? ???????????????</label>
                    <textarea class="form-control smallrow" readonly rows="4" ><?php echo $chalan_data->chalan_product_description;?></textarea>
                    <label class="invoice" for="product-description">??????/??? ?????????????????? ????????????????????????</label>
                  </div>
                  <div class="col-md-5" style="padding-right: 12px!important;"  >
                    <div class="row">
                      <div class="col-md-4 smallcol" style="" >
                        <label class="label-design" for="truk-fair">??????????????? ????????????</label>
					   <input type="text" style="border:1px solid black;height:133px;padding:30%;";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_chalan_rent;?>???" id="chalan_vehicles_chalan_rent" >
                     <!--   <textarea class="form-control smallrow" id="truk-fair" rows="4"></textarea>-->
						
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="pre-fair">?????????????????? ????????????</label>
						  <input type="text" style="border:1px solid black;height:133px;padding:30%;";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_rent_advance_amount;?>???" id="chalan_vehicles_chalan_rent" >
                      <!--  <textarea class="form-control smallrow" id="pre-fair" rows="4"></textarea>-->
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="post-fair">??????????????? ????????????</label>
						  <input type="text" style="border:1px solid black;height:109px;padding:30%";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_rent_due_amount;?>???" id="chalan_vehicles_chalan_rent" >
                       <!-- <textarea class="form-control exsmallrow" id="post-fair" rows="3"></textarea>-->
                        <div class="row inputrows total">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">????????????</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" class="form-control" readonly id="total" value="<?php echo $chalan_data->chalan_vehicles_chalan_rent;?>???" style="border-bottom:1px solid black;">
                      </div>
                    </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 table-p driverpabe">
                        <div class="row inputrows rowintotable">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">???????????????????????? ?????? ???????????????</label>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="driveduebalance" readonly value="<?php echo $chalan_data->chalan_vehicles_driver_rec_due_amount;?>???">
                      </div>
                      <div class="col-md-4 text-right pr-1">
                        <label class="table-p" for="post-fair-end"> <span> ???????????? ???????????? ???????????????</span></label>
                      </div>
                    </div>  
                      </div>
                    </div>
                  </div>
                  
                  
               </div>
                </div>
              <!-- </div> -->
         <!-- table complete -->
                  <div class="form-group row privacy">
                    <div class="col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">??????????????? ????????????????????? ????????? ????????????????????? ?????????????????? ??????????????????</p>
                      <label for="driver-sign" class="sign">?????????????????????????????? ????????????????????????</label>
                    </div>
                    
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">??????????????? ????????????????????? ????????? ????????????????????? ?????????????????? ?????????????????? ???????????????????????????????????? ???????????????</p>
                      <label for="reciver-sign" class="sign extra_sign">?????????????????????????????? ????????????????????????</label>
                    </div>
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">?????????????????? ????????????????????? ????????? ??????????????????????????????????????? ????????????????????? </p>
                      <label for="reciver-sign" class="sign">????????????????????????</label>
                    </div>
                  </div>
      </form>
      <!-- end form -->
    </div>















<!--2nd Page Printing Data Start--->
	<!-- form start data page in replace table -->
  <div class="container-flude adjus-width" id="main_print">
      <!-- start headsection -->
	  
     <!-- <div class="headsection row d-flex flex-row newdisplay">
        
		<div class=" col-md-2 p-2 d-flex align-items-center"><img src="logo.png">
        </div>
        <div class="col-md-8 flex-grow-1 headcenter text-center">
          <h1>????????????????????? ????????? ??????????????????????????????????????? ?????????????????????</h1>
          <p class="">?????????????????? ??????????????? ?????????????????? ??????????????????????????? ?????????, ?????????????????????, ??????????????? ???????????????????????????????????? ????????? ?????????</p><h6 style="font-size: 16px;">Hot line : 01888 052 999
          www.cholotransport.com.bd</h5>
        </div>
        <div class="col-md-2 agent p-2 d-flex flex-column align-items-center">
          <h3 class="bg p-2 text-white text-center ">??????????????? ???????????????</h3>
          <p>??????????????? ??????????????? ???????????????</p>
          <h3 class="border border-dark p-2 text-dark text-center" style="font-size: 18px;padding: 6px 30px!important">Barcode</h3>
          
        </div>
		
		
      </div>-->
	  
	  
      <!-- space for header -->
      <div style="height: 80px;"></div>
      <!-- end head section -->
      <div class="barcode d-flex" >
        <img class="bar_code" src="<?php echo base_url().$chalan_data->chalan_no_barcode_image_name;?>" alt="">
      </div>
      <!-- start form  -->
      <form>
       <div class="border border-dark">
        <div class="form-group adjustrow row change_first_row">
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-4">
                <label for="be-no">??????/??? ??????  ????????? </label>
              </div>
              <div class="col-md-8">
                <input type="text" readonly class="form-control be_no" id="be_no" value="<?php echo $chalan_data->chalan_be_no_c;?>">
              </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="lc-no">??????/?????? ?????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control lc_no" id="lc_no" readonly value="<?php echo $chalan_data->chalan_lc_no;?>">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="chalan">??????????????? ?????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control chalan_no" id="chalan_no" readonly value="<?php echo $chalan_data->chalan_no;?>">
              </div>
            </div>
          </div>
        </div>

        <div class="form-group adjustrow row">
        	<div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control be_no_date" id="be_no_date" readonly value="<?php echo $chalan_data->chalan_be_no_c_date;?>">
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control lc_no_date" id="lc_no_date" readonly value="<?php echo $chalan_data->chalan_lc_no_date;?>">
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control chalan_date" id="chalan_date" readonly value="<?php echo $chalan_data->chalan_created_date;?>">
	              </div>
	            </div>
            </div>
        </div>

        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="to-ms">?????????????????? ????????????????????????</label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control importer_exporter" id="importer_exporter" readonly value="<?php echo $chalan_data->chalan_importer_name.$chalan_data->chalan_exporter_name;?>">
              </div>
            </div>
        </div>
		
		
        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="ac-no">???/?????????</label><!-- ???/?????? -->
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ac_no" id="ac_no"  value="<?php echo $chalan_data->chalan_ac_no;?>">
              </div>
            </div>
          </div> 
      

        <?php if($chalan_data->chalan_extra_ac_no!='') {?>  
	       <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
               
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ac_no" id="ac_no" readonly  value="<?php echo $chalan_data->chalan_extra_ac_no;?>">
              </div>
            </div>
          </div>
        <?php } ?>
          
		  
            <div class="form-group adjustrow row">
            <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-3">
                  <label for="truk-no">??????????????? ?????????</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control truck_no" id="truck_no" readonly value="<?php echo $chalan_data->chalan_vehicles_no;?>">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="driver-name">?????????????????????????????? ????????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" name="name" class="form-control driver_name" readonly id="driver_name" value="<?php echo $chalan_data->chalan_driver_name;?>" > 
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="license-no">???????????????????????? ?????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control license_no" id="license_no" readonly value="<?php echo $chalan_data->chalan_driver_license_no;?>">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="name-t-o" >??????????????? ????????????????????? ????????? ??? ?????????????????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control vehicles_owner_address" readonly id="vehicles_owner_address" value="<?php echo $chalan_data->chalan_vehicles_owner_address;?>">
              </div>
            </div>
          </div>
          <div class="form-group adjustrow">
          	<div class="row inputrows">
	            <div class="col-md-3">
	                <label for="cf-agent">?????? ???????????? ?????? ???????????????????????? ?????????:</label>
	            </div>
	            <div class="col-md-9">
	                <input type="text" class="form-control cnf_name" id="cnf_name" readonly value="<?php echo $chalan_data->chalan_cnf_name;?>">
	            </div>
            </div> 
          </div>

          <div class="form-group adjustrow row">
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-4">
                  <label for="scot-name">?????????????????? ????????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control scot_name" readonly id="scot_name" value="<?php echo $chalan_data->chalan_scoter_name;?>">
                </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-5">
                  <label for="scot-m-n">?????????????????? ?????????????????? ?????????</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="name" class="form-control scot_mobile_number"  id="scot_mobile_number" readonly value="<?php echo $chalan_data->chalan_scoter_number;?>">
                </div>
              </div>
              </div>
              <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-5">
                  <label for="driver-card-no">?????????????????????????????? ??????????????? ?????????</label>
                </div>
                <div class="col-md-7">
                  <input type="text" class="form-control driver_card_no" id="driver_card_no" readonly value="<?php echo $chalan_data->chalan_driver_card_no;?>">
                </div>
              </div>
              </div>
            </div>

                <div class="form-group adjustrow row">
                <div class="col-md-6">
                  <div class="row inputrows">
                  <div class="col-md-4">
                    <label for="f-place">????????????????????? ???????????????</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control from_location" id="from_location" readonly value="<?php echo $chalan_data->chalan_target_location;?>"> 
                  </div>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="row inputrows">
                <div class="col-md-4">
                  <label for="silgala-no">????????????????????? ?????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control silgala_no" id="silgala_no" readonly value="<?php echo $chalan_data->chalan_silgala_no;?>">
                </div>
              </div>
                </div>
              </div>
             </div>
  <!-- table start -->
          <div class="tablesection">
                  <div class="form-group row pt-1">
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-sign">??????????????? ???????????????</label>
                    <textarea class="form-control bigrow" readonly style="border-left:2px solid black !important;" id="sign-product" rows="6" ><?php echo $chalan_data->chalan_product_sign;?></textarea>
                  </div>
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-quantity">??????????????? ??????????????????</label>
                    <textarea class="form-control bigrow" readonly id="product-quantity" rows="6"><?php echo $chalan_data->chalan_product_quantity;?></textarea>
                  </div>
                  <div class="col-md-3 coladdjusment">
                    <label class="label-design" for="product-description">??????????????? ???????????????</label>
                    <textarea class="form-control smallrow" readonly rows="4" ><?php echo $chalan_data->chalan_product_description;?></textarea>
                    <label class="invoice" for="product-description">??????/??? ?????????????????? ????????????????????????</label>
                  </div>
                  <div class="col-md-5" style="padding-right: 12px!important;"  >
                    <div class="row">
                      <div class="col-md-4 smallcol" style="" >
                        <label class="label-design" for="truk-fair">??????????????? ????????????</label>
					   <input type="text" style="border:1px solid black;height:133px;padding:30%;";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_chalan_rent;?>???" id="chalan_vehicles_chalan_rent" >
                     <!--   <textarea class="form-control smallrow" id="truk-fair" rows="4"></textarea>-->
						
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="pre-fair">?????????????????? ????????????</label>
						  <input type="text" style="border:1px solid black;height:133px;padding:30%;";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_rent_advance_amount;?>???" id="chalan_vehicles_chalan_rent" >
                      <!--  <textarea class="form-control smallrow" id="pre-fair" rows="4"></textarea>-->
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="post-fair">??????????????? ????????????</label>
						  <input type="text" style="border:1px solid black;height:109px;padding:30%";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_rent_due_amount;?>???" id="chalan_vehicles_chalan_rent" >
                       <!-- <textarea class="form-control exsmallrow" id="post-fair" rows="3"></textarea>-->
                        <div class="row inputrows total">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">????????????</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" class="form-control" readonly id="total" value="<?php echo $chalan_data->chalan_vehicles_chalan_rent;?>???" style="border-bottom:1px solid black;">
                      </div>
                    </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 table-p driverpabe">
                        <div class="row inputrows rowintotable">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">???????????????????????? ?????? ???????????????</label>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="driveduebalance" readonly value="<?php echo $chalan_data->chalan_vehicles_driver_rec_due_amount;?>???">
                      </div>
                      <div class="col-md-4 text-right pr-1">
                        <label class="table-p" for="post-fair-end"> <span> ???????????? ???????????? ???????????????</span></label>
                      </div>
                    </div>  
                      </div>
                    </div>
                  </div>
                  
                  
               </div>
                </div>
              <!-- </div> -->
         <!-- table complete -->
                  <div class="form-group row privacy">
                    <div class="col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">??????????????? ????????????????????? ????????? ????????????????????? ?????????????????? ??????????????????</p>
                      <label for="driver-sign" class="sign">?????????????????????????????? ????????????????????????</label>
                    </div>
                    
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">??????????????? ????????????????????? ????????? ????????????????????? ?????????????????? ?????????????????? ???????????????????????????????????? ???????????????</p>
                      <label for="reciver-sign" class="sign extra_sign">?????????????????????????????? ????????????????????????</label>
                    </div>
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">?????????????????? ????????????????????? ????????? ??????????????????????????????????????? ????????????????????? </p>
                      <label for="reciver-sign" class="sign">????????????????????????</label>
                    </div>
                  </div>
      </form>
      <!-- end form -->
    </div>
<!-- 2nd Page Printing Data End....--->






<!-- 3rd Page Printing Option Data Start--->
	<!-- form start data page in replace table -->
  <div class="container-flude adjus-width" id="main_print">
      <!-- start headsection -->
	  
     <!-- <div class="headsection row d-flex flex-row newdisplay">
        
		<div class=" col-md-2 p-2 d-flex align-items-center"><img src="logo.png">
        </div>
        <div class="col-md-8 flex-grow-1 headcenter text-center">
          <h1>????????????????????? ????????? ??????????????????????????????????????? ?????????????????????</h1>
          <p class="">?????????????????? ??????????????? ?????????????????? ??????????????????????????? ?????????, ?????????????????????, ??????????????? ???????????????????????????????????? ????????? ?????????</p><h6 style="font-size: 16px;">Hot line : 01888 052 999
          www.cholotransport.com.bd</h5>
        </div>
        <div class="col-md-2 agent p-2 d-flex flex-column align-items-center">
          <h3 class="bg p-2 text-white text-center ">??????????????? ???????????????</h3>
          <p>??????????????? ??????????????? ???????????????</p>
          <h3 class="border border-dark p-2 text-dark text-center" style="font-size: 18px;padding: 6px 30px!important">Barcode</h3>
          
        </div>
		
		
      </div>-->
	  
	  
      <!-- space for header -->
      <div style="height: 80px;"></div>
      <!-- end head section -->
      <div class="barcode d-flex" >
        <img class="bar_code" src="<?php echo base_url().$chalan_data->chalan_no_barcode_image_name;?>" alt="">
      </div>
      <!-- start form  -->
      <form>
       <div class="border border-dark">
        <div class="form-group adjustrow row change_first_row">
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-4">
                <label for="be-no">??????/??? ??????  ????????? </label>
              </div>
              <div class="col-md-8">
                <input type="text" readonly class="form-control be_no" id="be_no" value="<?php echo $chalan_data->chalan_be_no_c;?>">
              </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="lc-no">??????/?????? ?????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control lc_no" id="lc_no" readonly value="<?php echo $chalan_data->chalan_lc_no;?>">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="chalan">??????????????? ?????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control chalan_no" id="chalan_no" readonly value="<?php echo $chalan_data->chalan_no;?>">
              </div>
            </div>
          </div>
        </div>

        <div class="form-group adjustrow row">
        	<div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control be_no_date" id="be_no_date" readonly value="<?php echo $chalan_data->chalan_be_no_c_date;?>">
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control lc_no_date" id="lc_no_date" readonly value="<?php echo $chalan_data->chalan_lc_no_date;?>">
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control chalan_date" id="chalan_date" readonly value="<?php echo $chalan_data->chalan_created_date;?>">
	              </div>
	            </div>
            </div>
        </div>

        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="to-ms">?????????????????? ????????????????????????</label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control importer_exporter" id="importer_exporter" readonly value="<?php echo $chalan_data->chalan_importer_name.$chalan_data->chalan_exporter_name;?>">
              </div>
            </div>
        </div>
		
		
        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="ac-no">???/?????????</label><!-- ???/?????? -->
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ac_no" id="ac_no"  value="<?php echo $chalan_data->chalan_ac_no;?>">
              </div>
            </div>
          </div> 
      

        <?php if($chalan_data->chalan_extra_ac_no!='') {?>  
	       <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
               
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ac_no" id="ac_no" readonly  value="<?php echo $chalan_data->chalan_extra_ac_no;?>">
              </div>
            </div>
          </div>
        <?php } ?>
          
		  
            <div class="form-group adjustrow row">
            <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-3">
                  <label for="truk-no">??????????????? ?????????</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control truck_no" id="truck_no" readonly value="<?php echo $chalan_data->chalan_vehicles_no;?>">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="driver-name">?????????????????????????????? ????????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" name="name" class="form-control driver_name" readonly id="driver_name" value="<?php echo $chalan_data->chalan_driver_name;?>" > 
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="license-no">???????????????????????? ?????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control license_no" id="license_no" readonly value="<?php echo $chalan_data->chalan_driver_license_no;?>">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="name-t-o" >??????????????? ????????????????????? ????????? ??? ?????????????????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control vehicles_owner_address" readonly id="vehicles_owner_address" value="<?php echo $chalan_data->chalan_vehicles_owner_address;?>">
              </div>
            </div>
          </div>
          <div class="form-group adjustrow">
          	<div class="row inputrows">
	            <div class="col-md-3">
	                <label for="cf-agent">?????? ???????????? ?????? ???????????????????????? ?????????:</label>
	            </div>
	            <div class="col-md-9">
	                <input type="text" class="form-control cnf_name" id="cnf_name" readonly value="<?php echo $chalan_data->chalan_cnf_name;?>">
	            </div>
            </div> 
          </div>

          <div class="form-group adjustrow row">
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-4">
                  <label for="scot-name">?????????????????? ????????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control scot_name" readonly id="scot_name" value="<?php echo $chalan_data->chalan_scoter_name;?>">
                </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-5">
                  <label for="scot-m-n">?????????????????? ?????????????????? ?????????</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="name" class="form-control scot_mobile_number"  id="scot_mobile_number" readonly value="<?php echo $chalan_data->chalan_scoter_number;?>">
                </div>
              </div>
              </div>
              <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-5">
                  <label for="driver-card-no">?????????????????????????????? ??????????????? ?????????</label>
                </div>
                <div class="col-md-7">
                  <input type="text" class="form-control driver_card_no" id="driver_card_no" readonly value="<?php echo $chalan_data->chalan_driver_card_no;?>">
                </div>
              </div>
              </div>
            </div>

                <div class="form-group adjustrow row">
                <div class="col-md-6">
                  <div class="row inputrows">
                  <div class="col-md-4">
                    <label for="f-place">????????????????????? ???????????????</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control from_location" id="from_location" readonly value="<?php echo $chalan_data->chalan_target_location;?>"> 
                  </div>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="row inputrows">
                <div class="col-md-4">
                  <label for="silgala-no">????????????????????? ?????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control silgala_no" id="silgala_no" readonly value="<?php echo $chalan_data->chalan_silgala_no;?>">
                </div>
              </div>
                </div>
              </div>
             </div>
  <!-- table start -->
          <div class="tablesection">
                  <div class="form-group row pt-1">
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-sign">??????????????? ???????????????</label>
                    <textarea class="form-control bigrow" readonly style="border-left:2px solid black !important;" id="sign-product" rows="6" ><?php echo $chalan_data->chalan_product_sign;?></textarea>
                  </div>
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-quantity">??????????????? ??????????????????</label>
                    <textarea class="form-control bigrow" readonly id="product-quantity" rows="6"><?php echo $chalan_data->chalan_product_quantity;?></textarea>
                  </div>
                  <div class="col-md-3 coladdjusment">
                    <label class="label-design" for="product-description">??????????????? ???????????????</label>
                    <textarea class="form-control smallrow" readonly rows="4" ><?php echo $chalan_data->chalan_product_description;?></textarea>
                    <label class="invoice" for="product-description">??????/??? ?????????????????? ????????????????????????</label>
                  </div>
                  <div class="col-md-5" style="padding-right: 12px!important;"  >
                    <div class="row">
                      <div class="col-md-4 smallcol" style="" >
                        <label class="label-design" for="truk-fair">??????????????? ????????????</label>
					   <input type="text" style="border:1px solid black;height:133px;padding:30%;";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_chalan_rent;?>???" id="chalan_vehicles_chalan_rent" >
                     <!--   <textarea class="form-control smallrow" id="truk-fair" rows="4"></textarea>-->
						
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="pre-fair">?????????????????? ????????????</label>
						  <input type="text" style="border:1px solid black;height:133px;padding:30%;";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_rent_advance_amount;?>???" id="chalan_vehicles_chalan_rent" >
                      <!--  <textarea class="form-control smallrow" id="pre-fair" rows="4"></textarea>-->
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="post-fair">??????????????? ????????????</label>
						  <input type="text" style="border:1px solid black;height:109px;padding:30%";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_rent_due_amount;?>???" id="chalan_vehicles_chalan_rent" >
                       <!-- <textarea class="form-control exsmallrow" id="post-fair" rows="3"></textarea>-->
                        <div class="row inputrows total">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">????????????</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" class="form-control" readonly id="total" value="<?php echo $chalan_data->chalan_vehicles_chalan_rent;?>???" style="border-bottom:1px solid black;">
                      </div>
                    </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 table-p driverpabe">
                        <div class="row inputrows rowintotable">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">???????????????????????? ?????? ???????????????</label>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="driveduebalance" readonly value="<?php echo $chalan_data->chalan_vehicles_driver_rec_due_amount;?>???">
                      </div>
                      <div class="col-md-4 text-right pr-1">
                        <label class="table-p" for="post-fair-end"> <span> ???????????? ???????????? ???????????????</span></label>
                      </div>
                    </div>  
                      </div>
                    </div>
                  </div>
                  
                  
               </div>
                </div>
              <!-- </div> -->
         <!-- table complete -->
                  <div class="form-group row privacy">
                    <div class="col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">??????????????? ????????????????????? ????????? ????????????????????? ?????????????????? ??????????????????</p>
                      <label for="driver-sign" class="sign">?????????????????????????????? ????????????????????????</label>
                    </div>
                    
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">??????????????? ????????????????????? ????????? ????????????????????? ?????????????????? ?????????????????? ???????????????????????????????????? ???????????????</p>
                      <label for="reciver-sign" class="sign extra_sign">?????????????????????????????? ????????????????????????</label>
                    </div>
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">?????????????????? ????????????????????? ????????? ??????????????????????????????????????? ????????????????????? </p>
                      <label for="reciver-sign" class="sign">????????????????????????</label>
                    </div>
                  </div>
      </form>
      <!-- end form -->
    </div>
<!-- 3rd Page Printing Option End -->



<!-- 4th Page Printing Option Start -->
	<!-- form start data page in replace table -->
  <div class="container-flude adjus-width" id="main_print">
      <!-- start headsection -->
	  
     <!-- <div class="headsection row d-flex flex-row newdisplay">
        
		<div class=" col-md-2 p-2 d-flex align-items-center"><img src="logo.png">
        </div>
        <div class="col-md-8 flex-grow-1 headcenter text-center">
          <h1>????????????????????? ????????? ??????????????????????????????????????? ?????????????????????</h1>
          <p class="">?????????????????? ??????????????? ?????????????????? ??????????????????????????? ?????????, ?????????????????????, ??????????????? ???????????????????????????????????? ????????? ?????????</p><h6 style="font-size: 16px;">Hot line : 01888 052 999
          www.cholotransport.com.bd</h5>
        </div>
        <div class="col-md-2 agent p-2 d-flex flex-column align-items-center">
          <h3 class="bg p-2 text-white text-center ">??????????????? ???????????????</h3>
          <p>??????????????? ??????????????? ???????????????</p>
          <h3 class="border border-dark p-2 text-dark text-center" style="font-size: 18px;padding: 6px 30px!important">Barcode</h3>
          
        </div>
		
		
      </div>-->
	  
	  
      <!-- space for header -->
      <div style="height: 80px;"></div>
      <!-- end head section -->
      <div class="barcode d-flex" >
        <img class="bar_code" src="<?php echo base_url().$chalan_data->chalan_no_barcode_image_name;?>" alt="">
      </div>
      <!-- start form  -->
      <form>
       <div class="border border-dark">
        <div class="form-group adjustrow row change_first_row">
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-4">
                <label for="be-no">??????/??? ??????  ????????? </label>
              </div>
              <div class="col-md-8">
                <input type="text" readonly class="form-control be_no" id="be_no" value="<?php echo $chalan_data->chalan_be_no_c;?>">
              </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="lc-no">??????/?????? ?????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control lc_no" id="lc_no" readonly value="<?php echo $chalan_data->chalan_lc_no;?>">
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="chalan">??????????????? ?????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control chalan_no" id="chalan_no" readonly value="<?php echo $chalan_data->chalan_no;?>">
              </div>
            </div>
          </div>
        </div>

        <div class="form-group adjustrow row">
        	<div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control be_no_date" id="be_no_date" readonly value="<?php echo $chalan_data->chalan_be_no_c_date;?>">
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control lc_no_date" id="lc_no_date" readonly value="<?php echo $chalan_data->chalan_lc_no_date;?>">
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">??????????????????</label>
	              </div>
	              <div class="col-md-9">
	                <input type="text" class="form-control chalan_date" id="chalan_date" readonly value="<?php echo $chalan_data->chalan_created_date;?>">
	              </div>
	            </div>
            </div>
        </div>

        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="to-ms">?????????????????? ????????????????????????</label>
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control importer_exporter" id="importer_exporter" readonly value="<?php echo $chalan_data->chalan_importer_name.$chalan_data->chalan_exporter_name;?>">
              </div>
            </div>
        </div>
		
		
        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="ac-no">???/?????????</label><!-- ???/?????? -->
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ac_no" id="ac_no"  value="<?php echo $chalan_data->chalan_ac_no;?>">
              </div>
            </div>
          </div> 
      

        <?php if($chalan_data->chalan_extra_ac_no!='') {?>  
	       <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
               
              </div>
              <div class="col-md-10">
                <input type="text" class="form-control ac_no" id="ac_no" readonly  value="<?php echo $chalan_data->chalan_extra_ac_no;?>">
              </div>
            </div>
          </div>
        <?php } ?>
          
		  
            <div class="form-group adjustrow row">
            <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-3">
                  <label for="truk-no">??????????????? ?????????</label>
                </div>
                <div class="col-md-9">
                  <input type="text" class="form-control truck_no" id="truck_no" readonly value="<?php echo $chalan_data->chalan_vehicles_no;?>">
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="driver-name">?????????????????????????????? ????????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" name="name" class="form-control driver_name" readonly id="driver_name" value="<?php echo $chalan_data->chalan_driver_name;?>" > 
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="license-no">???????????????????????? ?????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control license_no" id="license_no" readonly value="<?php echo $chalan_data->chalan_driver_license_no;?>">
                </div>
              </div>
            </div>
          </div>

          <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="name-t-o" >??????????????? ????????????????????? ????????? ??? ?????????????????????</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control vehicles_owner_address" readonly id="vehicles_owner_address" value="<?php echo $chalan_data->chalan_vehicles_owner_address;?>">
              </div>
            </div>
          </div>
          <div class="form-group adjustrow">
          	<div class="row inputrows">
	            <div class="col-md-3">
	                <label for="cf-agent">?????? ???????????? ?????? ???????????????????????? ?????????:</label>
	            </div>
	            <div class="col-md-9">
	                <input type="text" class="form-control cnf_name" id="cnf_name" readonly value="<?php echo $chalan_data->chalan_cnf_name;?>">
	            </div>
            </div> 
          </div>

          <div class="form-group adjustrow row">
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-4">
                  <label for="scot-name">?????????????????? ????????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control scot_name" readonly id="scot_name" value="<?php echo $chalan_data->chalan_scoter_name;?>">
                </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-5">
                  <label for="scot-m-n">?????????????????? ?????????????????? ?????????</label>
                </div>
                <div class="col-md-7">
                  <input type="text" name="name" class="form-control scot_mobile_number"  id="scot_mobile_number" readonly value="<?php echo $chalan_data->chalan_scoter_number;?>">
                </div>
              </div>
              </div>
              <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-5">
                  <label for="driver-card-no">?????????????????????????????? ??????????????? ?????????</label>
                </div>
                <div class="col-md-7">
                  <input type="text" class="form-control driver_card_no" id="driver_card_no" readonly value="<?php echo $chalan_data->chalan_driver_card_no;?>">
                </div>
              </div>
              </div>
            </div>

                <div class="form-group adjustrow row">
                <div class="col-md-6">
                  <div class="row inputrows">
                  <div class="col-md-4">
                    <label for="f-place">????????????????????? ???????????????</label>
                  </div>
                  <div class="col-md-8">
                    <input type="text" class="form-control from_location" id="from_location" readonly value="<?php echo $chalan_data->chalan_target_location;?>"> 
                  </div>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="row inputrows">
                <div class="col-md-4">
                  <label for="silgala-no">????????????????????? ?????????</label>
                </div>
                <div class="col-md-8">
                  <input type="text" class="form-control silgala_no" id="silgala_no" readonly value="<?php echo $chalan_data->chalan_silgala_no;?>">
                </div>
              </div>
                </div>
              </div>
             </div>
  <!-- table start -->
          <div class="tablesection">
                  <div class="form-group row pt-1">
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-sign">??????????????? ???????????????</label>
                    <textarea class="form-control bigrow" readonly style="border-left:2px solid black !important;" id="sign-product" rows="6" ><?php echo $chalan_data->chalan_product_sign;?></textarea>
                  </div>
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-quantity">??????????????? ??????????????????</label>
                    <textarea class="form-control bigrow" readonly id="product-quantity" rows="6"><?php echo $chalan_data->chalan_product_quantity;?></textarea>
                  </div>
                  <div class="col-md-3 coladdjusment">
                    <label class="label-design" for="product-description">??????????????? ???????????????</label>
                    <textarea class="form-control smallrow" readonly rows="4" ><?php echo $chalan_data->chalan_product_description;?></textarea>
                    <label class="invoice" for="product-description">??????/??? ?????????????????? ????????????????????????</label>
                  </div>
                  <div class="col-md-5" style="padding-right: 12px!important;"  >
                    <div class="row">
                      <div class="col-md-4 smallcol" style="" >
                        <label class="label-design" for="truk-fair">??????????????? ????????????</label>
					   <input type="text" style="border:1px solid black;height:133px;padding:30%;";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_chalan_rent;?>???" id="chalan_vehicles_chalan_rent" >
                     <!--   <textarea class="form-control smallrow" id="truk-fair" rows="4"></textarea>-->
						
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="pre-fair">?????????????????? ????????????</label>
						  <input type="text" style="border:1px solid black;height:133px;padding:30%;";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_rent_advance_amount;?>???" id="chalan_vehicles_chalan_rent" >
                      <!--  <textarea class="form-control smallrow" id="pre-fair" rows="4"></textarea>-->
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="post-fair">??????????????? ????????????</label>
						  <input type="text" style="border:1px solid black;height:109px;padding:30%";  class="form-control" readonly value="<?php echo $chalan_data->chalan_vehicles_rent_due_amount;?>???" id="chalan_vehicles_chalan_rent" >
                       <!-- <textarea class="form-control exsmallrow" id="post-fair" rows="3"></textarea>-->
                        <div class="row inputrows total">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">????????????</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" class="form-control" readonly id="total" value="<?php echo $chalan_data->chalan_vehicles_chalan_rent;?>???" style="border-bottom:1px solid black;">
                      </div>
                    </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 table-p driverpabe">
                        <div class="row inputrows rowintotable">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">???????????????????????? ?????? ???????????????</label>
                      </div>
                      <div class="col-md-4">
                        <input type="text" class="driveduebalance" readonly value="<?php echo $chalan_data->chalan_vehicles_driver_rec_due_amount;?>???">
                      </div>
                      <div class="col-md-4 text-right pr-1">
                        <label class="table-p" for="post-fair-end"> <span> ???????????? ???????????? ???????????????</span></label>
                      </div>
                    </div>  
                      </div>
                    </div>
                  </div>
                  
                  
               </div>
                </div>
              <!-- </div> -->
         <!-- table complete -->
                  <div class="form-group row privacy">
                    <div class="col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">??????????????? ????????????????????? ????????? ????????????????????? ?????????????????? ??????????????????</p>
                      <label for="driver-sign" class="sign">?????????????????????????????? ????????????????????????</label>
                    </div>
                    
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">??????????????? ????????????????????? ????????? ????????????????????? ?????????????????? ?????????????????? ???????????????????????????????????? ???????????????</p>
                      <label for="reciver-sign" class="sign extra_sign">?????????????????????????????? ????????????????????????</label>
                    </div>
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">?????????????????? ????????????????????? ????????? ??????????????????????????????????????? ????????????????????? </p>
                      <label for="reciver-sign" class="sign">????????????????????????</label>
                    </div>
                  </div>
      </form>
      <!-- end form -->
    </div>
<!-- 4th Page Printing End Here -->











	


<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>




<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/backend/dist/js/adminlte.js"></script>
<script src="<?php echo base_url();?>assets/backend/plugins/moment/moment.min.js"></script>




<script src="<?php echo base_url();?>assets/backend/plugins/jquery/jquery.min.js"></script>


<script type="text/javascript">   
$(document).ready(function () {
  
  window.print();
  window.onmousemove = function() {
  window.close();
  }
});
    
</script>

</body>
<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
</html>
