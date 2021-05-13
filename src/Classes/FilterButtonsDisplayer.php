<?php

namespace Fetch\Classes;

class FilterButtonsDisplayer {

    public static function displayFilterButtons(array $temperamentsArray, string $currentTemperament = ''): string
    {
        $result = '';
        foreach ($temperamentsArray as $temperament) {
            if(gettype($temperament) === 'string') {
                $result .= '<a href="index.php" class="chip';
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
