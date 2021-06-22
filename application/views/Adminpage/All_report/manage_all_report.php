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
            <h1>All Report Panel Of Benapole Transport agency Malik Somity</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
            
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







  