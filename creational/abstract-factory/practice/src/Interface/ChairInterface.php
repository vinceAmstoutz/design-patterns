<?php

declare(strict_types=1);

namespace App\Interface;

use App\Entity\Chair;

/**
 * Interface for chair products
 */
interface ChairInterface
{
    public function hasLegs(): bool;
    public function getLegs(): ?int;
    public function brokeLegs(int $number): Chair;
}
