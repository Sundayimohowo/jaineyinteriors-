<?php
header("Content-Type: application/json");

include "vendor/autoload.php";
$config=[
    "proxy-host"=>"us-dc.proxymesh.com",
    "proxy-port"=>"31280",
    "proxy-username"=>"Stephking",
    "proxy-password"=>"motunrayor"
];
$api = new \Sovit\TikTok\Api($config);

$result = $api->getUser($_GET['user']);
echo json_encode($result, JSON_PRETTY_PRINT);
