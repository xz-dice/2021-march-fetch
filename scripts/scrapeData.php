<?php

require_once 'vendor/autoload.php';

$url = 'https://dev.io-academy.uk/resources/doggies.json';
$request = curl_init($url);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($request);
curl_close($request);
$thing = json_decode($response, true);

echo '<pre>';
var_dump($thing);
echo '</pre>';

$result = '';

foreach ($thing['data'] as $dog) {
    $result .= '(' . $dog['name'] . ',' . $dog['temperament'] . ',' . $dog['weight']['metric'] . ')';
}

echo $result;


// INSERT INTO dogs VALUES ('NAME', 'TEMPERAMENT', 'WEIGHT')
// We need to put in the quotes?