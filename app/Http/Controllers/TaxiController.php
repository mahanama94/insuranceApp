<?php

/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 7:47 PM
 */

namespace Omicron\Http\Controllers;

use Illuminate\Database\Eloquent\Collection;
use Omicron\Http\Requests\Taxi\BookTaxi;
use Omicron\Http\Requests\Taxi\TaxiBookTaxi;
use Omicron\Http\Requests\Taxi\ViewTaxi;
use Omicron\Models\ServiceProviders\TaxiServiceProvider;
use Omicron\Models\Transformers\Transformable;
use Omicron\Models\Booking;


class TaxiController extends Controller
{
    use Transformable;

    private $taxiServiceProvider;

    public function __construct()
    {
        $this->taxiServiceProvider = new TaxiServiceProvider();
    }

    public function index(){

        $random = rand(2, 6);

        $collection = new Collection();

        for( $i = 0; $i < $random;$i = $i +1){
            $collection = $collection->add(new Booking([]));
        }

        return response([
            'booking' => $this->transform('booking', $collection)
        ]);

    }

    public function show($taxi, ViewTaxi $request){

        return response([
            'booking' => $this->transform('booking', $this->taxiServiceProvider->retrieveBooking($taxi))
        ]);


    }

    public function store(BookTaxi $request){
        return response([
            'booking' => $this->transform('booking', $this->taxiServiceProvider->bookTaxi($request->input('serviceProvider'), $request->all()))
        ]);
    }

}