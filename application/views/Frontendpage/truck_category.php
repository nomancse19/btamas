
<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->
<!-- owl carosule section start -->
    <section class="bgdecoration">
    	<div class="spacesm"></div>
    	<div class="container">
    		<div class="row">
    		<div class="col-md-12 text-center">
			<?php if($publish_truck_category){?>
    			<h2>Truck Category</h2>
    			<div class="spacexm"></div>
    				<!-- owl carousel -->
				    <div class="owl-carousel owl-theme">

					
						<?php foreach($publish_truck_category as $all_publish_truck_category){ ?>
					    <div class="item">
					    	<div class="text-left">
					    		<img src="<?php echo $all_publish_truck_category->truck_category_image;?>">
					    		<div class="spacexm"></div>
						    	<h2 class="pl-2"><?php echo $all_publish_truck_category->truck_category_name; ?></h2>
						    	<p class="pl-2"><?php echo $all_publish_truck_category->truck_category_article; ?></p>
					    	</div>
					    </div>
					<?php } ?>
			


					</div>
					<!-- owl end -->
					<?php } ?>
    		</div>
    	</div>
    	</div>
    	<div class="spacesm"></div>
    </section>
    <!-- owl carosule section end -->