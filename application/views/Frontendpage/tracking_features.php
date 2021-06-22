<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->
<?php if($publish_tracking_features){ ?>
	<!-- GPS Tracking section start -->
    <section class="gps-track container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="row">
    				<div class="col-md-12 text-center">
	    				<h2 class="mx-auto" >CholoTransport GPS Tracking and Fleet Management Features</h2>
	    				<p class="text-center">Protect your Vehicle from being in the Stolen List</p>
	    			</div>
    			</div>
		    	<!-- icons row one-->
		    	<div class="row">
					<?php
						foreach($publish_tracking_features as $all_publish_tracking_features){
					?>
		    		<div class="col-md-2 col-6">
		    			<div class="text-center service-icon">
		    			<i><img src="<?php echo base_url().$all_publish_tracking_features->gps_tracker_features_image; ?>" alt=""></i>
		    			<h4 class="mx-auto"><?php echo $all_publish_tracking_features->gps_tracker_features_name; ?></h4>
		    			<p><?php echo $all_publish_tracking_features->gps_tracker_features_article; ?></p>
		    			</div>
		    		</div>
					<?php } ?>



				</div>
		    	<!-- icons row three-->



		    </div>
		</div>
		<div class="spacesm"></div>
    	<div class="mx-auto button-more">
    		<a href="#" class="text-center">view more</a>
    	</div>
    </section>
    <div class="space"></div>
	<!-- GPS Tracking section end -->
	
<?php } ?>