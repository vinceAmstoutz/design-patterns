<?php

declare(strict_types=1);

namespace App\Interface;

use App\Entity\Engine;

/**
 * Methods in common between all product construction steps
 * (here the car and theirs manuals have the same steps hence the Builder 
 */
interface BuilderInterface
{
    public function reset(): void;
    public function setSeats(int $number): void;
    public function setEngine(Engine $engine): void;
    public function setTripComputer(): void;
    public function setGps(): void;
}
