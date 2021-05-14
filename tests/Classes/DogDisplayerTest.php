<?php

use PHPUnit\Framework\TestCase;
require_once '../../vendor/autoload.php';

use Fetch\Classes\DogDisplayer;
use Fetch\Classes\Dog;

class DogDisplayerTest extends TestCase {
    public function testDisplayMainPageSuccess() {
        $expected = '<article><div><img tabindex="2" src="assets/dog-images/2.jpeg" alt="Cuthbert"><h3 tabindex="2">Cuthbert</h3><p tabindex="2">Happy</p><p tabindex="2">2-3 kg</p></div><div><a tabindex="2" href="display-dog.php?Id=2" aria-label="click here for more info about this dog">Fetch!</a></div></article>';
        $dogMock = $this->createMock(Dog::class);
        $dogMock->expects($this->exactly(2))
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
        $dogMock->expects($this->once())
            ->method('hasTemperament')
            ->willReturn(true);
        $dogs = [$dogMock];
        $case = DogDisplayer::displayMainPage($dogs);
        $this->assertEquals($expected, $case);
    }

    public function testDisplayMainPageFailure()
    {
        $expected = '<img src="assets/204.jpeg" alt="204 No results found" />';
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
        $expected = '<article><img tabindex="2" src="assets/dog-images/2.jpeg" alt="Cuthbert"><div><h3 tabindex="2">Cuthbert</h3><p tabindex="2"><span>Temperament:</span> Happy</p><p tabindex="2"><span>Weight:</span> 2-3 kg / 3-5 lb</p><p tabindex="2"><span>Height:</span> 3-5 cm / 3-5 inches</p><p tabindex="2"><span>Life Span:</span> 3-5</p><p tabindex="2"><span>Breed Group:</span> 3-5</p><p tabindex="2"><span>Bred For:</span> 3-5</p><p tabindex="2"><span>Origin:</span> 3-5</p><p tabindex="2"><span>Country Code:</span> 3-5</p><p tabindex="2"><span>Description:</span> 3-5</p></div></article>';
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
        $dogMock->expects($this->exactly(4))
            ->method('getHeightMetric')
            ->willReturn('3-5');
        $dogMock->expects($this->exactly(3))
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