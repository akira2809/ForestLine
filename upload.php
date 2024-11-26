<?php
// Bật hiển thị lỗi để debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$uploadDir = __DIR__ . '/uploads/';
$uploadUrl = _HOST . 'uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['upload'])) {
    $file = $_FILES['upload'];
    $fileName = time() . '_' . basename($file['name']);
    $targetFile = $uploadDir . $fileName;

    // Kiểm tra loại file hợp lệ
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if (!in_array($file['type'], $allowedTypes)) {
        echo json_encode(['error' => ['message' => 'Invalid file type.']]);
        exit;
    }

    // Upload file
    if (move_uploaded_file($file['tmp_name'], $targetFile)) {
        echo json_encode(['url' => $uploadUrl . $fileName]);
    } else {
        echo json_encode(['error' => ['message' => 'File upload failed.']]);
    }
    exit;
}

echo json_encode(['error' => ['message' => 'No file uploaded.']]);
exit;
