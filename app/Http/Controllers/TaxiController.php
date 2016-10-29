<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 7:47 PM
 */

namespace Omicron\Http\Controllers;

use Illuminate\Http\Request;
use Omicron\Models\ServiceProviders\TaxiServiceProvider;
use Omicron\Models\Transformers\Transformable;


class TaxiController extends Controller
{
    use Transformable;

    private $taxiServiceProvider;

    public function __construct()
    {
        $this->taxiServiceProvider = new TaxiServiceProvider();
    }

    public function index(){
        // TODO return response for all the bookings by the user
//        return response([
//            'booking' => $this->transform('booking', $this->taxiServiceProvider->bookTaxi('pickme', []))
//        ]);
        return view('welcome');
    }

    public function show($taxi){
        // TODO return response for the given taxi booking
    }

    public function store(Request $request){
        // TODO store taxi booking
        return response([
            'booking' => $this->transform('booking', $this->taxiServiceProvider->bookTaxi('pickme', []))
        ]);
    }

}