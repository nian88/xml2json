<?php
include "xml2json.php";
set_time_limit(3000); 
	$xmlNode = simplexml_load_file('DigitalForecast-JawaTimur.xml');
	$arrayData = xmlToArray($xmlNode);
	echo json_encode($arrayData);
?>