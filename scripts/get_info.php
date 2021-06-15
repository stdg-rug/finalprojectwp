<?php
session_start();

if (!isset($_SESSION['playerId']) or !isset($_SESSION['username'])) {
    echo json_encode(['error' => 'Session not defined!']);
} else {
    echo json_encode(['success' => true, 'data' => [
        'playerId' => $_SESSION['playerId'],
        'username' => $_SESSION['username'],
    ]]);
}