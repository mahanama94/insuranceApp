<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 8:34 PM
 */

namespace Omicron\Http\Controllers;


use Omicron\Models\Stores\PolicyStore;

class InsuranceController extends Controller
{

    private $policyStore;

    public function __construct()
    {
        $this->policyStore = new PolicyStore();
    }

    public function show($insurance){
        return $this->policyStore->getPolicy($insurance);
    }

}