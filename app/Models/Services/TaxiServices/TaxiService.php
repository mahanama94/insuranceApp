<?php

/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:01 PM
 */

namespace Omicron\Models\Services\TaxiServices;

abstract class TaxiService
{

    abstract public function bookTaxi();

    abstract public function checkStatus();

}