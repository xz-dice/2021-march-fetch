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
            if ($dog instanceof \Fetch\Classes\Dog) {
                $result .= '<article>';
                $result .= '<div>';
                $result .= '<img tabindex="2" src="assets/dog-images/' . $dog->getId() . '.jpeg" alt="' . $dog->getName() .'">';
                $result .= '<h3 tabindex="2">' . $dog->getName() . '</h3>';
                $result .= '<p tabindex="2">' . $dog->getTemperament() . '</p>';
                $result .= '<p tabindex="2">' . $dog->getWeightMetric() . ' kg</p>';
                $result .= '</div>';
                $result .= '</article>';
            }
        }
        return $result;
    }

    public static function displayDetailedInfo(\Fetch\Classes\Dog $dog): string {
        $result = '<article>';
        $result .= '<div>';
        $result .= '<img tabindex="2" src="assets/dog-images/' . $dog->getId() . '.jpeg" alt="' . $dog->getName() .'">';
        $result .= '</div>';
        $result .= '<div>';
        $result .= '<h3 tabindex="2">Name: ' . $dog->getName() . '</h3>';
        $result .= '<p tabindex="2">Temperament: ' . $dog->getTemperament() . '</p>';
        $result .= '<p tabindex="2">Weight: ' . $dog->getWeightMetric() . ' kg</p>';
        if ($dog->getWeightImperial() !== '') {
            $result .= '<p tabindex="2">Weight: ' . $dog->getWeightImperial() . ' lb</p>';
        }
        if ($dog->getHeightMetric() !== '') {
            $result .= '<p tabindex="2">Height: ' . $dog->getHeightMetric() . ' cm</p>';
        }
        if ($dog->getHeightImperial() !== '') {
            $result .= '<p tabindex="2">Height: ' . $dog->getHeightImperial() . '"</p>';
        }
        if ($dog->getLifeSpan() !== '') {
            $result .= '<p tabindex="2">Life Span: ' . $dog->getLifeSpan() . '</p>';
        }
        if ($dog->getBreedGroup() !== '') {
            $result .= '<p tabindex="2">Breed Group: ' . $dog->getBreedGroup() . '</p>';
        }
        if ($dog->getBredFor() !== '') {
            $result .= '<p tabindex="2">Bred For: ' . $dog->getBredFor() . '</p>';
        }
        if ($dog->getOrigin() !== '') {
            $result .= '<p tabindex="2">Origin: ' . $dog->getOrigin() . '</p>';
        }
        if ($dog->getCountryCode() !== '') {
            $result .= '<p tabindex="2">Country Code: ' . $dog->getCountryCode() . '</p>';
        }
        if ($dog->getDescription() !== '') {
            $result .= '<p tabindex="2">Description: ' . $dog->getDescription() . '</p>';
        }
        $result .= '</div>';
        $result .= '</article>';
        return $result;
    }
}