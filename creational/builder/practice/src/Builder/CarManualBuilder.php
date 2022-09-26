<?php

declare(strict_types=1);

namespace App\Builder;

use App\Entity\Engine;
use App\Entity\CarManual;
use App\Interface\BuilderInterface;

/**
 * A concrete car manual builder to retrieve 
 * complex objects an use them
 */
class CarManualBuilder implements BuilderInterface
{
    private CarManual $manual;

    /** 
     * Facade between the constructor & the reset method when we instantiate
     */
    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->manual = new CarManual();
    }

    public function setSeats(int $number): void
    {
        $this->manual->seats = $number;
    }

    public function setEngine(Engine $engine): void
    {
        $this->manual->engine = $engine;
    }

    public function setTripComputer(): void
    {
        echo 'Computer may in the doc... It\'s done !<br>';
    }

    public function setGps(): void
    {
        echo 'GPS may in the doc... It\'s done !<br>';
    }

    /**
     * Return the car manual instance
     *
     * @return CarManual
     */
    public function getResult(): CarManual
    {
        $manual = $this->manual;
        $this->reset();

        return $manual;
    }
}
