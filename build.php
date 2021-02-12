<?php
define('YAML_FILE', "callme.yaml");
//define("SCAN_DIR", '/var/www/html/urmetcloud/tool/callmeapi');
define("SCAN_DIR", '../urmetcloud-backend/callmeapi');

require("vendor/autoload.php");
$openapi = \OpenApi\scan(SCAN_DIR);
header('Content-Type: application/x-yaml');

//echo $openapi->toYaml();
//echo $openapi->toJson();

file_put_contents(YAML_FILE, $openapi->toYaml());
echo "created file " . YAML_FILE . PHP_EOL;


