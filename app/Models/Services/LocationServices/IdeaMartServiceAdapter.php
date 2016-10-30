<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 10:39 AM
 */

namespace Omicron\Models\Services\LocationServices;


use Omicron\Models\Location;

class IdeaMartServiceAdapter
{

    public static function getLocation($mobileNumber){
        return new Location();
    }


}