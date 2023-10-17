<?php
Class Split {
    public $chars;
    public $word;
    public function strSplit($word) {
        $this->chars = mb_str_split($this->word);
    }

    public function Reverse() {
        $this->chars = array_reverse($this->chars);
    }
}