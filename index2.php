<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Box Hỗ Trợ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        #chat-container {
            border: 1px solid #ccc;
            height: 400px;
            overflow-y: scroll;
            margin-bottom: 20px;
            padding: 10px;
        }
        .user-message {
            text-align: right;
            color: blue;
            margin: 10px 0;
        }
        .ai-message {
            text-align: left;
            color: green;
            margin: 10px 0;
        }
        .loading {
            color: gray;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Chat Bot Hỗ Trợ</h1>
    
    <div id="chat-container"></div>
    
    <input type="text" id="user-input" placeholder="Nhập câu hỏi...">
    <button onclick="sendMessage()">Gửi</button>

    <script>
        // Lưu trữ các tin nhắn
        let messages = [];

        function sendMessage() {
            const input = document.getElementById('user-input');
            const chatContainer = document.getElementById('chat-container');
            const userMessage = input.value.trim();

            if (!userMessage) return;

            // Hiển thị tin nhắn người dùng
            appendMessage('Bạn: ' + userMessage, 'user-message');
            
            // Thêm hiệu ứng đang tải
            appendMessage('Đang xử lý...', 'loading');

            // Gửi request đến server
            fetch("response.php", {
                method: "POST",
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    text: userMessage
                })
            })
            .then(response => response.text())
            .then(aiResponse => {
                // Xóa tin nhắn đang tải
                chatContainer.lastChild.remove();
                
                // Hiển thị phản hồi từ AI
                appendMessage('AI: ' + aiResponse, 'ai-message');
            })
            .catch(error => {
                // Xóa tin nhắn đang tải
                chatContainer.lastChild.remove();
                
                // Hiển thị lỗi
                appendMessage('Lỗi: ' + error.message, 'ai-message');
            });

            // Xóa nội dung input
            input.value = '';
        }

        function appendMessage(message, className) {
            const chatContainer = document.getElementById('chat-container');
            const messageElement = document.createElement('div');
            messageElement.textContent = message;
            messageElement.className = className;
            chatContainer.appendChild(messageElement);
            
            // Cuộn xuống dưới cùng
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        // Cho phép gửi tin nhắn bằng phím Enter
        document.getElementById('user-input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                sendMessage();
            }
        });
    </script>
</body>
</html>