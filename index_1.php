<?php 
function stringReverse($string): string {
    $strToArr = explode(' ', $string);
    $patternRegex = '^[a-zA-Z]+$';

    foreach($strToArr as &$word) {
        $chars = mb_str_split($word);
        $filtredChars = [];
      foreach(array_reverse($chars) as $char) {
        if(mb_ereg_match($patternRegex, $char)) {
            $filtredChars[] = $char;
        }
      }
       foreach($chars as &$char) {
        if(!mb_ereg_match($patternRegex, $char)) {
            continue;
        }
        $char = array_shift($filtredChars);
       }
       $word = implode('', $chars);
    }
    return implode(' ', $strToArr);
    
}
