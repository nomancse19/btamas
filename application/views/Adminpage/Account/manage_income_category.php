<script src="<?php echo base_url();?>assets/backend/dist/js/character-counter.js"></script>
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
    return confirm("Are You Want to Sure Detete Truck Lagbe Images !");
  }
</script>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add & Manage Income Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageIncomeCategory">Manage Income Category</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageIncomeDetails">Add Income Details</a></li>
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
                        Add & Manage Income Category
                    </div>
                    <div class="box-contents">
                      <div id="audit-trail">


                      <form role="form" action="<?php echo base_url();?>Cholotransportowner/SaveIncomeCategory" enctype="multipart/form-data" method="post">
                      <input type="hidden" name="<?=AccountController::csrf_name();?>" value="<?=AccountController::csrf_token();?>" />

                          <div class="row">


                          <div class="col-sm-1">
                                <div class="form-group">
                              
                              </div>
                             </div>

                              <div class="col-sm-4">
                                <div class="form-group">
                                <label for="income_category_name">Income Category Name<span style="color:red;font-weight:bold;font-size:17px;">*</span></label>
                                <input type="text" class="form-control form-control-sm" name="income_category_name" required id="income_category_name" placeholder="Enter Income Category Name...">
                              </div>
                             </div>




                            <div class="col-sm-2">
                            <div class="form-group">

                              <label for="income_category_is_active">Active Status<span style="color:red;font-weight:bold;font-size:17px;">*</span> </label>
                              <select name="income_category_is_active" id="" class="form-control form-control-sm">
                                <option value="">Select One</option>
                                <option selected value="1">Active</option>
                                <option value="0">Deactive</option>
                              </select>

                            </div>

                        
                            </div>




                            <div class="col-sm-3">
                            <div class="form-group">

                            <label for="truck_lagbe_is_active"></label>
                            <button type="submit"  class="btn btn-primary form-control ">Save Income Category Info</button>
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
                  <th>Date</th>
                  <th>Income Category Name</th>
                  <th>Active</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($income_category_data){
                    $sl=0;
                    foreach($income_category_data as $all_income_category_data){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_income_category_data->income_category_added_time;?></td>
                  <td><?php echo $all_income_category_data->income_category_name;?></td>
            
                 <td>
                 <?php if($all_income_category_data->income_category_is_active==1){?>
                      <span class="badge badge-success">Active </span>
                 <?php }else{ ?>
                 <span class="badge badge-danger">Deactive </span>
                 <?php } ?>
                 </td>

                  <td class="center" style="font-size:16px;text-align:center;">


                     <?php
                      if(in_array("publish_income_category",$this->session->userdata('user_permission')))
                        {
                      ?>
                  <?php if($all_income_category_data->income_category_is_active==1){?>
                    <a title="Deactive Income Category." href="<?php echo base_url();?>Backend/AccountController/unpublish_income_category/<?php echo $all_income_category_data->income_category_id;?>">
                      <i style="color:red;" class="fa fa-thumbs-down"></i>
                    </a>
                    <?php } else{?>
                    <a  title="Active Income Category." href="<?php echo base_url();?>Backend/AccountController/publish_income_category/<?php echo $all_income_category_data->income_category_id;?>">
                      <i class="fa fa-thumbs-up"></i>
                    </a>
                    <?php } ?>
                    |
                    <?php } ?>




                    <?php
                      if(in_array("edit_income_category",$this->session->userdata('user_permission')))
                        {
                      ?>
                    <span title="Edit/Update Income Category Info" style="cursor:pointer;" data-toggle="modal" data-id="<?php echo $all_income_category_data->income_category_id;?>" data-target="#income_category" id="incomecategory" >
                        <i style="color:blue;" class="fa fa-edit"></i>
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
  <div class="modal fade" id="income_category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog rollIn animated modal-dialog-centered" role="document">
    <div class="modal-content" id="editdata1">

    </div>
  </div>
</div>



<script>
$(document).ready(function(){
  $(document).on('click','#incomecategory',function(e){
    var uid = $(this).data('id');
    $.ajax({
      url: '<?php echo base_url();?>Backend/AccountController/edit_income_category_info/'+uid,
      dataType: 'html',
      success: function(data){
          $("#editdata1").html(data);
         }
    });
  });
});

</script>


<script>
  $('#truck_lagbe_icon_article').characterCounter({
    opacity : ".8",
    max: 21,
    color : "red"
});
</script>



<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>

  