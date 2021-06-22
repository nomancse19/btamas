
<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->
<!-- contact us form -->
<section>
		<div class="container">
			<div class="row contactrow pt-5">
				<div class="col-md-6 col-sm-12 my-auto contactimg">
					<img src="<?php echo base_url();?>assets/frontend/img/truck-01.png" width="350" height="350">
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="form">
						<div class="contact-us-form">
							<div class="head">
								<div class="spacesm"></div>
                                <h2 class="text-center pb-5">ট্রাক ভাড়া লাগবে !  </h2>
                                <h3 class="text-center pb-5">" যেকোনো ধরণের যানবাহনের প্রয়োজনে আপনার নাম , মোবাইল নম্বর , ঠিকানা দিয়ে সাবমিট করুন। আর সল্প টাকায় ভাড়া পেয়ে যান আপনার পছন্দের যানবাহন। "</h3>
                                
                                <p style="color:red;font-weight:bold;text-align:center">
                                <?php echo $this->session->flashdata('error_message');
                                ?>
                            </p>
                            <p style="color:blue;font-weight:bold;text-align:center">
                                <?php echo $this->session->flashdata('success_message');
                                ?>
                            </p>    
							</div>
                            <form action="<?php echo base_url();?>SaveRequestNewVehicles" method="post">
                            <input type="hidden" name="<?=HomeController::csrf_name();?>" value="<?=HomeController::csrf_token();?>" />
							  <div class="form-row row">
							    <div class="form-group col-md-6">
							      <label for="name">Full Name <span style="color:red;font-weight:bold;font-size:18px;">*</span></label>
							      <input type="text" class="form-control" placeholder="Enter Customer Full Name..." name="vehicles_request_user_name" id="vehicles_request_user_name" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label for="mobile">Mobile Number <span style="color:red;font-weight:bold;font-size:18px;">*</span></label>
							      <input type="text" class="form-control" maxlength="11" placeholder="Enter Valid 11 Digit Number Only..." name="vehicles_request_user_number" id="vehicles_request_user_number" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" required="">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputAddress">Address & Notes <span style="color:red;font-weight:bold;font-size:18px;">*</span></label> <br>
							    <textarea class="form-control" placeholder="Enter Customer Details Address or Some Important Notes......" required="" name="vehicles_request_some_note" rows="3"></textarea>
							  </div>
							  <button type="submit" style="background:#007932;" class="btn btn-primary btn-block">আবেদন করুন >></button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <div class="spacesm"></div>
    
    <script>
        function onBlur(el) {
        if (el.value === el.defaultValue || el.value === "NaN" || el.value === '') {
            el.value = el.defaultValue;
        }
    }



    function onFocus(el) {
        if (el.value === el.defaultValue || el.value === "NaN" || el.value < 1) {
            el.value = '';
        }
    }

  function isNumberKeyDot(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        //if (charCode > 31 && (charCode < 48 || charCode > 57))
        if (charCode > 31 && (charCode < 45 || charCode > 57))
            return false;
        return true;
    }
    function isNumberKey(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    </script>