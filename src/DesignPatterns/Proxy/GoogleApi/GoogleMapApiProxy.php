<?php

namespace Src\DesignPatterns\Proxy\GoogleApi;

class GoogleMapApiProxy implements GoogleMapApiInterface
{

    private GoogleMapApiInterface $googleMapApi;

    /**
     * @param GoogleMapApiInterface $googleMapApi
     */
    public function __construct(GoogleMapApiInterface $googleMapApi)
    {
        $this->googleMapApi = $googleMapApi;
    }

    public function findPlaceByLatLng(string $lat, string $lng)
    {
        if (env('APP_ENV') == 'production') {
            return $this->googleMapApi->findPlaceByLatLng($lat, $lng);
        }

        return null;
    }
}
