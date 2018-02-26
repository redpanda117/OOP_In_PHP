<?php

//creating a class
class Bicycle{

//class properties
    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    public $weight_kg = 0.0;

//class methods
    function name(){
        return $this->brand . " " . $this->model . "(" . $this->year . ")";
    }
    
    function weight_lbs(){
        return floatval($this->weight_kg) * 2.2046446218;
    }

    function setWeight_lbs($value){
        $this->weight_kg = floatval($value) / 2.2046446218; 
    }
}

$hybrid = new Bicycle;
$hybrid->brand = 'Schwinn';
$hybrid->model = 'SuperSport';
$hybrid->year = '2017';
$hybrid->weight_kg= 8.0;

echo $hybrid->name();
echo $hybrid->weight_lbs();
