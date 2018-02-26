<?php

//creating a class
class Bicycle{

//class properties
    public $brand;
    public $model;
    public $year;
    public $description = 'Used bicycle';
    private $weight_kg = 0.0;
    protected $wheels = 2;

//class methods
    public function name(){
        return $this->brand . " " . $this->model . "(" . $this->year . ")";
    }

    public function wheel_details(){
        $wheel_string = $this->wheels == 1 ? "1 wheel" : "{$this->wheels} wheels";
        return "It has " . $wheel_string . ".";
    }
    
    public function weight_kg(){
        return $this->weight_kg . 'kg';
    } 

    public function set_weight_kg($value){
        $this->weight_kg = floatval($value);
    } 

    function weight_lbs(){
        $weight_lbs = floatval($this->weight_kg) * 2.2046446218;
        return $weight_lbs . "lbs";
    }

    function set_weight_lbs($value){
        $this->weight_kg = floatval($value) / 2.2046446218; 
    }
}

class Unicycle extends Bicycle{
    protected $wheels = 1;
}

$hybrid = new Bicycle;
$hybrid->brand = 'Schwinn';
$hybrid->model = 'SuperSport';
$hybrid->year = '2017';
//$hybrid->weight_kg= 8.0;

$yosoo = new Unicycle;

echo "Bicycle " . $hybrid->wheel_details() . "\n";
echo "Unicycle " . $yosoo->wheel_details() . "\n";

$hybrid->set_weight_kg(8);
echo $hybrid->weight_kg() . "\n";
echo $hybrid->weight_lbs() . "\n";

$hybrid->set_weight_lbs(8);
echo $hybrid->weight_kg() . "\n";
echo $hybrid->weight_lbs() . "\n";

$yosoo->set_weight_lbs(9);
echo $yosoo->weight_kg() . "\n";
echo $yosoo->weight_lbs() . "\n";