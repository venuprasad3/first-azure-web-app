<?php

$response = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452');
echo $response;
?>
