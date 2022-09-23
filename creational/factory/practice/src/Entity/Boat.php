<?php

declare(strict_types=1);

namespace App\Entity;

use App\Interface\TransportInterface;

/**
 * Concrete product
 */
class Boat implements TransportInterface
{
    /**
     *
     * @param integer $shipments number of shipments
     */
    public function __construct(private int $shipments)
    {
    }

    /**
     * Load the boat
     *
     * @return void
     */
    public function load(): void
    {
        echo 'Send request(s) to load ' . $this->getShipments() . ' shipments in the boat. <br>';
    }

    /**
     * Move the boat
     *
     * @return void
     */
    public function move(): void
    {
        echo 'Send request to move the boat to deliver the shipments. Boat gone!<br>';
    }

    /**
     * unload the boat
     *
     * @return void
     */
    public function unload(): void
    {
        echo 'Boat arrived !' . ' Send request to unload ' . $this->getShipments() . ' shipments!<br>';
    }

    public function getShipments(): int
    {
        return $this->shipments;
    }
}
