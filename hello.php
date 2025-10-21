<?php 

function sumNumbers(...$nums): int 
{
    $theResult = array_sum($nums);

    return $theResult;
}


$result = sumNumbers(-1,32,-31,43,65);
echo $result;