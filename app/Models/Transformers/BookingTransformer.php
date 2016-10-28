<?php
/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 10/28/16
 * Time: 8:37 PM
 */

namespace Omicron\Models\Transformers;


class BookingTransformer extends Transformer
{
    /**
     * @param \Booking $booking
     * @return array
     */
    public function transform($booking)
    {
        return [
            'referenceNumber' => $booking->getReferenceNumber(),
            'status' => $booking->getStatus(),
            'driver' => [
                'name' => $booking->getDriverName(),
                'mobileNumber' => $booking->getDriverMobile()
            ],
            'lisencePlate' => $booking->getPlateNumber(),
            'vehicleType' => $booking->getVehicleType(),
            'serviceProvider' => $booking->getServiceProvider()
        ];
    }
}