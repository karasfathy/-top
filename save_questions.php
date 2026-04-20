<?php
$file = 'test_db.json';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    file_put_contents($file, json_encode($data));
    echo json_encode(['ok' => true]);
} else {
    if (file_exists($file)) {
        echo file_get_contents($file);
    } else {
        echo json_encode([]);
    }
}
?>
