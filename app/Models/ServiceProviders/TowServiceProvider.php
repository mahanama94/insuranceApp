<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 11:01 PM
 */

namespace Omicron\Models\ServiceProviders;


use Illuminate\Database\Eloquent\Collection;
use Omicron\Models\Services\LocationServices\IdeaMartServiceAdapter;
use Omicron\Models\Services\TowServices\AATowServiceProvider;
use Omicron\Models\Services\TowServices\CityTowService;
use Omicron\Models\TowBooking;

class TowServiceProvider extends ServiceProvider
{

    public function __construct()
    {
        $this->serviceProviders = [
            'CC' => new CityTowService(),
            'AA' => new AATowServiceProvider()
        ];
    }

    public function bookTow($name, $parameters){

        $location = IdeaMartServiceAdapter::getLocation($parameters['mobileNumber']);

        $parameters = array_merge($parameters, [
            'location' => [
                'latitude' => $location->getLatitude(),
                'longitude' => $location->getLongitude(),
                'address' => $location->getAddress()
            ]
        ]);

        return new Collection([$this->serviceProviders[$name]->bookTow($parameters)]);

    }

    public function retrieveBooking($referenceNumber){

        return new Collection([new TowBooking([])]);

    }

}