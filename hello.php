<?php
 
$seating_list = [
["a1","a2","a3","a4"],
["b1","b2","b3","b4"],
["c1","c2","c3","c4"],
["d1","d2","d3","d4"]
];


for($row = 0; $row <count($seating_list); $row++){
    for($col = 0 ; $col < count($seating_list[$row]); $col++){
        echo $seating_list[$row][$col] . "\t";
    }

    echo "\n";
}