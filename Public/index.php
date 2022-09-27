<?php

use App\Context\Serializer;

require '../vendor/autoload.php';


$data = ['test'=>'test'];
$json = json_encode($data);
$serializer = ( new Serializer($data, 'json'))->serialize();
$serializer2 = ( new Serializer($json, 'array'))->serialize();
 var_dump($serializer, $serializer2);
