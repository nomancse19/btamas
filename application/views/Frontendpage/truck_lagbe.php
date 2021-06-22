<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->

	<!-- truck lagbe section start -->
	<section class="trucklagbesection">
		<div class="container">
			<div class="row">
				<div class="col-md-12 trucklagbe text-center">
					<div class="spacesm"></div>
					<?php if($truck_lagbe_header_info){ ?>
					<h2 class="trucklagbehead"><?php echo $truck_lagbe_header_info->truck_lagbe_head; ?></h2>
					<p class=""><?php echo $truck_lagbe_header_info->truck_lagbe_main_article;?></p>
					<?php } ?>
					<div class="spacesm"></div>
					<div class="row icongurentyrow">

					<?php if($publish_truck_lagbe){ ?>
						<?php foreach($publish_truck_lagbe as $all_publish_truck_lagbe) {?>
						<div class="col-md-3">
							<div class="icongurentybox">
								<img height="100%" width="90%" style="margin-top:7px;margin-bottom:5px;" src="<?php echo $all_publish_truck_lagbe->truck_lagbe_icon;?>" alt="">
								<!--<h2><?php //echo $all_publish_truck_lagbe->truck_lagbe_icon_article; ?></h2>-->
							</div>
						</div>
					<?php } ?>
					<?php } ?>


					</div>
					<div class="spacesm"></div>
				</div>
			</div>
		</div>
		
	</section>
    <!-- truck lagbe section end -->