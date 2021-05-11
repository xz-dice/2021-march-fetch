<?php

require_once '../vendor/autoload.php';

$url = 'https://dev.io-academy.uk/resources/doggies.json';
$request = curl_init($url);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($request);
curl_close($request);
$dogs = json_decode($response, true);

echo '<pre>';
var_dump($dogs);
echo '</pre>';

// prepare the VALUES statement to put into the database
$result = '';

foreach ($dogs['data'] as $dog) {
    $result .= '(' . "'" . $dog['id'] . "'" . ', ' . "'" . $dog['name'] . "'" . ', ' . "'" . $dog['temperament'] . "'" . ', ' . "'" . $dog['weight']['imperial'] . "'" . ', ' .  "'" . $dog['weight']['metric'] . "'" . ', ' . "'" . $dog['height']['imperial'] . "'" . ', ' . "'" . $dog['height']['metric'] . "'" . ', ' . "'" . $dog['bred_for'] . "'" . ', ' . "'" . $dog['bred_group'] . "'" . ', ' . "'" . $dog['life_span'] . "'" . ', ' . "'" . $dog['origin'] . "'" . ', ' . "'" . $dog['country_code'] . "'" . ', ' . "'" . $dog['description'] . "'" . '),';
}

$trimmedResult = trim($result, ",");

echo $trimmedResult;

$db = new PDO('mysql:host=db; dbname=fetch', 'root', 'password');
$query = $db->prepare("INSERT INTO `dogs` (`id`, `name`, `temperament`, `weight_imperial`, `weight_metric`, `height_imperial`, `height_metric`, `bred_for`, `breed_group`, `life_span`, `origin`, `country_code`, `description`) VALUES $trimmedResult;");
$query->execute();
