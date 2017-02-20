<?php

if ( is_readable( __DIR__ . 'vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

if ( is_readable( __DIR__ . '/config.php' ) {
	require_once __DIR__ . '/config.php';
} else {
	die( 'Please copy config.example.php to config.php and change the variables values with OAuth credentials from Upwork.' );
}

$config = new \Upwork\API\Config(
	[
		'consumerKey'       => $consumerKey,
		'consumerSecret'    => $consumerSecret,
		'debug'             => true,
	]
);

$client = new \Upwork\API\Client( $config );
