<?php

use PHPUnit\Framework\TestCase;
require_once '../../vendor/autoload.php';

use Fetch\Classes\DogDisplayer;
use Fetch\Classes\Dog;

class DogDisplayerTest extends TestCase
{
    public function testDisplayMainPageSuccess()
    {
        $expected = '<article><div><img tabindex="2" src="assets/dog-images/2.jpeg" alt="Cuthbert"><h3 tabindex="2">Cuthbert</h3><p tabindex="2">Happy</p><p tabindex="2">2-3 kg</p></div></article>';
        $dogMock = $this->createMock(Dog::class);
        $dogMock->expects($this->once())
            ->method('getId')
            ->willReturn(2);
        $dogMock->expects($this->exactly(2))
            ->method('getName')
            ->willReturn('Cuthbert');
        $dogMock->expects($this->once())
            ->method('getTemperament')
            ->willReturn('Happy');
        $dogMock->expects($this->once())
            ->method('getWeightMetric')
            ->willReturn('2-3');
        $dogs = [$dogMock];
        $case = DogDisplayer::displayMainPage($dogs);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayMainPageFailure()
    {
        $expected = '';
        $dogs = ['dog'];
        $case = DogDisplayer::displayMainPage($dogs);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayMainPageMalformed()
    {
        $dogs = 'dogs';
        $this->expectException(TypeError::class);
        DogDisplayer::displayMainPage($dogs);
    }

    public function testDisplayDetailedInfoSuccess()
    {
        $expected = '<article><img tabindex="2" src="assets/dog-images/2.jpeg" alt="Cuthbert"><div><h3 tabindex="2">Cuthbert</h3><p tabindex="2">Temperament: Happy</p><p tabindex="2">Weight: 2-3 kg</p><p tabindex="2">Weight: 3-5 lb</p><p tabindex="2">Height: 3-5 cm</p><p tabindex="2">Height: 3-5"</p><p tabindex="2">Life Span: 3-5</p><p tabindex="2">Breed Group: 3-5</p><p tabindex="2">Bred For: 3-5</p><p tabindex="2">Origin: 3-5</p><p tabindex="2">Country Code: 3-5</p><p tabindex="2">Description: 3-5</p></div></article>';
        $dogMock = $this->createMock(Dog::class);
        $dogMock->expects($this->once())
            ->method('getId')
            ->willReturn(2);
        $dogMock->expects($this->exactly(2))
            ->method('getName')
            ->willReturn('Cuthbert');
        $dogMock->expects($this->once())
            ->method('getTemperament')
            ->willReturn('Happy');
        $dogMock->expects($this->once())
            ->method('getWeightMetric')
            ->willReturn('2-3');
        $dogMock->expects($this->exactly(2))
            ->method('getWeightImperial')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(2))
            ->method('getHeightMetric')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(2))
            ->method('getHeightImperial')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(2))
            ->method('getLifeSpan')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(2))
            ->method('getBredFor')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(2))
            ->method('getBreedGroup')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(2))
            ->method('getOrigin')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(2))
            ->method('getCountryCode')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(2))
            ->method('getDescription')
            ->willReturn('3-5');
        $dog = $dogMock;
        $case = DogDisplayer::displayDetailedInfo($dog);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayDetailedInfoFailure()
    {
        $dog = new stdClass();
        $this->expectException(TypeError::class);
        DogDisplayer::displayDetailedInfo($dog);
    }

    public function testDisplayDetailedInfoMalformed()
    {
        $dog = '';
        $this->expectException(TypeError::class);
        DogDisplayer::displayDetailedInfo($dog);
    }
}