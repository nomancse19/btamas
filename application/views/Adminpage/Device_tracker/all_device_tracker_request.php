<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="<?php echo base_url();?>assets/backend/noman_datetimepicker/datetimepicker.min2_5_20.css" rel="stylesheet" />
<style>
    textarea {
  width: 150px;
  height: 30px;
  
}

input::placeholder {
  color: red;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: red;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: red;
}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Device Tracker Schedule Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AllVehiclesRequest">All Vehicles Request</a></li>
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
              <h3 class="card-title">All Vehicles Device Tracker Schedule</h3>
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
            <button type="button" style="background:#600ab5;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add New Tracker Scheduling</button>  
        <a href="<?php echo base_url();?>Cholotransportowner/AllDeviceScheduleRequest"><button class="btn btn-primary">All Request</button></a>
       
        <!--<a href="<?php echo base_url();?>Cholotransportowner/"><button class="btn btn-warning">Pending Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/"><button class="btn btn-info">Processing Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/"><button class="btn btn-success">Completed Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/"><button class="btn btn-danger">Cancel</button></a>-->
  
          <hr>         
            <table id="datatable" style="font-size:12px;" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align:center;">SL</th>
                  <th style="text-align:center;">Date</th>
                  <th style="text-align:center;">Name</th>
                  <th style="text-align:center;">Mobile</th>
                  <th style="text-align:center;">Address</th>
                  <th style="text-align:center;">Model</th>
                  <th style="text-align:center;">Install_man</th>
                  <th style="text-align:center;">I.Man Number</th>
                  <th style="text-align:center;">Status</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($all_device_request){
                    $sl=0;
                    foreach($all_device_request as $all_device_request_info){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_device_request_info->device_added_date_time;?></td>
                  <td><?php echo $all_device_request_info->customer_name;?></td>
                  <td><?php echo $all_device_request_info->customer_mobile_number;?></td>
                  <td><textarea style="width:100%;border:none;" readonly><?php echo $all_device_request_info->customer_address;?></textarea></td>
                <td><?php echo $all_device_request_info->tracker_device_model;?></td>
                <td><?php echo $all_device_request_info->device_install_man_name;?></td>
                <td><?php echo $all_device_request_info->device_install_man_number;?></td>
                  <td style="text-align:center;">
                      <?php if($all_device_request_info->device_install_status==0){?>
                      <span class="badge badge-warning">Pending</span>
                      <?php } ?>
                      <?php if($all_device_request_info->device_install_status==1){?>
                      <span class="badge badge-primary">Processing</span>
                      <?php } ?>
                      <?php if($all_device_request_info->device_install_status==2){?>
                      <span class="badge badge-info" style="font-weight:bold;">Completed</span>
                      <?php } ?>
                      <?php if($all_device_request_info->device_install_status==3){?>
                      <span class="badge badge-danger">Cancel.</span>
                      <?php } ?>
                  </td>
               
                        <td>
                        <?php
                          if(in_array("device_tracking_scheduling_status",$this->session->userdata('user_permission')))
                            {
                          ?>
                        <button <?php if($all_device_request_info->device_install_status==2){echo "disabled";} ?> class="btn btn-success btn-xs" style="cursor:pointer;" data-toggle="modal" data-id="<?php echo $all_device_request_info->vehicles_device_tracker_id ;?>" data-target="#vehicles_response" id="vehiclestrackerrequest">
                          Change
                        </button> 
                        <?php } ?>

                        </td>
                 
                  </tr>
            
                  <?php } ?>
                  <?php } ?>
              
                </tbody>
              </table>
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
  </div>
  <!-- /.content-wrapper -->





  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">


      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Device Tracker Scheduling...</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo base_url();?>Cholotransportowner/SaveDeviceScheduleRequest" method="post">

        
       <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" checked id="customer_sms" name="customer_sms" value="yes">
          <label class="form-check-label">Customer SMS</label>
        </div>

        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" checked id="install_man_sms" name="install_man_sms" value="yes">
          <label class="form-check-label">Install Man SMS</label>
        </div>
             <br>                   
           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Name : </label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" id="" name="customer_name" required placeholder="Enter Customer Name......">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Mobile : </label>
            <div class="col-sm-9">
              <input type="text" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)"  onkeypress="return isNumberKey(event)"  class="form-control" id="" name="customer_mobile_number" required placeholder="Enter Customer Mobile Number......">
            </div>
          </div>


           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Device Model : </label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" id="" name="tracker_device_model" placeholder="Enter Tracker Device Model.....">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Vehicles Model : </label>
            <div class="col-sm-8">
              <input type="text"  class="form-control" id="" name="vehicles_model" placeholder="Enter Vehicles Model Or Type.....">
            </div>
          </div>


           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Install Date : </label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" name="device_install_date_time" required id="datepicker1" placeholder="">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Install Man : </label>
            <div class="col-sm-9">
              <input type="text"  class="form-control" name="device_install_man_name" required placeholder="Enter Installation Man Name.....">
            </div>
          </div>


           <div class="form-group row">
            <label for="staticEmail" class="col-sm-3 col-form-label">Man Number: </label>
            <div class="col-sm-9">
              <input type="text" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)"  onkeypress="return isNumberKey(event)"  class="form-control" name="device_install_man_number" required placeholder="Enter Installation Man Mobile Number .....">
            </div>
          </div>

           <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Scheduling Status: </label>
            <div class="col-sm-8">
              <select name="device_install_status" id="device_install_status" required class="form-control">
                <option value="">Select One Status</option>
                <option value="0">Pending</option>
                <option value="1">Processing</option>
                <option value="2">Completed</option>
                <option value="3">Cancel</option>
              </select>
            </div>
          </div>




          <div class="form-group row" style="display:none; color:blue;font-weight:bold;" id="device_original">
            <label for="staticEmail" class="col-sm-5 col-form-label">Device Original Price: </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" style="border:1px solid blue;color:blue;font-weight:bold;"  onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" name="device_original_price" id="device_original_price" placeholder="Enter Device Original Price....">
            </div>
          </div>

          <div class="form-group row" style="display:none; color:blue;font-weight:bold;" id="device_sell">
            <label for="staticEmail" class="col-sm-5 col-form-label">Device Selling Price: </label>
            <div class="col-sm-7">
              <input type="text" class="form-control" style="border:1px solid blue;color:blue;font-weight:bold;" name="device_sell_price" id="device_sell_price" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" placeholder="Enter Device Selling Price....">
            </div>
          </div>



          <div class="form-group row">
            <label for="staticEmail" class="col-sm-4 col-form-label">Customer Address: </label>
            <div class="col-sm-8">
               <textarea name="customer_address" id="" class="form-control" cols="1" rows="1"></textarea>
            </div>
          </div>



          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save New Tracker Scheduling </button>
      </div>


  </form>
      </div>





     
    </div>
  </div>
