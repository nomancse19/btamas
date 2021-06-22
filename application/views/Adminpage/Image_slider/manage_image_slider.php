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
            <h1>Image Slider Manage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageImageSlider">Manage Image Slider</a></li>
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






          
            <div class="card-body">
               


            <aside id="info-block">
                <section class="file-marker">
                  <div>
                    <div class="box-title">
                        Add & Manage Image Slider
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">


                      <form role="form" action="<?php echo base_url();?>Cholotransportowner/SaveImageSlider" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="<?=SuperHomeController::csrf_name();?>" value="<?=SuperHomeController::csrf_token();?>" />

                          <div class="row">
                          <div class="col-sm-3">
                            <div class="form-group">
                            <label for="image_slider_link">Image Slider Link<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                            <input type="text" class="form-control form-control-sm" name="image_slider_link" required id="image_slider_link" placeholder="Enter Image Link,Must Start https://">
                          </div>

                            </div>




                          
                            <div class="col-sm-3">
                            <div class="form-group">

                              <label for="vehicles_images_name">Upload Slider Image<span style="color:red;font-weight:bold;font-size:17px;">*</span> <span style="color:blue;font-weight:bold;" data-toggle="tooltip" data-placement="right" title="Max-size:18MB, Max-width X Height:1165 X 365, Image-Type:jpg,jpeg,png,gif"> Click </span></label>
                              <input type="file" class="form-control form-control-sm" name="image_slider_image_name" id="image_slider_image_name" >

                            </div>

                        
                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                              <label for="image_slider_is_active">Select Image Status<span style="color:red;font-weight:bold;font-size:17px;">*</span> </label>
                              <select name="image_slider_is_active" id="" class="form-control form-control-sm">
                                <option value="">Select Any One</option>
                                <option selected value="1">Active</option>
                                <option value="0">Deactive</option>
                              </select>

                            </div>

                        
                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                            <label for="vehicles_images_name"></label>
                            <button type="submit"  class="btn btn-primary form-control ">Upload Slider Image</button>
                            </div>
                        
                          
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
              <table class="table table-bordered table-hover" id="datatable">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Image Link</th>
                  <th>Image</th>
                  <th>Active</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($slide_info){
                    $sl=0;
                    foreach($slide_info as $all_slide_info){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_slide_info->image_slider_link;?></td>
            

                  <td class="center">
                      <a href="#" class="modal_image">
                    <img src="<?php echo base_url().$all_slide_info->image_slider_image_name; ?>" width="60" height="30" >
                    </a>
                 </td>
                 <td>
                 <?php if($all_slide_info->image_slider_is_active==1){?>
                      <span class="badge badge-success">Active </span>
                 <?php }else{ ?>
                 <span class="badge badge-danger">Deactive </span>
                 <?php } ?>
                 </td>

                  <td class="center" style="font-size:16px;text-align:center;">

                  <?php if($all_slide_info->image_slider_is_active==1){?>
                    <a title="Deactive Image Slider." href="<?php echo base_url();?>SuperHomeController/unpublish_image_slider/<?php echo $all_slide_info->image_slider_id;?>">
                      <i style="color:red;" class="fa fa-thumbs-down"></i>
                    </a>
                    <?php } else{?>
                    <a  title="Active Image Slider." href="<?php echo base_url();?>SuperHomeController/publish_image_slider/<?php echo $all_slide_info->image_slider_id;?>">
                      <i class="fa fa-thumbs-up"></i>
                    </a>
                    <?php } ?>


                    <?php
                      if(in_array("slider_delete",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <a title="Delete Slider Image With Source Images" href="<?php echo base_url()?>SuperHomeController/Delete_image_slider/<?php echo $all_slide_info->image_slider_id ;?>" onclick="return checkdelete();">
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

  