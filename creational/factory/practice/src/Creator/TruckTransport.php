<?php

namespace App\Creator;

use App\Factory\TransportPlatform;
use App\Interface\TransportInterface;
use App\Connector\TruckTransportConnector;

/**
 * The concrete creator which supports the truck
 */
class TruckTransport extends TransportPlatform
{
    /**
     *
     * @param integer $shipments number of shipments
     */
    public function __construct(private int $shipments)
    {
    }

    /**
     * Define the abstract factory method
     *
     * @return TransportInterface
     */
    public function getTransport(): TransportInterface
    {
        return new TruckTransportConnector($this->shipments);
    }
}
