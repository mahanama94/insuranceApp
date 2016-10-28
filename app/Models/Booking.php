<?php

/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:23 PM
 */

namespace Omicron\Models;

use Illuminate\Database\Eloquent\Model;

use Faker\Factory;

class Booking extends Model
{

    protected $faker;

    public function __construct(array $attributes)
    {
        parent::__construct($attributes);
        $this->faker = Factory::create();
    }

    public function getReferenceNumber(){
        return $this->faker->randomNumber(5);
    }

    public function getStatus(){
        return 'pending';
    }

    public function getDriverName(){
        return $this->faker->name;
    }

    public function getDriverMobile(){
        return $this->faker->randomNumber(5);
    }

    public function getPlateNumber(){
        return $this->faker->randomNumber(5);
    }

    public function getVehicleType(){
        return $this->faker->randomElement(['tuktuk', 'mini', 'sedan']);
    }

    public function getServiceProvider(){
        return $this->faker->randomElement(['uber', 'pickme']);
    }

}