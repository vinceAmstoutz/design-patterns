<?php

namespace App\Creator;

use App\Entity\Boat;
use App\Factory\TransportPlatform;
use App\Interface\TransportInterface;

/**
 * The concrete creator who supports the delivery by boats
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
        return new Boat($this->shipments);
    }
}
