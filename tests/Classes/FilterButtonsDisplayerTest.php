<?php

use PHPUnit\Framework\TestCase;
require_once '../../vendor/autoload.php';

use Fetch\Classes\FilterButtonsDisplayer;

class FilterButtonsDisplayerTest extends TestCase
{
    public function testDisplayFilterButtonsSuccess()
    {
        $expected = '<a href="index.php" class="chip';
        $expected .= ' activeTemperament';
        $expected .= '">';
        $expected .= '<img src="assets/bone.png" alt="Bone"/>';
        $expected .= '<div>' . 'so many bones' . '</div></a>';


    }

    public function testDisplayFilterButtonsFailure()
    {
        $expected = '';
        $dogs = ['dog'];
        $case = DogDisplayer::displayMainPage($dogs);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayFilterButtonsMalformed()
    {
        $dogs = 'dogs';
        $this->expectException(TypeError::class);
        DogDisplayer::displayMainPage($dogs);
    }
}

