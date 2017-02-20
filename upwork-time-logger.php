<?php

if ( is_readable( "$IP/vendor/autoload.php" ) ) {
	require_once "$IP/vendor/autoload.php";
}

$config = new \Upwork\API\Config(
    [
        'consumerKey'       => 'xxxxxxxxxxxxxxxxxxxxxxxxxxxx',
        'consumerSecret'    => 'xxxxxxxxxxxxxx',
        'debug'             => true,
    ]
);

$client = new \Upwork\API\Client( $config );
