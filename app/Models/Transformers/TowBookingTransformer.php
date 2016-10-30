<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/30/16
 * Time: 1:44 PM
 */

namespace Omicron\Models\Transformers;

use Omicron\Models\TowBooking;
use Omicron\Models\Services\LocationServices\IdeaMartServiceAdapter;

class TowBookingTransformer extends Transformer
{

    /**
     * @param \Omicron\Models\TowBooking $towBooking
     * @return array
     */
    public function transform($towBooking)
    {
        return [
            'referenceNumber' => $towBooking->getReferenceNumber(),
            'status' => $this->transformStatus($towBooking),
            'driver' => [
                'name' => $towBooking->getDriverName(),
                'mobileNumber' => $towBooking->getDriverMobile()
            ],
            'lisencePlate' => $towBooking->getPlateNumber(),
            'serviceProvider' => $towBooking->getServiceProvider()
        ];
    }

    private function transformStatus($towBooking)
    {
        if ($towBooking->getStatus() == 'Finished') {
            return [
                "status" => "Finished"
            ];
        }

        return [
                "status" => $towBooking->getStatus(),
                "location" => $this->tranformLocation(IdeaMartServiceAdapter::getLocation($towBooking->getDriverMobile()))
        ];
    }

    private function tranformLocation($location){
        return [
            'latitude' => $location->getLatitude(),
            'longitude' => $location->getLongitude(),
            'address' => $location->getAddress()
        ];
    }
}