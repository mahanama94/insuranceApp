<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 7:48 PM
 */

namespace Omicron\Http\Controllers;


use Omicron\Http\Requests\Towing\BookTow;
use Omicron\Http\Requests\Towing\ViewTow;
use Omicron\Models\ServiceProviders\TowServiceProvider;
use Omicron\Models\TowBooking;
use Omicron\Models\Transformers\Transformable;
use Illuminate\Database\Eloquent\Collection;

class TowController extends Controller
{

    use Transformable;
    
    private $towServiceProvider;
    
    public function __construct()
    {
        $this->towServiceProvider = new TowServiceProvider();
    }

    public function index(){
        $random = rand(2, 6);

        $collection = new Collection();

        for( $i = 0; $i < $random;$i = $i +1){
            $collection = $collection->add(new TowBooking([]));
        }

        return response([
            'towBooking' => $this->transform('towBooking', $collection)
        ]);

    }

    public function show($towing){
        return response([
            'towBooking' => $this->transform('towBooking', $this->towServiceProvider->retrieveBooking($towing))
        ]);
    }

    public function store(BookTow $request)
    {

        return response([
            'towBooking' => $this->transform('towBooking',
                $this->towServiceProvider->bookTow($request->input('serviceProvider'), $request->all()))
        ]);
    }

}