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
        $dogs = [$dogMock];
        $case = DogDisplayer::displayMainPage($dogs);
        $this->assertEquals($expected, $case);
    }
    public function testDisplayMainPageFailure() {
        $expected = '';
        $dogs = ['dog'];
        $case = DogDisplayer::displayMainPage($dogs);
        $this->assertEquals($expected, $case);
    }
    public function testDisplayMainPageMalformed() {
        $dogs = 'dogs';
        $this->expectException(TypeError::class);
        DogDisplayer::displayMainPage($dogs);
    }
}