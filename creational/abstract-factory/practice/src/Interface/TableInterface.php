<?php

declare(strict_types=1);

namespace App\Interface;

/**
 * Interface for table products
 */
interface TableInterface
{
    public function getLegs(): ?int;
}
