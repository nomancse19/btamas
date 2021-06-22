<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<style>
    textarea {
  width: 150px;
  height: 30px;
}
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Pending Vehicles Request</h1>
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
              <h3 class="card-title">All Pending Vehicles Request</h3>
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
        <a href="<?php echo base_url();?>Cholotransportowner/AllVehiclesRequest"><button class="btn btn-primary">All Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/PendingVehiclesRequest"><button class="btn btn-warning">Pending Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/ProcessingVehiclesRequest"><button class="btn btn-info">Processing Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/AcceptedVehiclesRequest"><button class="btn btn-basic" style="background:blue;color:#fff;">Accepted, Processing Chalan</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/CompletedVehiclesRequest"><button class="btn btn-success">Completed Request</button></a>
        <a href="<?php echo base_url();?>Cholotransportowner/CancelVehiclesRequest"><button class="btn btn-danger">Cancel</button></a>
  
          <hr>         
            <table id="datatable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align:center;">SL</th>
                  <th style="text-align:center;">Date</th>
                  <th style="text-align:center;">Name</th>
                  <th style="text-align:center;">Mobile</th>
                  <th style="text-align:center;">Note</th>
                  <th style="text-align:center;">Type</th>
                  <th style="text-align:center;">Status</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($all_vehicles_request){
                    $sl=0;
                    foreach($all_vehicles_request as $all_vehicles_request_info){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_vehicles_request_info->vehicles_request_created_date;?></td>
                  <td><?php echo $all_vehicles_request_info->vehicles_request_user_name;?></td>
                  <td><?php echo $all_vehicles_request_info->vehicles_request_user_number;?></td>
                  <td>
                      <textarea style="width:100%;border:none;" readonly name="" id="" cols="0" rows="0"> <?php echo $all_vehicles_request_info->vehicles_request_some_note;?></textarea>
                </td>
                <td style="text-align:center">
                <?php 
                if($all_vehicles_request_info->vehicles_request_user_type=='cnf'){
                  echo "CNF";
                  }
                else if($all_vehicles_request_info->vehicles_request_user_type=='importer'){
                  echo "Importer";
                  }
                  else if($all_vehicles_request_info->vehicles_request_user_type=='exporter'){
                    echo "Exporter";
                    }
                  else if($all_vehicles_request_info->vehicles_request_user_type=='main_site'){
                    echo "Main Site";
                    }

                  ?>
                </td>
                  <td style="text-align:center;">
                      <?php if($all_vehicles_request_info->vehicles_request_status==0){?>
                      <span class="badge badge-warning">Pending</span>
                      <?php } ?>
                      <?php if($all_vehicles_request_info->vehicles_request_status==1){?>
                      <span class="badge badge-primary">Processing</span>
                      <?php } ?>
                      <?php if($all_vehicles_request_info->vehicles_request_status==2){?>
                      <span class="badge badge-info" style="font-weight:bold;">Accepted,Processing Chalan</span>
                      <?php } ?>
                      <?php if($all_vehicles_request_info->vehicles_request_status==3){?>
                      <span class="badge badge-success">Completed.</span>
                      <?php } ?>
                      <?php if($all_vehicles_request_info->vehicles_request_status==4){?>
                      <span class="badge badge-danger">Cancel.</span>
                      <?php } ?>
                  </td>
                        <td>
                        <?php
                          if(in_array("vehicles_request_change_status",$this->session->userdata('user_permission')))
                            {
                          ?>
                        <span class="btn btn-success btn-xs" style="cursor:pointer;" data-toggle="modal" data-id="<?php echo $all_vehicles_request_info->vehicles_request_id;?>" data-target="#vehicles_response" id="vehiclesrequest">
                          Change Status
                        </span>
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




  