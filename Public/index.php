<?php

use App\Strategy\JsonFormat;
use App\Strategy\Strategy;
use Entity\Formater;

require '../vendor/autoload.php';


$data = ['test'=>'test'];
$formater = (new Formater())->setData($data);

$strategy = new Strategy(new JsonFormat());

var_dump($strategy->getDataTransformed($formater));