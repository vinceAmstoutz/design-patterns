<?php

declare(strict_types=1);

use App\Config\Config;

require 'vendor/autoload.php';

//Ugly way just to add a description quickly into the index dynamically
define("ROOT_PATH", dirname(__FILE__));
echo '<h1>Welcome in the ' . basename(dirname(ROOT_PATH))  . '  design pattern index !</h1>';
echo '<p>Mini project directory :</u> ' . ROOT_PATH . '</p>';

//Usage in the client code part

//1.Classic instantiation without any parameter (echo only once time "Config object instantiated !")
/*    $config = Config::getConfig();
    var_dump($config);
    $config = Config::getConfig();
    var_dump($config);
*/

//2. Advanced usage
//Add parameters when we call the instance, access a parameter and set a single one
$parameters = [
    'database_url' => 'postgresql://db_user:db_password@127.0.0.1:5432/db_name', //never ever use raw secrets in prod env
    'ldap_url' => 'ldap://ldap.example.com/dc=example,dc=com' //never ever use raw secrets in prod env
];
$config = Config::getConfig($parameters);
var_dump($config);
echo '<br>- Database URL : ' . $config->getParameter('database_url') . '<br><br>';

/* These lines don't' work because it's a singleton so we will not call the constructor! 
That's why "Config object instantiated !" is only rendered once. */
$parameters[] = [
    'test' => 'azerty'
];
$config = Config::getConfig($parameters);
var_dump($config);
echo '<br>';

//You must use this after the construction
$config->setParameter('test', 'azerty');
var_dump($config);
echo '<br>- It\'s works ! : ' . $config->getParameter('test') . '<br>';
