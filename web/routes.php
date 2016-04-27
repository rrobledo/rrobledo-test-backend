<?php
/**
 * Web UI resource routes
 */
require_once __DIR__.'/handlers/MediaHandler.php'; 
use Silex\Provider\SerializerServiceProvider;

$app->register(new SerializerServiceProvider());

$app['media.handler'] = $app->share(function() use($app) {
    return new \handlers\MediaHandler($app);
});

//Routes
$app->get('/media/{media_id}', function($media_id) use ($app) {
    return $app['media.handler']->get($media_id);
});