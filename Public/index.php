<?php

use App\StrategyPattern\Context\Serializer;

require '../vendor/autoload.php';


$data = ['test' => 'test2'];
$json = json_encode(['JsonTest' => 'JsonTest']);

$serializer = (new Serializer())->serialize($data, 'json');
$serializer2 = ( new Serializer())->serialize($json, 'array');
dump($serializer);
