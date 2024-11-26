<?php
require_once './mvc/config/config.php';
//mailer
require_once './mvc/services/mailer/Exception.php';
require_once './mvc/services/mailer/PHPMailer.php';
require_once './mvc/services/mailer/SMTP.php';
require_once './mvc/services/mailer/Mailer.php';
//jwt
require_once './mvc/services/jwt/Key.php';
require_once './mvc/services/jwt/JWTExceptionWithPayloadInterface.php';
require_once './mvc/services/jwt/ExpiredException.php';
require_once './mvc/services/jwt/SignatureInvalidException.php';
require_once './mvc/services/jwt/BeforeValidException.php';
require_once './mvc/services/jwt/JWT.php';
require_once './mvc/services/jwt/Token.php';
//app
require_once './mvc/core/Controller.php';
require_once './mvc/core/App.php';
require_once './mvc/core/Database.php';
require_once './mvc/core/Model.php';
