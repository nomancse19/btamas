
<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->

<!--------------------------------------------------------------------------
Cholo Transport Project
Project Design & Developed By - Jahidul Islam Noman
Date And Time : 09-09-2020 8:17pm
Cell- 01521451354,01772068908
Web: https://noman-it.com
--------------------------------------------------------------------------->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>images/logo/ct_logko.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/bootstrap.min.css">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <!-- owl carosule css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/frontend/css/owl.theme.default.min.css">

    <title>Benapole Transport Agency Malik somity - Cholo iT</title>

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/frontend/css/css.css">
<style>
	.navbar-light .navbar-nav .nav-link.active{
		background:#007932;
		color: rgba(255, 255, 255, 0.9);
	}
</style>
</head>
  <body>
      
     <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/60d0a19a7f4b000ac038baa8/1f8nfehn4';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-lg-flex align-items-center">
      <div class="container topresposive d-flex">
        <div class="contact-info my-auto mr-auto">
          <i class="fas fa-phone"></i> টেলিফোন: ০৪২২৮-৭৬০৮০ &nbsp;&nbsp; <span class="border-left"> &nbsp;&nbsp;</span>
          <i class="fas fa-phone"></i> মোবাইল: ০১৭১৮-৪৪৯২৯৫  &nbsp;&nbsp; <span class="border-left"> &nbsp;&nbsp;</span>
          <i class="fas fa-phone"></i> হটলাইন: ০১৮৮৮ ০৫২ ৯৯৯
        </div>
        <div class="social-links">
          <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
          <a href="https://www.facebook.com/btams.bd" class="facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="skype"><i class="fab fa-skype"></i></a>
          <a href="#" class="linkedin"><i class="fab fa-linkedin"></i></i></a>
        </div>
      </div>
    </div>
    <!-- ========End Top Bar======= -->


   <!-- Main header area start -->
   <div class="site-branding-area mainhead" id="navbar">
       <div class="container">
           <div class="row" style="margin: 0;">
	           	<div class="col-9 nav-main-column">
	           		<nav class="navbar navbar-expand-lg navbar-light">
	           			 <!-- logo image start-->
	           			<div class="navbrandimg">
	           				<a class="navbar-brand" href="#">
			           		    <img src="<?php echo base_url();?>assets/frontend/img/logo/btams logo.png" width="180" height="70" class="d-inline-block align-top" alt="BTAMS Logo">
			           		</a>
	           			</div>
		           		
	           		   <!-- logo image end -->
	           		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	           		    <span class="navbar-toggler-icon"></span>
	           		  </button>
	           		  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	           		    <ul class="navbar-nav">
	           		      <li class="nav-item">
	           		        <a class="nav-link" href="<?php echo base_url(); ?>">হোম</a>
	           		      </li>
	           		     <!--   <li class="nav-item">
							   <a 
							   <?php
								$path=current_url();
								$page= basename($path);
								if($page=='RequestNewVehicles'){
								echo "class='nav-link active'";
								}else{
								echo "class='nav-link'";
								}
								?>
							   href="<?php echo base_url();?>RequestNewVehicles">Hire Truck</a>
	           		      </li>
	           		      <li class="nav-item">-->
	           		      
	           		      
							   <a 
							   <?php
								$path=current_url();
								$page= basename($path);
								if($page=='RequestNewUserAccount'){
								echo "class='nav-link active'";
								}else{
								echo "class='nav-link'";
								}
								?>
							   href="<?php echo base_url();?>RequestNewUserAccount">লাইসেন্স আবেদন</a>
	           		      </li>
	           		      
	           		      
	           		      <!-- <li class="nav-item">
		           		        <a class="nav-link" href="#">Contact us</a>
		           		      </li>-->
		           		      
	           		   <!--   <li class="nav-item dropdown">
	           		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	           		          Dropdown
	           		        </a>
	           		       <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
	           		          <a class="dropdown-item" href="#">Action</a>
	           		          <a class="dropdown-item" href="#">Another action</a>
	           		          <a class="dropdown-item" href="#">Something else here</a>
	           		        </div>
	           		      </li>-->
	           		    </ul>
	           		  </div>
	           		</nav>
	           	</div>
               
             <!--  <div class="col-3 d-flex nav-icon-column">
               		<div class="row nav-icon d-flex my-auto mx-auto">
               			<a href="<?php echo base_url(); ?>Client/login"><i style="padding-right: 10px;" class="fa fa-user"></i><span class=" my-accoutn-text">My account</span> </a>&nbsp;&nbsp; -->
               			<!--<a href="#"><i style="padding-right: 10px;" class="fa fa-shopping-cart"></i> </a>-->
               		</div>
               </div>
           </div>
       </div>
   </div> <!-- End site branding area -->
<!-- end main header area -->
<div style="height: 90px;"></div>


