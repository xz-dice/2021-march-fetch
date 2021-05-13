<?php

use Fetch\Classes\Dog;
use PHPUnit\Framework\TestCase;
require_once '../../vendor/autoload.php';

class TemperamentGeneratorTest extends TestCase
{
    public function testTemperamentGeneratorTestSuccess()
    {
        $expected = ['Happy', 'Loyal', 'Brave', 'Friendly'];
        $dogMock = $this->createMock(Dog::class);
        $dogMock->expects($this->once())
            ->method('getTemperament')
            ->willReturn('Happy, Loyal');
        $dogMock2 = $this->createMock(Dog::class);
        $dogMock2->expects($this->once())
            ->method('getTemperament')
            ->willReturn('Brave, Friendly');
        $input = [$dogMock, $dogMock2];
        $result = \Fetch\Classes\TemperamentGenerator::getUniqueTags($input);
        $this->assertEquals($expected, $result);
    }
}