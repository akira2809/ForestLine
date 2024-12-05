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
    public function update_payment_status($order_id, $payment_status)
    {
        $this->model_order->update_payment_status($order_id, $payment_status);
        header('Location:' . _HOST . 'profile');
    }
    public function set_status($order_id, $status)
    {
        $this->model_order->set_status($order_id, $status);
        header("location: " . _HOST . 'profile');
    }
}
$obj = new Profile();
if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $order_id = $_GET['orderCode'];
    $cancel = $_GET['cancel'];

    if ($status == 'PAID') {
        $obj->update_payment_status($order_id, 'SUCCESS');
    } elseif ($status == 'FAILED') {
        $obj->update_payment_status($order_id, 'FAILED');
    } elseif ($cancel == 'true') {
        $obj->update_payment_status($order_id, 'CANCELLED');
    }
}
