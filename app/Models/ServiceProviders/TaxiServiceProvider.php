<?php

/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:05 PM
 */

namespace Omicron\Models\ServiceProviders;

use Illuminate\Database\Eloquent\Collection;
use Omicron\Models\Booking;
use Omicron\Models\Services\LocationServices\IdeaMartServiceAdapter;
use Omicron\Models\Services\TaxiServices\PickMeTaxiService;
use Omicron\Models\Services\TaxiServices\UberTaxiService;

class TaxiServiceProvider extends ServiceProvider
{

    public function __construct()
    {
        $this->serviceProviders = [
            'uber' => new UberTaxiService(),
            'pickme' => new PickMeTaxiService()
        ];
    }

    public function bookTaxi($name, $parameters){

        $location = IdeaMartServiceAdapter::getLocation($parameters['mobileNumber']);

        $parameters = array_merge($parameters, [
            'location' => [
                'latitude' => $location->getLatitude(),
                'longitude' => $location->getLongitude(),
                'address' => $location->getAddress()
            ]
        ]);

        return $this->serviceProviders[$name]->bookTaxi($parameters);
    }

    public function retrieveBooking($referenceNumber){

        return new Collection([new Booking([])]);
    }

}