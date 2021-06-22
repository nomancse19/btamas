<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Chalan Status Change & Update</h5>
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form action="<?php echo base_url();?>Cholotransportowner/UpdateChalanStatus/<?php echo $chalan_info_data->chalan_info_id;?>" method="post">
      <div class="modal-body">
      <p style="font-weight:bold;">Chalan No: <span style="color:blue;font-weight:bold;"><?php echo $chalan_info_data->chalan_no; ?></span>   Name: <span style="color:blue;font-weight:bold;"><?php echo $chalan_info_data->chalan_importer_name.$chalan_info_data->chalan_exporter_name; ?></span> </p>
      <div class="container-fluid">
      <input type="hidden" value="<?php echo $chalan_info_data->vehicles_info_id; ?>" name="vehicles_info_id">
      <input type="hidden" value="<?php echo $chalan_info_data->chalan_status; ?>" name="system_chalan_status">
      <input type="hidden" value="<?php echo $chalan_info_data->chalan_no; ?>" name="chalan_no">
     <?php if($chalan_info_data->chalan_status>=0 && $chalan_info_data->chalan_status<=1){?> 
      
       <div class="row">
            <div class="col-md-4"><label for="recipient-name" class="col-form-label">Select One Status:</label></div>
            <div class="col-md-8 ml-auto">
            <div class="form-group">
          
          <select name="chalan_status" id="chalan_status_check" class="form-control">
            <?php if($chalan_info_data->chalan_status=='0'){?>
                <option value="0">Pending</option>
            <?php } ?>
            <?php if($chalan_info_data->chalan_status=='1'){?>
                <option value="1">On The Way</option>
            <?php } ?>
            <?php if($chalan_info_data->chalan_status=='2'){?>
                <option value="2">Completed</option>
            <?php } ?>
            <?php if($chalan_info_data->chalan_status=='3'){?>
                <option value="3">Cancel</option>
            <?php } ?>
            <option value="0">Pending</option>
            <option value="1">On The Way</option>
            <option value="2">Completed</option>
            <option value="3">Cancel</option>
          </select>
        </div>
   

            </div>

          </div>



          <div class="row" style="display:none; color:blue;font-weight:bold;" id="chalan_due_amount">
            <div class="col-md-6"><label for="recipient-name" class="col-form-label">Chalan Due Amount:</label></div>
            <div class="col-md-6 ml-auto">
            <div class="form-group">
              <input type="text" class="form-control" readonly value="<?php echo $chalan_info_data->chalan_vehicles_party_due_rent;?>" name="chalan_vehicles_rent_due_amount" id="chalan_vehicles_rent_due_amount">
            </div>
            </div>
          </div>




            <?php } ?>

          
        <?php
        $vehicles_is_available=$this->chalanModel->all_vehicles_info_by_vehicles_info_id($chalan_info_data->vehicles_info_id)->vehicles_is_available;
        ?>
          <div class="row">
            <div class="col-md-10"><label for="recipient-name" class="col-form-label"><?php echo $chalan_info_data->chalan_vehicles_no;?>, <?php if($vehicles_is_available==1){echo "<span style='color:blue;font-weight:bold;'>Yes,Available For Use: </span>";}else{echo "<span style='color:red;font-weight:bold;'>NO,Available For Use: </span>";} ?></label></div>
            <div class="col-md-1">
            <div class="form-group">
                <input class="form-control" type="checkbox" <?php if($vehicles_is_available==1){echo "checked";} ?> name="vehicles_is_avaiable" id="">
             
            </div>
   

            </div>

        
          </div>


       









      </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update Chalan Status</button>
      </div>
      </form>



      <script>
              $('#chalan_status_check').on('change', function() {
              if ( this.value == '2'){
              $("#chalan_due_amount").show();
              $("#chalan_vehicles_rent_due_amount").attr("required","");
              $("#chalan_vehicles_rent_due_amount").focus();
              }
              else{
              $("#chalan_due_amount").hide();
              $("#chalan_vehicles_rent_due_amount").removeAttr("required");
              }
              }).trigger("change"); // notice this line
     </script>
