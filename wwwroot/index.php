<?php

ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://login.microsoftonline.com/common/oauth2/v2.0/token');
$obj = json_decode($json);
echo $obj->access_token;

echo "Hello World!";

?>
