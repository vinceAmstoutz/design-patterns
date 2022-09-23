<?php

declare(strict_types=1);

namespace App\Interface;

/**
 * Abstract Factory Interface
 */
interface FurnitureAbstractFactoryInterface
{
    public function createChair(): ChairInterface;
    public function createTable(): TableInterface;
}
