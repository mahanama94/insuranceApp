<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 7:07 PM
 */

namespace Omicron\Models;

use Faker\Factory;

class Vehicle
{
    protected $faker;

    public function __construct(array $attributes)

    {
        parent::__construct($attributes);
        $this->faker = Factory::create();
    }
    
}