<script src="<?php echo base_url();?>assets/backend/dist/js/character-counter.js"></script>
<style>

#info-block section {
    border: 3px solid #DEE2E6;
}

.file-marker > div {
    padding: 0 3px;
    height: 100px auto;
    margin-top: -0.8em;
    
}

.box-title {
    background: white none repeat scroll 0 0;
    display: inline-block;
    padding: 0 2px;
    margin-left: 3em;
    font-weight: bold;
    color:green;
}

.box-contents{
  padding:10px;
}

.card-header{
  margin-top:-24px;
}

</style>


<script>
  function checkdelete(){
    return confirm("Are You Want to Sure Delete Cost Details Info!");
  }
</script>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add & Manage Cost Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageCostCategory">Cost Category</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageCostDetails">Add Costing</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/TodayTransactionReport">Today Transaction Report</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12 animated headShake">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="color:blueviolet;font-weight:bold;"></h3>
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
              <button class="btn btn-primary" data-toggle="modal" data-target="#add_cost_details" id="addcostdetails">Add New Cost Details </button>

            </div>
            






            <div class="card-body">
              <table class="table table-bordered table-hover" id="datatable">
                <thead>
                <tr style="font-size:13px;">
                  <th>SL</th>
                  <th>Date</th>
                  <th>Category Name</th>
                  <th>Details</th>
                  <th>Details Amount</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($cost_details_data){
                    $sl=0;
                    foreach($cost_details_data as $all_cost_details_data){
                      $sl++;
                  ?>
                  <tr style="font-size:13px;">
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_cost_details_data->cost_details_added_date_time;?></td>
                  <td><?php echo $all_cost_details_data->cost_category_name;?></td>
                  <td><textarea style="width:255px;height:27px;" readonly><?php echo $all_cost_details_data->cost_details_name;?></textarea></td>
                  <td><?php echo $all_cost_details_data->cost_details_amount;?></td>
        
                  <td class="center" style="font-size:16px;text-align:center;">

          
                    <?php
                      if(in_array("edit_costing_details",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <span title="Edit/Update Cost Details Info" style="cursor:pointer;" data-toggle="modal" data-id="<?php echo $all_cost_details_data->cost_details_id;?>" data-target="#cost_details" id="costdetails" >
                        <i style="color:blue;" class="fa fa-edit"></i>
                    </span> |
                    <?php } ?>




                    <?php
                      if(in_array("delete_costing_details",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Delete Income Details Info" href="<?php echo base_url();?>Backend/AccountController/delete_cost_details_info/<?php echo $all_cost_details_data->cost_details_id;?>" onclick="return checkdelete();">
                      <i style="color:red;" class="fa fa-trash"></i>
                    </a>
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
  <div class="modal fade" id="add_cost_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Add New Cost Details..</h5>
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form action="<?php echo base_url();?>Cholotransportowner/SaveCostDetails" method="post">
      <input type="hidden" name="<?=AccountController::csrf_name();?>" value="<?=AccountController::csrf_token();?>" />
      <div class="modal-body">
      <div class="container-fluid">
      
       <div class="row">
            <div class="col-md-5"><label for="recipient-name" class="col-form-label">Costing Details : </label>
           </div>
            <div class="col-md-7 ml-auto">
            <div class="form-group">
                <input type="text" name="cost_details_name" class="form-control form-control-sm" placeholder="Enter Costing Details....">
             </div>
            </div>


            <div class="col-md-5"><label for="recipient-name" class="col-form-label">Costing  Amount : </label>
           </div>
            <div class="col-md-7 ml-auto">
            <div class="form-group">
                <input type="text" name="cost_details_amount" required placeholder="Enter Costing Amount......" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" class="form-control form-control-sm">
             </div>
            </div>




            <div class="col-md-5"><label for="recipient-name"  class="col-form-label">Select Costing Date : </label>
           </div>
            <div class="col-md-7 ml-auto">
            <div class="form-group">
                <input type="text" name="cost_details_date" class="form-control form-control-sm" required id="cost_details_date">
             </div>
            </div>

          




            <div class="col-md-5"><label for="recipient-name" class="col-form-label">Select Cost Category : </label>
           </div>
            <div class="col-md-7 ml-auto">
            <div class="form-group">
               <select name="cost_category_id" required class="form-control form-control-sm select2" id="">
                 <option value="">Select Cost Category</option>
                 <?php if($publish_cost_category){ ?>
                      <?php foreach($publish_cost_category as $all_publish_cost_category){ ?>
                        <option value="<?php echo $all_publish_cost_category->cost_category_id; ?>"><?php echo $all_publish_cost_category->cost_category_name; ?></option>
                 <?php } ?>
                 <?php }else{ ?>
                  <option value="">No Cost Category Found..</option>
                 <?php } ?>
               </select>
             </div>
            </div>





      </div>

      </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add New Income Details.</button>
      </div>
      </form>
    </div>



  </div>
</div>





<div class="modal fade" id="income_details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="editdata1">

    </div>
  </div>
</div>







<script>
$(document).ready(function(){
  $(document).on('click','#incomedetails',function(e){
    var uid = $(this).data('id');
    $.ajax({
      url: '<?php echo base_url();?>Backend/AccountController/edit_income_details_info/'+uid,
      dataType: 'html',
      success: function(data){
          $("#editdata1").html(data);
         }
    });
  });
});

</script>



<script>
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




<script src="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_jquery_1.7.1.js"></script>
<script type="text/javascript">
    $('#cost_details_date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#cost_details_date').datepicker("setDate", new Date());

</script>




<script>
  $('#truck_lagbe_icon_article').characterCounter({
    opacity : ".8",
    max: 21,
    color : "red"
});


$("#span_dis").css("opacity",0.7);
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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

  