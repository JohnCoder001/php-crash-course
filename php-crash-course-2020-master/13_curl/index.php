<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
//$resource = curl_init($url);
//curl_setopt($resources,CURLOPT_RETURNTRANSFER, $true);
//$result = curl_exec($resource);
//$info = curl_getinfo($resource, CURLINFO_HTTP_CODE);
//echo '<pre>';
//var_dump($code);
//echo '</pre>';
//curl_close($resource);
//echo $result;
// Get response status code


// set_opt_array

// Post request
$resource = curl_init();
curl_setopt_array($resource,[
    CURLOPT_URL =>$url,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_POST => true,
    CURLOPT_HTTPHEADER => ['content-type: application'],
    CURLOPT_POSTFIELDS => json_encode($users)
]);
$result = curl_exec($resources);
curl_close($resources);
echo $result;