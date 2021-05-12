<?php

namespace Fetch\Classes;

/**
 * Class DogDisplayer
 * @package Fetch\Classes
 */
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
                $result .= '<div><a tabindex="2" href="display-dog.php?Id=' . $dog->getId() . '" aria-label="click here for more info about this dog">Fetch!</a></div>';
                $result .= '</article>';
            }
        }
        return $result;
    }


    /**
     * function to generate a long string of html containing an individual dog article for the dog display page
     * @param Dog $dog a dog instance containing dog information
     * @return string a string containing the dog article html
     */

    public static function displayDetailedInfo(\Fetch\Classes\Dog $dog): string {
        $result = '<article>';
        $result .= '<img tabindex="2" src="assets/dog-images/' . $dog->getId() . '.jpeg" alt="' . $dog->getName() .'">';
        $result .= '<div>';
        $result .= '<h3 tabindex="2">' . $dog->getName() . '</h3>';
        $result .= '<p tabindex="2"><span>Temperament:</span> ' . $dog->getTemperament() . '</p>';
        $result .= '<p tabindex="2"><span>Weight:</span> ' . $dog->getWeightMetric() . ' kg';
        if ($dog->getWeightImperial() !== '') {
            $result .= ' / ' . $dog->getWeightImperial() . ' lb';
        }
        $result .= '</p>';
        if ($dog->getHeightMetric() !== '' || $dog->getHeightImperial() !== '') {
            $result .= '<p tabindex="2"><span>Height:</span> ';
            if ($dog->getHeightMetric() !== '') {
                $result .= $dog->getHeightMetric() . ' cm';
            }
            if ($dog->getHeightMetric() !== '' && $dog->getHeightImperial() !== '') {
                $result .= ' / ';
            }
            if ($dog->getHeightImperial() !== '') {
                $result .= $dog->getHeightImperial() . ' inches';
            }
            $result .= '</p>';
        }
        if ($dog->getLifeSpan() !== '') {
            $result .= '<p tabindex="2"><span>Life Span:</span> ' . $dog->getLifeSpan() . '</p>';
        }
        if ($dog->getBreedGroup() !== '') {
            $result .= '<p tabindex="2"><span>Breed Group:</span> ' . $dog->getBreedGroup() . '</p>';
        }
        if ($dog->getBredFor() !== '') {
            $result .= '<p tabindex="2"><span>Bred For:</span> ' . $dog->getBredFor() . '</p>';
        }
        if ($dog->getOrigin() !== '') {
            $result .= '<p tabindex="2"><span>Origin:</span> ' . $dog->getOrigin() . '</p>';
        }
        if ($dog->getCountryCode() !== '') {
            $result .= '<p tabindex="2"><span>Country Code:</span> ' . $dog->getCountryCode() . '</p>';
        }
        if ($dog->getDescription() !== '') {
            $result .= '<p tabindex="2"><span>Description:</span> ' . $dog->getDescription() . '</p>';
        }
        $result .= '</div>';
        $result .= '</article>';
        return $result;
    }
}