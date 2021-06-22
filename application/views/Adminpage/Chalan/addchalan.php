<script src="<?php echo base_url();?>assets/backend/dist/js/character-counter.js"></script>
  <style>
*{
    padding: 0;
    margin: 0;
}
.headsection div img{
	width: 150px!important;
        margin-left: 30%;
        margin-right: 30%

}

label:not(.form-check-label):not(.custom-file-label) {
    font-weight: 400;
}
.border-dark{
    border: 1px solid black!important;
    padding: 10px;
    padding-top: 25px;
    margin-top: -14px;
}
.border-dark2{

    padding-top: 0px;
}
.bg{
    background-color: red;
    font-size: 18px;
    padding: 7px 30px!important;
}

.form-group {
    margin-bottom: 0;
}

.form-control {
    border: 0px;
    border-bottom: 1px solid;
    border-radius: 0;
    height: 20px;
    padding: 0;
  
}
/*label{
    font-weight: 400!important;
}*/
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
    height: 45px;
    width: 100%;
    text-align: center;
    padding-top: 12px;
}
.agent {
    margin-top: auto;
}

.label-design{
    display: inline-block;
	border: 1px solid black;
    width: 100%;
    text-align: center;
    padding-top: 5px;
    padding-bottom: 5px;

}
textarea{
    border: 1px solid black!important;
}
.table-p {
    padding-top: 12px;
    padding-bottom:12px;
    font-size: 12px;
}

.sign {
    border-top: solid 2px;
    width: 165px;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    font-size: 14px;
    font-weight: 600;
    text-align: center;
    display: inline-block;
    width: 70%;
    
}
.border {
    border: 0;
    
}


.p-3 {
    padding: 0 !important;
}
.inputrows {
    height: 50px;
}
.rowintotable{
    border: 1px solid black;
    margin-left: 0px;
    margin-right: 0;
    height: 44px;
}
#driverwillhave{
    padding-top: 20px;
}
.total{
    border: 1px solid black;
    margin-left: 0px;
    margin-right: 0;
    border-top: 0;
    height: 48px;
}
  </style>
