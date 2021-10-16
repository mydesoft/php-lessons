<?php
$url = 'https://jsonplaceholder.typicode.com/users';
// $resource = curl_init($url);
// curl_setopt($resource, CURLOPT_RETURNTRANSFER, TRUE);
// $result = curl_exec($resource);
// $code = curl_getinfo($resource, CURLINFO_HTTP_CODE);
// curl_close($resource);
// echo($code).'<br>';
// echo $result;

$user = [
    'name' => 'Olumide Orija',
    'username' => 'olubanty',
    'email' => 'olubanty@test.com'
];
$resource = curl_init();
curl_setopt($resource, CURLOPT_URL, $url);
curl_setopt($resource, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($resource, CURLOPT_POST, TRUE);
curl_setopt_array($resource,[
    CURLOPT_HTTPHEADER => ['content-type : application/json'],
]);
curl_setopt($resource, CURLOPT_POSTFIELDS, json_encode($user));
$result = curl_exec($resource);
curl_close($resource);
echo $result;

