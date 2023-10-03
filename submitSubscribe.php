<?php

require_once('vendor/autoload.php');

$client = new \MailchimpMarketing\ApiClient();

$client->setConfig([
	'apiKey' => 'd981dd68c9abb58aa8cb0e07f1740be5-us14',
	'server' => 'us14'
]);

$response = $client->searchMembers->search("suryo");


?>

