<?php 
    function sum(...$numbers){
        $reducedValue = array_reduce($numbers, fn($previousValue, $currentValue) => 
            $previousValue + $currentValue
        );
        return $reducedValue;
    }

    $values = sum(1,2,3,4,5);
    echo $values;


