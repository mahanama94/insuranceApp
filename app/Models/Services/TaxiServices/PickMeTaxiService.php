<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:12 PM
 */

namespace Omicron\Models\Services\TaxiServices;

use Illuminate\Database\Eloquent\Collection;
use Omicron\Models\Booking;

class PickMeTaxiService extends TaxiService
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