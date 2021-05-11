<?php

namespace Fetch\Classes;

class DogDisplayer {

    /** Function to generate a long string to output dog articles to main page
     * @param array $dogs
     * @return string
     */

    protected static function displayMainPage(Dog $dogs): string {
        $result = '';
        foreach ($dogs as $dog) {
            $result .= '<article>';
            $result .= '<div> <img src="$dog->getId()" alt="$dog->getName()"> </div>';
            $result .= '<div>';
            $result .= '<h3>$dog->getName()</h3>';
            $result .= '<p>$dog->getTemperament()</p>';
            $result .= '<p>$dog->getWeightMetric() kg</p>';
            $result .= '<a>Fetch!</a>';
            $result .= '</div>';
        }
        return $result;
    }
}

$dogs = new Dog
    $name: "Terry";
    $temperament: "Fiery";
    $weightMetric: 500;

