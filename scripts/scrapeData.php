<?php

require_once '../vendor/autoload.php';

$url = 'https://dev.io-academy.uk/resources/doggies.json';
$request = curl_init($url);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($request);
curl_close($request);
$dogs = json_decode($response, true);

$result = '';
foreach ($dogs['data'] as $dog) {

$result .= '(' . "'" . @$dog['id'] . "'" . ', ' . "'" . @$dog['name'] . "'" . ', ' . "'" . @$dog['temperament'] . "'" . ', ' . "'" . @$dog['weight']['imperial'] . "'" . ', ' .  "'" . @$dog['weight']['metric'] . "'" . ', ' . "'" . @$dog['height']['imperial'] . "'" . ', ' . "'" . @$dog['height']['metric'] . "'" . ', ' . "'" . @$dog['bred_for'] . "'" . ', ' . "'" . @$dog['breed_group'] . "'" . ', ' . "'" . @$dog['life_span'] . "'" . ', ' . "'" . @$dog['origin'] . "'" . ', ' . "'" . @$dog['country_code'] . "'" . ', ' . "'" . str_replace("'", "\'", @$dog['description']) . "'" . '),';
    }

$trimmedResult = trim($result, ",");

$db = new PDO('mysql:host=127.0.0.1; dbname=fetch', 'root', 'password');
$query = $db->prepare("INSERT INTO `dogs` (`id`, `name`, `temperament`, `weight_imperial`, `weight_metric`, `height_imperial`, `height_metric`, `bred_for`, `breed_group`, `life_span`, `origin`, `country_code`, `description`) VALUES $trimmedResult;");
$query->execute();