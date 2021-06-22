<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>  

            
      <div class="modal-body">


      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <div class="row">
            <div class="col-sm-12">
            <h1 style="text-align:center;color:blue;font-weight:bold;margin-bottom:40px;"><?php echo $importer_image_data->transport_owner_full_name_en; ?></h1>
            </div>
            <br>
            </br>
          </div>

        <form>

          <div class="form-group">
          <div class="row">
              <div class="col-sm-5">
            <label for="recipient-name" class="col-form-label">Transport Malik Profile Photo : </label>
            </div>
            <div class="col-sm-7">
          <?php
            if($importer_image_data->importer_profile_photo){
            ?>
          <img class="modalimagepreview" width="300" height="200" src="<?php echo base_url().$importer_image_data->importer_profile_photo;?>" alt="">
            <?php }else{?>
              <p>No Image Found</p>
            <?php } ?>
          </div>
          </div>




      <div class="form-group">
            <div class="row">
              <div class="col-sm-5">
            <label for="recipient-name" class="col-form-label">Transport Malik NID Card Front Side Photo : </label>
            </div>
            <div class="col-sm-7">
           <?php
            if($importer_image_data->importer_nid_card_front_side_image){
            ?>

          <img class="modalimagepreview" width="300" height="200" src="<?php echo base_url().$importer_image_data->importer_nid_card_front_side_image;?>" alt="">
           
          <?php }else{?>
              <p>No Image Found</p>
            <?php } ?>
          </div>
          </div>
      </div>


          <div class="form-group">
          <div class="row">
              <div class="col-sm-5">
            <label for="recipient-name" class="col-form-label">Transport Malik Signature : </label>
            </div>
            <div class="col-sm-7">
          <?php
            if($importer_image_data->importer_nid_card_back_side_image){
            ?>
          <img class="modalimagepreview" width="300" height="200" src="<?php echo base_url().$importer_image_data->importer_nid_card_back_side_image;?>" alt="">
            <?php }else{?>
              <p>No Image Found</p>
            <?php } ?>
          </div>
          </div>

        </form>
      </div>


                    