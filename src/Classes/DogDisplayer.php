<?php

namespace Fetch\Classes;

class DogDisplayer {

    /** Function to generate a long string to output dog articles to main page
     * @param array $dogs
     * @return string
     */
    public static function displayMainPage(array $dogs): string {
        $result = '';
        foreach ($dogs as $dog) {
            $result .= '<article>';
            $result .= '<div>';
            $result .= '<img tabindex="2" src="assets/dog-images/' . $dog->getId() . '.jpeg" alt="' . $dog->getName() .'">';
            $result .= '<h3 tabindex="2">' . $dog->getName() . '</h3>';
            $result .= '<p tabindex="2">' . $dog->getTemperament() . '</p>';
            $result .= '<p tabindex="2">' . $dog->getWeightMetric() . ' kg</p>';
            $result .= '</div>';
            $result .= '<div><a tabindex="2" aria-label="click here for more info about this dog">Fetch!</a></div>';
            $result .= '</article>';
        }
        return $result;
    }
}