<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
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
          <div class="col-sm-6">
            <h1>All Chalan Info Manage</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Client/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/CnfAllVehiclesRequest">Vehicles Rquest</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Client/CnfChalanInfo">Chalan Info</a></li>
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
              <h3 class="card-title">CNF All Chalan Info Update & Manage</h3>
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
                  <th>Total Amount</th>
                  <th>Chalan Status</th>
                  <th>Payment status</th>
                  <th style="text-align:center;">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  if($cnf_chalan_info){
                    $sl=0;
                    foreach($cnf_chalan_info as $all_cnf_chalan_info){
                      $sl++;
                  ?>
                  <tr>
                  <td><?php echo $sl;?></td>
                  <td><?php echo $all_cnf_chalan_info->chalan_created_date;?></td>
                  <td><?php echo $all_cnf_chalan_info->chalan_importer_name.$all_cnf_chalan_info->chalan_exporter_name;?></td>
                  <td><?php echo $all_cnf_chalan_info->chalan_no;?></td>
                  <td><?php echo $all_cnf_chalan_info->chalan_vehicles_rent_advance_amount+$all_cnf_chalan_info->chalan_vehicles_rent_due_amount;?></td>

                  <td style="text-align:center;">
                      <?php if($all_cnf_chalan_info->chalan_status==0){?>
                      <span class="badge badge-warning">Pending</span>
                      <?php } ?>
                      <?php if($all_cnf_chalan_info->chalan_status==1){?>
                      <span class="badge badge-primary">On The Way</span>
                      <?php } ?>
                      <?php if($all_cnf_chalan_info->chalan_status==2){?>
                      <span class="badge badge-success" style="font-weight:bold;">Completed</span>
                      <?php } ?>
                      <?php if($all_cnf_chalan_info->chalan_status==3){?>
                      <span class="badge badge-danger">Cancel.</span>
                      <?php } ?>
                  </td>

                  <td style="text-align:center;">
                      <?php if($all_cnf_chalan_info->chalan_payment_status==0){?>
                      <span class="badge badge-warning">Due</span>
                      <?php } ?>
                      <?php if($all_cnf_chalan_info->chalan_payment_status==1){?>
                      <span class="badge badge-success" style="font-weight:bold;">Paid</span>
                      <?php } ?>
                  </td>
            

                  <td style="font-size:16px;text-align:center;">


                    <a title="Live Location View" href="<?php echo base_url();?>Client/CnfVehiclesLiveTracking/<?php echo $all_cnf_chalan_info->chalan_no;?>" >
                        <i class="fas fa-map-marker-alt"></i>
                    </a> &nbsp;&nbsp;&nbsp;




                    <a title="View Chalan Info Details" href="<?php echo base_url()?>Client/ViewCnfChalanInfo/<?php echo $all_cnf_chalan_info->chalan_info_id;?>" >
                        <i style="color:green;" class="fa fa-eye"></i>
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







  