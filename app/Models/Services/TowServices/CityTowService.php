<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 11:03 PM
 */

namespace Omicron\Models\Services\TowServices;


use Omicron\Models\TowBooking;

class CityTowService extends TowService
{

    public function bookTow()
    {
        return new TowBooking([]);
    }
}