<script>
$(document).ready(function(){
  $("#show_hide").hide();
  $("#chalan_importer_name").change(function(){
    $("#exporter_class").css("display","none");
    $("#show_hide").show();
    $("#show_hide").click(function(){

      $("#exporter_class").show(1500);

      $("#show_hide").hide();
    }); 

  });

  $("#chalan_exporter_name").change(function(){
    $("#importer_class").css("display","none");
    $("#show_hide").show();
    $("#show_hide").click(function(){

      $("#importer_class").show(1500);

      $("#show_hide").hide();
    }); 
});


});
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add New Chalan & Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/ManageVehicles">Manage Vehicles</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/ManageDriver">Manage Driver</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/ManageChalan">Manage Chalan</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
          <div class="card-header">
                <h3 class="card-title">Add Chalan Info</h3>
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
            <div class="card-body">
              <!-- form start data page in replace table -->
                  <div class="container">
                    <!-- start form  -->
                    <form action="<?php echo base_url();?>Cholotransportowner/SaveChalan" name="my_form" method="post" onsubmit="return validate_all()">
                    <p align="right"><span id='new_bill' class="btn btn-info" style="cursor:pointer;margin-top: -19px;">Add New Chalan</span></p>
                  
              

                    <div class="border border-dark">
                      <div class="form-group row">
                        <div class="col-md-6">
                          <div class="row inputrows">
                            <div class="col-md-2">
                              <label for="be-no">বি/ই নংঃ</label>
                            </div>
                            <div class="col-md-10">
                              <input type="text" class="form-control" maxlength="40" value="<?= set_value('chalan_be_no_c') ?>" name="chalan_be_no_c" id="chalan_be_no_c" >
                            </div>
                        </div>
                        <div class="row inputrows">
                          <div class="col-md-2">
                            <label for="be-no">তারিখঃ</label>
                          </div>
                          <div class="col-md-10">
                            <input type="text" class="form-control"  name="chalan_be_no_c_date" id="chalan_be_no_c_date">
                          </div>
                        </div>
                      </div>
                        <div class="col-md-6">
                          <div class="row inputrows">
                            <div class="col-md-3">
                              <label for="lc-no">এল/সি নংঃ</label>
                            </div>
                            <div class="col-md-9">
                              <input type="text" class="form-control" maxlength="40" value="<?= set_value('chalan_lc_no') ?>"  name="chalan_lc_no" id="chalan_lc_no">
                            </div>
                          </div>
                          <div class="row inputrows">
                            <div class="col-md-2">
                              <label for="be-no">তারিখঃ</label>
                            </div>
                            <div class="col-md-10">
                              <input type="text" class="form-control" name="chalan_lc_no_date" id="chalan_lc_no_date" >
                            </div>
                          </div>
                        </div>


                 
                        
                      <input type="hidden" class="form-control" name="chalan_date" id="chalan_date" >

                              




                      </div>

                      <div class="form-group">
                          <div class="row inputrows">
                            <div class="col-md-2">
                              <label for="to-ms">প্রাপক মেসার্সঃ</label>
                            </div>
                            <div class="col-md-5" id="importer_class">
                              <select class="form-control select2" name="chalan_importer_name"  id="chalan_importer_name">
                                <option value="">Select Importer </option>
                                <?php if($importer_info) {?>
                                  <?php foreach($importer_info as $all_importer_info) {?>
                                <option <?php echo set_select('chalan_importer_name',$all_importer_info->importer_info_id); ?>  value="<?php echo $all_importer_info->importer_info_id; ?>"><?php echo $all_importer_info->importer_full_name; ?></option>
                                  <?php } ?>
                                <?php } else{?>
                                  <option value="">No Available Importer Found</option>
                                <?php } ?>

                              </select>
                            </div>
                            <div class="col-md-4" id="exporter_class">
                              <select class="form-control select2" name="chalan_exporter_name" id="chalan_exporter_name">
                                <option value="">Select Exporter </option>
                                <?php if($exporter_info) {?>
                                  <?php foreach($exporter_info as $all_exporter_info) {?>
                                <option <?php echo set_select('chalan_exporter_name',$all_exporter_info->exporter_info_id); ?>  value="<?php echo $all_exporter_info->exporter_info_id; ?>"><?php echo $all_exporter_info->exporter_full_name; ?></option>
                                  <?php } ?>
                                <?php } else{?>
                                  <option value="">No Available Exporter Found</option>
                                <?php } ?>
                              </select>
                            </div>
                            <div class="col-md-1" id="show_hide">
                            <span style="cursor:pointer;" class="btn btn-success btn-sm">show</span>
                            </div>
                            
                          </div>
                          <div class="row inputrows">
                            <div class="col-md-1">
                              <label for="ac-no">এ/সিঃ</label><!-- এ/সি -->
                            </div>
                            <div class="col-md-11">
                              <input type="text" class="form-control" maxlength="155" value="<?= set_value('chalan_ac_no') ?>" name="chalan_ac_no" id="chalan_ac_no">
                            </div>
                          </div>

                          <div class="row inputrows">
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-11">
                              <input type="text" class="form-control" maxlength="155" value="<?= set_value('chalan_extra_ac_no') ?>" name="chalan_extra_ac_no" id="chalan_extra_ac_no">
                            </div>
                          </div>


                    <div class="form-group row">
                        <div class="col-md-5">
                          <div class="row inputrows">
                            <div class="col-md-3">
                              <label for="truk-no">ট্রাক নংঃ</label>
                            </div>
                            <div class="col-md-9">
                              <select class="form-control select2" name="chalan_vehicles_no" id="chalan_vehicles_no" >
                                <option value="">Select Vehicles No</option>
                                <?php if($vehicles_info) {?>
                                  <?php foreach($vehicles_info as $all_vehicles_info) {?>
                                <option <?php echo set_select('chalan_vehicles_no',$all_vehicles_info->vehicles_info_id); ?> value="<?php echo $all_vehicles_info->vehicles_info_id; ?>"><?php echo $all_vehicles_info->vehicles_no; ?></option>
                                  <?php } ?>
                                <?php } else{?>
                                  <option value="">No Available Vehicles</option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <!-- change start -->
                          <div class="row inputrows">
                            <div class="col-md-5">
                              <label for="driver-name">ড্রাইভারের নামঃ</label>
                            </div>
                            <div class="col-md-7">
                              <input type="text" name="chalan_driver_name" value="<?= set_value('chalan_driver_name'); ?>" class="form-control" id="chalan_driver_name" > 
                            </div>
                          </div>
                        </div>

                        <div class="col-md-3">
                          <!-- change start -->
                          <div class="row inputrows">
                            <div class="col-md-5">
                              <label for="license-no">লাইসেন্স নংঃ</label>
                            </div>
                            <div class="col-md-7">
                              <input type="text" name="chalan_driver_license_no" value="<?= set_value('chalan_driver_license_no') ?>" class="form-control" id="chalan_driver_license_no">
                            </div>
                          </div>
                        </div>

                      </div>



                          <div class="row inputrows">
                              <div class="col-md-3">
                                <label for="name-t-o" >ট্রাক মালিকের নাম ঠিকানাঃ</label>
                              </div>
                              <div class="col-md-9">
                                <input type="text" class="form-control" maxlength="115" name="chalan_vehicles_owner_address" value="<?= set_value('chalan_vehicles_owner_address') ?>" id="chalan_vehicles_owner_address">
                              </div>
                            </div>

                          <div class="row inputrows">
                            <div class="col-md-3">
                              <label for="cf-agent">সি এন্ড এফ এজেন্টের নাম:</label>
                            </div>
                            <div class="col-md-9">
                             <select class="form-control select2" name="chalan_cnf_name" id="chalan_cnf_name" >
                                <option value="">Select One Cnf</option>
                                <?php if($cnf_info) {?>
                                  <?php foreach($cnf_info as $all_cnf_info) {?>
                                <option <?php echo set_select('chalan_cnf_name',$all_cnf_info->cnf_info_id); ?> value="<?php echo $all_cnf_info->cnf_info_id; ?>"><?php echo $all_cnf_info->cnf_full_name; ?></option>
                                  <?php } ?>
                                <?php } else{?>
                                  <option value="">No Available Cnf</option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                        
                        </div>

            




                        <div class="form-group row">


                        <div class="col-md-4">
                              <div class="row inputrows">
                              <div class="col-md-4">
                                <label for="scot-name">স্কটের নামঃ</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" class="form-control" name="chalan_scoter_name" value="<?= set_value('chalan_scoter_name'); ?>" id="chalan_scoter_name">
                              </div>
                            </div>
                            </div>



                            
                            <div class="col-md-4">
                              <div class="row inputrows">
                              <div class="col-md-6">
                                <label for="scot-m-n">স্কটের মোবাইল নংঃ</label>
                              </div>
                              <div class="col-md-6">
                                <input type="text" name="" class="form-control" name="chalan_scoter_number"  value="<?= set_value('chalan_scoter_number'); ?>" id="chalan_scoter_number">
                              </div>
                            </div>
                            </div>

                        <div class="col-md-4">
                            <div class="row inputrows">
                              <div class="col-md-6">
                                <label for="driver-card-no">ড্রাইভারের কার্ড নংঃ</label>
                              </div>
                              <div class="col-md-6">
                                <input type="text" class="form-control" name="chalan_driver_card_no" value="<?= set_value('chalan_driver_card_no'); ?>" id="chalan_driver_card_no">
                              </div>
                            </div>
                            </div>


                        


                          </div>

                              <div class="form-group row">
                              <div class="col-md-6">
                                <div class="row inputrows">
                                <div class="col-md-4">
                                  <label for="f-place">বেনাপোল হইতেঃ</label>
                                </div>
                                <div class="col-md-8">
                                  <input type="text" class="form-control" name="chalan_target_location" value="<?= set_value('chalan_target_location'); ?>" id="chalan_target_location"> 
                                </div>
                              </div>
                              </div>
                              <div class="col-md-6">
                              <div class="row inputrows">
                              <div class="col-md-4">
                                <label for="silgala-no">সিলগালা নংঃ</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" class="form-control" name="chalan_silgala_no" id="chalan_silgala_no" value="<?= set_value('chalan_silgala_no') ?>" >
                              </div>
                            </div>
                              </div>
                            </div>



                  <div class="form-group row" style="color:red;font-weight:bold;">
                      <div class="col-md-4">
                            <div class="row inputrows">
                            <div class="col-md-6">
                              <label for="scot-name">Truck Party Rent</label>
                            </div>
                            <div class="col-md-6">
                              <input type="text" class="form-control" value="0"  required onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)"  name="chalan_vehicles_party_rent" value="<?= set_value('chalan_vehicles_party_rent'); ?>" id="chalan_vehicles_party_rent">
                            </div>
                          </div>
                          </div>


                          <div class="col-md-4">
                            <div class="row inputrows">
                            <div class="col-md-6">
                              <label for="scot-m-n">Party Advance Rent</label>
                            </div>
                            <div class="col-md-6">
                              <input type="text" onkeypress="return isNumberKeyDot(event)" required value="0"  onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)"  name="" class="form-control" name="chalan_vehicles_party_advance_rent"  value="<?= set_value('chalan_vehicles_party_advance_rent'); ?>" id="chalan_vehicles_party_advance_rent">
                            </div>
                          </div>
                          </div>



                          <div class="col-md-4">
                              <div class="row inputrows">
                                <div class="col-md-8">
                                  <label for="driver-card-no">Party Rent Due Amount</label>
                                </div>
                                <div class="col-md-4">
                                  <input type="text" class="form-control" readonly value="0"  onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)"  name="chalan_vehicles_party_due_rent" value="<?= set_value('chalan_vehicles_party_due_rent'); ?>" id="chalan_vehicles_party_due_rent">
                                </div>
                              </div>
                              </div>

                        </div>














                           </div>
                <!-- table start -->
                        <div class="border border-dark2 mt-3">
                                <div class="form-group row p-3">
                                <div class="col-md-2">
                                  <label class="label-design" for="product-sign">মালের চিহ্ন</label>
                                  <textarea class="form-control" name="chalan_product_sign" id="chalan_product_sign" rows="6"></textarea>
                                </div>
                                <div class="col-md-2">
                                  <label class="label-design" for="product-quantity">মালের পরিমান</label>
                                  <textarea class="form-control" name="chalan_product_quantity" id="chalan_product_quantity" maxlength="165" rows="6"><?php echo set_value('chalan_product_quantity'); ?></textarea>
                                </div>
                                <div class="col-md-3" style="padding:0px !important">
                                  <label class="label-design" for="product-description">মালের বিবরন</label>
                                  <textarea class="form-control" name="chalan_product_description"  rows="4" id="chalan_product_description" maxlength="275" ><?php echo set_value('chalan_product_description'); ?></textarea>
                                  <label class="mt-1 invoice" for="product-description">বি/ই ইনভয়েজ মোতাবেকঃ</label>
                                </div>
                                <div class="col-md-5 pl-3 pr-3"  >
                                  <div class="row">


                                  <!--  <div class="col-md-4 pl-1 pr-1" >
                                      <label class="label-design" for="truk-fair">ট্রাক ভাড়া</label>
                                      <textarea class="form-control" name="chalan_vehicles_chalan_rent" id="chalan_vehicles_chalan_rent" rows="4"><?php echo set_value('chalan_vehicles_chalan_rent'); ?></textarea>
                                    </div>-->




                                    <div class="col-md-6 pl-1 pr-1">
                                      <label class="label-design" for="post-fair">ট্রাক ভাড়া</label>
                                        <input type="text" style="border:1px solid black;height:50px;"; required  class="form-control" name="chalan_vehicles_chalan_rent" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" value="0"  onkeypress="return isNumberKey(event)"   id="chalan_vehicles_chalan_rent" >
                                     <!-- <textarea class="form-control" name="chalan_vehicles_chalan_rent" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)"   id="chalan_vehicles_chalan_rent" rows="1">0</textarea>-->
                                  <div class="row inputrows total" style="height:72px;">
                                    <div class="col-md-6">
                                      <label class="table-p" for="post-fair">Original Rent:</label>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text"  required style="border-bottom:1px solid black;height:50px;"; onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" value="0" class="form-control" name="chalan_vehicles_original_rent" id="chalan_vehicles_original_rent" style="border:0px;">
                                    </div>
                                  </div>

                                    </div>





                                    <div class="col-md-3 pl-1 pr-1">
                                      <label class="label-design" for="pre-fair">অগ্রিম ভাড়া</label>
                                      <input type="text" class="form-control" required style="border:1px solid black;height:120px;"; name="chalan_vehicles_rent_advance_amount" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" id="chalan_vehicles_rent_advance_amount" value="0">
                                     <!-- <textarea class="form-control" name="chalan_vehicles_rent_advance_amount" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" id="chalan_vehicles_rent_advance_amount" rows="4">0</textarea>-->
                                    </div>
                                    <div class="col-md-3 pl-1 pr-1">
                                      <label class="label-design" for="post-fair">বকেয়া ভাড়া</label>
                                      <textarea class="form-control" readonly name="chalan_vehicles_rent_due_amount" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" id="chalan_vehicles_rent_due_amount" rows="2">0</textarea>
                                      <div class="row inputrows total">
                                    <div class="col-md-3">
                                      <label class="table-p" for="post-fair">মোটঃ</label>
                                    </div>
                                    <div class="col-md-9">
                                      <input type="text" class="form-control" readonly name="chalan_vehicles_total_chalan_rent" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" value="0" id="chalan_vehicles_total_chalan_rent" style="border:0px;">
                                    </div>
                                  </div>

                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-md-12 table-p pt-1  pl-1 pr-1">
                                      <div class="row inputrows rowintotable">
                                    <div class="col-md-3">
                                      <label class="table-p" for="post-fair">ড্রাইভার কে</label>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="text" class="form-control" required name="chalan_vehicles_driver_rec_due_amount" value="0" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" id="chalan_vehicles_driver_rec_due_amount">
                                    </div>
                                    <div class="col-md-3">
                                      <label class="table-p" for="post-fair-end"> টাকা দিবেন</label>
                                    </div>
                                  </div>  
                                  <br>
                                  <br>
                                
                                    </div>
                                   
                                  </div>
                          
                                </div>


                          



                                  <div class="col-md-5"></div>
                                  <div class="col-md-6">
                                  <button  class="btn btn-success" id="submit_button">Save Chalan Info</button>
                                  </div>
                            
                                
                                
                             </div>
                              </div>
                            <!-- </div> -->


                    </form>
                    <!-- end form -->
                  </div>
              <!-- form end in data page replace table -->

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
    <?php 
    $chalan_id=$this->session->flashdata('chalan_id');
    if($chalan_id){
    ?>
    <span class="print_button" id="chalan_print" onclick="print_chalan('<?php echo base_url().'Backend/ChalanController/print_chalan/'.$chalan_id; ?>')"></span>|
  </div>
    <?php } ?>
  <!-- /.content-wrapper -->

  <script>

