<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 1:25 PM
 */

namespace Omicron\Models;


use Faker\Factory;
use Illuminate\Database\Eloquent\Model;

class TowBooking extends Model
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
        return $this->faker->randomElement(['OnTheWay', 'BeingTowed', 'Finished']);
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

    public function getServiceProvider(){
        return $this->faker->randomElement(['AA', 'CC']);
    }

}