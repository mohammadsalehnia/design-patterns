<?php

namespace Src\DesignPatterns\Proxy\GoogleApi;

interface GoogleMapApiInterface
{
    public function findPlaceByLatLng(string $lat, string $lng);
}
