<?php
session_start();

// unset($_SESSION['token_forgot_password']);
// var_dump($_SESSION['token_forgot_password']);
require_once './mvc/Bridge.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');


require_once './mvc/Bridge.php';

$myApp = new App();
