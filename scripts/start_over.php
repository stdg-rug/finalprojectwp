<?php
//show error messages of code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Replace data by a empty list
$jsonData = json_encode([]);
file_put_contents("../data/data.json", $jsonData);
