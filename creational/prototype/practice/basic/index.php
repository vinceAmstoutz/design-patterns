<?php

declare(strict_types=1);

use App\Entity\Author;
use App\Entity\Page;

require 'vendor/autoload.php';

//Ugly way just to add a description quickly into the index & dynamically
define("ROOT_PATH_PARENT", dirname(dirname(__FILE__)));
define("ROOT_PATH", dirname(__FILE__));
echo '<h1>Welcome in the ' . basename(dirname(ROOT_PATH_PARENT))  . '  design pattern index (basic implementation) !</h1>';
echo '<p>Mini project directory :</u> ' . ROOT_PATH . '</p>';

//Usage in the client code part
$author = new Author('Vince', 'Doe', 'vince_doe');
$homePage = new Page('Home', 'Welcome in this wonderful website : !', $author);

var_dump($homePage->getTitle());
echo '<br>----<br>';
var_dump($homePage->getAuthor()->getPages()); //1 page (created just before!)
echo '<br>----<br>';
var_dump($homePage->getComments());
echo '<br>----<br>';

$contactUsPage = clone $homePage; //we are cloning the page ! It's calls the __clone method !
var_dump($contactUsPage->getAuthor()->getPages()); //2 pages for vince_doe! 
echo '<br>----<br>';
var_dump($contactUsPage->getTitle());
