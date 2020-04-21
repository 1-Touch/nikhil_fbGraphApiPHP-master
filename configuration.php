<?php

	require_once __DIR__ . '/vendor/autoload.php';

	session_start();

	$app_id = '1278747059182154';
	$app_secret = 'a02b11afd83e27b93b9a942a4c811e68';

	$fb = new \Facebook\Facebook([
			'app_id' => $app_id,
			'app_secret' => $app_secret,
			'graph_api_version' => 'v5.0',
	]);

?>

