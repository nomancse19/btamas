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
</style>
<script>
  function checkdelete(){
    return confirm("Are You Want to Sure Detete Vehicles Paper Images !");
  }
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicles All Paper Image Manage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddVehicles">Add New Vehicles Info</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageVehicles">Manage Vehicles Info</a></li>
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
              <h3 class="card-title" style="color:blueviolet;font-weight:bold;">Vehicles No - <?php echo $vehicles_data->vehicles_no; ?> , Vehicles Owner Name - <?php echo $vehicles_data->vehicles_owner_name; ?></h3>
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
                        Upload Vehicles All Paper Images
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">


                      <form role="form" action="<?php echo base_url();?>Cholotransportowner/SaveVehiclesImage/<?php echo $vehicles_data->vehicles_info_id;?>" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="<?=VehiclesController::csrf_name();?>" value="<?=VehiclesController::csrf_token();?>" />
                        <input type="hidden" name="vehicles_owner_id" value="<?php echo $vehicles_data->vehicles_owner_id;?>">
                        <input type="hidden" name="vehicles_info_id" value="<?php echo $vehicles_data->vehicles_info_id;?>">

                          <div class="row">
                          <div class="col-sm-1">
                          </div>
                            <div class="col-sm-5">
                            <div class="form-group">

                              <label for="vehicles_images_name">Select Vehicles Paper Images <span style="color:red;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:10MB, Max-width X Height:7000 X 4000, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                              <input type="file" class="form-control form-control-sm" name="vehicles_images_name" id="vehicles_images_name" >

                            </div>

                          
                         

                            </div>

                            <div class="col-sm-4">
                            <div class="form-group">
                            <label for="vehicles_paper_name">Vehicles Upload Paper Name<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <input type="text" class="form-control form-control-sm" name="vehicles_paper_name" required id="vehicles_paper_name" placeholder="Enter Vehicles Upload Paper / Document Name">
                          </div>

                            </div>

                            <div class="col-sm-4">

                            </div>
                            <div class="col-sm-4">
                            <button type="submit"  class="btn btn-primary">Upload Vehicles Paper Photo</button>
                           </div>

                            </div>

                          </form>



                      </div>
                    </div>
                  </div>
                </section>
              </aside>










          
            




            </div>
            






            <div class="card-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>V. Owner Name</th>
                  <th>Vehicles No</th>
                  <th>Paper Name</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($vehicles_image_data){
                    $sl=0;
                    foreach($vehicles_image_data as $all_vehicles_image_data){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_vehicles_image_data->vehicles_owner_name;?></td>
                  <td><?php echo $all_vehicles_image_data->vehicles_no;?></td>
                  <td><?php echo $all_vehicles_image_data->vehicles_paper_name;?></td>

                  <td class="center">
                      <a href="#" class="modal_image">
                    <img src="<?php echo base_url().$all_vehicles_image_data->vehicles_images_name; ?>" width="60" height="30" >
                    </a>
                 </td>


                  <td class="center" style="font-size:16px;text-align:center;">

                    <a title="Vehicles Paper Images Delete" href="<?php echo base_url()?>Backend/VehiclesController/delete_vehicles_paper_images/<?php echo $all_vehicles_image_data->vehicles_images_id;?>" onclick="return checkdelete();">
                      <i style="color:red;" class="fa fa-trash"></i>
                    </a>


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

  