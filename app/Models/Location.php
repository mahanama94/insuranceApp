<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 10:40 AM
 */

namespace Omicron\Models;


class Location
{

    private $latitude;

    private $longitude;

    private $lastUpdatedOn;


    public function getLatitude(){
        return 6.7969;
    }

    public function getLongitude(){
        return 79.9018;
    }

    public function getAddress(){
        return "university of Moratuwa, Moratuwa";
    }
}