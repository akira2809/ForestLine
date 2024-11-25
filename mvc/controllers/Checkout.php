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
        if (!isset($_SESSION['user_login'])) {
            $_SESSION['URL'] = $_SERVER['PATH_INFO'];
            header('Location:' . _HOST . 'login');
        }
        $data['page'] = 'checkout';
        $this->view('layout/layout_client', $data);
    }
    public function checkout()
    {
        $order_id = $this->model_order->add_order(
            $_SESSION['user_login']['user_id'],
            $_POST['user_name'],
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
            $this->reduce_stock_by_product_variant_id($value['product_variant_id'], $value['quantity']);
            unset($_SESSION['cart'][$key]);
        }
        header('location:' . _HOST . 'profile');
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
    public function reduce_stock_by_product_variant_id($product_variant_id, $quantity)
    {
        return $this->model_order->reduce_stock_by_product_variant_id(
            $product_variant_id,
            $quantity,
        );
    }
}
