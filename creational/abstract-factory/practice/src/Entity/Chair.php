<?php

namespace App\Entity;

class Chair
{
    public function __construct(private int $legs)
    {
    }

    public function hasLegs(): bool
    {
        return is_null($this->getLegs());
    }

    //TODO: type and doc
    public function seatOn()
    {
        //do some stuff
    }

    public function getLegs()
    {
        return $this->legs;
    }
}
