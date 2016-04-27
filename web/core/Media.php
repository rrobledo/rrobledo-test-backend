<?php

namespace core;

class Media {

    public function __construct($app) {
        $this->app = $app;
    }

    public function getGeoInfo($media_id)
    {
        $geopoint = array('geopoint' => 
                        array('latitude' => 42.277,
                              'longitude' => -71.9256));

        $result = json_encode(array('id' => $media_id, 'location' => $geopoint));
        return $result;
    }
} 
