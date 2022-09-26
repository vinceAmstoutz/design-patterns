<?php

declare(strict_types=1);

namespace App\Builder;

use App\Entity\Car;
use App\Entity\Engine;
use App\Interface\BuilderInterface;

/**
 * A concrete car builder to retrieve 
 * complex objects an use them
 */
class CarBuilder implements BuilderInterface
{
    private Car $car;

    /** 
     * Facade between the constructor & the reset method when we instantiate
     */
    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->car = new Car();
    }

    public function setSeats(int $number): void
    {
        $this->car->seats = $number;
    }

    public function setEngine(Engine $engine): void
    {
        $this->car->engine = $engine;
    }

    public function setTripComputer(): void
    {
        echo 'Computer set !<br>';
    }

    public function setGps(): void
    {
        echo 'GPS set !<br>';
    }

    /**
     * Return the car instance
     *
     * @return Car
     */
    public function getResult(): Car
    {
        $car = $this->car;
        $this->reset();

        return $car;
    }
}