$('#chalan_ac_no').characterCounter({
    opacity : ".8",
    max: 155,
    color : "red"
});
$('#chalan_extra_ac_no').characterCounter({
    opacity : ".8",
    max: 155,
    color : "red"
});

$('#chalan_product_description').characterCounter({
    max: 275,
    textArea: true,
    color:"red"
});
$('#chalan_product_quantity').characterCounter({
    max: 165,
    textArea: true,
    color:"red"
});

$('#chalan_be_no_c').characterCounter({
    opacity : ".8",
    max: 40,
    color : "red"
});


$('#chalan_lc_no').characterCounter({
    opacity : ".8",
    max: 40,
    color : "red"
});

$('#chalan_vehicles_owner_address').characterCounter({
    opacity : ".8",
    max: 115,
    color : "red"
});



    $('#new_bill').click(function(){
    $('form[name=my_form]').attr('action','');
    $('form[name=my_form]').attr('target','_blank');
    $('form[name=my_form]').attr('onsubmit','return true');
    $('form[name=my_form]').submit();
  });


  $(document).ready(function() {
            $(window).keydown(function(event) {
                if (event.keyCode == 13) {
                    event.preventDefault();
                    return false;
                }
            });
        });




        $(function(){
            $("#chalan_product_description").keydown(function (event) {
                    if (event.keyCode == 13) {
                       // alert('You pressed enter!');
                        event.stopPropagation();
                        // return true;
                    }
                });
            });






  function onBlur(el) {
        if (el.value === el.defaultValue || el.value === "NaN" || el.value === '') {
            el.value = el.defaultValue;
        }
    }



    function onFocus(el) {
        if (el.value === el.defaultValue || el.value === "NaN" || el.value < 1) {
            el.value = '';
        }
    }

  function isNumberKeyDot(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        //if (charCode > 31 && (charCode < 48 || charCode > 57))
        if (charCode > 31 && (charCode < 45 || charCode > 57))
            return false;
        return true;
    }
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

  </script>


  <script>

