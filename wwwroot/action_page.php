<html>
<body>

<?php $clientID = $_GET["clientID"]; ?><br>
<?php $clientSecret = $_GET["clientSecret"]; ?><br>
<?php $tenant = $_GET["tenant"]; ?><br>

<?php
$resAzureGraphAPI = "https://graph.windows.net";
$serviceRootURL = "https://graph.windows.net/$tenant"
$authString = "https://login.windows.net/$tenant";

$AuthContext = [Microsoft.IdentityModel.Clients.ActiveDirectory.AuthenticationContext]$authString
$clientCredential = New-Object Microsoft.IdentityModel.Clients.ActiveDirectory.ClientCredential($clientID, $clientSecret)

$authenticationTask = $AuthContext.AcquireTokenAsync($resAzureGraphAPI, $clientCredential);
$authenticationTask.Wait()
$authenticationResult = $authenticationTask.Result
?>

</body>
</html>
