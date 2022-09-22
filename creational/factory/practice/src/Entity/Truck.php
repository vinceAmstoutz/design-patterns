<?php

namespace App\Entity;

use App\Interface\TransportInterface;

/**
 * Concrete product
 */
class Truck implements TransportInterface
{
    /**
     *
     * @param integer $shipments number of shipments
     */
    public function __construct(private int $shipments)
    {
    }

    /**
     * Load the truck
     *
     * @return void
     */
    public function load(): void
    {
        echo 'Send request(s) to load ' . $this->getShipments() . ' shipments in the truck. <br>';
    }

    /**
     * Move the truck
     *
     * @return void
     */
    public function move(): void
    {
        echo 'Send request to move the truck to deliver the shipments. Truck gone!<br>';
    }

    /**
     * unload the truck
     *
     * @return void
     */
    public function unload(): void
    {
        echo 'Truck arrived !' . ' Send request to unload ' . $this->getShipments() . ' shipments!<br>';
    }

    public function getShipments(): int
    {
        return $this->shipments;
    }
}
