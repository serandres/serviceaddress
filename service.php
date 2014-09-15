<?php 
	header('Access-Control-Allow-Origin: *'); 
	if(!$_GET['lon'] && !$_GET['lat']){
		echo 'No hay datos para procesar!';
	}else{
		$lonlat=$_GET['lat'].','.$_GET['lon'];
		header ("Location: http://maps.googleapis.com/maps/api/geocode/json?latlng=".$lonlat."&sensor=true_or_false"); 

	}
?>