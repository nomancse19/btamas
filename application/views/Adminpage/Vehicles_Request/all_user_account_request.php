<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    textarea {
  width: 150px;
  height: 30px;
}
</style>
<script>
  function checkdelete(){
    return confirm("Are You Want to Sure Detete User Account Request.. !");
  }
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All New User Account Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/UserAccountRequest">All New User Request</a></li>
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
              <h3 class="card-title">All New User Account Request</h3>
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
        <a href="<?php echo base_url();?>Cholotransportowner/UserAccountRequest"><button class="btn btn-primary">All Request</button></a>

  
          <hr>         
            <table id="datatable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align:center;">SL</th>
                  <th style="text-align:center;">Date</th>
                  <th style="text-align:center;">Name</th>
                  <th style="text-align:center;">Mobile</th>
                  <th style="text-align:center;">Note</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($all_user_account_request){
                    $sl=0;
                    foreach($all_user_account_request as $all_user_account_request_info){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_user_account_request_info->all_user_account_request_created_date;?></td>
                  <td><?php echo $all_user_account_request_info->all_user_account_request_name;?></td>
                  <td><?php echo $all_user_account_request_info->all_user_account_request_number;?></td>
                  <td>
                      <textarea style="width:100%;border:none;" readonly> <?php echo $all_user_account_request_info->all_user_account_request_address;?></textarea>
                    </td>

                 <td style="text-align:center;">
                    <?php
                      if(in_array("user_registration_request_delete",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a onclick="return checkdelete();" href="<?php echo base_url(); ?>Backend/VehiclesRequestController/delete_user_account_request/<?php echo $all_user_account_request_info->all_user_account_request_id ;?>"><span class="btn btn-danger btn-xs">Delete</span></a> 
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

  <div class="modal fade" id="cnfimage_view" tabindex="-1" role="dialog" aria-labelledby="add-modal-label">
      <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content" id="editdata">
          
        </div>
      </div>
    </div>


    <!-- Modal -->
    <!-- Modal https://codepen.io/nhembram/pen/PzyYLL -->
    <!-- Modal https://bootsnipp.com/snippets/4n2l9 -->
<div class="modal fade" id="vehicles_response" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog rollIn animated modal-dialog-centered" role="document">
    <div class="modal-content" id="editdata1">

    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $(document).on('click','#vehiclesrequest',function(e){
    var uid = $(this).data('id');
    $.ajax({
      url: '<?php echo base_url();?>Backend/VehiclesRequestController/change_vehicles_request_status/'+uid,
      type: 'POST',
      dataType: 'html',
      success: function(data){
          $("#editdata1").html(data);
         }
    });
  });
});

</script>




  