<?php

try{
    $subscription = Get-AzureRmSubscription
}
catch{
    Login-AzureRmAccount
    $subscription = Get-AzureRmSubscription
}

$tenantId = $subscription.TenantId
echo $tenantId;

?>
