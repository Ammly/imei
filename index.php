<?php 
require_once('vendor/autoload.php');

$imei = intval("3557410674329634");

// These code snippets use an open-source library. http://unirest.io/php
$response = Unirest\Request::post("https://ismaelc-imei-info.p.mashape.com/checkimei?login=Ammly&password=sub00ts]0M",
  array(
  	"X-Mashape-Key" => "HINimqmaqjmshU3SF2tlVyJo79mwp1LPmtTjsniTICNVxdvAYq",
    "Content-Type" => "application/x-www-form-urlencoded",
    "Accept" => "application/json"
  ),
  array(
  	"imei"=>"357791062734465"
  	)	
);
echo "<pre>";
print_r($response);
