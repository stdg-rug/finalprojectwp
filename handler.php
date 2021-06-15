<?php

session_start();

header('Content-Type: application/json');

if (
    $_SERVER['REQUEST_METHOD'] !== 'POST' &&
    !isset($_POST['username']) &&
    !isset($_POST['player'])
) {
    echo json_encode(['error' => 'Method not allowed!']);
    die;
}

$username = $_POST['username'];
$playerId = $_POST['player'];

if (!filter_var($playerId, FILTER_VALIDATE_INT) || strlen($username) < 2) {
    echo json_encode(['error' => 'Input not valid!']);
    die;
}

$_SESSION['username'] = $username;
$_SESSION['playerId'] = $playerId;

echo json_encode(['success' => true, 'data' => [
    'playerId' => $playerId,
    'username' => $username,
]]);