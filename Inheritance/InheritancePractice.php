<?php

class Animal{
    public $legs;
    public $weight_lb = 0;
    public $fur = true;
    public $pet = true;

    function weight_stones(){
        return $this->weight_lb / 14;
    }
}

//inherit everything from animals
class Cat extends Animal{
    public $legs = 4;
}

class Whale extends Animal{
    public $legs = 0;
    public $fur = false;
    public $pet = false;
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
