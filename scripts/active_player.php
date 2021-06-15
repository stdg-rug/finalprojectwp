<?php
//show error messages of code
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo '<div class="activeplayer">';

$json = file_get_contents("../data/data.json");
$data = json_decode($json);
if (empty($data)) {
    $player = 'Speler 1 mag als eerste een vraag stellen...';
} elseif (end($data)->{'playerId'} == 1) {
    $player = 'Speler 2 mag antwoord geven...';
} else{
    $player = 'Speler 1 mag weer een vraag stellen...';
}
echo $player;
