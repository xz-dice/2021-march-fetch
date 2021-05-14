<?php

use PHPUnit\Framework\TestCase;
require_once '../../vendor/autoload.php';

use Fetch\Classes\FilterButtonsDisplayer;

class FilterButtonsDisplayerTest extends TestCase
{
    public function testDisplayFilterButtonsSuccess()
    {
        $expected = '<a href="index.php?temperament=Happy" tabindex="2" aria-label="Search for dogs that are Happy" class="chip';
        $expected .= ' active-temperament';
        $expected .= '">';
        $expected .= '<img src="assets/bone.svg" alt="Bone"/>';
        $expected .= '<div>' . 'Happy' . '</div></a>';
        $expected .= '<a href="index.php?temperament=Aggressive" tabindex="2" aria-label="Search for dogs that are Aggressive" class="chip';
        $expected .= '">';
        $expected .= '<img src="assets/bone.svg" alt="Bone"/>';
        $expected .= '<div>' . 'Aggressive' . '</div></a>';
        $temperamentArray = ['Happy', 'Aggressive'];
        $case = FilterButtonsDisplayer::displayFilterButtons($temperamentArray, 'happy');
        $this->assertEquals($expected,$case);
    }

    public function testDisplayFilterButtonsFailure()
    {
        $expected = '<a href="index.php?temperament=Aggressive" tabindex="2" aria-label="Search for dogs that are Aggressive" class="chip';
        $expected .= '">';
        $expected .= '<img src="assets/bone.svg" alt="Bone"/>';
        $expected .= '<div>' . 'Aggressive' . '</div></a>';
        $temperamentArray = [5, 'Aggressive'];
        $case = FilterButtonsDisplayer::displayFilterButtons($temperamentArray);
        $this->assertEquals($expected,$case);
    }

    public function testDisplayFilterButtonsMalformedTemperamentsArray()
    {
        $temperamentsArray = 'Happy';
        $this->expectException(TypeError::class);
        FilterButtonsDisplayer::displayFilterButtons($temperamentsArray);
    }
    public function testDisplayFilterButtonsMalformedCurrentTemperament()
    {
        $temperamentsArray = ['Happy'];
        $currentTemperament = ['Confident'];
        $this->expectException(TypeError::class);
        FilterButtonsDisplayer::displayFilterButtons($temperamentsArray,$currentTemperament);
    }
}

