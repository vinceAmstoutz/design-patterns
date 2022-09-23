<?php

declare(strict_types=1);

use App\Creator\BoatTransport;
use App\Creator\TruckTransport;
use App\Factory\TransportPlatform;

require 'vendor/autoload.php';

//Ugly way just to add a description quickly into the index dynamically
define("ROOT_PATH", dirname(__FILE__));
echo '<h1>Welcome in the ' . basename(dirname(ROOT_PATH))  . '  design pattern index !</h1>';
echo '<p>Mini project directory :</u> ' . ROOT_PATH . '</p>';

//Usage in the client code part
$shipments = 150; //150 shipments to send (ugly just for this exercise)

//For example if the user's choice is a delivery by boat
deliver(new BoatTransport($shipments));
echo '-----<br>';
//For example if the user's choice is a delivery by truck
deliver(new TruckTransport($shipments));

/**
 * Example of client method 
 *
 * @param TransportPlatform $transportPlatform
 * @return void
 */
function deliver(TransportPlatform $transportPlatform)
{
    $transportPlatform->deliver();
}
