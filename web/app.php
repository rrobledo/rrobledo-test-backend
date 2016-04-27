<?php
	require_once __DIR__.'/vendor/autoload.php'; 

	$app = new Silex\Application(); 

	$app['global.config'] = require_once __DIR__.'/config/global.php';
	require_once __DIR__.'/routes.php';

	$app['debug'] = true;
	$app->run(); 
?>
