<?php 
	//http://localhost:8090/serviceaddress/service.php?lat=4.73886&lon=-75.90998
	//http://maps.googleapis.com/maps/api/geocode/json?latlng=4.73886,-75.90998&sensor=true_or_false
	//echo $_GET['lon'];
	//echo $_GET['lat'];
	$lonlat=$_GET['lat'].','.$_GET['lon'];
	echo $lonlat;

?>
	<script type="text/javascript">
		var url='http://maps.googleapis.com/maps/api/geocode/json?latlng=$lonlat&sensor=true_or_false';
		console.log(url);
	</script>