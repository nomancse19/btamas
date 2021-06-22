
  <link rel="stylesheet" href="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_css_1.7.1.css">
<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-weight:bold;">Add New Income Details..</h5>
     
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <form action="<?php echo base_url();?>Backend/AccountController/save_update_income_details/<?php echo $edit_income_details_data->income_details_id;?>" method="post">

      <div class="modal-body">
      <div class="container-fluid">
      
       <div class="row">
            <div class="col-md-5"><label for="recipient-name" class="col-form-label">Income Details Name</label>
           </div>
            <div class="col-md-7 ml-auto">
            <div class="form-group">
                <input type="text" name="income_details_name" class="form-control form-control-sm" value="<?php echo $edit_income_details_data->income_details_name; ?>" placeholder="Enter Income Details Name...">
             </div>
            </div>


            <div class="col-md-6"><label for="recipient-name"  class="col-form-label">Income Original Amount</label>
           </div>
            <div class="col-md-6 ml-auto">
            <div class="form-group">
                <input type="text" name="income_details_original_amount" value="<?php echo $edit_income_details_data->income_details_original_amount; ?>" placeholder="Enter Original Amount.it's help to calculate Profit." onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" class="form-control form-control-sm">
             </div>
            </div>




          <div class="col-md-6"><label for="recipient-name" class="col-form-label">Income Sell Amount</label>
           </div>
            <div class="col-md-6 ml-auto">
            <div class="form-group">
                <input type="text" name="income_details_sell_amount" value="<?php echo $edit_income_details_data->income_details_sell_amount; ?>" placeholder="Enter Sell Amount..." required onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" class="form-control form-control-sm">
             </div>
          </div>





            <div class="col-md-5"><label for="recipient-name" class="col-form-label">Select Income Date</label>
           </div>
            <div class="col-md-7 ml-auto">
            <div class="form-group">
                <input type="text" name="income_details_date" class="form-control form-control-sm" value="<?php echo $edit_income_details_data->income_details_date; ?>" required id="income_details_date1">
             </div>
            </div>

          




            <div class="col-md-5"><label for="recipient-name" class="col-form-label">Select Income Category</label>
           </div>
            <div class="col-md-7 ml-auto">
            <div class="form-group">
               <select name="income_category_id" class="form-control form-control-sm select2" id="">
                 <option value="">Select Income Category</option>
                    <?php if($edit_income_details_data){ ?>
                    <option selected value="<?php echo $edit_income_details_data->income_category_id; ?>"><?php echo $edit_income_details_data->income_category_name; ?></option>
                    <?php } ?>
                 <?php if($publish_income_category){ ?>
                      <?php foreach($publish_income_category as $all_publish_income_category){ ?>
                        <option value="<?php echo $all_publish_income_category->income_category_id; ?>"><?php echo $all_publish_income_category->income_category_name; ?></option>
                 <?php } ?>
                 <?php }else{ ?>
                  <option value="">No Income Catgeory Found..</option>
                 <?php } ?>
               </select>
             </div>
            </div>

            </div>

</div>

</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" class="btn btn-primary">Update Income Details Info.</button>
</div>
</form>



            
<script src="<?php echo base_url();?>assets/backend/noman_datepicker/datepicker_jquery_1.7.1.js"></script>
<script type="text/javascript">
    $('#income_details_date1').datepicker({
        weekStart: 1,
        daysOfWeekHighlighted: "6,0",
        autoclose: true,
        todayHighlight: true,
        format: 'yyyy-mm-dd',
    });

</script>


<script>
  $(function () {
    $('.select2').select2()
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    })

</script>