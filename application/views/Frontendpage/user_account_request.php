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
					<img src="<?php echo base_url();?>assets/frontend/img/login image-01.png" width="350" height="350">
				</div>
				<div class="col-md-6 col-sm-12">
					<div class="form">
						<div class="contact-us-form">
							<div class="head">
								<div class="spacesm"></div>
                                <h2 class="text-center pb-5">ট্রান্সপোর্ট লাইসেন্সের জন্য আবেদন</h2>
                                
                               
                            
							</div>
                            <form action="<?php echo base_url();?>SaveRequestNewUserAccount" method="post">
                            <input type="hidden" name="<?=HomeController::csrf_name();?>" value="<?=HomeController::csrf_token();?>" />
							  <div class="form-row row">
							    <div class="form-group col-md-6">
							      <label for="name">আবেদনকারীর নাম <span style="color:red;font-weight:bold;font-size:18px;">*</span></label>
							      <input type="text" class="form-control" placeholder="এখানে আপনার নাম লিখুন" name="all_user_account_request_name" id="all_user_account_request_name" required="">
							    </div>
							    <div class="form-group col-md-6">
							      <label for="mobile">মোবাইল নম্বর <span style="color:red;font-weight:bold;font-size:18px;">*</span></label>
							      <input type="text" class="form-control" maxlength="11" placeholder="এখানে আপনার ১১ সংখ্যার মোবাইল নম্বর লিখুন" name="all_user_account_request_number" id="all_user_account_request_number" onkeypress="return isNumberKeyDot(event)" onblur="onBlur(this)" onfocus="onFocus(this)" onkeypress="return isNumberKey(event)" required="">
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputAddress">ট্রান্সপোর্টের নাম ,অফিসের ঠিকানা , আপনার মন্তব্য <span style="color:red;font-weight:bold;font-size:18px;">*</span></label> <br>
							    <textarea class="form-control" placeholder="এখানে আপনার ট্রান্সপোর্টের নাম ,অফিসের ঠিকানা  অথবা আপনার মন্তব্য লিখুন " required="" name="all_user_account_request_address" rows="3"></textarea>
							  </div>
							  <button type="submit" style="background:#007932;" class="btn btn-primary btn-block">আবেদন করুন</button>
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