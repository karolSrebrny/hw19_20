<?php


namespace App\Http\Controllers;
use App\Models\Visit;
use App\Service\Geo\GeoServiceInterface;
use App\Service\UserAgent\UserAgentServiceInterface;


class UserController
{

    public function __invoke(GeoServiceInterface $geoService, UserAgentServiceInterface $agentService)
    {
        $ip = request()->ip() !== '127.0.0.1' ?: request()->server->get('HTTP_X_FORWARDED_FOR');
        $agent = request()->userAgent();
        $agentService->parse($agent);
        $geoService->parse($ip);

        Visit::create([
            'ip' => $ip,
            'continent_code' => $geoService->continentCode(),
            'country_code' => $geoService->countryCode(),
            'browser' => $agentService->browser(),
            'os' => $agentService->os(),
        ]);


    }
}
