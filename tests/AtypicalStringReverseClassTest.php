<?php

namespace Src;
use PHPUnit\Framework\TestCase;

class AtypicalStringReverseClassTest extends TestCase
{
    public $string = 'hell4 wo3r1d!';
    public function testFailure1()
    {
      $this->assertMatchesRegularExpression('~[a-zA-Z]+~', $this->string);
    }

      public function testFailure2()
    {
      $this->assertNotEmpty($this->string);
    }

    public function testFailure3()
    {
        $this->assertMatchesRegularExpression('~[0-9]+~', $this->string);
    }

    public function testFailure4()
    {
      $this->assertNotEquals(1, strlen($this->string)); 
    }

}

   