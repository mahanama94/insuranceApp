<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 1:22 PM
 */

namespace Omicron\Models\Services\TowServices;

use Omicron\Models\TowBooking;

class AATowServiceProvider extends TowService
{

    public function bookTow()
    {
        return new TowBooking([]);
    }
}