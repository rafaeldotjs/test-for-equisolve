<?php
    $count = 0;
    $sum = 1;

    while($count < 10){
        $sum++;
        if(in_array('7', str_split($sum.'')) && array_sum(str_split($sum.'')) == 10){
            $count ++;
            echo $sum;
            echo "\n";
        }
    }
?>