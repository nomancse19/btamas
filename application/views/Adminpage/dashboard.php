<meta http-equiv="refresh" content="30" >
<style>

   .small-box >.inner_a > .inner {
    padding: 10px; 
}


.small-box > .small-box-footer {
    margin-top: -15px;
}

.bg-request-vehicles{
    background-color: #D0128F  !important;
}

.bg-request-vehicles, .bg-request-vehicles > a {
    color: #fff !important;
}

.bg-on-the-way{
    background-color: #671AC6 !important;
}

.bg-on-the-way, .bg-on-the-way > a {
    color: #fff !important;
}

.bg-today-income{
    background-color: #780988 !important;
}

.bg-today-income, .bg-today-income > a {
    color: #fff !important;
}


.bg-pending-request{
    background-color: #4a1eac !important;
}
.bg-pending-request, .bg-pending-request > a {
    color: #fff !important;
}


.bg-complete{
    background-color: #198e36 !important;
}
.bg-complete, .bg-complete > a {
    color: #fff !important;
}


.bg-cancel{
    background-color: #c81919 !important;
}
.bg-cancel, .bg-cancel > a {
    color: #fff !important;
}


.bg-payment-pending{
    background-color: #003771db !important;
}
.bg-payment-pending, .bg-payment-pending > a {
    color: #fff !important;
}


.bg-reg-request{
    background-color: #df00d1 !important;
}
.bg-reg-request, .bg-reg-request > a {
    color: #fff !important;
}



.modal-content{
  height:650px;
}






 </style>
<?php 
$account_request_status=$this->superHomeModel->get_new_vehicles_request_notification();
if($account_request_status){
    $account_request_status=$account_request_status->account_request_status;

}



$new_vehicles_request_info=$this->superHomeModel->get_new_vehicles_request_notification();
if($new_vehicles_request_info){
    $new_vehicles_request_info=$new_vehicles_request_info->vehicles_request_status;

}



?>

<script>
var notification_tone_account_request='<?php echo $account_request_status; ?>';
var notification_tone_vehicles_request='<?php echo $new_vehicles_request_info; ?>';
if((notification_tone_account_request ==1)||(notification_tone_vehicles_request ==1)){
  var audio = new Audio("<?php echo base_url();?>assets/backend/audio/CT_Tone.mp23");
audio.play(); 
}
</script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        

        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Dashboard</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

        <marquee behavior="scroll" direction="left" scrolldelay="170"
           onmouseover="this.stop();"
           onmouseout="this.start();"><span style="color:red;font-weight:bold;font-size:20px;"><?php if($new_vehicles_request_info==1){echo "You Have New Vehicles Request.......";} if($account_request_status==1){echo "You Have New Transport Licence Registration Request.....";} ?></span></marquee>


  <!--<button type="button" id="image_click" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Grand Opening
  </button>-->



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <div class="modal-body">
        <img width="100%" height="550px;" src="<?php echo base_url(); ?>images/cholo_grand.png" alt="">
      </div>
     
    </div>
  </div>
</div>
<!--- Model --->
<?php  if(in_array("dashboard",$this->session->userdata('user_permission'))){ ?>


                  <!-- ./col -->
           <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-reg-request">
              <a href="<?php echo base_url();?>Cholotransportowner/UserAccountRequest" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Registration Request</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->vehiclesRequestModel->count_all_user_account_request(); ?> </p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url();?>Cholotransportowner/UserAccountRequest" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
         

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-today-income">
              <a href="" class="inner_a">
              <div class="inner">
                <h4 style="text-align:center;">Today Income</h4>
                <p style="text-align:center;font-size:27px;font-weight:bold;"><?php echo $this->reportModel->sum_of_total_today_income(); ?>৳</p>
              </div>
              </a>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
       
  
        </div>


        <?php } else{?>
          <div class="row">
          <h4>Welcome To Benapole Transport Agency Malik Somity Dashboard...</h4>
          </div>



        <?php } ?>
















        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
   

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <!-- /.card-header -->

              <!-- /.card-body -->
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <!-- /.card -->
          </section>

          <section class="col-lg-5 connectedSortable">



          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




<script type="text/javascript">
$(document).ready(function(){
  document.getElementById("image_click55").click();
});


setTimeout(function(){
  $('#exampleModal').modal('hide')
}, 3000);
</script>


