<?php
    $fruits = ['banana','orange', 'mango'];
    echo '<pre>';
     var_dump( $fruits);

    echo '</pre>';

    //Set Element by Index
    $fruits[0] = 'Peach';
    echo '<pre>';
     var_dump( $fruits);

    echo '</pre>';

    //Check if element at exist an index
    if (isset($fruits[4])) {
        echo 'It is present';
    } 
    else{
        echo 'Not Present';
    }

    //Append element at the end of an array
    $fruits[] = 'Cashew';
    echo '<pre>';
     var_dump( $fruits);

    echo '</pre>';

    //Print the length of an array
    echo count($fruits).'<br>';

    //Push an item at the end
    array_push($fruits, 'Carrot');
    echo '<pre>';
     var_dump( $fruits);

    echo '</pre>';

    //Remove an  element from the end
    array_pop($fruits);
    echo '<pre>';
     var_dump( $fruits);

    echo '</pre>';

    //Add Element at the begining
    array_unshift($fruits, 'Guava');
    echo '<pre>';
     var_dump( $fruits);

    echo '</pre>';

    //Remove Element from the end
    array_shift($fruits);
    echo '<pre>';
     var_dump( $fruits);

    echo '</pre>';


    //Make a string an array
    $string = "Banana, fruits, cashew";
    echo '<pre>';
     var_dump(explode(',', $string));

    echo '</pre>';

    //combine array elements into strings
    echo implode(', ', $fruits);

    //Merge arrays
    $newFruits = ['pawpaw', 'pineapple'];
    $mergedArray = array_merge($fruits, $newFruits);
    echo '<pre>';
    var_dump([...$newFruits, ...$fruits]);

   echo '</pre>';
?>