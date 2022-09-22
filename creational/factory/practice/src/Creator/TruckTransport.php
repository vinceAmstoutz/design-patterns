<?php

namespace App\Creator;

use App\Entity\Truck;
use App\Factory\TransportPlatform;
use App\Interface\TransportInterface;

/**
 * he concrete creator who supports the delivery by trucks
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
        return new Truck($this->shipments);
    }
}
