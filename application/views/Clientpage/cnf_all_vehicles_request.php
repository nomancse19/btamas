<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CNF Vehicles Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Client/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest">Request New</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest">Manage Vehicles</a></li>
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
              <h3 class="card-title">All Vehicles Request Of CNF</h3>
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

            <form class="form-inline" action="<?php echo base_url();?>Client/AddCnfVehiclesRequest" method="post">
            <input type="hidden" name="<?=CnfClientController::csrf_name();?>" value="<?=CnfClientController::csrf_token();?>" />
            <label for="some_note" class="mr-sm-2">Write Some Note :</label>
              <textarea name="vehicles_request_some_note" id="" class="form-control" placeholder="Write Some Note For Hire Or Booking A New Vehicles..." cols="40" rows="1"></textarea>   
              <div class="form-check mb-3 mr-sm-3"></div>   
            <button type="submit" class="btn btn-primary mb-2">Request New Vehicles.</button>
          </form>   
          <hr>         
            <table id="datatable" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th style="text-align:center;">SL</th>
                  <th style="text-align:center;">Date</th>
                  <th style="text-align:center;">Name</th>
                  <th style="text-align:center;">Mobile</th>
                  <th style="text-align:center;">Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($cnf_all_request){
                    $sl=0;
                    foreach($cnf_all_request as $all_cnf_request){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_cnf_request->vehicles_request_created_date;?></td>
                  <td><?php echo $all_cnf_request->vehicles_request_user_name;?></td>
                  <td><?php echo $all_cnf_request->vehicles_request_user_number;?></td>
                  <td style="text-align:center;">
                      <?php if($all_cnf_request->vehicles_request_status==0){?>
                      <span class="badge badge-warning">Pending</span>
                      <?php } ?>
                      <?php if($all_cnf_request->vehicles_request_status==1){?>
                      <span class="badge badge-primary">Processing</span>
                      <?php } ?>
                      <?php if($all_cnf_request->vehicles_request_status==2){?>
                      <span class="badge badge-info" style="font-weight:bold;">Accepted,Processing Chalan</span>
                      <?php } ?>
                      <?php if($all_cnf_request->vehicles_request_status==3){?>
                      <span class="badge badge-success">Completed.</span>
                      <?php } ?>
                      <?php if($all_cnf_request->vehicles_request_status==4){?>
                      <span class="badge badge-danger">Cancel.</span>
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
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog rollIn animated modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="">
      <div class="modal-body">
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><label for="recipient-name" class="col-form-label">Select Any One:</label></div>
            <div class="col-md-8 ml-auto">
            <div class="form-group">
          
          <select name="" id="" class="form-control">
            <option value="">Select Any One</option>
            <option value="">gfdfgdfg</option>
            <option value="">dfgdfg</option>
          </select>
        </div>
            </div>
          </div>
      </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>





  