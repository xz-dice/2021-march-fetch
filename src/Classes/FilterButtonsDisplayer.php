<?php

namespace Fetch\Classes;

class FilterButtonsDisplayer {

    /** Iterates through temperamentsArray and generates temperament tags
     *
     * @param array $temperamentsArray array containing all unique temperaments
     * @param string $currentTemperament temparement that user has filtered for
     *
     * @return string of html to output filter tags to front end
     */
    public static function displayFilterButtons(array $temperamentsArray, string $currentTemperament = ''): string
    {
        $result = '';
        foreach ($temperamentsArray as $temperament) {
            if(gettype($temperament) === 'string') {
                $result .= '<a href="index.php" tabindex="2" aria-label="Search for dogs that are ' . $temperament . '" class="chip';
                if($currentTemperament === $temperament) {
                    $result .= ' active-temperament';
                }
                $result .= '">';
                $result .= '<img src="assets/bone.svg" alt="Bone"/>';
                $result .= '<div>' . $temperament . '</div></a>';
            }
        }
        return $result;
    }
}