$("#chalan_vehicles_chalan_rent").keyup(function(){

    var chalan_vehicles_chalan_rent= parseInt($("#chalan_vehicles_chalan_rent").val());
    $("#chalan_vehicles_total_chalan_rent").val(chalan_vehicles_chalan_rent);
  });


$("#chalan_vehicles_rent_advance_amount").keyup(function(){

    var chalan_vehicles_chalan_rent= parseInt($("#chalan_vehicles_chalan_rent").val());
    var chalan_vehicles_rent_advance_amount= parseInt($("#chalan_vehicles_rent_advance_amount").val());
    if(chalan_vehicles_rent_advance_amount>chalan_vehicles_chalan_rent){
      alert("Advance Amount Can't Bigger Then Main Amount");

      $("#chalan_vehicles_rent_advance_amount").val(0);
      $("#chalan_vehicles_rent_advance_amount").focus();
      $("#chalan_vehicles_rent_due_amount").val(0);
      $("#chalan_vehicles_driver_rec_due_amount").val(0);
    }else{
    var due_amount= chalan_vehicles_chalan_rent-chalan_vehicles_rent_advance_amount;
   
    $("#chalan_vehicles_rent_due_amount").val(due_amount);
    $("#chalan_vehicles_driver_rec_due_amount").val(due_amount);
    }
  });






  
