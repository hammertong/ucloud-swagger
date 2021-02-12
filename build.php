<?php
//define("API_HOST", "https://www.cloud.urmet.com/tool/callmeapi/private");
define("API_HOST", "https://ucloud-dev.urmet.com/tool/callmeapi/private");

define('YAML_FILE', "callme.yaml");
//define("SCAN_DIR", '/var/www/html/urmetcloud/tool/callmeapi');
define("SCAN_DIR", '../urmetcloud-backend/callmeapi');

require("vendor/autoload.php");
$openapi = \OpenApi\scan(SCAN_DIR);
header('Content-Type: application/x-yaml');

//echo $openapi->toYaml();
//echo $openapi->toJson();

file_put_contents(YAML_FILE, $openapi->toYaml());
echo "created file " . YAML_FILE . " for server " . API_HOST . PHP_EOL;


