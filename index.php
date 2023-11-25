<?php

use Src\StringReverse;

require_once('../vendor/autoload.php');


$obj = new StringReverse;
$obj->stringReverse('hell4 w3or1d!');
var_dump($obj->stringReverse('hell4 w3or1d!'));
