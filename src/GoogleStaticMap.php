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
            $config = config('google-map');

            $marker = (new Marker)
                ->setIconUrl($config['static_map']['default_marker']['icon_url'])
                ->setColor($config['static_map']['default_marker']['color'])
                ->setSize($config['static_map']['default_marker']['size'])
                ->setLatitude($latitude)
                ->setLongitude($longitude);

            $this->addMarker($marker);
        }

        return $this;
    }
}
