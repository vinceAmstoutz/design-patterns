<?php

namespace App\Creator;

use App\Factory\TransportPlatform;
use App\Interface\TransportInterface;
use App\Connector\BoatTransportConnector;

/**
 * The concrete creator which supports the boat
 */
class BoatTransport extends TransportPlatform
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
        return new BoatTransportConnector($this->shipments);
    }
}
