<?php

declare(strict_types=1);

namespace App\Entity;

use App\Interface\ChairInterface;

class Chair implements ChairInterface
{
    public function __construct(
        protected ?int $legs = 4
    ) {
    }

    public function hasLegs(): bool
    {
        return is_int($this->getLegs());
    }

    public function getLegs(): ?int
    {
        return $this->legs;
    }

    /**
     * To break legs 
     *
     * @param integer $number 
     * @return Chair
     */
    public function brokeLegs(int $number): Chair
    {
        if ($this->getLegs() >= $number)
            $this->legs = $this->legs - $number;

        return $this;
    }
}
