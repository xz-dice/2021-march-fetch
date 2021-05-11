<?php

class DogDisplayer {

    /** Function to generate a long string to output dog articles to main page
     * @param array $dogs
     * @return string
     */

    protected static function displayMainPage(array $dogs): string {
        $result = '';
        foreach ($dogs as $dog) {
            $result .= '<article>';
            $result .= '<div> <img src="$dog->getId()" alt="$dog->getName()"> </div>';
            $result .= '<div id="">';
            $result .= '<h3>$dog->getName()</h3>';
            $result .= '<p>$dog->getTemperament()</p>';
            $result .= '<p>$dog->getWeightMetric() kg</p>';
            $result .= '<a href="">Fetch!</a>';
            $result .= '</div>';
        }
        return $result;
    }
}

$dogs = [{name: "Alsation",
temperament: "angry, loving, happpy",
weight: 40}];
