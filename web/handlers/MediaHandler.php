<?php

namespace handlers;
use Symfony\Component\HttpFoundation\Response;

require_once __DIR__.'/../core/Media.php'; 
use core\Media;


class MediaHandler {

    public function __construct($app) {
        $this->app = $app;
    }

    public function get($media_id)
    {
        $media_service = new Media();
        $result = $media_service->getGeoInfo($media_id);

        return new Response($result, 200, array("Content-Type" => "application/json"));
    }
} 
