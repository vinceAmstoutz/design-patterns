<?php

namespace App\Interface;

use App\Entity\Chair;

interface FurnitureAbstractFactory
{
    public function createChair(): Chair;

    // public function createTable(): Table;
}
