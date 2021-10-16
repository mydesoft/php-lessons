<?php
// Creating String
$longText = 'I am Olumide
             A Software dev
             PHP/Laravel is my favourite';
echo $longText .'<br>';

//Working with multilines
echo nl2br($longText).'<br>';

//Working with showing html tags
$secondLongText = 'I am Olumide
             <b>A Software dev</b>
             PHP/Laravel is my favourite';
echo htmlentities($secondLongText).'<br>';
echo nl2br(htmlentities($secondLongText));


?>