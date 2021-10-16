<?php
    $name = 'Olumide Orija';
    $number = 20;
    $isAdmin = true;
    $floatNumber = 0.1234;


    //Get Type
    echo "Get variable type result <br>";
    echo gettype($name)."<br>";
    echo gettype($floatNumber)."<br>";

    //Variable checking functions
    echo "Variable Checking Functions Result <br>";
    echo is_string($name)."<br>";
    echo is_int($number)."<br>";
    echo is_bool($isAdmin)."<br>";
    echo is_double($floatNumber)."<br>";

    //Check if variable is defined
    echo "Check if variable is defined result <br>";
    echo isset($isAdmin).'<br>';

    //Constant
    echo "Working with constants <br>";
    define('PI', 3.142);
    echo PI."<br>";

    //Using PHP built in Constants
    echo "PHP built in constants <br>";
    echo SORT_ASC .'<br>';
    echo PHP_INT_MAX.'<br>';
    echo PHP_INT_MIN.'<br>';

?>