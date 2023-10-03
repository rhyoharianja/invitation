<?php

require_once('vendor/autoload.php');

$client = new \MailchimpMarketing\ApiClient();

$client->setConfig([
	'apiKey' => '6d3f826edadbc02a833f8023d560b7c4-us14',
	'server' => 'us14'
]);

$response = $client->searchMembers->search("suryo");


?>

