<?php

require_once './src/StringReverseClass.php';
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertNotEmpty;

class AtypicalStringReverseClassTest extends TestCase
{
    public $string = 'hell4 wo3r1d!';
    public function testFailure1()
    {
      $this->assertNotEquals(1, strlen($this->string));
    }

    public function testFailure2()
    {
        $this->assertIsString($this->string);
    }
      public function testFailure3()
    {
      $this->assertNotEmpty($this->string);
    }

    public function testFailure4()
    {
        $this->assertIsNotNumeric($this->string);
    }

    public function testFailure5()
    {
        $this->assertMatchesRegularExpression('~[0-9]+~', $this->string);
    }

    public function testFailure6()
    {
        $this->assertNotNull($this->string);
    }

}

   