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
            <h1>All Income Report...</h1>
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
                        All Income Report..
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">
            
            <form role="form" action="<?php echo base_url();?>Cholotransportowner/GetAllIncomeReport" enctype="multipart/form-data" method="get">
                      <input type="hidden" name="<?=ReportController::csrf_name();?>" value="<?=ReportController::csrf_token();?>" />

                          <div class="row">
                          <div class="col-sm-1">
                                <div class="form-group">
                            </div>

                        </div>


                          <div class="col-sm-3">
                            <div class="form-group">
                            <label for="image_slider_link">Select Report Start Date<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <input type="text" class="form-control form-control-sm" name="report_start_date" required id="report_start_date" placeholder="Select Report Start Date">
                          </div>

                            </div>



                          <div class="col-sm-3">
                            <div class="form-group">
                            <label for="image_slider_link">Select Report End Date<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <input type="text" class="form-control form-control-sm" name="report_end_date" required id="report_end_date" placeholder="Select Report End Date">
                          </div>

                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                            <label for=""></label>
                            <button type="submit"  class="btn btn-primary form-control ">Get All Income Report</button>
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
             if(isset($all_income_data)){
             $total_all_income_data=count($all_income_data);

             if($total_all_income_data>0){
             ?>

    <p>
    <button class="btn btn-primary" style="text-align:center;margin-left:45%" onclick="printDiv()">Print Report</button>
    <button class="btn btn-warning" style="text-align:center;margin-left:0%" onclick="savepdf()">Save PDF Report</button>
    </p>
            <div class="card-body" id="print_data">
            <title>BTAMS - All Income Details Report..</title>
                 <p style="text-align:center;font-weight:bold;">
                  <span style="font-size:25px;">  BTAMS</span><br>
                  <span style="font-size:19px;"> All Income Report</span><br>
                  <span style="font-size:18px;">By <?php echo date("d-m-Y H:i:s", strtotime($start_date)) ." To ".date("d-m-Y H:i:s", strtotime($end_date)); ?></span>
                  </p> 



              <table class="table table-bordered" style="float: left;width:100%;margin-left:2px;">
                  <thead>
                    <tr>
                    <th colspan="5" style="text-align:center;font-size:12px;">Income Account</th>
                    </tr>
                  </thead>

                  <tbody>
                  <tr style="font-size:11px;">
                   <th width="5%">SL</th>
                   <th width="15%">Date</th>
                   <th width="30%">Income Name</th>
                   <th width="30%">Income Details</th>
                   <th width="10%" style="text-align:right;">Sell Amount</th>
                   <th width="10%" style="text-align:right;">Due Amount</th>
                   </tr>
                  <?php if($all_income_data){ ?>
                    <?php 
                    $no=0;
                    $income_details_sell_amount=0;
                    $income_details_due_amount=0;
                    $income_old_due_rec=0;
                    ?>
                  <?php foreach($all_income_data as $all_income_data_info){ 
                    $income_details_sell_amount=$income_details_sell_amount+$all_income_data_info->income_details_sell_amount;
                    $income_details_due_amount=$income_details_due_amount+$all_income_data_info->income_details_due_amount;
                    $income_old_due_rec=$income_old_due_rec+$all_income_data_info->income_details_due_paid_amount;
                    $no++;
                    
                    ?>
                  <tr style="font-size:10px;">
                    <td><?php echo $no; ?></td>
                    <td><?php echo $all_income_data_info->income_details_added_date_time;?></td>
                    <?php if($all_income_data_info->income_details_due_paid_status=='1'){?>
                      <td><?php echo "Chalan Old Due Received ".mb_strimwidth($all_income_data_info->income_details_id_no, 0, 20, "...");?></td>
                      <?php }else{ ?>
                    <td><?php echo mb_strimwidth($all_income_data_info->income_category_name.' '.$all_income_data_info->income_details_id_no, 0, 36, "...");?></td>
                        <?php } ?>
                    <td><?php echo mb_strimwidth($all_income_data_info->income_details_name,0,45,"..");?></td>
                        <?php if($all_income_data_info->income_details_due_paid_status=='1'){?>
                    <td style="text-align:right;"><?php echo $all_income_data_info->income_details_due_paid_amount;?></td>
                    <td style="text-align:right;"><?php echo "0";?></td>
                      <?php }else{ ?>
                    <td style="text-align:right;"><?php echo $all_income_data_info->income_details_sell_amount;?></td>
                    <td style="text-align:right;"><?php echo $all_income_data_info->income_details_due_amount;?></td>

                      <?php } ?>

                  </tr>  
                  <?php } ?>
                    <tr style="font-size:10px;">
                      <td colspan="4" style="text-align:center;font-weight:bold;">Total</td>
                    

 
                      <td style="text-align:right;font-weight:bold;"><?php echo $income_details_sell_amount+$income_old_due_rec; ?></td>
                      <td style="text-align:right;font-weight:bold;"><?php echo $income_details_due_amount; ?></td>

                    </tr>
                  <?php } ?>



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
<script src="<?php echo base_url();?>assets/backend/noman_datetimepicker/datetimepicker.min2.5.20.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script>
       jQuery.datetimepicker.setLocale('en');
       var now = new Date();
      var dateString = moment(now).format('YYYY-MM-DD');

     var dateStringWithTime = moment(now).format('YYYY-MM-DD HH:mm:ss');
       jQuery('#report_start_date').datetimepicker({
     
        timepicker:true,
        format:'Y-m-d H:i:s',
            lang:'en',
        });
        $('#report_start_date').val(dateStringWithTime);


       jQuery('#report_end_date').datetimepicker({
     
        timepicker:true,
        format:'Y-m-d H:i:s',
            lang:'en',
        });
        $('#report_end_date').val(dateStringWithTime);


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
        filename:     'All_IncomeReport.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
      };

      // New Promise-based usage:
      html2pdf().set(opt).from(element).save();
      }
    </script>
