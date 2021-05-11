<?php

require_once '../vendor/autoload.php';

$url = 'https://dev.io-academy.uk/resources/doggies.json';
$request = curl_init($url);
curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($request);
curl_close($request);
$dogs = json_decode($response, true);


//echo '<pre>';
//var_dump($dogs);
//echo '</pre>';
//

//$result = '';
//foreach ($dogs['data'] as $dog) {
//    $result .= '(';
//    foreach ($dog as $key => $value) {
//        if (gettype($value) == 'array') {
//            foreach ($value as $subKey => $subValue) {
//                $result .= "'" . str_replace("'", "\'", $value[$subKey]) . "'" . ', ';
//            }
//        } else {
//            $result .= "'" . str_replace("'", "\'", $dog[$key]) . "'" . ', ';
//        }
//    }
//    $result = trim($result, ",");
//    $result .= '),';
//}


//var_dump ($dogs);

$result = '';
foreach ($dogs['data'] as $dog) {
    if (!$dog) {
        continue;
    } else {
        $result .= '(' . "'" . @$dog['id'] . "'" . ', ' . "'" . @$dog['name'] . "'" . ', ' . "'" . @$dog['temperament'] . "'" . ', ' . "'" . @$dog['weight']['imperial'] . "'" . ', ' .  "'" . @$dog['weight']['metric'] . "'" . ', ' . "'" . @$dog['height']['imperial'] . "'" . ', ' . "'" . @$dog['height']['metric'] . "'" . ', ' . "'" . @$dog['bred_for'] . "'" . ', ' . "'" . @$dog['breed_group'] . "'" . ', ' . "'" . @$dog['life_span'] . "'" . ', ' . "'" . @$dog['origin'] . "'" . ', ' . "'" . @$dog['country_code'] . "'" . ', ' . "'" . str_replace("'", "\'", @$dog['description']) . "'" . '),';
    }}

$trimmedResult = trim($result, ",");
echo $trimmedResult;





$db = new PDO('mysql:host=db; dbname=fetch', 'root', 'password');
$query = $db->prepare("INSERT INTO `dogs` (`id`, `name`, `temperament`, `weight_imperial`, `weight_metric`, `height_imperial`, `height_metric`, `bred_for`, `breed_group`, `life_span`, `origin`, `country_code`, `description`) VALUES $trimmedResult;");
$query->execute();
