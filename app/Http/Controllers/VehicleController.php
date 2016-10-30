<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 7:07 PM
 */

namespace Omicron\Http\Controllers;


class VehicleController extends Controller
{

    private $samples = [
        [
            "number"=> "JH-3569",
            "owner"=> "aaa",
            "insuranceCompany"=> "AIA",
            "policyNumber"=> "458712",
            "policyExpireDate"=> "2020-08-08"
        ],
        [
            "number"=> "KK-8574",
            "owner"=> "bbb",
            "insuranceCompany"=> "AsianAllianz",
            "policyNumber"=> "458712",
            "policyExpireDate"=> "2025-01-08"
        ],
        [
            "number"=> "GH-784792",
            "owner"=> "ccc",
            "insuranceCompany"=> "AIA",
            "policyNumber"=> "458712",
            "policyExpireDate"=> "2018-10-08"
        ],
        [
            "number"=> "OP-8592",
            "owner"=> "ddd",
            "insuranceCompany"=> "AsianAllianz",
            "policyNumber"=> "458712",
            "policyExpireDate"=> "2028-02-28"
        ]
    ];

    public function index(){
        return response(["Vehicles" => $this->samples]);
    }
}