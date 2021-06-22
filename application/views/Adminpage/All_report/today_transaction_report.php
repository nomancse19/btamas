<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
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
            <h1>Today Transaction Report...<?php echo date('d-m-Y'); ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
           <!-- <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AllVehiclesRequest">All Vehicles Request</a></li>-->
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
              <h3 class="card-title">
              <a href="<?php echo base_url();?>Cholotransportowner/TodayTransactionReport"><button class="btn btn-primary">Today Transaction Report</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/DailyTransactionReport"><button class="btn btn-primary">Daily Transaction Report</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/MonthlyTransactionReport"><button class="btn btn-primary">Monthly Transaction Report</button></a>
       <a href="<?php echo base_url();?>Cholotransportowner/DueIncomeReport"><button class="btn btn-warning">Due Report</button></a>
       <a href="<?php echo base_url();?>Cholotransportowner/AllIncomeReport"><button class="btn btn-info">All Income Report</button></a>
       <div style="height:10px;"></div>
       <a href="<?php echo base_url();?>Cholotransportowner/CategoryWiseIncomeReport"><button class="btn btn-success">Category Wise Income Report</button></a>
    

       <a href="<?php echo base_url();?>Cholotransportowner/AllCostReport"><button class="btn btn-success">All Costing Report</button></a>
       <a href="<?php echo base_url();?>Cholotransportowner/CategoryWiseCostingReport"><button class="btn btn-success">Category Wise Costing Report</button></a>

       <a href="<?php echo base_url();?>Cholotransportowner/ProfitReport"><button class="btn btn-success">Profit Report</button></a>
              </h3>
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
        
            <div>
             <?php
             $total_income_data_count=count($income_data);
             $total_cost_data_count=count($costing_data);
             $total_old_due_income_data_count=count($old_due_income_data);

             if($total_income_data_count>0 || $total_cost_data_count>0 || $total_old_due_income_data_count>0){
             ?>

<p>
    <button class="btn btn-primary" style="text-align:center;margin-left:45%" onclick="printDiv()">Print Report</button>
    <button class="btn btn-warning" style="text-align:center;margin-left:0%" onclick="savepdf()">Save PDF Report</button>
    </p>

            <div class="card-body" id="print_data">
            <title>BTAMS - Today Transaction Report..</title>
                 <p style="text-align:center;font-weight:bold;">
                  <span style="font-size:25px;">  BTAMS</span><br>
                  <span style="font-size:19px;"> Today Transaction Report</span><br>
                  <span style="font-size:18px;">By Date <?php echo date('d-m-Y'); ?></span>
                  </p> 



              <table class="table table-bordered" style="float: left;width:54%;margin-left:2px;">
                  <thead>
                    <tr>
                    <th colspan="5" style="text-align:center;font-size:12px;">Income Account</th>
                    </tr>
                  </thead>

                  <tbody>
                  <tr style="font-size:10px;">
                   <th width="5%">SL</th>
                   <th width="25%">Date</th>
                   <th width="40%">Name</th>
                   <th width="15%" style="text-align:right;">S.Amount</th>
                   <th width="15%" style="text-align:right;">D.Amount</th>
                   </tr>
                  <?php if($income_data){ ?>
                    <?php $no=0; ?>
                  <?php foreach($income_data as $all_income_data){ $no++;?>
                  <tr style="font-size:9px;">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $all_income_data->income_details_added_date_time;?></td>
                    <td><?php echo mb_strimwidth($all_income_data->income_category_name.' '.$all_income_data->income_details_id_no, 0, 34, "...");?></td>
                    <td style="text-align:right;"><?php echo $all_income_data->income_details_sell_amount;?></td>
                    <td style="text-align:right;"><?php echo $all_income_data->income_details_due_amount;?></td>
                  </tr>  
                  <?php } ?>

                  <?php } ?>



                    <?php //Contiune Loop For adhust Row Start here
                    if($total_income_data_count<$total_cost_data_count){
                      $target_loop=$total_cost_data_count-$total_income_data_count;
                      for($i=0;$i<$target_loop;$i++){
                       
                    ?>
                    <tr style="font-size:9px;">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>

                  <?php } ?>
                  <?php } ?><!-- //Contiune Loop For adhust Row end Here  -->






             

                  </tbody>
               </table>






              <table class="table table-bordered" style="float: left;width:45%;margin-left:2px;" >
                  <thead>
                    <tr>
                    <th colspan="4" style="text-align:center;font-size:12px;">Costing Account</th>
                    </tr>
                  </thead>

                  <tbody>
                   <tr style="font-size:10px;">
                   <th width="5%">Sl</th>
                   <th width="30%">Date</th>
                   <th width="50%">Name</th>
                   <th width="15%" style="text-align:right;">Amount</th>
                  </tr>
                  <?php if($costing_data){ ?>
                    <?php $no=0; ?>
                    <?php foreach($costing_data as $all_costing_data){ $no++;?>
                  <tr style="font-size:9px;">  
                    <td><?php echo $no; ?></td>
                    <td><?php echo $all_costing_data->cost_details_added_date_time;?></td>
                    <td><?php echo mb_strimwidth($all_costing_data->cost_category_name.' '.$all_costing_data->cost_details_name,0,41,"...");?></td>
                    <td style="text-align:right;"><?php echo $all_costing_data->cost_details_amount;?></td>
                  </tr>
                    <?php } ?>
                    <?php } ?>



             
                    <?php //Contiune Loop For adhust Row Start here
                    if($total_cost_data_count<$total_income_data_count){
                      $target_loop=$total_income_data_count-$total_cost_data_count;
                      for($i=0;$i<$target_loop;$i++){
                       
                    ?>
                   <tr style="font-size:9px;">
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    </tr>
                  <?php } ?>
                  <?php } ?><!-- //Contiune Loop For adhust Row end Here  -->
                  


        

                  </tbody>
               </table>








               <table class="table table-bordered" width="99%" style="float:left;margin-top:10px;margin-left:2px;">
                  <thead>
                    <tr>
                    <th colspan="4" style="text-align:center;font-size:12px;">Old Due Received</th>
                    </tr>
                  </thead>

                  <tbody>
                   <tr style="font-size:10px;">
                   <th width="5%">Sl</th>
                   <th width="25%">Date</th>
                   <th width="40%">Name</th>
                   <th width="30%" style="text-align:right;">Due Received Amount</th>
                  </tr>
                    
                  <?php if($old_due_income_data){ ?>
                    <?php $no=0; ?>
                    <?php foreach($old_due_income_data as $all_old_due_income_data){ $no++;?>
                  <tr style="font-size:9px;">  
                    <td><?php echo $no; ?></td>
                    <td><?php echo $all_old_due_income_data->income_details_added_date_time;?></td>
                    <td><?php echo $all_old_due_income_data->income_category_name.' '.$all_old_due_income_data->income_details_id_no;?></td>
                    <td style="text-align:right;"><?php echo $all_old_due_income_data->income_details_due_paid_amount;?></td>
                  </tr>
                 
                    <?php } ?>
                    <?php } ?>
                 
                  </tbody>
               </table>







               <table class="table table-bordered"  style="float:left;width:50%;margin-top:6px;margin-left:49%">
                  <thead>
                    <tr>
                    <th colspan="4" style="text-align:center;font-size:11px;">Total Cash Calculation</th>
                    </tr>
                  </thead>

                  <tbody>


                    
                  
                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;">Total Actual Sell Amount</td>
                    <td width="40%" style="text-align:right"><?php echo $total_sell_income_data+$total_due_income_data; ?> ৳ </td>
                  </tr>




                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;">Total Paid Sell Amount</td>
                    <td width="40%" style="text-align:right"><?php echo $total_sell_income_data; ?> ৳ </td>
                  </tr>




                 
                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Due Amount (-) </td>
                    <td width="40%" style="text-align:right"><?php echo $total_due_income_data;?> ৳ </td>
                  </tr>





                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Old Due Received Amount (+) </td>
                    <td width="40%" style="text-align:right"><?php echo $total_old_rec_due_income_data; ?> ৳ </td>
                  </tr>





                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Day Cash Collection Amount (+) </td>
                    <td width="40%" style="text-align:right"><?php echo $total_sell_income_data+$total_old_rec_due_income_data;?> ৳ </td>
                  </tr>





                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Day Costing Amount (-) </td>
                    <td width="40%" style="text-align:right"><?php echo $total_cost_details_amount?> ৳ </td>
                  </tr>




                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Cash In Hand Amount</td>
                    <td width="40%" style="text-align:right"><?php echo ($total_sell_income_data+$total_old_rec_due_income_data)-$total_cost_details_amount ?> ৳ </td>
                  </tr>
                 



                 
                  </tbody>
               </table>
         


            
            </div>
            <!-- /.card-body -->

            <?php } else{?>
            <h4 style="color:red;font-weight:bold;text-align:center;">No Report Found in This Date....</h4>   

            <?php } ?>

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





  







    <!-- Modal -->
    <!-- Modal https://codepen.io/nhembram/pen/PzyYLL -->
    <!-- Modal https://bootsnipp.com/snippets/4n2l9 -->
<div class="modal fade" id="vehicles_response" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
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

    function printDiv() {
    var prtContent = document.getElementById("print_data");
    var WinPrint = window.open('', '', 'left=0,top=0,width=500,height=400,toolbar=0,scrollbars=0,status=0');
    var htmlToPrint = '' +
        '<style type="text/css">' +
        'table,th,td {' +
        'border:1px solid black;' +
        'border-collapse: collapse;' +
        '}' +
        '</style>';
    htmlToPrint += prtContent.outerHTML;
    WinPrint.document.write(htmlToPrint);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
    }

    function savepdf(){
      var element = document.getElementById("print_data");
      var opt = {
        margin:       0.20,
        filename:     'DailyTransactionReport.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

      // New Promise-based usage:
      html2pdf().set(opt).from(element).save();
      }
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






  