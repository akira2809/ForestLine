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
    public function signup()
    {
        $data['page'] = 'signup';
        $this->view('layout/layout_client', $data);
    }
    public function forgot_password()
    {
        $data['action'] = 'handle_forgot_password';
        $data['page'] = 'forgot_password';
        $this->view('layout/layout_client', $data);
    }
    public function handle_forgot_password()
    {
        $email = $_POST['email'];
        if (!isset($_SESSION['token_forgot_password'])) {
            $payload = [
                'code' => str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT),
                'email' => $email,
                'exp' => time() + (10 * 60) // 10 minutes
            ];
            $_SESSION['token_forgot_password'] = Token::create_token($payload);
            $content = "Mã xác nhận của bạn là: " . $payload['code'] . '<p>Sau 1 phút thì mã sẽ hết hiệu lực</p>';
            Mailer::send($email, "Lấy lại mật khẩu", $content);
        }
        $data['type'] = 'info';
        $data['action'] = 'check_code';
        $data['result'] = 'Chúng tôi đã gửi mã xác nhận về gmail của bạn';
        $data['page'] = 'forgot_password';
        $this->view('layout/layout_client', $data);
    }
    function check_code()
    {
        if (isset($_SESSION['token_forgot_password'])) {
            $token = $_SESSION['token_forgot_password'];
            echo $token;
            $result = Token::verify_token($token);
            $expiresAt = $result->exp;
            $currentTime = time();
            if ($currentTime > $expiresAt) {
                unset($_SESSION['token_forgot_password']);
                $data['type'] = 'danger';
                $data['result'] = 'Thời gian xác nhận đã hết vui lòng gửi lại !';
                $this->view('layout/layout_client', $data);
                // header("Location:" . _HOST . 'login/signup');
            } else {
                if ($_POST['code'] == $result->code) {
                    $password = $this->generateRandomPassword();
                    $this->model_login->set_password($password, $result->email);
                    unset($_SESSION['token_forgot_password']);
                    $content = "Mật khẩu mới của bạn là: " . $password . '<p>Nhớ thay đổi mật khẩu sau khi đăng nhâp</p>';
                    Mailer::send($result->email, "Mật khẩu mới", $content);
                    $data['type'] = 'success';
                    $data['result'] = 'Chúng tôi đã gửi mật khẩu mới về gmail của bạn';
                } else {
                    $data['type'] = 'danger';
                    $data['result'] = 'Mã không đúng';
                }
                // header("Location:" . _HOST);
            }
        } else {
            $data['type'] = 'danger';
            $data['result'] = 'Thời gian xác nhận đã hết vui lòng gửi lại !';
        }
        $data['page'] = 'forgot_password';
        $data['action'] = 'check_code';
        $this->view('layout/layout_client', $data);
    }
    public function generateRandomPassword($length = 8)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        $maxIndex = strlen($characters) - 1;
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[random_int(0, $maxIndex)];
        }
        return $password;
    }
    public function register()
    {
        $id = $this->model_login->register($_POST['user_name'], $_POST['email'], $_POST['password']);
        if (!isset($_SESSION['token'])) {
            $payload = [
                'user_id' => $id,
                'email' => $_POST['email'],
                'exp' => time() + (10 * 60) // 10 minutes
            ];
            $_SESSION['token'] = Token::create_token($payload);
        }
        $content = '<p>Cảm ơn bạn đã đăng ký! Vui lòng nhấp vào nút bên dưới để xác minh địa chỉ email của bạn:</p> <a href="' . _HOST . 'login/verify-email?token=' . $_SESSION['token'] . '">Verify Email</a>';
        // echo $content;
        Mailer::send($_POST['email'], 'Xác nhận tài khoản', $content);
        $data['result'] = [
            'type' => 'info',
            'result' => 'Tài khoản của bạn đã được tạo, vui lòng vào gmail xác nhận tài khoản !'
        ];
        $data['page'] = 'signup';
        $this->view('layout/layout_client', $data);
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
                $data['page'] = 'login/signup';
                $data['type'] = 'info';
                $data['result'] = 'Thời gian xác nhận đã hết vui lòng bạn đăng ký lại !';
                $this->view('layout/layout_client', $data);
                // header("Location:" . _HOST . 'login/signup');
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
    public function login()
    {
        $data['page'] = 'login';
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = $this->model_login->login($email, $password);
        if ($user && $user['active'] == 1) {
            if ($user['role'] == 0) {
                $_SESSION['user_login'] = $user;
                if (isset($_SESSION['URL'])) {
                    header("Location:" .  $_SESSION['URL']);
                } else {
                    header("Location:" . _HOST);
                }
            } else {
                $_SESSION['admin_login'] = $user;
                header("Location:" . _HOST . 'admin/dashboard');
            }
        } else {
            $data['result'] = [
                'result' => 'Sai tài khoản hoặc mật khẩu',
                'email' => $email,
                'password' => $password,
            ];
            $this->view('layout/layout_client', $data);
        }
    }
    public function check_active_user($email, $password) {}
    public function logout()
    {
        unset($_SESSION['user_login']);
        header('Location:' . _HOST);
    }
}
