<?php

declare(strict_types=1);

namespace App\Entity;

use App\Interface\TableInterface;

class Table implements TableInterface
{
    public function __construct(
        protected int $legs = 6
    ) {
    }

    public function getLegs(): int
    {
        return $this->legs;
    }
}
