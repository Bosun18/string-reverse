<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\StringReverse;

class StringReverseTest extends TestCase {

    public function testSimpleWords() {
        $test = new StringReverse();
        $this->assertEquals('Tac', $test->getReverse('Cat'));
        $this->assertEquals('esuOh', $test->getReverse('houSe'));
        $this->assertEquals('tnAhPele', $test->getReverse('elEpHant'));
    }

    public function testComplexWords() {
        $test = new StringReverse();
        $this->assertEquals('tac,', $test->getReverse('cat,'));
        $this->assertEquals('nac`t', $test->getReverse('can`t'));
        $this->assertEquals("si 'dloc' won", $test->getReverse("is 'cold' now"));
        $this->assertEquals('driht-trap', $test->getReverse('third-part'));
    }
}