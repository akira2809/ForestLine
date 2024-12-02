<?php
// Đảm bảo bạn đã require các file cần thiết từ thư mục config, model hoặc service nếu có
require_once '../config/config.php';

class PaymentController
{
    public function createQRCode()
    {
        // Lấy dữ liệu từ yêu cầu JSON
        $inputData = json_decode(file_get_contents('php://input'), true);

        if (!isset($inputData['amount']) || !isset($inputData['description'])) {
            echo json_encode(['error' => 'Dữ liệu không hợp lệ']);
            http_response_code(400);
            return;
        }

        // Chuẩn bị dữ liệu cho API PayOS
        $payload = [
            'client_id' => _PAYOS_CLIENT_ID,
            'amount' => $inputData['amount'],
            'description' => $inputData['description']
        ];

        $headers = [
            "Content-Type: application/json",
            "Authorization: Bearer " . _PAYOS_API_KEY
        ];

        // Gửi yêu cầu tới PayOS API
        $ch = curl_init('https://api.payos.vn/v1/qr/create');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode === 200) {
            $responseData = json_decode($response, true);
            echo json_encode([
                'qr_url' => $responseData['data']['qr_url']
            ]);
        } else {
            echo json_encode([
                'error' => 'Không thể tạo mã QR. Vui lòng thử lại sau!'
            ]);
            http_response_code($httpCode);
        }
    }
}

// Kiểm tra yêu cầu
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $paymentController = new PaymentController();
    $paymentController->createQRCode();
}
