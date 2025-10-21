<?php
 
//shapes 
//square triangle, rectangle


//rotate()
//playSound()


function rotate($degree){
    $angle = 0;
    $newAngle = $angle + $degree;
    return $newAngle % 360 ;

}

function playSound(){
    echo "playing sound";
}


$sqaure =0 ;
$triangle = 0 ;
$rectangle = 0 ;