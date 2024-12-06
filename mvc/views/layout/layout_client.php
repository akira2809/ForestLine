<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forestline Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="<?= _HOST ?>public/css/all.css" rel="stylesheet">
    <link href="<?= _HOST ?>public/css/style.css" rel="stylesheet">
    <style>
        body {
           color: #E9F5DB;
        }

        .navbar-custom {
            background-color: #718355 !important;
        }

        .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            letter-spacing: 9px;
        }

        .number-text-home {
            font-family: 'Londrina Shadow', cursive;
            font-size: 200px;
            /* Kích thước font chữ mặc định cho desktop */
        }

        /* Điều chỉnh font chữ cho màn hình nhỏ */
        @media (max-width: 576px) {
            .number-text-home {
                font-size: 80px !important;
                /* Kích thước font chữ cho điện thoại */
            }
        }

        .divider {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 1px;
            /* Độ rộng mỏng hơn */
            background-color: #ddd;
            /* Màu xám nhạt */
        }
        body{
            background-color:#F6FFEC;
        }
    </style>
</head>
<?php require_once './mvc/views/client/block/header.php' ?>


<body class="text-dark">


    <?php
    if (isset($page)) {

        if (file_exists("./mvc/views/client/page/$page.php")) {

            require_once "./mvc/views/client/page/$page.php";
        } else {
            require_once "./mvc/views/client/page/home.php";
        }
    } else {
        require_once "./mvc/views/client/page/home.php";
    }

    ?>


    <?php require_once './mvc/views/client/block/footer.php' ?>
    <!-- Biểu tượng Chat -->
<div id="chatbot-icon">💬</div>

<!-- Cửa sổ Chat -->
<div id="chatbot-window">
    <div id="chatbot-header">Chat Bot</div>
    <div id="chatbot-messages">ForestLine chào bạn</div>
    <div id="chatbot-input">
        <input type="text" id="user-input" placeholder="Nhập tin nhắn...">
        <button onclick="sendMessage()">Gửi</button>
    </div>
</div>

<script>
    // Hiển thị/Ẩn cửa sổ chat
    const chatbotIcon = document.getElementById('chatbot-icon');
    const chatbotWindow = document.getElementById('chatbot-window');

    chatbotIcon.addEventListener('click', () => {
        chatbotWindow.style.display = chatbotWindow.style.display === 'none' || chatbotWindow.style.display === ''
            ? 'flex'
            : 'none';
    });

    // Gửi tin nhắn
    function sendMessage() {
        const input = document.getElementById('user-input');
        const messages = document.getElementById('chatbot-messages');
        const userMessage = input.value.trim();

        if (!userMessage) return;

        // Hiển thị tin nhắn người dùng
        appendMessage(userMessage, 'user-message');

        // Hiển thị hiệu ứng đang tải
        appendMessage('Đang xử lý...', 'ai-message', true);

        // Gửi tin nhắn đến server
        fetch("response.php", {
            method: "POST",
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ text: userMessage })
        })
            .then(response => response.text())
            .then(aiResponse => {
                // Xóa hiệu ứng đang tải
                messages.lastChild.remove();

                // Hiển thị phản hồi từ AI
                appendMessage(aiResponse, 'ai-message');
            })
            .catch(error => {
                messages.lastChild.remove();
                appendMessage('Lỗi: ' + error.message, 'ai-message');
            });

        // Xóa nội dung input
        input.value = '';
    }

    // Thêm tin nhắn vào cửa sổ chat
    function appendMessage(message, className, isLoading = false) {
        const messages = document.getElementById('chatbot-messages');
        const messageElement = document.createElement('div');
        messageElement.textContent = message;
        messageElement.className = className;
        if (isLoading) messageElement.style.fontStyle = 'italic';
        messages.appendChild(messageElement);
        messages.scrollTop = messages.scrollHeight;
    }

    // Gửi tin nhắn bằng phím Enter
    document.getElementById('user-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') sendMessage();
    });
</script>

<style>
    /* Biểu tượng chat */
    #chatbot-icon {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background-color: #007bff;
        color: white;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
       
    }

    /* Cửa sổ chat */
    #chatbot-window {
        position: fixed;
        bottom: 90px;
        right: 20px;
        width: 300px;
        max-height: 400px;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        display: none;
        flex-direction: column;
        overflow: hidden;
        z-index: 9999;
        min-height: 500px;
    }

    #chatbot-header {
        background-color: #007bff;
        color: white;
        padding: 10px;
        text-align: center;
        font-weight: bold;
    }

    #chatbot-messages {
        flex-grow: 1;
        padding: 10px;
        overflow-y: auto;
        background-color: #f9f9f9;
    }

    .message {
        margin: 5px 0;
    }

    .user-message {
        text-align: right;
        color: blue;
    }

    .ai-message {
        text-align: left;
        color: green;
    }

    #chatbot-input {
        display: flex;
        border-top: 1px solid #ccc;
    }

    #chatbot-input input {
        flex-grow: 1;
        padding: 10px;
        border: none;
        outline: none;
    }

    #chatbot-input button {
        padding: 10px;
        border: none;
        background-color: #007bff;
        color: white;
        cursor: pointer;
    }

    #chatbot-input button:hover {
        background-color: #0056b3;
    }
</style>
<?php
require "vendor/autoload.php";
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

// Đọc dữ liệu JSON từ yêu cầu
$rawData = file_get_contents("php://input");
$data = json_decode($rawData, true);

// Kiểm tra input
if (!isset($data['text']) || $data['text'] === '') {
    // echo "Vui lòng nhập câu hỏi!";
    exit;
}

$text = $data['text'];

try {
    // Khởi tạo client Gemini
    $client = new Client("AIzaSyCpOp1s4GI-QEYJ6BkCA7au969n0UHzQqw");

    // Cấu hình prompt để AI trả lời
    $enhancedPrompt = "Bạn là trợ lý AI hỗ trợ khách hàng. " . $text;

    // Gửi câu hỏi đến API
    $response = $client->geminiPro()->generateContent(new TextPart($enhancedPrompt));

    // Trả về câu trả lời
    echo $response->text();

} catch (Exception $e) {
    // Xử lý lỗi
    echo "Có lỗi xảy ra: " . $e->getMessage();
}
?>

</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXlUHjB3ofSLR6lMFS3Z45qmo8SAl22Qq7QORtf8c+NcMm5H7jLupKak/DIp"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGcueSaoS0GGSorP1Cz9KxrBvZ6b6fIOg3Uktj0K3s43IMf3/hk6if8/I0D"
    crossorigin="anonymous"></script>
<script src="../public/js/main.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">