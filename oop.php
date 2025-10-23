<?php

class Shape {
    private $degree =15 ;
    private $angle = "circle";


    public function rotate(){
        echo "rotating ..." . $this->degree;
    }

    public function playSound(){
        echo "playing sound ..." . $this->angle;
    }
}


$circle = new Shape();

$circle->rotate();
$circle->playSound();