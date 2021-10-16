<?php
//Magic Constants
echo __DIR__ .'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';

//Create Directory
// mkdir('test');

//Rename Directory
// rename('test', 'FileSystem');

//Delete Directory
// rmdir('test');

//Read Files and folders inside directory
// echo file_get_contents('function.php');

//Put contents inside a file
// file_put_contents('function.php', 'Some Text');
$users = file_get_contents('https://jsonplaceholder.typicode.com/users');
echo $users;