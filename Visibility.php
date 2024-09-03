<?php
class car {
    // property
    public $color;
    private $model;

    // constructor
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function getModel() {
        return$this->model;
    }

}    

// creating object
$mycar = new car("black ", "volvo");
echo $mycar->color;
echo $mycar->getModel();
