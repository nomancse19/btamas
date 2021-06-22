<script>
  function checkdelete(){
    return confirm("Are You Want to Sure Detete exporter Account!");
  }
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Exporter Info Manage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddExporter">Add New Exporter Data</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageExporter">Manage Exporter Info</a></li>
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
              <h3 class="card-title">All Exporter Info Update And Delete</h3>
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
              <table id="datatable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Image</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($exporter_data){
                    $sl=0;
                    foreach($exporter_data as $all_exporter_data){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_exporter_data->exporter_full_name;?></td>
                  <td><?php echo $all_exporter_data->exporter_primary_mobile_number;?></td>
                  <td><?php echo $all_exporter_data->exporter_email_address;?></td>
                  <td><?php echo $all_exporter_data->exporter_user_password;?></td>
                  <td>
                    <span style="font-size:18px;cursor:pointer;color:blue;" data-toggle="modal" data-id="<?php echo $all_exporter_data->exporter_info_id;?>" data-target="#exporterimage_view" id="exporterimageview">
                            <i class="fas fa-image"></i>
                        </span>
                  </td>
                  <td class="center">
                      <?php if($all_exporter_data->exporter_is_active==1){?>
                      <span class="badge badge-success">Active</span>
                      <?php } else{?>
                      <span class="badge badge-danger">Deactive</span>
                      <?php } ?>
                  </td>


                  <td class="center" style="font-size:16px;">


                    <?php
                      if(in_array("publish_exporter",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <?php if($all_exporter_data->exporter_is_active==1){?>
                    <a title="Deactive Exporter Account." href="<?php echo base_url();?>Backend/ExporterController/deactive_exporter/<?php echo $all_exporter_data->exporter_info_id;?>">
                      <i style="color:red;" class="fa fa-thumbs-down"></i>
                    </a>
                    <?php } else{?>
                    <a  title="Active Exporter Account." href="<?php echo base_url();?>Backend/ExporterController/active_exporter/<?php echo $all_exporter_data->exporter_info_id;?>">
                      <i class="fa fa-thumbs-up"></i>
                    </a>
                    <?php } ?>
                    <?php } ?>

                    



                    <?php
                      if(in_array("edit_exporter",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Edit/Update Exporter Info" href="<?php echo base_url();?>Cholotransportowner/EditExporterInfo/<?php echo $all_exporter_data->exporter_info_id;?>" >
                        <i style="color:blue;" class="fa fa-edit"></i>
                    </a>
                    <?php } ?>



                    <a title="View Exporter Info Details" href="<?php echo base_url()?>Cholotransportowner/ViewExporterInfo/<?php echo $all_exporter_data->exporter_info_id;?>" >
                        <i style="color:green;" class="fa fa-eye"></i>
                    </a>


                    <?php
                      if(in_array("delete_exporter",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Exporter Info Delete" href="<?php echo base_url()?>DeleteexporterInfo/<?php echo $all_exporter_data->exporter_info_id;?>" onclick="return checkdelete();">
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

  <div class="modal fade" id="exporterimage_view" tabindex="-1" role="dialog" aria-labelledby="add-modal-label">
      <div class="modal-dialog modal-dialog modal-lg" role="document">
        <div class="modal-content" id="editdata">
          
        </div>
      </div>
    </div>





<script>
$(document).ready(function(){
  $(document).on('click','#exporterimageview',function(e){
    var uid = $(this).data('id');
    $.ajax({
      url: '<?php echo base_url();?>Backend/exporterController/exporterimageview/'+uid,
      type: 'POST',
      dataType: 'html',
      success: function(data){
          $("#editdata").html(data);
         }
    });
  });
});

</script>

  