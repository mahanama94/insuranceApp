<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:37 PM
 */

namespace Omicron\Models\Transformers;

use Omicron\Models\Booking;
use Omicron\Models\Services\LocationServices\IdeaMartServiceAdapter;

class BookingTransformer extends Transformer
{
    /**
     * @param \Omicron\Models\Booking $booking
     * @return array
     */
    public function transform($booking)
    {
        return [
            'referenceNumber' => $booking->getReferenceNumber(),
            'status' => $this->transformStatus($booking),
            'driver' => [
                'name' => $booking->getDriverName(),
                'mobileNumber' => $booking->getDriverMobile()
            ],
            'lisencePlate' => $booking->getPlateNumber(),
            'vehicleType' => $booking->getVehicleType(),
            'serviceProvider' => $booking->getServiceProvider()
        ];
    }

    private function transformStatus($booking){
        if( $booking->getStatus() == "Finished"){
            return [
                    "status" => "Finished"
                ];
        }
        return [
                "status" => "on the way",
                "location" => $this->tranformLocation(IdeaMartServiceAdapter::getLocation($booking->getDriverMobile()))
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