<?php

declare(strict_types=1);

require 'vendor/autoload.php';

//Ugly way just to add a description quickly into the index dynamically
define("ROOT_PATH", dirname(__FILE__));
echo '<h1>Welcome in the ' . basename(dirname(ROOT_PATH))  . '  design pattern index !</h1>';
echo '<p>Mini project directory :</u> ' . ROOT_PATH . '</p>';
