<?php
class Login extends Controller
{
    public $model_login;
    public function __construct()
    {
        $this->model_login = $this->model('M_user');
    }
    public function index()
    {
        $data['page'] = 'login';
        $this->view('layout/layout_client', $data);
    }
    public function register()
    {
        $id = $this->model_login->register($_POST['user_name'], $_POST['email'], $_POST['password']);
        if (!isset($_SESSION['token'])) {
            $_SESSION['token'] = Token::create_token($id, 'huy@gmail.com');
        }
        $content = '<p>Thanks for signing up! Please click the button below to verify your email address:</p> <a href="' . _HOST . 'login/verify-email?token=' . $_SESSION['token'] . '">Verify Email</a>';
        // echo $content;
        Mailer::send($_POST['email'], 'test mail', $content);
        header("Location:" . _HOST);
    }
    public function verify_email()
    {
        $token = $_GET['token'];
        try {
            $result = Token::verify_token($token);
            $expiresAt = $result->exp;

            $currentTime = time();
            if ($currentTime > $expiresAt) {
                unset($_SESSION['token']);
                echo "Token đã hết hạn!";
            } else {
                echo "Token hợp lệ!";
                $this->model_login->active_account($result->user_id);
                header("Location:" . _HOST);
            }
        } catch (Exception $e) {
            // Nếu có lỗi, có thể là token không hợp lệ hoặc không thể giải mã
            echo "Lỗi: " . $e->getMessage();
        }
    }
}
