<?php
$url= "http://api.openweathermap.org/data/2.5/weather?q=Atlanta";
$response = file_get_contents($url);
 $data = json_decode($response);
 
 print_r($data);
 
?>
