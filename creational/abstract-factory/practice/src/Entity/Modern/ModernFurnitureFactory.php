<?php

declare(strict_types=1);

namespace App\Entity\Modern;

use App\Interface\ChairInterface;
use App\Interface\TableInterface;
use App\Entity\Modern\ModernChair;
use App\Interface\FurnitureAbstractFactoryInterface;

/**
 * Concrete factory to product the modern family products
 */
class ModernFurnitureFactory implements FurnitureAbstractFactoryInterface
{
    public function createChair(): ChairInterface
    {
        return new ModernChair();
    }

    public function createTable(): TableInterface
    {
        return new ModernTable();
    }
}
