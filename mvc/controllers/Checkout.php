<?php
class Checkout extends Controller
{
    public $model_order;
    public function __construct()
    {
        $this->model_order = $this->model('M_order');
    }
    public function index()
    {
        $data['page'] = 'checkout';
        $this->view('layout/layout_client', $data);
    }
    public function checkout()
    {
        $order_id = $this->model_order->add_order(
            $_SESSION['user_login']['user_id'],
            $_POST['payment_method'],
            $_POST['phone_number'],
            $_POST['address'],
        );
        foreach ($_SESSION['cart'] as $key => $value) {
            if (!$value['sale_price'] > 0) {
                $price = $value['sale_price'];
            } else {
                $price = $value['base_price'];
            }

            $this->add_order_detail(
                $order_id,
                $value['product_variant_id'],
                $value['quantity'],
                $price
            );
            unset($_SESSION['cart'][$key]);
        }
    }
    public function add_order_detail($order_id, $product_variant_id, $quantity, $price)
    {
        return $this->model_order->add_order_detail(
            $order_id,
            $product_variant_id,
            $quantity,
            $price
        );
    }
}
