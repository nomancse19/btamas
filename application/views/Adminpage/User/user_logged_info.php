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
    return confirm("Are You Want to Sure Detete Image Slider !");
  }
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage System User Logged Info</h1>
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




            <div class="row">
            <div class="col-4">
            <a href="<?php echo base_url(); ?>Backend/UserController/delete_all_user_log" class="btn btn-danger">Delete All Log</a>
            </div>
            </div>
            <div class="card-body">
              <table style="font-size:12px;" class="table table-bordered table-hover" id="datatable">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Email</th>
                  <th>Time</th>
                  <th>Location</th>
                  <th>Country</th>
                  <th>City</th>
                  <th>IpAddress</th>
                  <th>Browser</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($user_logged_info){
                    $sl=0;
                    foreach($user_logged_info as $all_user_logged_info){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_user_logged_info->user_email;?></td>

                 <td>
                 <?php if($all_user_logged_info->user_login_time!=NULL){?>
                  <span style="color:blue;font-weight:bold;">Login:- </span>&nbsp;&nbsp;    <span style="font-weight:bold;"><?php echo $all_user_logged_info->user_login_time;?></span>
                 <?php }else{ ?>
                   <span style="color:red;font-weight:bold;width:30px;">Logout:-</span>    <span style="font-weight:bold;"><?php echo $all_user_logged_info->user_logout_time;?></span>
                 <?php } ?>
                 </td>

                 <td><?php echo $all_user_logged_info->user_location;?></td>
                 <td><?php echo $all_user_logged_info->user_country;?></td>
                 <td><?php echo $all_user_logged_info->user_city;?></td>
                 <td><?php echo $all_user_logged_info->user_ip_address;?></td>
                 <td><textarea style="width:100%;border:none;height:24px;"; readonly><?php echo $all_user_logged_info->user_browser;?></textarea> </td>
                 <td style="text-align:center;font-size:15px;"><a href="<?php echo base_url(); ?>Backend/UserController/delete_user_log_by_id/<?php echo $all_user_logged_info->user_log_id; ?>"><i style="color:red;font-weight:bold;text-align:center;cursor:pointer;" class="fa fa-trash"></i></a></td>




                 
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
  <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">              
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <img src="" class="modalimagepreview" width="100%" >
      </div>
    </div>
  </div>
</div>


    <script>
$(function() {
    $('.modal_image').on('click', function() {
        $('.modalimagepreview').attr('src', $(this).find('img').attr('src'));
        $('#imagemodal').modal('show');   
    });		
});

</script>


<script>
$(document).ready(function(){
  $(document).on('click','#cnfimageview',function(e){
    var uid = $(this).data('id');
   // alert(uid);
    $.ajax({
      url: '<?php echo base_url();?>Backend/CnfController/cnfimageview/'+uid,
      type: 'POST',
      dataType: 'html',
      success: function(data){
          $("#editdata").html(data);
         }
    });
  });
});

</script>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

  