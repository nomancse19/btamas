<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Cost Category Name Edit & Update</h5>
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form action="<?php echo base_url();?>Cholotransportowner/UpdateCostCategory/<?php echo $edit_cost_category_data->cost_category_id;?>" method="post">
      <div class="modal-body">
      <div class="container-fluid">
      
       <div class="row">
            <div class="col-md-5"><label for="recipient-name" class="col-form-label">Cost Category Name</label></div>
            <div class="col-md-7 ml-auto">
            <div class="form-group">
                <input type="text" name="cost_category_name" class="form-control" value="<?php echo $edit_cost_category_data->cost_category_name; ?>">
             </div>
            </div>

          </div>

      </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Cost Category Name</button>
      </div>
      </form>

