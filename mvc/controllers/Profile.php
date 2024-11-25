<?php
class Profile extends Controller
{
    public $model_order;
    public function __construct()
    {
        $this->model_order = $this->model('M_order');
    }
    public function index()
    {
        if (!isset($_SESSION['user_login'])) {
            $_SESSION['URL'] = $_SERVER['PATH_INFO'];
            header('Location:' . _HOST . 'login');
        }
        $data['page'] = 'profile/order';
        $data['order'] = $this->model_order->get_order_by_user_id($_SESSION['user_login']['user_id']);
        $this->view('layout/layout_client', $data);
    }
}