<?php if(isset($slider)){echo $slider;} ?>
<?php if(isset($truck_lagbe)){echo $truck_lagbe;} ?>
<?php if(isset($vehicles_request)){echo $vehicles_request;} ?>
<?php if(isset($user_account_request)){echo $user_account_request;} ?>
<?php if(isset($choose_us)){echo $choose_us;} ?>
<div class="space"></div>
















    <!-- two column apps section start -->
    <section class="container">
    	<div class="row appsection">
    		<div class="col-md-12">
    			<div class="row">
    				<div class="col-md-12 text-center">
	    				<h2 class="mx-auto" >মোবাইল এপপ্স</h2>
	    				<p class="text-center">চলো ট্রান্সপোর্ট এজেন্সীর পক্ষ হইতে বেনাপোল ট্রান্সপোর্ট এজেন্সী মালিক সমিতি এন্ড্রইড এপপ্সটি উপহার স্বরূপ। চলো ট্রান্সপোর্ট এর নিজস্ব প্রযুক্তি কারিগর দ্বারা এই সিস্টেমটি তৈরী করা হয়েছে। আমরা ট্রান্সপোর্ট মালিক সমিতি পক্ষ হইতে চলো ট্রান্সপোর্টকে কৃতজ্ঞতা জানাই।   </p>
	    			</div>
    			</div>
    			<div class="spacesm"></div>
    			<div class="row">
    				<div class="col-md-6 appstext">
    					<div class="col-md-12 text-center">
		    				<h4 class="mx-auto" >বেনাপোল ট্রান্সপোর্ট এজেন্সী মালিক সমিতি এপপ্স</h4>
		    				<a href="https://play.google.com/store/apps/details?id=com.track.cholotransport"><img src="https://btams.choloit.com/assets/frontend/img/logo/BTAMS Phone.png" alt="BTAMS Mobile App"width="280" height="500"></a>
		    				<h4 class="mx-auto" >" ডিজিটাল ট্রান্সপোর্ট মালিক সমিতি ১ ক্লিকে তথ্য "</h4>
		    				<p class="text-center">ডিজিটাল পরিচয় পত্রের ডিজিটাল তথ্য - এখনি ডাউনলোড করুন গুগল প্লে-স্টোর থেকে সর্বাধিক রেটিং প্রাপ্ত বেনাপোল ট্রান্সপোর্ট এজেন্সী মালিক সমিতি এপপ্সটি নিচের প্লে-বাটন থেকে। </p>
		    				<div class="playbutton">
		    					<button class="googleplay"><a href="https://play.google.com/store/apps/details?id=com.track.cholotransport"><img src="<?php echo base_url();?>assets/frontend/img/google play button-01.png" alt="Cholo gps tracker apps" style="width:150px;height:50px;"></a></button>
		    					
		    					
		    					
		    				</div>
		    				<div class="spacexm"></div>
		    			</div>
					</div>
					<!--
    				<div class="col-md-6 mobileimg">
		    			<div class="row">
		    				<div class="col-md-12">
		    					<img width="600" height="602" src="<?php echo base_url();?>assets/frontend/img/Mobiles.png">
		    				</div>
		    			</div>
		    		</div>-->
    			</div>
    		</div>
    		
    	</div>
    	
    </section>
    <!-- two column app section end -->

    <div class="space"></div>



    <div class="space"></div>




    <div class="space"></div>

    <!-- footer section -->
    <section class="footersection">
    	<div class="spacesm"></div>
    	<div class="container-fluid">
    		<div class="footermaincontent">
    			<div class="social-icon">
    					<ul>
    						<li>
    							<a href=""><i class="fab fa-facebook"></i></a>
    						</li>
    						<li>
    							<a href=""><i class="fab fa-twitter"></i></a>
    						</li>
    						<li>
    							<a href=""><i class="fab fa-instagram"></i></a>
    						</li>
    						<li>
    							<a href=""><i class="fab fa-linkedin"></i></a>
    						</li>
    					</ul>
    				</div>
    			<div class="footermenu">
    				<ul>
    					<li><a href="https://btams.choloit.com/">হোম</a></li>
    					<li><a href="https://btams.choloit.com/RequestNewUserAccount">লাইসেন্স</a></li>
    					<li><a href="#">স্টোরি</a></li>
    					<li><a href="https://goo.gl/maps/3Z7dmV2tEWTVuWJS6">লোকেশন</a></li>
    				</ul>
    			</div>
    		</div>
    		<div class="footersubmenu">
    				<ul>
    					<li><a href="#">অফিস : ট্রান্সপোর্ট সমিতি ভবন</a></li>
    					<li><a href="#">বেনাপোলে স্থল বন্দর,বেনাপোল,যশোর</a></li>
    					<li><a href="#">রেজি: খুলনা-১২৬৭</a></li>
    				</ul>
    			</div>
    			</div>
    			
    		<div class="spacexm"></div>
    	</div>
    	<div class="container-fluid copyright">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="my-auto">
    				 
    					<p class="text-center my-auto">২০২১ © কপিরাইট চলো আইটি টিম</p>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

<!-- end -->

    <!-- Optional JavaScript -->
    <!-- jquery library -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/popper.min.js"></script>

	<!-- owl js -->
	<script src="<?php echo base_url();?>assets/frontend/js/owljs/owl.carousel.min.js"></script>
	<!-- custom js -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/frontend/js/main.js"></script>

	
	
  </body>
</html>

<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->