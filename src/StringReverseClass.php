<?php
Class  StringReverse {
    public $string;
    public $chars;
    public $word;
    public $patternRegex = '^[a-zA-Z]+$';
    
    public function Explode() {
        $this->string = explode(' ', $this->string);
    }

    public function strSplit($word) {
        $this->chars = mb_str_split($this->word);
    }
    
    public function arrReverse() {
        $this->chars = array_reverse($this->chars);
    }
}
