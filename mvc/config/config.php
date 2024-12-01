<?php
define('_HOST', 'http://localhost:8050/');
//connect DB
define('_DNS', 'mysql:host=localhost;dbname=asm_pro1;charset=utf8mb4');
define('_USER_NAME', 'root');
define('_PASSWORD', '');
// config mailer
define('_PASSWORD_MAILER', 'lgpdlwjvdxgixscj');
//jwt
define('_SECRET_KEY', 'forestline19307');

// Token và Key PayOS
define('_PAYOS_CLIENT_ID', 'f29b16ad-8e30-4433-b04a-b92082561928'); // Thay bằng Client ID từ PayOS
define('_PAYOS_API_KEY', '05da13c1-d4ea-474e-a02e-064e17dc40c4'); // Thay bằng API Key từ PayOS
define('_PAYOS_CHECKSUM_KEY', 'forestline'); // Thay bằng Checksum Key từ PayOS
define('_PAYOS_WEBHOOK_URL', 'http://localhost:8050/'); // URL xử lý webhook (tự thiết kế)
