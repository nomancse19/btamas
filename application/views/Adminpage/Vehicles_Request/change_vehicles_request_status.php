<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Vehicles Request Status Chanage</h5>
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form action="<?php echo base_url();?>Cholotransportowner/UpdateVehiclesRequestStatus/<?php echo $vehicles_request_data->vehicles_request_id;?>" method="post">
      <div class="modal-body">
      <p style="font-weight:bold;">Name: <span style="color:blue;font-weight:bold;"><?php echo $vehicles_request_data->vehicles_request_user_name; ?></span>   And Mobile: <span style="color:blue;font-weight:bold;"><?php echo $vehicles_request_data->vehicles_request_user_number; ?></span> </p>
      <div class="container-fluid">
          <div class="row">
            <div class="col-md-4"><label for="recipient-name" class="col-form-label">Select One Status:</label></div>
            <div class="col-md-8 ml-auto">
            <div class="form-group">
          
          <select name="vehicles_request_status" id="" class="form-control">
            <?php if($vehicles_request_data->vehicles_request_status=='0'){?>
                <option value="0">Pending</option>
            <?php } ?>
            <?php if($vehicles_request_data->vehicles_request_status=='1'){?>
                <option value="1">Processing</option>
            <?php } ?>
            <?php if($vehicles_request_data->vehicles_request_status=='2'){?>
                <option value="2">Accepted,Processing Chalan</option>
            <?php } ?>
            <?php if($vehicles_request_data->vehicles_request_status=='3'){?>
                <option value="3">Completed</option>
            <?php } ?>
            <?php if($vehicles_request_data->vehicles_request_status=='4'){?>
                <option value="4">Cancel</option>
            <?php } ?>
            <option value="0">Pending</option>
            <option value="1">Processing</option>
            <option value="2">Accepted,Processing Chalan</option>
            <option value="3">Completed</option>
            <option value="4">Cancel</option>
          </select>
        </div>
            </div>
          </div>
      </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Request Status</button>
      </div>
      </form>
