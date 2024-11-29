<?php
session_start();
// unset($_SESSION['cart']);
require_once './mvc/Bridge.php';
date_default_timezone_set('Asia/Ho_Chi_Minh');
$myApp = new App();
