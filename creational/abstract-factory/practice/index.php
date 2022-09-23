<?php

declare(strict_types=1);

use App\Interface\ChairInterface;
use App\Entity\ArtDeco\ArtDecoFurnitureFactory;
use App\Entity\Modern\ModernFurnitureFactory;
use App\Interface\FurnitureAbstractFactoryInterface;
use App\Interface\TableInterface;

require 'vendor/autoload.php';

//Ugly way just to add a description quickly into the index dynamically
define("ROOT_PATH", dirname(__FILE__));
echo '<h1>Welcome in the ' . basename(dirname(ROOT_PATH))  . '  design pattern index !</h1>';
echo '<p>Mini project directory :</u> ' . ROOT_PATH . '</p>';

//Client code examples with usage

/**
 * Build chair with a specific factory
 *
 * @param FurnitureAbstractFactoryInterface $factory factory use to build the products
 * @return ChairInterface
 */
function buildChair(FurnitureAbstractFactoryInterface $factory): ChairInterface
{
    return $factory->createChair();
}

/**
 * Build table with a specific factory
 *
 * @param FurnitureAbstractFactoryInterface $factory factory use to build the products
 * @return TableInterface
 */
function buildTable(FurnitureAbstractFactoryInterface $factory): TableInterface
{
    return $factory->createTable();
}


$artDecoChair = buildChair(new ArtDecoFurnitureFactory());
echo 'The art deco chair has ' . ($artDecoChair->hasLegs() ? $artDecoChair->getLegs() : ' no') . ' legs.<br>';


$modernTable = buildTable(new ModernFurnitureFactory());
echo 'The modern table has ' . $modernTable->getLegs() . ' legs.<br>';
