<?php
require 'src/StringReverseClass.php';


$obj = new StringReverse();
$obj->Explode();

$srtToArr = $obj->string;

foreach($srtToArr as &$word){
    $chars = new StringReverse();
    $chars->strSplit($word);
    
}