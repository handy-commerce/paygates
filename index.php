<?php
require_once ('vendor/autoload.php');
use Gateways\Api;
$api = new Api();
$api->setSdkName('epayco');
?>
<html>
    <head>
        <title> Hill </title>
    </head>
    <body>
        <div> Hello my api is : <?php echo $api->getSdkName()?> </div>
    </body>
</html>
