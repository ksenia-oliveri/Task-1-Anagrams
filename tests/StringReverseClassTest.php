<?php 
require_once './src/StringReverseClass.php';
use PHPUnit\Framework\TestCase;

class StringReverseClassTest extends TestCase 
{
    public string $string = 'hell4 w3or1d!';

    public function testStringReverse() 
    {
        $stringReverse = new StringReverse();
        $stringReverse->stringReverse($this->string);
        $resultStrToArr = explode(' ', $this->string);
        $expectedResult = ['hell4', 'w3or1d!'];
       $this->assertEquals($expectedResult, $resultStrToArr);

       foreach($resultStrToArr as &$word)
       {
       $resultChar = mb_str_split($word);
       $resultReversed = array_reverse($resultChar);
       $resultFiltred = [];
       foreach($resultReversed as $char)
       {
            if(mb_ereg_match('^[a-zA-Z]+$', $char))
            {
                $resultFiltred[] = $char;
            }
       }
       foreach($resultChar as &$char)
       {
        if(!mb_ereg_match('^[a-zA-Z]+$', $char)) 
        {
            continue;
        }
        $char = array_shift($resultFiltred);
       }
     $word = implode('', $resultChar);
    }

       $stringResult = implode(' ', $resultStrToArr);
       $expectedResultString = 'lleh4 d3ro1w!';
       $this->assertEquals($expectedResultString, $stringResult);
    }
}