$("#chalan_vehicles_party_advance_rent").keyup(function(){

var chalan_vehicles_party_rent= parseInt($("#chalan_vehicles_party_rent").val());
var chalan_vehicles_party_advance_rent= parseInt($("#chalan_vehicles_party_advance_rent").val());
if(chalan_vehicles_party_advance_rent>chalan_vehicles_party_rent){
  alert("Advance Amount Can't Bigger Then Main Amount");

  $("#chalan_vehicles_party_advance_rent").val(0);
  $("#chalan_vehicles_party_advance_rent").focus();
  $("#chalan_vehicles_party_due_rent").val(0);
}else{
var due_amount= chalan_vehicles_party_rent-chalan_vehicles_party_advance_rent;

$("#chalan_vehicles_party_due_rent").val(due_amount);
}
});



















$(document).ready(function(){
  $("#chalan_vehicles_no").change(function(){
    var vehicles_info_id = $(this).val();
    $.ajax({
      url: '<?php echo base_url();?>Cholotransportowner/GetVehiclesAllInfo',
      type: 'POST',
	    data: { vehicles_info_id: vehicles_info_id},
      dataType: 'json',
      success: function(data){
          $("#chalan_driver_name").val(data['0']);
          $("#chalan_driver_license_no").val(data['1']);
          $("#chalan_vehicles_owner_address").val(data['2']);
          $("#chalan_driver_card_no").val(data['3']);
         }
    });
  });
});

