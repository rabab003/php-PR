<?php
 
$name_queue= ["ali","fa","mohamed"];

function enqueue($element){
   global $name_queue;
   array_push($name_queue, $element);
}


function dequeue(){
    global $name_queue;
    return array_shift($name_queue);
}

print_r($name_queue);
enqueue("x");
enqueue("Z");

print_r($name_queue); 

dequeue();

print_r($name_queue); 
