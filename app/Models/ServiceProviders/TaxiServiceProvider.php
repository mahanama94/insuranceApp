<?php

/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:05 PM
 */

namespace Omicron\Models\ServiceProviders;

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
        return $this->serviceProviders[$name]->bookTaxi($parameters);
    }

}