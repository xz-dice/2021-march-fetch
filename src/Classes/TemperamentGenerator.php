<?php

namespace Fetch\Classes;

class TemperamentGenerator {

    /** function that sorts through dog temperaments, removes duplicates and returns a unique array of temperament tags
     * @param array $dogs
     * @return array of dog temperaments
     */

    public static function getUniqueTags(array $dogs): array
    {
    $result = '';
    foreach ($dogs as $dog) {
        if ($dog instanceof \Fetch\Classes\Dog) {
            $result .= ', ' . $dog->getTemperament();
        }
    }
    $trimmedResult = trim($result, " ,");
    $explodedResult = explode(', ', $trimmedResult);
    return array_values(array_unique($explodedResult));
    }
}