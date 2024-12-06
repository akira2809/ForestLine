<?php
require "vendor/autoload.php";
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

// Đọc dữ liệu JSON từ request
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

// Kiểm tra input
if (!isset($data['text']) || $data['text'] === '') {
    echo "Vui lòng nhập câu hỏi";
    exit;
}

$text = $data['text'];

try {
    // Khởi tạo client Gemini
    $client = new Client("AIzaSyCpOp1s4GI-QEYJ6BkCA7au969n0UHzQqw");
    
    // Cấu hình prompt để giới hạn và định hướng câu trả lời
    $enhancedPrompt = "Bạn là trợ lý AI hỗ trợ khách hàng. Hãy trả lời ngắn gọn, rõ ràng và thân thiện. " . $text;
    
    // Tạo response
    $response = $client->geminiPro()->generateContent(
        new TextPart($enhancedPrompt)
    );
   
    // Trả về response
    echo $response->text();

} catch (Exception $e) {
    // Xử lý lỗi
    echo "Có lỗi xảy ra: " . $e->getMessage();
}
?>