<?php

class Shape {
    private $degree =15 ;
    protected $name = "circle";

    public function __construct($degree, $angle) {
        $this->degree = $degree;
        $this->angle = $angle;
    }

    public function rotate(){
        echo "rotating ..." . $this->degree . "\n";
    }

    public function playSound(){
        echo "playing sound ..." . $this->name . "\n";
    }
}


class square extends Shape{
    public function __construct( ) {
}

public function playSound(){
    echo "play sound for specific shape". $this->name;
}
}

$circle = new Shape("cir", 45);
$sqaure = new Shape("sq", 65);

$circle->rotate();
$circle->playSound();