<?php


use App\Strategy\Strategy;
use App\Strategy\JsonStrategy;
use App\Strategy\XmlStrategy;

require '../vendor/autoload.php';


$data = ['test'=>'test'];
$strategy = new Strategy();
$strategy->setStrategy((new JsonStrategy()));
$strategy->setStrategy((new XmlStrategy()));
var_dump($strategy->getStrategy()->transform($data));