<?php

ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?latlng=40.714224,-73.961452');
$obj = json_decode($json);
echo $obj->access_token;
echo "Hello Azure";
echo "Hello World!";

?>
