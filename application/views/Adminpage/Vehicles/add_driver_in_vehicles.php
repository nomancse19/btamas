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
            <h1>Assign Driver In Vehicles With Manage</h1>
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
                       Add Driver in Vehicles 
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">


                      <form role="form" action="<?php echo base_url();?>Cholotransportowner/SaveDriverInVehicles/<?php echo $vehicles_data->vehicles_info_id;?>" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="<?=VehiclesController::csrf_name();?>" value="<?=VehiclesController::csrf_token();?>" />
                        <input type="hidden" name="vehicles_info_id" value="<?php echo $vehicles_data->vehicles_info_id;?>">

                           
                          <div class="form-group row">
                            <span class="col-sm-2 col-form-label"></span>
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Select One Available Driver</label>
                            <div class="col-sm-4">
                            <select class="form-control select2" required='' name="driver_info_id" style="width: 100%;">
                                <option value= '' selected="selected">Select One Driver</option>
                               <?php if($all_driver_data_for_select){ 
                                 foreach($all_driver_data_for_select as $driver_data_for_selected){
                                 ?>
                                <option value="<?php echo $driver_data_for_selected->driver_info_id;?>"><?php echo $driver_data_for_selected->driver_name.'-'.$driver_data_for_selected->driver_mobile_number;?></option>
                                 <?php } ?>
                               <?php } else{?>
                               <option value=''> No Available Driver Found..</option>
                               <?php } ?>
                              </select>
                            </div>
                          </div>
                    <div class="row">
                            <div class="col-sm-5"></div>
                          
                          <div class="col-sm-4">
                          <button type="submit"  class="btn btn-primary">Assign Driver In Selected Vehicles</button>
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
                <thead style="font-size:14px;">
                <tr>
                  <th>Driver Name</th>
                  <th>Mobile</th>
                  <th>Card No</th>
                  <th>License No</th>
                  <th>image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody style="font-size:12px;">
                  <?php
                  if($driver_data){
                  ?>
                  <tr>
                  <td><?php echo $driver_data->driver_name;?></td>
                  <td><?php echo $driver_data->driver_mobile_number;?></td>
                  <td><?php echo $driver_data->driver_card_no;?></td>
                  <td><?php echo $driver_data->driver_license_number;?></td>

                  <td class="center">
                      <a href="#" class="modal_image">
                    <img src="<?php echo base_url().$driver_data->driver_profile_photo; ?>" width="60" height="30" >
                    </a>
                 </td>
                    <td>
                   <a href="<?php echo base_url();?>Cholotransportowner/DeleteDriverInVehicles/<?php echo $driver_data->driver_info_id;?>"><span class="btn btn-danger btn-xs">Delete</span></a>
                    </td>
                  </tr>
            
                  <?php } else{?>

                    <tr><td  colspan='6' style="text-align:center;font-weight:bold;color:red;">No Driver Found...</td></tr>
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
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>


<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    })

</script>
  