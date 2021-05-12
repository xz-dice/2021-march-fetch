<?php

require_once 'vendor/autoload.php';
$db = new \Fetch\Classes\Db();
$dogID = $_GET['id'];
//This proves our code works
echo $dogID;
//$dogs = \Fetch\Hydrators\DogHydrator::getDogDetail($db->getDb(), $dogID);
//$displayDogs = \Fetch\Classes\DogDisplayer::displayDetailedInfo($dogs[0]);

?>
