<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:04 PM
 */

namespace Omicron\Models\Services\TaxiServices;


use Illuminate\Database\Eloquent\Collection;
use Omicron\Models\Booking;

class UberTaxiService extends TaxiService
{

    public function bookTaxi()
    {
        return new Collection([ new Booking([])]);
    }

    public function checkStatus()
    {
        // TODO: Implement checkStatus() method.
    }
}