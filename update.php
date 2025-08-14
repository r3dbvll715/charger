<?php
$file = 'status.json';
$input = file_get_contents('php://input');
$data = json_decode($input, true);
if (isset($data['language']) && isset($data['statuses']) && is_array($data['statuses'])) {
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "error" => "Dados inválidos"]);
}
?>