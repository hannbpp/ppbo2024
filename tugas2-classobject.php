<?php
class car {
    // property
    public $color;
    public $model;

    // constructor
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    // method
    public function messsage() {
        return "My car is " . $this->color . " " . $this->model . ".";
    }
}

// creating object
$mycar = new car("black", "volvo");

// access method object
echo $mycar->messsage();