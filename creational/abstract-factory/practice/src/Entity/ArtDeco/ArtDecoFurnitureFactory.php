<?php

declare(strict_types=1);

namespace App\Entity\ArtDeco;

use App\Interface\ChairInterface;
use App\Interface\TableInterface;
use App\Entity\ArtDeco\ArtDecoChair;
use App\Entity\ArtDeco\ArtDecoTable;
use App\Interface\FurnitureAbstractFactoryInterface;

/**
 * Concrete factory to product art deco products
 */
class ArtDecoFurnitureFactory implements FurnitureAbstractFactoryInterface
{
    public function createChair(): ChairInterface
    {
        return new ArtDecoChair();
    }

    public function createTable(): TableInterface
    {
        return new ArtDecoTable();
    }
}
