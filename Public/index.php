<?php

use App\Context\Serializer;

require '../vendor/autoload.php';


$data = ['test'=>'test'];
$json = json_encode($data);

$serializer = ( new Serializer())->serialize($data, 'json');
$serializer2 = ( new Serializer())->serialize($json, 'array');
 dump($serializer, $serializer2);

