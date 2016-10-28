<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 11:01 PM
 */

namespace Omicron\Models\ServiceProviders;


use Omicron\Models\Services\TowServices\CityTowService;

class TowServiceProvider extends ServiceProvider
{

    public function __construct()
    {
        $this->serviceProviders = [
            'city' => new CityTowService()
        ];
    }

    public function bookTow($name, $parameters){
        return $this->serviceProviders[$name]->bookTow($parameters);
    }

}