<?php

use PHPUnit\Framework\TestCase;
require_once '../../vendor/autoload.php';

use Fetch\Classes\Dog;

class DogTest extends TestCase {
    public function testHasTemperamentSuccess()
    {
        $expected = true;
        $dogMock = $this->getMockBuilder(Dog::class)
            ->setMethods(['getTemperament'])
            ->getMock();
        $case = $dogMock->hasTemperament('');
        $this->assertEquals($expected, $case);
    }
    public function testHasTemperamentSuccess2()
    {
        $expected = true;
        $dogMock = $this->getMockBuilder(Dog::class)
            ->setMethods(['getTemperament'])
            ->getMock();
        $dogMock->expects($this->once())
            ->method('getTemperament')
            ->willReturn('Happy');
        $case = $dogMock->hasTemperament('Happy');
        $this->assertEquals($expected, $case);
    }
    public function testHasTemperamentFailure()
    {
        $expected = false;
        $dogMock = $this->getMockBuilder(Dog::class)
            ->setMethods(['getTemperament'])
            ->getMock();
        $dogMock->expects($this->once())
            ->method('getTemperament')
            ->willReturn('Happy');
        $case = $dogMock->hasTemperament('Sad');
        $this->assertEquals($expected, $case);
    }
    public function testHasTemperamentMalformed()
    {
        $dogMock = $this->getMockBuilder(Dog::class)
            ->setMethods(['getTemperament'])
            ->getMock();
        $this->expectException(TypeError::class);
        $case = $dogMock->hasTemperament(['sad']);
    }
}