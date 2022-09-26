<?php

declare(strict_types=1);

namespace App;

use App\Entity\Engine;
use App\Interface\BuilderInterface;

/**
 * The Director allow us to list the building steps in a
 * particular order. The Director class is optional, the client 
 * can control builders directly, without a director class.
 */
class Director
{
    /**
     * Builder
     *
     * @var BuilderInterface
     */
    private BuilderInterface $builder;

    public function setBuilder(BuilderInterface $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * Create a minimal "classic" car for our study case
     *
     * @return void
     */
    public function createMinimalClassicCar(): void
    {
        $this->builder->reset();
        $this->builder->setSeats(5);
        $this->builder->setEngine(new Engine());
        $this->builder->setGps();
        $this->builder->setTripComputer();
    }

    /**
     * Create a "minimal car manual" for our study case
     *
     * @return void
     */
    public function createMinimalCarManual(): void
    {
        $this->builder->reset();
        $this->builder->setSeats(4); //let's assume that the 4 seat cars are the minimum equivalent configuration for the manual
        $this->builder->setEngine(new Engine());
    }
}
