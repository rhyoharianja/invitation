<?php

require_once('vendor/autoload.php');

// $client = new \MailchimpMarketing\ApiClient();

// $client->setConfig([
// 	'apiKey' => 'd981dd68c9abb58aa8cb0e07f1740be5-us14',
// 	'server' => 'us14'
// ]);

// $response = $client->searchMembers->search("suryo");
// echo json_encode($response);

function connectMailChimp() {
	
	$client = new \MailchimpMarketing\ApiClient();

	$client->setConfig([
		'apiKey' => 'd981dd68c9abb58aa8cb0e07f1740be5-us14',
		'server' => 'us14'
	]);

	return $client;

}

function searchMembers($search = '') {
	$getData = connectMailChimp();

	$data = [];
	if(empty($search)){
		return [];
	}
	$response = $getData->searchMembers->search($search);
	if(empty($response->full_search)) {
		$data = [];
	}
	if(empty($response->full_search->members)) {
		$data = [];
	}

	foreach ($response->full_search->members as $values) {
		$data = $values;
	}

	return $data;
}

?>

