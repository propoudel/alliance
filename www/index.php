<?php
require_once __DIR__ .'/../vendor/autoload.php';

use Tuklal\Alliance\Classes\Basket;
use Tuklal\Alliance\Classes\Fruit;


//Apple Basket
$appleBasket = new Basket();
$appleBasket->setTitle('Apple Basket');
echo $appleBasket->getTitle();
echo $appleBasket->status;

//Apple
$apple = new Fruit('Apple');
echo $apple->color;
echo Fruit::$fruits[0]->color;
$apple->eat(50);
echo $apple->size;

//Orange
$orange = new Fruit('Orange');
echo $orange->color;
echo Fruit::$fruits[0]->color;

$orange->eat(50);
echo $orange->size;


// @todo
$apple->lost_hour($appleBasket);
$apple->putToTheBasket($appleBasket);
echo $appleBasket->status;
echo $appleBasket->countFruits();

?>