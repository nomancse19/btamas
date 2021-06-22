<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
<style>
@page {
  size: landscape;
}
@media print {
    #main_print{ page-break-after: always; }
}
	
   *{
    padding: 0;
    margin: 0;
}
#main_print {
    font-family: 'Kalpurush', Arial, sans-serif !important;
    margin-left: 25px;
}
@import url('https://fonts.maateen.me/kalpurush/font.css');

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
    margin-top: -27px;
   
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>View Chalan Info Data</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Client/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest">Add & Manage Request</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/CnfChalanInfo">All Chalan Info</a></li>
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
                <h3 class="card-title">Details View Of Selected Chalan..</h3>
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




              <!-- space for header -->
      <!-- end head section -->
      <div>
      
      <a style="margin:10px;float:right;height:40px;" class="btn btn-success" href="javascript:void(0);" onclick="savepdf()">Save Chalan Info As PDF</a>
       <a href="<?php echo base_url();?>Client/CnfChalanInfo"><button class="btn btn-warning" style="margin:10px;float:right;height:40px;">Back All Chalan Info</button></a>
  
      </div>
      <!-- start form  -->




                  	<!-- form start data page in replace table -->
    <div class="container-flude adjus-width" id="main_print">
      <!-- start headsection -->
	  
      <div class="headsection row d-flex flex-row">
        
		<div class=" col-md-2 p-2 d-flex align-items-center">
        </div>
        <div class="col-md-8 flex-grow-1 headcenter text-center">
          <span style="font-size:32px;"> মেসার্স চলো ট্রান্সপৌর্ট এজেন্সী</span><br>
          <span class="">পরিবহন কমিশন এজেন্ট দুর্গাপুর রোড, বেনাপোল, যশোর। </span><br>মোবাইলঃ০১৯৫৮০৫২৯৯৯ </span><span style="font-size: 16px;"> Hot line :01888052999 
          www.cholotransport.com.bd</span>
        </div>
        <div class="col-md-2 agent p-2 d-flex flex-column align-items-center">
          <h3 class="bg p-2 text-white text-center ">ট্রাক চালান</h3>
          <p>আপনার সেবাই সবসময়</p>
          
        </div>
		
		
      </div>
	  
	  
      <!-- space for header -->
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
                <label for="be-no">বি/ই নং  সিঃ </label>
              </div>
              <div class="col-md-8">
                <p class="form-control be_no" style="padding-top:4px;" id="be_no"><?php echo $chalan_data->chalan_be_no_c;?></p>
              </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="lc-no">এল/সি নংঃ</label>
              </div>
              <div class="col-md-9">
                <p class="form-control lc_no" style="padding-top:4px;"  id="lc_no"><?php echo $chalan_data->chalan_lc_no;?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="chalan">চালান নংঃ</label>
              </div>
              <div class="col-md-9">
                <p class="form-control chalan_no" style="padding-top:4px;" id="chalan_no" ><?php echo $chalan_data->chalan_no;?></p>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group adjustrow row">
        	<div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">তারিখঃ</label>
	              </div>
	              <div class="col-md-9">
	                <p class="form-control be_no_date" style="padding-top:4px;" id="be_no_date"><?php echo $chalan_data->chalan_be_no_c_date;?></p>
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">তারিখঃ</label>
	              </div>
	              <div class="col-md-9">
	                <p class="form-control lc_no_date" id="lc_no_date" style="padding-top:4px;"><?php echo $chalan_data->chalan_lc_no_date;?></p>
	              </div>
	            </div>
            </div>
            <div class="col-md-4">
	        	<div class="row inputrows">
	              <div class="col-md-3">
	                <label for="be-no">তারিখঃ</label>
	              </div>
	              <div class="col-md-9">
	                <p class="form-control chalan_date" id="chalan_date" style="padding-top:4px;"><?php echo $chalan_data->chalan_created_date;?></p>
	              </div>
	            </div>
            </div>
        </div>

        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="to-ms">প্রাপক মেসার্সঃ</label>
              </div>
              <div class="col-md-10">
                <p class="form-control importer_exporter" style="padding-top:4px;" id="importer_exporter"><?php echo $chalan_data->chalan_importer_name.$chalan_data->chalan_exporter_name;?></p>
              </div>
            </div>
        </div>
		
		
        <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
                <label for="ac-no">এ/সিঃ</label><!-- এ/সি -->
              </div>
              <div class="col-md-10">
                <p class="form-control ac_no" id="ac_no" style="padding-top:4px;"><?php echo $chalan_data->chalan_ac_no;?></p>
              </div>
            </div>
          </div> 
      

        <?php if($chalan_data->chalan_extra_ac_no!='') {?>  
	       <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-2">
               
              </div>
              <div class="col-md-10">
                <p class="form-control ac_no" id="ac_no"  style="padding-top:4px;"><?php echo $chalan_data->chalan_extra_ac_no;?></p>
              </div>
            </div>
          </div>
        <?php } ?>
          
		  
            <div class="form-group adjustrow row">
            <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-3">
                  <label for="truk-no">ট্রাক নংঃ</label>
                </div>
                <div class="col-md-9">
                  <p class="form-control truck_no" id="truck_no" style="padding-top:4px;"><?php echo $chalan_data->chalan_vehicles_no;?></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="driver-name">ড্রাইভারের নামঃ</label>
                </div>
                <div class="col-md-8">
                  <p name="name" class="form-control driver_name" style="padding-top:4px;" id="driver_name"><?php echo $chalan_data->chalan_driver_name;?></p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <!-- change start -->
              <div class="row inputrows">
                <div class="col-md-4">
                  <label for="license-no">লাইসেন্স নংঃ</label>
                </div>
                <div class="col-md-8">
                  <p class="form-control license_no" id="license_no" style="padding-top:4px;"><?php echo $chalan_data->chalan_driver_license_no;?></p>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group adjustrow">
            <div class="row inputrows">
              <div class="col-md-3">
                <label for="name-t-o" >ট্রাক মালিকের নাম ও ঠিকানাঃ</label>
              </div>
              <div class="col-md-9">
                <p class="form-control vehicles_owner_address" style="padding-top:4px;" id="vehicles_owner_address"><?php echo $chalan_data->chalan_vehicles_owner_address;?></p>
              </div>
            </div>
          </div>
          <div class="form-group adjustrow">
          	<div class="row inputrows">
	            <div class="col-md-3">
	                <label for="cf-agent">সি এন্ড এফ এজেন্টের নাম:</label>
	            </div>
	            <div class="col-md-9">
	                <p class="form-control cnf_name" id="cnf_name" style="padding-top:4px;"><?php echo $chalan_data->chalan_cnf_name;?></p>
	            </div>
            </div> 
          </div>

          <div class="form-group adjustrow row">
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-4">
                  <label for="scot-name">স্কটের নামঃ</label>
                </div>
                <div class="col-md-8">
                  <p class="form-control scot_name" style="padding-top:4px;" id="scot_name"><?php echo $chalan_data->chalan_scoter_name;?></p>
                </div>
              </div>
              </div>
              <div class="col-md-4">
                <div class="row inputrows">
                <div class="col-md-5">
                  <label for="scot-m-n">স্কটের মোবাইল নংঃ</label>
                </div>
                <div class="col-md-7">
                  <p style="padding-top:4px;" class="form-control scot_mobile_number"  id="scot_mobile_number"><?php echo $chalan_data->chalan_scoter_number;?></p>
                </div>
              </div>
              </div>
              <div class="col-md-4">
              <div class="row inputrows">
                <div class="col-md-5">
                  <label for="driver-card-no">ড্রাইভারের কার্ড নংঃ</label>
                </div>
                <div class="col-md-7">
                  <p class="form-control driver_card_no" style="padding-top:4px;" id="driver_card_no"><?php echo $chalan_data->chalan_driver_card_no;?></p>
                </div>
              </div>
              </div>
            </div>

                <div class="form-group adjustrow row">
                <div class="col-md-6">
                  <div class="row inputrows">
                  <div class="col-md-4">
                    <label for="f-place">বেনাপোল হইতেঃ</label>
                  </div>
                  <div class="col-md-8">
                    <p class="form-control from_location" style="padding-top:4px;" id="from_location"><?php echo $chalan_data->chalan_target_location;?></p>
                  </div>
                </div>
                </div>
                <div class="col-md-6">
                  <div class="row inputrows">
                <div class="col-md-4">
                  <label for="silgala-no">সিলগালা নংঃ</label>
                </div>
                <div class="col-md-8">
                  <p class="form-control silgala_no" style="padding-top:4px;" id="silgala_no"><?php echo $chalan_data->chalan_silgala_no;?></p>
                </div>
              </div>
                </div>
              </div>
             </div>
  <!-- table start -->
          <div class="tablesection">
                  <div class="form-group row pt-1">
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-sign">মালের চিহ্ন</label>
                    <span class="form-control bigrow" style="border:1px solid black !important;" id="sign-product"><?php echo $chalan_data->chalan_product_sign;?></span>
                  </div>
                  <div class="col-md-2 coladdjusment">
                    <label class="label-design" for="product-quantity">মালের পরিমান</label>
                    <span class="form-control bigrow" id="product-quantity" style="border:1px solid black;"><?php echo $chalan_data->chalan_product_quantity;?></span>
                  </div>
                  <div class="col-md-3 coladdjusment">
                    <label class="label-design" for="product-description">মালের বিবরন</label>
                    <!--<textarea class="form-control smallrow" ><?php //echo ($chalan_data->chalan_product_description);?></textarea>-->
                    <span class="form-control smallrow" style="border:1px solid black;"><?php echo ($chalan_data->chalan_product_description);?></span>
                    <label class="invoice" for="product-description">বি/ই ইনভয়েজ মোতাবেকঃ</label>
                  </div>
                  <div class="col-md-5" style="padding-right: 12px!important;"  >
                    <div class="row">
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="truk-fair">ট্রাক ভাড়া</label>
					   <span style="border:1px solid black;height:133px;padding:30%;";  class="form-control"><?php echo $chalan_data->chalan_vehicles_chalan_rent;?></span>
                     <!--   <textarea class="form-control smallrow" id="truk-fair" rows="4"></textarea>-->
						
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="pre-fair">অগ্রিম ভাড়া</label>
						  <span style="border:1px solid black;height:133px;padding:30%;";  class="form-control"><?php echo $chalan_data->chalan_vehicles_rent_advance_amount;?></span>
                      <!--  <textarea class="form-control smallrow" id="pre-fair" rows="4"></textarea>-->
                      </div>
                      <div class="col-md-4 smallcol">
                        <label class="label-design" for="post-fair">বকেয়া ভাড়া</label>
						  <span style="border:1px solid black;height:109px;padding:30%";  class="form-control"><?php echo $chalan_data->chalan_vehicles_rent_due_amount;?></span>
                       <!-- <textarea class="form-control exsmallrow" id="post-fair" rows="3"></textarea>-->
                        <div class="row inputrows total">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">মোটঃ</label>
                      </div>
                      <div class="col-md-8">
                        <span class="form-control" id="total"><?php echo $chalan_data->chalan_vehicles_chalan_rent;?></span>
                      </div>
                    </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 table-p driverpabe">
                        <div class="row inputrows rowintotable">
                      <div class="col-md-4">
                        <label class="table-p" for="post-fair">ড্রাইভার কে মাত্র</label>
                      </div>
                      <div class="col-md-4">
                        <span class="driveduebalance"><?php echo $chalan_data->chalan_vehicles_driver_rec_due_amount;?></span>
                      </div>
                      <div class="col-md-4 text-right pr-1">
                        <label class="table-p" for="post-fair-end"> <span> টাকা দিয়ে দিবেন</span></label>
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
                      <p class="mx-auto">সমস্ত মালামাল ভাল অবস্থায় বুঝিয়ে পাইলাম</p>
                      <label for="driver-sign" class="sign">ড্রাইভারের স্বাক্ষর</label>
                    </div>
                    
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">সমস্ত মালামাল ভাল অবস্থায় বুঝিয়ে পাইলাম আমদানিকারকের পক্ষে</p>
                      <label for="reciver-sign" class="sign extra_sign">গ্রহনকারীর স্বাক্ষর</label>
                    </div>
                    <div class="text-center col-md-4 d-flex align-items-start flex-column">
                      <p class="mx-auto">পক্ষেঃ মোসার্স চলো ট্রান্সপৌর্ট এজেন্সী </p>
                      <label for="reciver-sign" class="sign">স্বাক্ষর</label>
                    </div>
                  </div>
      </form>
      <!-- end form -->
    </div>










                </div>
             </div>
                <!-- /.card-body -->
         </div>
      </div>
            <!-- /.card -->





    
    </section>
    <!-- /.content -->
</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script>
    function savepdf(){
      var element = document.getElementById("main_print");
      var opt = {
        margin:       0,
        filename:     'Chalan_Details_info.pdf',
      //  image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter',addFont:'Kalpurush',setFont:'Kalpurush', orientation: 'landscape' }
      };

      // New Promise-based usage:
      html2pdf().set(opt).from(element).save();
      }


$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
