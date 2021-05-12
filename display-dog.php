<?php

require_once 'vendor/autoload.php';
$db = new \Fetch\Classes\Db();
$dogID = $_GET['Id'];
$dogs = \Fetch\Hydrators\DogHydrator::getSingleDog($db->getDb(), $dogID);
//var_dump($dogs);
//$displayDogs = \Fetch\Classes\DogDisplayer::displayDetailedInfo($dogs[0]);

echo gettype($dogID);
?>