</div>








    <!-- Modal -->
    <!-- Modal https://codepen.io/nhembram/pen/PzyYLL -->
    <!-- Modal https://bootsnipp.com/snippets/4n2l9 -->
<div class="modal fade" id="vehicles_response" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="editdata1">

    </div>
  </div>
</div>
<script src="<?php echo base_url();?>assets/backend/noman_datetimepicker/datetimepicker.min2.5.20.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script>
       jQuery.datetimepicker.setLocale('en');
       var now = new Date();
      var dateString = moment(now).format('YYYY-MM-DD');

     var dateStringWithTime = moment(now).format('YYYY-MM-DD HH:mm:ss');
       jQuery('#datepicker1').datetimepicker({
     
        timepicker:true,
        format:'Y-m-d H:i:s',
            lang:'en',
        });
        $('#datepicker1').val(dateStringWithTime);


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
$('#device_install_status').on('change', function() {
if ( this.value == '2'){
$("#device_sell").show();
$("#device_original").show();
$("#device_original_price").attr("required", "");
$("#device_original_price").focus();
$("#device_sell_price").attr("required", "");
}
else{
$("#device_sell").hide();
$("#device_original").hide();
$("#device_original_price").removeAttr("required");
$("#device_sell_price").removeAttr("required");
}
}).trigger("change"); // notice this line
</script>




<script>
$(document).ready(function(){
  $(document).on('click','#vehiclestrackerrequest',function(e){
    var uid = $(this).data('id');
    $.ajax({
      url: '<?php echo base_url();?>Backend/DeviceTrackerController/change_device_tracker_request_status/'+uid,
      type: 'POST',
      dataType: 'html',
      success: function(data){
          $("#editdata1").html(data);
         }
    });
  });
});

</script>






  