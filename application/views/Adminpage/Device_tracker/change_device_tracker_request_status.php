<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<link href="<?php echo base_url();?>assets/backend/noman_datetimepicker/datetimepicker.min2_5_20.css" rel="stylesheet" />
<script src="<?php echo base_url();?>assets/backend/plugins/jquery/jquery.min.js"></script>
<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Device Tracker Scheduling...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url();?>Cholotransportowner/UpdateDeviceScheduleRequest/<?php echo $device_tracker_request_data->vehicles_device_tracker_id; ?>" method="post">

        
       <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="customer_sms" name="customer_sms" value="yes">
          <label class="form-check-label">Customer SMS</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="install_man_sms" name="install_man_sms" value="yes">
          <label class="form-check-label">Install Man SMS</label>
        </div>
             <br>                   
           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Name : </label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" id="" name="customer_name" value="<?php echo $device_tracker_request_data->customer_name; ?>" required placeholder="Enter Customer Name......">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Mobile : </label>
            <div class="col-sm-9">
              <input type="text"  onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)"  onkeypress="return isNumberKey(event)" class="form-control" id="" name="customer_mobile_number" value="<?php echo $device_tracker_request_data->customer_mobile_number; ?>" required placeholder="Enter Customer Mobile Number......">
            </div>
          </div>


           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Device Model : </label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" id="" name="tracker_device_model" value="<?php echo $device_tracker_request_data->tracker_device_model; ?>" placeholder="Enter Tracker Device Model.....">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Vehicles Model : </label>
            <div class="col-sm-8">
              <input type="text"  class="form-control" id="" name="vehicles_model" value="<?php echo $device_tracker_request_data->vehicles_model; ?>" placeholder="Enter Tracker Device Model.....">
            </div>
          </div>


           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Install Date : </label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" name="device_install_date_time" value="<?php echo $device_tracker_request_data->device_install_date_time; ?>" required id="datepicker2" placeholder="">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Install Man : </label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" name="device_install_man_name" value="<?php echo $device_tracker_request_data->device_install_man_name; ?>" required placeholder="Enter Installation Man Name.....">
            </div>
          </div>


           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Man Number: </label>
            <div class="col-sm-9">
              <input type="text" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)"  onkeypress="return isNumberKey(event)"  class="form-control" name="device_install_man_number" value="<?php echo $device_tracker_request_data->device_install_man_number; ?>" required placeholder="Enter Installation Man Mobile Number .....">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Scheduling Status: </label>
            <div class="col-sm-8">
              <select name="device_install_status" id="device_install_status1" required class="form-control">
                <option value="">Select One Status</option>
                <?php if($device_tracker_request_data->device_install_status==0){ ?>
               <option selected value="0">Pending</option>
               <option value="1">Processing</option>
                <option value="2">Completed</option>
                <option value="3">Cancel</option>
                <?php } ?>

                <?php if($device_tracker_request_data->device_install_status==1){ ?>
                 <option  value="0">Pending</option>
                 <option selected value="1">Processing</option>
                <option value="2">Completed</option>
                <option value="3">Cancel</option>
                <?php } ?>


                <?php if($device_tracker_request_data->device_install_status==2){ ?>
                 <option  value="0">Pending</option>
                 <option  value="1">Processing</option>
                <option selected value="2">Completed</option>
                <option value="3">Cancel</option>
                <?php } ?>


                <?php if($device_tracker_request_data->device_install_status==3){ ?>
                 <option  value="0">Pending</option>
                 <option  value="1">Processing</option>
                <option  value="2">Completed</option>
                <option selected value="3">Cancel</option>
                <?php } ?>
              
              </select>
            </div>
          </div>


          <div class="form-group row" style="display:none; color:blue;font-weight:bold;" id="device_original1">
            <label for="staticEmail" class="col-sm-5 col-form-label">Device Original Price: </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" style="border:1px solid blue;color:blue;font-weight:bold;"  onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" name="device_original_price" id="device_original_price1" placeholder="Enter Device Original Price....">
            </div>
          </div>

          <div class="form-group row" style="display:none; color:blue;font-weight:bold;" id="device_sell1">
            <label for="staticEmail" class="col-sm-5 col-form-label">Device Selling Price: </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" style="border:1px solid blue;color:blue;font-weight:bold;" name="device_sell_price" id="device_sell_price1" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)"  onkeypress="return isNumberKey(event)" placeholder="Enter Device Selling Price....">
            </div>
          </div>


          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Customer Address: </label>
            <div class="col-sm-8">
               <textarea name="customer_address" id=""  class="form-control" cols="1" rows="1"><?php echo $device_tracker_request_data->customer_address; ?></textarea>
            </div>
          </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Device Tracker Scheduling </button>
      </div>


  </form>
      </div>
      <script src="<?php echo base_url();?>assets/backend/noman_datetimepicker/datetimepicker.min2.5.20.js"></script>


<script>
       jQuery.datetimepicker.setLocale('en');
       $('#datepicker2').datetimepicker({
        timepicker:true,
        format:'Y-m-d H:i:s',
            lang:'en',
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
$('#device_install_status1').on('change', function() {
if ( this.value == '2'){
$("#device_sell1").show();
$("#device_original1").show();
$("#device_original_price1").attr("required", "");
$("#device_original_price1").focus();
$("#device_sell_price1").attr("required", "");
}
else{
$("#device_sell1").hide();
$("#device_original1").hide();
$("#device_original_price1").removeAttr("required");
$("#device_sell_price1").removeAttr("required");
}
}).trigger("change"); // notice this line
</script>


