<?php

use App\Entity\Formater;
use App\Strategy\PlainTextFormat;
use App\Strategy\Strategy;

require '../vendor/autoload.php';


$data = ['test'=>'test'];
$formater = (new Formater())->setData($data);

$strategy = new Strategy( new PlainTextFormat);

 var_dump($strategy->getDataTransformed($formater));
