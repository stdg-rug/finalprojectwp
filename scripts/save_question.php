<?php
//show error messages of code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// add question to json file
$qjson = json_encode($_POST);
$inp = file_get_contents("../data/data.json");
$tempArray = json_decode($inp);
array_push( $tempArray, $_POST);
$jsonData = json_encode($tempArray);
file_put_contents("../data/data.json", $jsonData );