</script>




<script>
/*---------------------------------------------------------
      Start Form Submit Validation
    -----------------------------------------------------------*/
            function validate_all(){
                var chalan_vehicles_no                  = $('#chalan_vehicles_no').val();
                var chalan_importer_name                = $('#chalan_importer_name').val();
                var chalan_exporter_name                = $('#chalan_exporter_name').val();
                var chalan_driver_name                  = $('#chalan_driver_name').val();
                var chalan_driver_license_no            = $('#chalan_driver_license_no').val();
                var chalan_cnf_name                     = $('#chalan_cnf_name').val();
                var chalan_driver_card_no               = $('#chalan_driver_card_no').val();
                var chalan_target_location              = $('#chalan_target_location').val();
                var chalan_product_description          = $('#chalan_product_description').val();
                var chalan_vehicles_chalan_rent         = $('#chalan_vehicles_chalan_rent').val();
                var chalan_vehicles_rent_advance_amount = $('#chalan_vehicles_rent_advance_amount').val();
                var chalan_vehicles_original_rent       = $('#chalan_vehicles_original_rent').val();

                var chalan_vehicles_party_rent           = $('#chalan_vehicles_party_rent').val();
                var chalan_vehicles_party_advance_rent   = $('#chalan_vehicles_party_advance_rent').val();
            
                if(chalan_vehicles_no==''){
                    alert("Vehicles No is Required");
                    $('#chalan_driver_card_no').focus();
                 $('#submit_button').removeAttr('disabled');
                 return false;
                }

              else if((chalan_importer_name=='') && (chalan_exporter_name==''))  {
                alert("Importer Or Exporter One is Required");
                $('#chalan_importer_name').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
              else if((chalan_importer_name!='') && (chalan_exporter_name!=''))  {
                alert("Importer Or Exporter One is Required");
                $('#chalan_importer_name').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }

              else if(chalan_driver_name==''){
                alert("Driver Name is Required");
                $('#chalan_driver_name').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
          
           
            
              else if(chalan_cnf_name==''){
                alert("CNF Name is Required");
                $('#chalan_cnf_name').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
          
            
              else if(chalan_driver_card_no==''){
                alert("Driver Card No is Required");
                $('#chalan_driver_card_no').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
          
              else if(chalan_target_location==''){
                alert("Location is Required");
                $('#chalan_target_location').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }


              else if(chalan_product_description==''){
                alert("Location is Required");
                $('#chalan_product_description').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
          
              else if(chalan_vehicles_chalan_rent==''){
                alert("Vehicles Rent Amount is Required");
                $('#chalan_vehicles_chalan_rent').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
          
              else if(chalan_vehicles_rent_advance_amount==''){
                alert("Vehicles Rent Advance Amount is Required");
                $('#chalan_vehicles_rent_advance_amount').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
          
              else if(chalan_vehicles_original_rent==''){
                alert("Vehicles Original Rent Amount is Required");
                $('#chalan_vehicles_original_rent').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }

              else if(chalan_vehicles_party_rent==''){
                alert("Vehicles Party Rent Amount is Required");
                $('#chalan_vehicles_party_rent').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
          
              else if(chalan_vehicles_party_advance_rent==''){
                alert("Vehicles Party Rent Advance Amount is Required");
                $('#chalan_vehicles_party_advance_rent').focus();
                $('#submit_button').removeAttr('disabled');
                return false;
              }
          
           
            

                else{
                   $('#submit_button').val('Please wait ...');
                    $('#submit_button').attr('disabled','disabled');
                    $(".checkout_loader").css("display",'');
                    return true;


                }

                return false;
            }
  /*---------------------------------------------------------
      End Form Submit Validation
    -----------------------------------------------------------*/
        </script>



  
<script src="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_jquery_1.7.1.js"></script>
<script type="text/javascript">
    $('#chalan_be_no_c_date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#chalan_be_no_c_date').datepicker("setDate", new Date());


    $('#chalan_lc_no_date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#chalan_lc_no_date').datepicker("setDate", new Date());




    $('#chalan_date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#chalan_date').datepicker("setDate", new Date());
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    })

</script>


<script type="text/javascript">
$(function(){
    $('#chalan_print').trigger('click');
});
</script>



<script type="text/javascript">
function print_chalan(url) {
    var printWindow = window.open( url, 'Print', 'left=400, top=200, width=500, height=300, toolbar=0, resizable=0');
}

</script>
