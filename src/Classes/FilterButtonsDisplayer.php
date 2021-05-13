<?php

namespace Fetch\Classes;

class FilterButtonsDisplayer {

    private static $testArray = ['Happy', 'Aggressive', 'Dangerous', 'Zedonk'];

    public static function displayFilterButtons(): string
    {
        $result = '';
        foreach (self::$testArray as $temperament) {
            $result .= '<div class="chip">';
            $result .= '<img src="assets/bone.jpeg" alt="Bone"/>';
            $result .= '<div>' . $temperament . '</div></div>';
        }
        return $result;
    }
}
