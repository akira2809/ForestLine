<?php

use PayOS\PayOS;

class Checkout extends Controller
{
    public $model_order;
    public $model_voucher;
    public function __construct()
    {
        $this->model_order = $this->model('M_order');
        $this->model_voucher = $this->model('M_voucher');
    }
    public function index()
    {
        if (!isset($_SESSION['user_login'])) {
            $_SESSION['URL'] = $_SERVER['PATH_INFO'];
            header('Location:' . _HOST . 'login');
        }
        if (count($_SESSION['cart']) ==  0) {
            $data['page'] = 'cart';
            $data['result'] = 'Giỏ hàng trống vui lòng thêm sản phẩm để được thanh toán';
            $this->view('layout/layout_client', $data);
        } else {

            $data['page'] = 'checkout';
            $this->view('layout/layout_client', $data);
        }
    }
    public function checkout()
    {
        $voucher_id = null;
        if (isset($_POST['voucher_id']) && $_POST['voucher_id'] != null) {
            $voucher_id = $_POST['voucher_id'];
            $this->model_voucher->update_usage_limit_by_voucher_id($voucher_id);
        }
        $order_id = (int) $this->model_order->add_order(
            $_SESSION['user_login']['user_id'],
            $_POST['user_name'],
            $_POST['phone_number'],
            $_POST['address'],
            $_POST['total_money'],
            $voucher_id
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
        $payment = $_POST['payment_method'] == 0 ? 'Thanh toán khi giao hàng' : 'Chuyển khoản ngân hàng';
        $this->model_order->add_payment_method($order_id, $payment);
        if ($_POST['payment_method'] == 1) {
            $payOS = new PayOS(_CLIENT_ID, _API_KEY, _CHECKSUM_KEY);
            $paymentData = [
                'orderCode' => (int) $order_id,
                'amount' => 2000,
                'description' => 'Thanh toán: ' . $order_id,
                'returnUrl' => _HOST . 'profile',
                'cancelUrl' => _HOST . 'profile'
            ];
            try {
                $paymentLinkData = $payOS->createPaymentLink($paymentData);
                $paymentUrl = $paymentLinkData['checkoutUrl'];  // URL thanh toán từ PayOS

                // $qrCode = new QrCode($paymentUrl);
                // $qrCode->setSize(300);

                // $writer = new PngWriter();
                // $writer->writeFile($qrCode, 'payment_qr.png');
                // echo $paymentUrl;
                header('Location:' . $paymentUrl);
            } catch (Exception $e) {
                echo 'Lỗi: ' . $e->getMessage();
            }
        }
        // header('location:' . _HOST . 'profile');
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
    public function cancel_order($id)
    {
        $this->model_order->cancel_order($id);
        header('location:' . _HOST . 'profile');
    }
}
