<?php

declare(strict_types=1);

use App\Entity\Button;
use App\Registry\PrototypeRegistry;

require 'vendor/autoload.php';

//Ugly way just to add a description quickly into the index & dynamically
define("ROOT_PATH_PARENT", dirname(dirname(__FILE__)));
define("ROOT_PATH", dirname(__FILE__));
echo '<h1>Welcome in the ' . basename(dirname(ROOT_PATH_PARENT))  . '  design pattern index (Prototype Registry implementation) !</h1>';
echo '<p>Mini project directory :</u> ' . ROOT_PATH . '</p>';

//Usage in the client code part (ugly display only)
$registry = new PrototypeRegistry;

echo '1/ Original button : <br>';
$button = new Button(10, 25, 'red');
$registry->addItem('CancelButton', $button);

var_dump($button);
echo '<br> ==> Registry (<b>1 item</b>) : ------<br>';
var_dump($registry->getItems());
echo '------<br>------';

echo '<br><br>2/ Button cloned :<br>';
$cancelButtonCopy = $registry->getByColor('red'); //clone using the registry
var_dump($cancelButtonCopy);

$registry->addItem('CancelButtonCopy', $cancelButtonCopy); //append it
echo '<br> ==> Registry (<b>2 items!</b>) : ------<br>';
var_dump($registry->getItems());
echo '------<br>------';
