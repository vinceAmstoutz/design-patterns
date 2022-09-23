<?php

declare(strict_types=1);

namespace App\Entity\ArtDeco;

use App\Interface\ChairInterface;
use App\Interface\FurnitureAbstractFactoryInterface;
use App\Interface\TableInterface;

/**
 * Concrete factory to product victorian products
 */
class VictorianFurnitureFactory implements FurnitureAbstractFactoryInterface
{
    public function createChair(): ChairInterface
    {
        return new ChairInterface();
    }

    public function createTable(): TableInterface
    {
        return new TableInterface();
    }
}
