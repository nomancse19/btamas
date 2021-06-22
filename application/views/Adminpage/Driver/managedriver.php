<script>
  function checkdelete(){
    return confirm("Are You Want to Sure Detete importer Account!");
  }
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Driver Info Manage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddDriver">Add New Driver Data</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageDriver">Manage Driver Info</a></li>
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
              <h3 class="card-title">All Driver Info Update And Delete</h3>
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
                  <th>Name</th>
                  <th>Number</th>
                  <th>Password</th>
                  <th>License No</th>
                  <th>Status</th>
                  <th>Images</th>
                  <th>license</th>
                  <th>Document</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($driver_data){
                    $sl=0;
                    foreach($driver_data as $all_driver_data){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_driver_data->driver_name;?></td>
                  <td><?php echo $all_driver_data->driver_mobile_number;?></td>
                  <td><?php echo $all_driver_data->driver_account_password;?></td>
                  <td><?php echo $all_driver_data->driver_license_number;?></td>

                  <td class="center">
                    <?php
                      $total_license_day = (strtotime($all_driver_data->driver_license_end_date))-(strtotime(date("Y-m-d")));
                      $license_remain_day = floor($total_license_day /(60*60*24));

                    ?>
                      <?php if(($all_driver_data->driver_is_active==1)){?>
                      <span class="badge badge-success">Active</span>
                      <?php } else{?>
                      <span class="badge badge-danger">Deactive</span>
                      <?php } ?>
                  </td>
                  <td>
                    <span style="font-size:18px;cursor:pointer;color:blue;" data-toggle="modal" data-id="<?php echo $all_driver_data->driver_info_id;?>" data-target="#driverimage_view" id="driverimageview">
                            <i class="fas fa-image"></i>
                        </span>
                  </td>
                  <td>
                    <?php 
                   
                      if($license_remain_day<=0){
                        $this->driverModel->deactive_driver_account_by_driver_id2($all_driver_data->driver_info_id);
                        echo "<span style='color:red;font-weight:bold;'>Expired</span>";
                      }else{
                        echo "<span style='color:blue;font-weight:bold;text-align:center;'>".$license_remain_day."-Days</span>";
                      }
                    ?>
                  </td>
            
                  <?php
                      if(in_array("upload_driver_document",$this->session->userdata('user_permission')))
                        {
                      ?>
                  <td><a href="<?php echo base_url();?>Cholotransportowner/ManageDriverImage/<?php echo $all_driver_data->driver_info_id;?>"><span class="badge badge-primary">Click For Upload</span></a></td>
                   <?php } ?>

                  <td class="center" style="font-size:16px;">

                    <?php if($all_driver_data->driver_is_active==1){?>
                    <a title="Deactive Driver Account." href="<?php echo base_url();?>Backend/DriverController/deactive_driver/<?php echo $all_driver_data->driver_info_id;?>">
                      <i style="color:red;" class="fa fa-thumbs-down"></i>
                    </a>
                    <?php } else{?>
                    <a  title="Active Driver Account." href="<?php echo base_url();?>Backend/DriverController/active_driver/<?php echo $all_driver_data->driver_info_id;?>">
                      <i class="fa fa-thumbs-up"></i>
                    </a>
                    <?php } ?>



                    <?php
                      if(in_array("edit_driver",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Edit/Update Driver Info" href="<?php echo base_url();?>Cholotransportowner/EditDriverInfo/<?php echo $all_driver_data->driver_info_id;?>" >
                        <i style="color:blue;" class="fa fa-edit"></i>
                    </a>
                    <?php } ?>



                    <a title="View Vehicles Info Details" href="<?php echo base_url()?>Cholotransportowner/ViewDriverInfo/<?php echo $all_driver_data->driver_info_id;?>" >
                        <i style="color:green;" class="fa fa-eye"></i>
                    </a>


                    <?php
                      if(in_array("delete_driver",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Vehicles Info Delete" href="<?php echo base_url()?>DeleteimporterInfo/<?php echo $all_driver_data->driver_info_id;?>" onclick="return checkdelete();">
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

  <div class="modal fade" id="driverimage_view" tabindex="-1" role="dialog" aria-labelledby="add-modal-label">
      <div class="modal-dialog modal-dialog modal-lg" role="document">
        <div class="modal-content" id="editdata">
          
        </div>
      </div>
    </div>





<script>
$(document).ready(function(){
  $(document).on('click','#driverimageview',function(e){
    var uid = $(this).data('id');
   // alert(uid);
    $.ajax({
      url: '<?php echo base_url();?>Backend/DriverController/driverimageview/'+uid,
      type: 'POST',
      dataType: 'html',
      success: function(data){
          $("#editdata").html(data);
         }
    });
  });
});

</script>

  