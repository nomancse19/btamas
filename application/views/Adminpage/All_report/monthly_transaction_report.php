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
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daily Transaction Report...</h1>
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
        
            
            <aside id="info-block">
                <section class="file-marker">
                  <div>
                    <div class="box-title">
                        Monthly Transaction Report..
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">
            
            <form role="form" action="<?php echo base_url();?>Cholotransportowner/GetMonthlyTransactionReport" enctype="multipart/form-data" method="get">
                      <input type="hidden" name="<?=ReportController::csrf_name();?>" value="<?=ReportController::csrf_token();?>" />

                          <div class="row">
                          <div class="col-sm-1">
                                <div class="form-group">
                            </div>

                        </div>


                          <div class="col-sm-3">
                            <div class="form-group">
                            <label for="image_slider_link">Select Report Start Date<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <input type="text" class="form-control form-control-sm" autocomplete="off" name="report_start_date" required id="report_start_date" placeholder="Select Report Start Date">
                          </div>

                            </div>



                          <div class="col-sm-3">
                            <div class="form-group">
                            <label for="image_slider_link">Select Report End Date<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <input type="text" class="form-control form-control-sm" autocomplete="off" name="report_end_date" required id="report_end_date" placeholder="Select Report End Date">
                          </div>

                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                            <label for="vehicles_images_name"></label>
                            <button type="submit"  class="btn btn-primary form-control ">Get Monthly Transaction Report</button>
                            </div>
                        
                          
                          </div>

                            </div>

                          </form>

                          </div>
                    </div>
                  </div>
                </section>
              </aside>



            <div>

          <?php 
            if(isset($start_date) && isset($end_date)){
            $start=$start_date;
            $end  =$end_date;
            $totaldate = strtotime($end) - strtotime($start);
            if($totaldate>0){
          ?>


<p>
    <button class="btn btn-primary" style="text-align:center;margin-left:45%" onclick="printDiv()">Print Report</button>
    <button class="btn btn-warning" style="text-align:center;margin-left:0%" onclick="savepdf()">Save PDF Report</button>
    </p>

            <div class="card-body" id="print_data">
            <title>BTAMS - Monthly Transaction Report..</title>
                 <p style="text-align:center;font-weight:bold;">
                  <span style="font-size:25px;">  BTAMS</span><br>
                  <span style="font-size:19px;"> Monthly Transaction Report</span><br>
                  <span style="font-size:18px;">By <?php echo date("d-m-Y", strtotime($start_date)) ." To ".date("d-m-Y", strtotime($end_date)); ?></span>
                  </p> 



                  <?php 
                    $check_cost_count=0;
                    $start=$start_date;
                    $end  =$end_date;
                    $totaldate = strtotime($end) - strtotime($start);
                    $totaldate = floor($totaldate/(60*60*24));
                  for($i=0;$i<=$totaldate;$i++){
                    $check_finaldate=date("Y-m-d", strtotime($start .'+'.$i.'day'));
                      foreach($cost_category_list as $all_cost_category_list_info){
                        $check_get_cost_category_amount=$this->reportModel->select_all_cost_category_date_wise_amount_data($all_cost_category_list_info->cost_category_id,$check_finaldate);
                     
                        if($check_get_cost_category_amount){
                          $check_cost_count++;
                        }
                      }
                    }
                    ?>











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
                    <?php 
                    $no=0; 
                    $income_count=0;
                    $total_sell_income_count=0;
                    $total_due_income_count=0;
                    $start=$start_date;
                    $end  =$end_date;
                    $totaldate = strtotime($end) - strtotime($start);
                    $totaldate = floor($totaldate/(60*60*24));
                  for($i=0;$i<=$totaldate;$i++){
                    $finaldate=date("Y-m-d", strtotime($start .'+'.$i.'day'));
                      foreach($income_category_list as $all_income_category_list){
                        $get_income_category_sell_value=$this->reportModel->select_all_income_category_date_wise_sell_data($all_income_category_list->income_category_id,$finaldate);
                        $get_income_category_due_value=$this->reportModel->select_all_income_category_date_wise_due_data($all_income_category_list->income_category_id,$finaldate);
                        
                        if($get_income_category_sell_value){
                          $income_count++;
                          $total_sell_income_count=$total_sell_income_count+$get_income_category_sell_value;
                          $total_due_income_count=$total_due_income_count+$get_income_category_due_value;
                          $no++;
                    ?>
                  <tr style="font-size:9px;">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $finaldate; ?></td>
                    <td><?php echo $all_income_category_list->income_category_name; ?></td>
                    <td style="text-align:right;"><?php echo $get_income_category_sell_value; ?></td>
                    <td style="text-align:right;"><?php echo $get_income_category_due_value;?></td>
                  </tr>  
                  <?php } ?>
                  <?php } ?>
                  <?php } ?>




                    <?php //Contiune Loop For adhust Row Start here
                    if($income_count<$check_cost_count){
                      $target_loop=$check_cost_count-$income_count;
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
                  <?php 
                    $no=0; 
                    $cost_count=0;
                    $total_cost_amount=0;
                    $start=$start_date;
                    $end  =$end_date;
                    $totaldate = strtotime($end) - strtotime($start);
                    $totaldate = floor($totaldate/(60*60*24));
                  for($i=0;$i<=$totaldate;$i++){
                    $finaldate=date("Y-m-d", strtotime($start .'+'.$i.'day'));
                      foreach($cost_category_list as $all_cost_category_list){
                        $get_cost_category_amount=$this->reportModel->select_all_cost_category_date_wise_amount_data($all_cost_category_list->cost_category_id,$finaldate);
                     
                        if($get_cost_category_amount){
                          $cost_count++;
                          $total_cost_amount=$total_cost_amount+$get_cost_category_amount;
                          $no++;
                    ?>


                  <tr style="font-size:9px;">  
                    <td><?php echo $no; ?></td>
                    <td><?php echo $finaldate;?></td>
                    <td><?php echo $all_cost_category_list->cost_category_name;?></td>
                    <td style="text-align:right;"><?php echo $get_cost_category_amount;?></td>
                  </tr>
                    <?php } ?>
                    <?php } ?>
                    <?php } ?>



             
                    <?php //Contiune Loop For adhust Row Start here
                    if($cost_count < $income_count){
                      $target_loop=$income_count-$cost_count;
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
                    

                      <?php
                        $no=0; 
                        $total_old_due_rec=0;
                        $start=$start_date;
                        $end  =$end_date;
                        $totaldate = strtotime($end) - strtotime($start);
                        $totaldate = floor($totaldate/(60*60*24));
                      for($i=0;$i<=$totaldate;$i++){
                        $finaldate=date("Y-m-d", strtotime($start .'+'.$i.'day'));
                        $get_old_due_received_amount=$this->reportModel->select_all_old_due_received_sum_by_date($finaldate);
                        if($get_old_due_received_amount){
                          $total_old_due_rec=$total_old_due_rec+$get_old_due_received_amount;
                          $no++;
                      ?>
                  <tr style="font-size:9px;">  
                    <td><?php echo $no; ?></td>
                    <td><?php echo $finaldate?></td>
                    <td><?php echo "Chalan Old Due Received";?></td>
                    <td style="text-align:right;"><?php echo $get_old_due_received_amount;?></td>
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
                    <td width="40%" style="text-align:right"><?php echo $total_sell_income_count+$total_due_income_count; ?> ৳ </td>
                  </tr>




                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;">Total Paid Sell Amount</td>
                    <td width="40%" style="text-align:right"><?php echo $total_sell_income_count; ?> ৳ </td>
                  </tr>




                 
                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Due Amount (-) </td>
                    <td width="40%" style="text-align:right"><?php echo $total_due_income_count;?> ৳ </td>
                  </tr>





                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Old Due Received Amount (+) </td>
                    <td width="40%" style="text-align:right"><?php echo $total_old_due_rec; ?> ৳ </td>
                  </tr>





                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Day Cash Collection Amount (+) </td>
                    <td width="40%" style="text-align:right"><?php echo $total_sell_income_count+$total_old_due_rec;?> ৳ </td>
                  </tr>


                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Day Costing Amount (-) </td>
                    <td width="40%" style="text-align:right"><?php echo $total_cost_amount?> ৳ </td>
                  </tr>


                  <tr style="font-size:10px;">  
                    <td width="60%" style="font-weight:bold;"><?php ?>Total Cash In Hand Amount</td>
                    <td width="40%" style="text-align:right"><?php echo ($total_sell_income_count+$total_old_due_rec)-$total_cost_amount ?> ৳ </td>
                  </tr>
                 
                  </tbody>
               </table>
            </div>
            <!-- /.card-body -->

            <?php } else{?>
            <h4 style="color:red;font-weight:bold;text-align:center;">No Report Found in This Date....</h4>   

            <?php } ?>
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
<script src="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_jquery_1.7.1.js"></script>
  <script>
        $('#report_start_date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#report_start_date').datepicker("setDate", new Date());



        $('#report_end_date').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });
    $('#report_end_date').datepicker("setDate", new Date());

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
        filename:     'MonthlyTransaction_Report.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

      // New Promise-based usage:
      html2pdf().set(opt).from(element).save();
      }
    </script>
