<?php
 
$input = readline("Enter your grade: ");

$grade = $input;

if($grade >=98){
    echo "A+ Grade";
}else if($grade >= 80){
    echo "very good";
}else if($grade >= 70){
    echo "good";
}else if($grade >= 60){
    echo " not good";
}
else if($grade >= 50){
    echo "bad";
}else{
    echo "F Grade";
}

