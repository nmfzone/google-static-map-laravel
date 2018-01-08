<?php

namespace NMFCODES\GoogleStaticMap;

use GoogleStaticMap\Map;
use GoogleStaticMap\Marker;

class GoogleStaticMap extends Map
{
    /**
     * Get the static map url.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->buildSource();
    }
    
    /**
     * Reset the markers.
     *
     * @return void
     */
    public function resetMarkers()
    {
        $this->markers = [];

        return $this;
    }

    /**
     * Setup the underlying map data.
     *
     * @param  string  $latitude
     * @param  string  $longitude
     * @return $this
     */
    public function make($latitude, $longitude)
    {
        // We need to manually reset the markers
        $this->resetMarkers();
        
        $this->setCenter("{$latitude},{$longitude}");

        if (config('google-map.static_map.default_marker.display', true)) {
            $marker = (new Marker)
                ->setLatitude($latitude)
                ->setLongitude($longitude)
                ->setColor(config('google-map.static_map.default_marker.color', ''))
                ->setLabel(config('google-map.static_map.default_marker.label', ''))
                ->setSize(config('google-map.static_map.default_marker.size', ''))
                ->setIconUrl(config('google-map.static_map.default_marker.icon_url', ''));

            $this->addMarker($marker);
        }

        return $this;
    }
}
