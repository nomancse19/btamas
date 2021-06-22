<script>
  function checkdelete(){
    return confirm("Are You Want to Sure Detete importer Account!");
  }
</script>
<style>
  .print_button{
    cursor: pointer;
  }
  .print_button:hover{
    font-weight: bold;
    font-size: 17px;
    color:#b700fa;
  }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
            <h1>All Chalan Manage</h1>
          </div>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddVehicles">Add Vehicles</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageVehicles">Manage Vehicles</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddChalan">Add Chalan</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageChalan">Manage Chalan</a></li>
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
              <h3 class="card-title">All Chalan Info Update & Manage</h3>
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
              <table id="datatable" style="font-size:14px;" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Chalan no</th>
                  <th>C.Status</th>
                  <th>P.status</th>
                  <th>Vehicles</th>
                  <th>V.status</th>
                  <th>Document</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($chalan_data){
                    $sl=0;
                    foreach($chalan_data as $all_chalan_data){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_chalan_data->chalan_created_date;?></td>
                  <td><?php echo $all_chalan_data->chalan_importer_name.$all_chalan_data->chalan_exporter_name;?></td>
                  <td><?php echo $all_chalan_data->chalan_no;?></td>

                  <td style="text-align:center;">
                      <?php if($all_chalan_data->chalan_status==0){?>
                      <span class="badge badge-warning">Pending</span>
                      <?php } ?>
                      <?php if($all_chalan_data->chalan_status==1){?>
                      <span class="badge badge-primary">On The Way</span>
                      <?php } ?>
                      <?php if($all_chalan_data->chalan_status==2){?>
                      <span class="badge badge-success" style="font-weight:bold;">Completed</span>
                      <?php } ?>
                      <?php if($all_chalan_data->chalan_status==3){?>
                      <span class="badge badge-danger">Cancel.</span>
                      <?php } ?>
                  </td>

                  <td style="text-align:center;">
                      <?php if($all_chalan_data->chalan_payment_status==0){?>
                      <span class="badge badge-warning">Due</span>
                      <?php } ?>
                      <?php if($all_chalan_data->chalan_payment_status==1){?>
                      <span class="badge badge-success" style="font-weight:bold;">Paid</span>
                      <?php } ?>
                  </td>

                  <td>
                    <textarea class="form-control" style="width:100px;height:30px;border:none;font-size:10px;"><?php echo $all_chalan_data->chalan_vehicles_no; ?></textarea>
                  </td>


                  <td>
                  <?php         
                  $vehicles_is_available=$this->chalanModel->all_vehicles_info_by_vehicles_info_id($all_chalan_data->vehicles_info_id)->vehicles_is_available; 
                  if($vehicles_is_available==0){
                  ?>
                    <span class="badge badge-danger" style="font-weight:bold;">No,Available</span>
                    <?php } else{?>
                      <span class="badge badge-success">Available.</span>
                      <?php } ?>
                  </td>
            

        

                  <td><a href="<?php echo base_url();?>Cholotransportowner/ManageVehiclesImage/<?php echo $all_chalan_data->chalan_info_id;?>"><span class="badge badge-primary">Upload</span></a></td>
                  <td class="center" style="font-size:16px;">

         

                    <?php
                      if(in_array("chalan_status_change",$this->session->userdata('user_permission')))
                        {
                      ?>
                   <span title="Chalan Status Change" style="cursor:pointer;" data-toggle="modal" data-id="<?php echo $all_chalan_data->chalan_info_id;?>" data-target="#chalan_response" id="chalanstatus" >
                        <i style="color:blue;"  class="fas fa-plus"></i>
                    </span> |
                    <?php } ?>


                    <?php
                      if(in_array("chalan_gps_location",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Live Location View" href="<?php echo base_url();?>Cholotransportowner/ViewLiveChalanLocation/<?php echo $all_chalan_data->chalan_no;?>" >
                        <i class="fas fa-map-marker-alt"></i>
                    </a> |
                    <?php } ?>

                

                    <?php
                      if(in_array("chalan_edit",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Edit/Update Vehicles Info" href="<?php echo base_url();?>Cholotransportowner/EditVehiclesInfo/<?php echo $all_chalan_data->chalan_info_id;?>" >
                        <i style="color:blue;" class="fa fa-edit"></i>
                    </a> |
                    <?php } ?>





                    <a title="View Chalan Info Details" href="<?php echo base_url()?>Cholotransportowner/ViewChalanInfo/<?php echo $all_chalan_data->chalan_info_id;?>" >
                        <i style="color:green;" class="fa fa-eye"></i>
                    </a> |



                    <?php
                      if(in_array("chalan_print",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <span class="print_button" title="Print Chalan Info"  onclick="print_chalan('<?php echo base_url().'Backend/ChalanController/print_chalan/'.$all_chalan_data->chalan_info_id; ?>')"><i class="fa fa-print"></i> </span>|
                   <!-- <a title="Print Chalan" href="<?php echo base_url()?>Backend/ChalanController/print_chalan/<?php echo $all_chalan_data->chalan_info_id;?>" >
                        <i style="color:black;" class="fa fa-print"></i>
                    </a> |-->
                    <?php } ?>




                    <?php
                      if(in_array("chalan_delete",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Chalan Info Delete" href="<?php echo base_url()?>DeleteimporterInfo/<?php echo $all_chalan_data->chalan_info_id;?>" onclick="return checkdelete();">
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
  <!-- /.content-wrapper -->

  <div class="modal fade" id="importerimage_view" tabindex="-1" role="dialog" aria-labelledby="add-modal-label">
      <div class="modal-dialog modal-dialog modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content" id="editdata">
          
        </div>
      </div>
    </div>


   <div class="modal fade" id="chalan_response" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog rollIn animated modal-dialog-centered" role="document">
    <div class="modal-content" id="editdata1">

    </div>
  </div>
</div>

<script type="text/javascript">
function print_chalan(url) {
    var printWindow = window.open( url, 'Print', 'left=400, top=200, width=500, height=300');
    _window.document.write(data);

// required for IE >= 10
_window.document.close();
_window.focus();

_window.document.body.onload = function() {
    // continue to print
    _window.print();
    _window.close();
};

return true;
}

</script>



<script>
$(document).ready(function(){
  $(document).on('click','#chalanstatus',function(e){
    var uid = $(this).data('id');
    $.ajax({
      url: '<?php echo base_url();?>Backend/ChalanController/change_chalan_status/'+uid,
      type: 'POST',
      dataType: 'html',
      success: function(data){
          $("#editdata1").html(data);
         }
    });
  });
});

</script>


<script>
$(document).ready(function(){
  $(document).on('click','#importerimageview',function(e){
    var uid = $(this).data('id');
   // alert(uid);
    $.ajax({
      url: '<?php echo base_url();?>Backend/ImporterController/importerimageview/'+uid,
      type: 'POST',
      dataType: 'html',
      success: function(data){
          $("#editdata").html(data);
         }
    });
  });
});

</script>

  