<?php

//creating a class
class Bicycle{

    public static $instance_count = 0;

//class properties
    public $brand;
    public $model;
    public $year;
    public $category;
    public $description = 'Used bicycle';
    private $weight_kg = 0.0;
    protected static $wheels = 2;

    //this is a class property

    //this category is differnt from CATEGORIES because this is part of the instance not the class.
    public const CATEGORIES = ['Road', 'Mountain', 'Hybrid', 'Cruiser', 'City','BMX'];

    public static function create(){
        $class_name = get_called_class();
        $obj = new $class_name;
        //obj = new static
        self::$instance_count++;
        return $obj;
    }
//class methods
    public function name(){
        return $this->brand . " " . $this->model . "(" . $this->year . ")";
    }

    public static function wheel_details(){
        $wheel_string = static::$wheels == 1 ? "1 wheel" : static::$wheels . "wheels";
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
    protected static $wheels = 1;
}

$hybrid = new Bicycle;
$hybrid->brand = 'Schwinn';
$hybrid->model = 'SuperSport';
$hybrid->year = '2017';
//$hybrid->weight_kg= 8.0;

$yosoo = new Unicycle;

/*here you are creating the bicycle and unicycle so when use instance count should be 2
when creating an instance that all you are doing creating an istance anot adding to the count
here you are creating it so you are adding to the instance count*/
$bike = Bicycle::create();
$uni = Unicycle::create();

//$instance_count is a shared property so the count is the same for both bicycle and unicycle
echo "Bicycle count: " . Bicycle::$instance_count . "\n";
echo "Unicycle count: " . Unicycle::$instance_count . "\n";


echo 'Categories: ' . implode(',', Bicycle::CATEGORIES) . "\n";
//$hybrid->$category = Bicycle::CATEGORIES[0];
//echo 'Category: ' . $hybrid->$category . "\n";

echo "Bicycle: " . Bicycle::wheel_details() . "\n";
echo "Unicycle: " . Unicycle::wheel_details() . "\n"; 
