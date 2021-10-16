<?php
    $number = '3.14';

    echo is_numeric($number).'<br>';

    //Number Conversion
    $convertedToFLoat = (int)$number;
    echo $convertedToFLoat .'<br>';

    //Number Format
    $formatedNumber = 1234567;
    echo number_format((int)$formatedNumber, 3, '.', ',');
?>