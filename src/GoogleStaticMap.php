<?php

namespace NMFCODES\GoogleStaticMap;

use GoogleStaticMap\Map;

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
}
