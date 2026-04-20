<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$file = 'questions_db.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    file_put_contents($file, json_encode($data['questions']));
    echo json_encode(['success' => true]);
} else {
    if (file_exists($file)) {
        echo file_get_contents($file);
    } else {
        echo json_encode([]);
    }
}
?>
