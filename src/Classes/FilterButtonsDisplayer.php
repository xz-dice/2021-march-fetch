<?php

namespace Fetch\Classes;

class FilterButtonsDisplayer {

    public static function displayFilterButtons(array $temperaments): string
    {
        $result = '';
        foreach ($temperaments as $temperament) {
            $result .= '<a href="index.php" class="chip';
            if(isset($_GET['temperament']) && $_GET['temperament'] === $temperament) {
                $result .= ' active-temperament';
            }
            $result .= '">';
            $result .= '<img src="assets/bone.svg" alt="Bone"/>';
            $result .= '<div>' . $temperament . '</div></a>';
        }
        return $result;
    }
}
