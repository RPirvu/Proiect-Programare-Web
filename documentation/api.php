<?php
require("../vendor/autoload.php");
$openapi = \OpenApi\Generator::scan(['../public']);
header('Content-Type: application/json');
echo $openapi->toJSON();