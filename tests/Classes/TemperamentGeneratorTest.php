<?php

use Fetch\Classes\Dog;
use PHPUnit\Framework\TestCase;
require_once '../../vendor/autoload.php';

class TemperamentGeneratorTest extends TestCase
{
    public function testTemperamentGeneratorTestSuccess()
    {
        $expected = ['Brave', 'Friendly', 'Happy', 'Loyal'];
        $dogMock = $this->createMock(Dog::class);
        $dogMock->expects($this->once())
            ->method('getTemperament')
            ->willReturn('Happy, Loyal, Brave');
        $dogMock2 = $this->createMock(Dog::class);
        $dogMock2->expects($this->once())
            ->method('getTemperament')
            ->willReturn('Brave, Friendly');
        $input = [$dogMock, $dogMock2];
        $result = \Fetch\Classes\TemperamentGenerator::getUniqueTags($input);
        $this->assertEquals($expected, $result);
    }

    public function testTemperamentGeneratorFailure()
    {
        $expected = [''];
        $input = [];
        $result = \Fetch\Classes\TemperamentGenerator::getUniqueTags($input);
        $this->assertEquals($expected, $result);
    }

    public function testTemperamentGeneratorMalformed()
    {
        $dog = '';
        $this->expectException(TypeError::class);
        \Fetch\Classes\TemperamentGenerator::getUniqueTags($dog);
    }
}