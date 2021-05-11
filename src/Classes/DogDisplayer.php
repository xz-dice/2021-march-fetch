<?php

namespace Fetch\Classes;

class DogDisplayer {

    /** Function to generate a long string to output dog articles to main page
     * @param array $dogs
     * @return string
     */

    protected static function displayMainPage(array $dogs): string {
        $result = '';
        foreach ($dogs as $dog) {
            $result .= '<article>';
            $result .= '<div> <img tabindex="2" src="../../assets/dog-images/' . $dog->getId() . '.jpeg" alt="$dog->getName()"></div>';
            $result .= '<div>';
            $result .= '<h3 tabindex="2">' . $dog->getName() . '</h3>';
            $result .= '<p tabindex="2">' . $dog->getTemperament . '()</p>';
            $result .= '<p tabindex="2">' . $dog->getWeightMetric() . ' kg</p>';
            $result .= '<a tabindex="2" aria-label="click here for more info about this dog">Fetch!</a>';
            $result .= '</div>';
        }
        return $result;
    }
}


$dogId = 6;



