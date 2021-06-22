
<div class="content-wrapper">
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyoalGXvBPcGp7bHWcinKYI2_iX8xmsMQ&callback=initMap&libraries=&v=weekly"></script>

<script type="text/javascript">

    window.onload = function () {
        LoadMap('<?php echo $lat;?>','<?php echo $lng; ?>');
			
    };
 
    var map;
    var marker;
    function LoadMap(lat,lon) {
        var mapOptions = {
            center: new google.maps.LatLng(lat,lon),
            zoom: 17,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
		SetMarker(lat,lon,'');
    };
    function SetMarker(lat,lng,des) {
        //Remove previous Marker.
        if (marker != null) {
            marker.setMap(null);
        }
 
        //Set Marker on Map.
        //var data = markers[position];
        var myLatlng = new google.maps.LatLng(lat,lng);
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
           // title: data.title,
			icon:'<?php echo base_url();?>images/logo/trucktracling-01.png',
        });
 
        //Create and open InfoWindow.
        //var infoWindow = new google.maps.InfoWindow();
      //  infoWindow.setContent("<div style = 'width:200px;min-height:40px'>" + des + "</div>");
      //  infoWindow.open(map, marker);
		
		

		
		var information = new google.maps.InfoWindow({
		   content: "<h5>"+des+"</h5>"
		});
		
		marker.addListener('click', function() {
		  information.open(map, marker);
    });
    


    };
</script>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
      
          <div class="col-sm-6">
            <h1>Vehicles Live Tracking</h1>
          </div>
          <div class="col-sm-6">
         
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>Cholotransportowner/Dashboard">Home</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/AddVehicles">Add New Vehicles Info</a></li>
            <li class="breadcrumb-item active"><a href="<?php echo base_url();?>Cholotransportowner/ManageVehicles">Manage Vehicles Info</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12 animated headShake">
         
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Vehicles Live Tracking, <span style="color:white;font-weight:bold;">Vehicles No- <?php echo $vehicles_info->vehicles_no; ?> And Vehicles Gps Number- <?php echo $vehicles_info->vehicles_gps_mobile_number; ?></span></h3>
                <h3 class="card-title">
              <?php
              $success_message=$this->session->flashdata('success_message');
              $error_message = $this->session->flashdata('error_message');
              if($success_message){
              echo '<script type="text/javascript">toastr.success("'.$success_message.'")</script>';
              }
              if($error_message){
                  echo '<script type="text/javascript">toastr.error("'.$error_message.'")</script>';
                  
                  }

              ?>
              </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
                  <?php if(isset($lat)){?>
                <div class="card-body" id="dvMap" style="min-height:450px;">
                  </div>
                  <?php } else{ ?>

                    <p style="color:red;font-weight:bold;text-align:center;">Vehicles Location Not Found! ... Device Imei Or GPS Tracker No Response...</p>
                    <?php } ?>
                  <div class="card-body" >
                
<input type="hidden" id="lat"/>
	<input type="hidden" id="lng"/>
	<input type="hidden" id="details_data"/>

	<input type="hidden" value="click" id="check"/>
                  </div>



                </div>
                
                </div>
             </div>
                <!-- /.card-body -->
         </div>
      </div>
            <!-- /.card -->

            <div>
	


</div>
<script>
$(document).ready(function(){
	
setInterval(function()
{
  var tracker_id='<?php echo $vehicles_gps_tracking_id;  ?>';
  //alert(tracker_id);
    $.ajax({
      url: '<?php echo base_url(); ?>Backend/VehiclesController/get_vehicles_live_location_json_data/<?php echo $vehicles_gps_tracking_id; ?>',
      type: 'POST',
      dataType: 'JSON',
      success: function(data){
		  $('#lat').val(data.lat);
		  $('#lng').val(data.lng);
      $('#details_data').val(data.details);
       }
    });
	},4000);//time in milliseconds 
	
	
});

</script>


<script>
 setInterval(function() {
			
    $('#check').trigger('click');
   // SetMarker('18.25','20.252','');
		SetMarker($('#lat').val(),$('#lng').val(),$('#details_data').val());
			 //alert("Hello!");
        }, 2000);



</script>
    
    </section>
    <!-- /.content -->
</div>



