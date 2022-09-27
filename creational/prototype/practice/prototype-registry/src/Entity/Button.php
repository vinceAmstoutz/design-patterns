<?php

declare(strict_types=1);

namespace App\Entity;

use App\Interface\PrototypeInterface;

/**
 * @var int
 * Factor to define the gap between to cloned objects 
 */
const PREVENT_OVERLAY = 3;

class Button implements PrototypeInterface
{
    public function __construct(
        private float $x,
        private float $y,
        private string $color, //might be replaced by an enum or something like that
    ) {
    }

    /**
     * Automatically called when a Button object is cloned (using PHP clone keyword 
     * and the PHP magic __clone). 
     * Each button cloned is moved to prevent overlay!
     *
     * @return void
     */
    public function __clone(): void
    {
        $this->x = $this->moveCoordinate($this->x);
        $this->y = $this->moveCoordinate($this->y);
    }

    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * Move coordinate with the PREVENT_OVERLAY and round it
     *
     * @param float $coordinate
     * @return float
     */
    private function moveCoordinate(float $coordinate): float
    {
        return round($coordinate * PREVENT_OVERLAY, 2);
    }
}
