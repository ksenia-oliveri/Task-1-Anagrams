<?php
require 'src/ExplodeClass.php';
require 'src/SplitClass.php';


$obj = new Explode();
$obj->Explode();

$srtToArr = $obj->string;

foreach($srtToArr as &$word){
    $chars = new Split();
    $chars->strSplit($word);

}