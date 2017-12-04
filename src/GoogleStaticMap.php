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
     * Setup the underlying map data.
     *
     * @param  string  $latitude
     * @param  string  $longitude
     * @return $this
     */
    public function make($latitude, $longitude)
    {
        $this->setCenter("{$latitude},{$longitude}");

        if (config('google-map.static_map.default_marker.display', true)) {
            $marker = (new Marker)
                ->setColor(config('google-map.static_map.default_marker.color'))
                ->setLatitude($latitude)
                ->setLongitude($longitude);

            if ($size = config('google-map.static_map.default_marker.size')) {
                $marker = $marker->setSize($size);
            }

            if ($icon = config('google-map.static_map.default_marker.icon_url')) {
                $marker = $marker->setIconUrl($icon);
            }

            $this->addMarker($marker);
        }

        return $this;
    }
}
