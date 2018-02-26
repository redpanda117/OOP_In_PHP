<?php

class Animal{
    var $legs;
    var $weight_lb = 0;
    var $fur = true;
    var $pet = true;

    function weight_stones(){
        return $this->weight_lb / 14;
    }
}

//inherit everything from animals
class Cat extends Animal{
    var $legs = 4;
}

class Whale extends Animal{
    var $legs = 0;
    var $fur = false;
    var $pet = false;
}

$Max = new Cat;
$Max->weight_lb = 10;
//echo $Max->pet;
//echo $Max->legs;
//echo $Max->weight_stones();

$KillerWhale = new Whale;
$KillerWhale->weight_lb= 8000;
//echo $KillerWhale->pet;
echo $KillerWhale->weight_stones();
