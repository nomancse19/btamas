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
            <h1>Add & Manage System User</h1>
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
                        Add & Manage System User
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">


                      <form role="form" action="<?php echo base_url();?>Cholotransportowner/SaveNewUser" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="<?=UserController::csrf_name();?>" value="<?=UserController::csrf_token();?>" />

                          <div class="row">


                           <div class="col-sm-4">
                                <div class="form-group">
                                <label for="image_slider_link">Enter User Name : <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="username" required id="username" placeholder="Enter User Name.....">
                                </div>
                            </div>




                          
                            <div class="col-sm-4">
                                <div class="form-group">
                                <label for="image_slider_link">Enter Full Name : <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="fullname" required id="fullname" placeholder="Enter User Full Name.....">
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <div class="form-group">
                                <label for="image_slider_link">Enter User Email : <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="user_email" required id="user_email" placeholder="Enter User Unique Email Address....">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                <label for="image_slider_link">Enter User Password : <span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                                <input type="password" class="form-control form-control-sm" name="password" required id="password" placeholder="Enter User Password...">
                                </div>
                            </div>




                            <div class="col-sm-4">
                            <div class="form-group">

                              <label for="activation_status">Select User Activation Status : <span style="color:red;font-weight:bold;font-size:17px;">*</span> </label>
                              <select name="activation_status" id="" class="form-control form-control-sm">
                                <option value="">Select Any One</option>
                                <option selected value="1">Active</option>
                                <option value="0">Deactive</option>
                              </select>

                            </div>

                        
                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                            <label for="vehicles_images_name"></label>
                            <button type="submit"  class="btn btn-primary form-control ">Save New System User</button>
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
                  <th>Username</th>
                  <th>FullName</th>
                  <th>Email</th>
                  <th>Active</th>
                  <th>IsEmpty</th>
                  <th>Permission</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($user_info){
                    $sl=0;
                    foreach($user_info as $all_user_info){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_user_info->username;?></td>
                  <td><?php echo $all_user_info->fullname;?></td>
                  <td><?php echo $all_user_info->user_email;?></td>

                 <td>
                 <?php if($all_user_info->activation_status==1){?>
                      <span class="badge badge-success">Active </span>
                 <?php }else{ ?>
                 <span class="badge badge-danger">Deactive </span>
                 <?php } ?>
                 </td>





                    <?php
                      if(in_array("assign_user_empty_permission",$this->session->userdata('user_permission')))
                        {
                      ?>
                 <td>
                 <a title="All Permission Empty in User" href="<?php echo base_url();?>Backend/UserController/empty_user_permission/<?php echo $all_user_info->user_id;?>">
                <span class="badge badge-danger">Empty</span>
                    </a>
                <a title="All Permission Delete in User" href="<?php echo base_url();?>Backend/UserController/delete_user_permission/<?php echo $all_user_info->user_id;?>">
                <span class="badge badge-danger">Delete</span>
                    </a>
                 </td>
                 <?php } ?>




                    <?php
                      if(in_array("assign_user_permission",$this->session->userdata('user_permission')))
                        {
                      ?>
                 <?php if($all_user_info->activation_status==1){?>
                 <td><a class="btn btn-primary btn-sm" href="<?php echo base_url();?>Cholotransportowner/AssignUserPermission/<?php echo $all_user_info->user_id;?>">Assign</a> </td>
                 <?php }else{ ?>
                   <td> <button class="btn btn-primary btn-sm" disabled="" title="Assign Permission disabled Because User Is Inactive....">Assign</button></td>
                    <?php } ?>
                    <?php } ?>




                 <td class="center" style="font-size:16px;text-align:center;">


                 <?php
                      if(in_array("publish_user",$this->session->userdata('user_permission')))
                        {
                      ?>
                  <?php if($all_user_info->activation_status==1){?>
                    <a title="Deactive User." href="<?php echo base_url();?>Backend/UserController/Unpublish_User/<?php echo $all_user_info->user_id;?>">
                      <i style="color:red;" class="fa fa-thumbs-down"></i>
                    </a>
                    <?php } else{?>
                    <a  title="Active User." href="<?php echo base_url();?>Backend/UserController/Publish_User/<?php echo $all_user_info->user_id;?>">
                      <i class="fa fa-thumbs-up"></i>
                    </a>
                    <?php } ?>
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

  