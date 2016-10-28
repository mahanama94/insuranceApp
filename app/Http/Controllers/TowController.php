<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 7:48 PM
 */

namespace Omicron\Http\Controllers;


use Omicron\Models\ServiceProviders\TowServiceProvider;
use Omicron\Models\Transformers\Transformable;

class TowController extends Controller
{

    use Transformable;
    
    private $towServiceProvider;
    
    public function __construct()
    {
        $this->towServiceProvider = new TowServiceProvider();
    }

    public function index(){
        // TODO return response for all the towings by the user
    }

    public function show($taxi){
        // TODO return response for the given tow booking
    }

    public function store(Request $request){
        // TODO store tow booking
    }
    

}