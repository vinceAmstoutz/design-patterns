<?php

declare(strict_types=1);

use App\Director;
use App\Builder\CarBuilder;
use App\Builder\CarManualBuilder;
use App\Interface\BuilderInterface;

require 'vendor/autoload.php';

//Ugly way just to add a description quickly into the index dynamically
define("ROOT_PATH", dirname(__FILE__));
echo '<h1>Welcome in the ' . basename(dirname(ROOT_PATH))  . '  design pattern index !</h1>';
echo '<p>Mini project directory :</u> ' . ROOT_PATH . '</p>';


// Creates a simple car 
$carBuilder = new CarBuilder();
$carDirector = buildDirector($carBuilder);
$carDirector->createMinimalClassicCar();
$car = $carBuilder->getResult();
var_dump($car);
echo '<br>------<br>';

// Creates a simple car manual
$carManualBuilder = new CarManualBuilder();
$carDirector = buildDirector($carManualBuilder);
$carDirector->createMinimalCarManual();
$carManualBuilder->setGps(); //Set the object after it's construction using the builder
$carManual = $carManualBuilder->getResult();
var_dump($carManual);

/** IMPORTANT : 
 *  you can also use the chaining method (like a QueryBuilder) tho do something like that :
 *  e.g. : $car = $carManualBuilder
 *              ->createMinimalCarManual()
 *              ->setGps
 *              ->getResult();
 * 
 *  For that you just have to add `return $this;` 
 *  instead void into the set methods of the classes.
 * 
 *  <=> Fluent design pattern
 */

/**
 * Builds the director with the associated builder
 *
 * @param BuilderInterface $builder
 * @return Director
 */
function buildDirector(BuilderInterface $builder): Director
{
    $director = new Director;
    $director->setBuilder($builder);

    return $director;
}
