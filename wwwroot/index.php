<?php

$response = file_get_contents('https://management.azure.com/subscriptions/8f8cd043-9361-4936-ab7b-c9eabac3eb62/providers/Microsoft.ResourceHealth/availabilityStatuses?api-version=2015-01-01');
echo $response;
?>
