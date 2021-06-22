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
            <h1>Vehicles Info Manage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddVehicles">Add Vehicles</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageVehicles">Manage Vehicles</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddChalan">Add Chalan</a></li>
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
              <h3 class="card-title">All Vehicles Info Update And Delete</h3>
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
                  <th>V.Owner</th>
                  <th>V. No</th>
                  <th>V.Avail.Sts</th>
                  <th>Status</th>
                  <th>Driver</th>
                  <th>Brta</th>
                  <th>Fitness</th>
                  <th>Tax</th>
                  <th>Document</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($join_vehicles_data){
                    $sl=0;
                    foreach($join_vehicles_data as $all_join_vehicles_data){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><textarea readonly style="width:100%;height:28px;border:none;"><?php echo $all_join_vehicles_data->vehicles_owner_name;?></textarea></td>
                  <td><textarea readonly style="width:170px;height:28px;border:none;"><?php echo $all_join_vehicles_data->vehicles_no;?></textarea></td>
                  <td>
                    <?php
                    if(($all_join_vehicles_data->vehicles_is_available)==1){
                      echo "<span style='color:blue;font-weight:bold;'><textarea style='color:blue;font-weight:bold;width:100%;height:28px;border:none;'>Active, No Chalan Added</textarea></span>";
                    }else{
                      echo "<span style='color:red;font-weight:bold;'><textarea style='color:red;font-weight:bold;width:100%;height:28px;border:none;'>Deactive, Chalan Added </textarea></span>";
                    }
                    ?>
                  </td>

                  <td class="center">
                    <?php
                      $total_brta_day = (strtotime($all_join_vehicles_data->vehicles_brta_paper_end_date))-(strtotime(date("Y-m-d")));
                      $brta_remain_day = floor($total_brta_day /(60*60*24));

                      $total_fitness_day = (strtotime($all_join_vehicles_data->vehicles_fitness_paper_end_date))-(strtotime(date("Y-m-d")));
                      $fitness_remain_day = floor($total_fitness_day /(60*60*24));

                      $total_tax_token_day = (strtotime($all_join_vehicles_data->vehicles_tax_token_end_date))-(strtotime(date("Y-m-d")));
                      $tax_token_remain_day = floor($total_tax_token_day /(60*60*24));
                    ?>
                      <?php if(($all_join_vehicles_data->vehicles_info_is_active==1)){?>
                      <span class="badge badge-success">Active</span>
                      <?php } else{?>
                      <span class="badge badge-danger">Deactive</span>
                      <?php } ?>
                  </td>



                  <?php
                      if(in_array("vehicles_change_driver",$this->session->userdata('user_permission')))
                        {
                      ?>
                  <td>
                    <?php if($all_join_vehicles_data->vehicles_is_driver==0){ ?>
                     <a href="<?php echo base_url();?>Cholotransportowner/AddDriverInVehicles/<?php echo $all_join_vehicles_data->vehicles_info_id;?>"><span class="badge badge-warning">No, Add Driver</span></a> 
                    <?php } else{?>
                      <a href="<?php echo base_url();?>Cholotransportowner/AddDriverInVehicles/<?php echo $all_join_vehicles_data->vehicles_info_id;?>"><span class="badge badge-primary">Yes, Change Driver</span></a> 
                    <?php } ?>
                  </td>
                  <?php } ?>



                  <td>
                    <?php 
                      if($brta_remain_day<=0){
                        $this->vehiclesModel->deactive_vehicles_account_by_vehicles_id2($all_join_vehicles_data->vehicles_info_id);
                        echo "<span style='color:red;font-weight:bold;'><textarea style='color:red;font-weight:bold;width:100%;height:28px;border:none;'>Expired</textarea></span>";
                      }else{
                        echo "<span style='color:blue;font-weight:bold;text-align:center;'><textarea style='color:blue;font-weight:bold;width:100%;height:28px;border:none;'>".$brta_remain_day."-Days</textarea></span>";
                      }
                    ?>
                  </td>
                  <td>
                  <?php 
                      
                      if($fitness_remain_day<=0){
                        $this->vehiclesModel->deactive_vehicles_account_by_vehicles_id2($all_join_vehicles_data->vehicles_info_id);
                        echo "<span style='color:red;font-weight:bold;'><textarea style='color:red;font-weight:bold;width:100%;height:28px;border:none;'>Expired</textarea></span>";
                      }else{
                        echo "<span style='color:blue;font-weight:bold;text-align:center;'><textarea style='color:blue;font-weight:bold;width:100%;height:28px;border:none;'>".$fitness_remain_day."-Days</textarea></span>";
                      }
                    ?>

                  </td>
                  <td>
                  <?php 
                     
                      if($tax_token_remain_day<=0){
                        $this->vehiclesModel->deactive_vehicles_account_by_vehicles_id2($all_join_vehicles_data->vehicles_info_id);
                        echo "<span style='color:red;font-weight:bold;'><textarea style='color:red;font-weight:bold;width:100%;height:28px;border:none;'>Expired</textarea></span>";
                      }else{
                        echo "<span style='color:blue;font-weight:bold;text-align:center;'><textarea style='color:blue;font-weight:bold;width:100%;height:28px;border:none;'>".$tax_token_remain_day."-Days</textarea></span>";
                      }
                    ?>

                  </td>
                    
                  <?php
                      if(in_array("upload_vehicles_document",$this->session->userdata('user_permission')))
                        {
                      ?>
                  <td><a href="<?php echo base_url();?>Cholotransportowner/ManageVehiclesImage/<?php echo $all_join_vehicles_data->vehicles_info_id;?>"><span class="badge badge-primary">Click Upload</span></a></td>
                  <?php } ?>



                  
                  <td class="center" style="font-size:16px;width:12%;">

                  <?php
                      if(in_array("publish_vehicles",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <?php if($all_join_vehicles_data->vehicles_info_is_active==1){?>
                    <a title="Deactive Vehicles Account." href="<?php echo base_url();?>Backend/VehiclesController/deactive_vehicles/<?php echo $all_join_vehicles_data->vehicles_info_id;?>">
                      <i style="color:red;" class="fa fa-thumbs-down"></i>
                    </a>
                    <?php } else{?>
                    <a  title="Active Vehicles Account." href="<?php echo base_url();?>Backend/VehiclesController/active_vehicles/<?php echo $all_join_vehicles_data->vehicles_info_id;?>">
                      <i class="fa fa-thumbs-up"></i>
                    </a>
                    <?php } ?> |
                    <?php } ?>



                    <?php
                      if(in_array("edit_vehicles",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Edit/Update Vehicles Info" href="<?php echo base_url();?>Cholotransportowner/EditVehiclesInfo/<?php echo $all_join_vehicles_data->vehicles_info_id;?>" >
                        <i style="color:blue;" class="fa fa-edit"></i>
                    </a> |
                    <?php } ?>



                    <a title="Live Location View" href="<?php echo base_url();?>Backend/VehiclesController/ViewVehiclesLiveLocation/<?php echo $all_join_vehicles_data->vehicles_info_id;?>" >
                        <i class="fas fa-map-marker-alt"></i>
                    </a> |




                    <a title="View Vehicles Info Details" href="<?php echo base_url()?>Cholotransportowner/ViewVehiclesInfo/<?php echo $all_join_vehicles_data->vehicles_info_id;?>" >
                        <i style="color:green;" class="fa fa-eye"></i>
                    </a> |




                    <?php
                      if(in_array("delete_vehicles",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Vehicles Info Delete" href="<?php echo base_url()?>DeleteimporterInfo/<?php echo $all_join_vehicles_data->vehicles_info_id;?>" onclick="return checkdelete();">
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

  