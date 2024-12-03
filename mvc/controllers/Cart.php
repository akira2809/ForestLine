<?php
class Cart extends Controller
{
    public $model_product;
    public $model_product_variant;
    public $model_image;
    public $model_color;
    public $model_size;
    public function __construct()
    {
        $this->model_product = $this->model('M_product');
        $this->model_image = $this->model('M_image');
        $this->model_product_variant = $this->model('M_product_variant');
        $this->model_color = $this->model('M_color');
        $this->model_size = $this->model('M_size');
    }
    public function index()
    {
        $data['page'] = 'cart';
        $this->view('layout/layout_client', $data);
    }
    public function check_cart_exist($product_variant_id, $quantity)
    {
        $temp = $this->model_product_variant->check_cart_exist($product_variant_id);
        if (isset($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $key => $val) {
                if ($val['product_variant_id'] == $temp['product_variant_id']) {
                    echo $key;
                    $_SESSION['cart'][$key]['quantity'] += $quantity;
                    return true;
                }
            }
        } else {
            return false;
        }
    }
    public function add_cart($id)
    {
        $quantity = $_POST['quantity'];
        $product_find = $this->model_product_variant->find_product_variant($id, $_POST['color_id'], $_POST['size_id']);
        if ($product_find) {
            if (!$this->check_cart_exist($product_find['product_variant_id'], $quantity)) {
                $product_variant = $this->model_product_variant->get_product_variant_by_id($product_find['product_variant_id']);
                $product_variant['quantity'] = $quantity;
                var_dump($_SESSION['cart']);
                if (isset($_SESSION['cart']) && count($_SESSION['cart']) == 0) {
                    array_unshift($_SESSION['cart'], $product_variant);
                } else {
                    $_SESSION['cart'][] = $product_variant;
                }
            }
        }
        // var_dump($product_variant);
        header('location:' . _HOST . 'cart');
    }
    public function update_cart($index)
    {
        if (isset($_POST['desc'])) {
            if ($_SESSION['cart'][$index]['quantity'] == 1) {
                $_SESSION['cart'][$index]['quantity'] = 1;
            } else {
                $_SESSION['cart'][$index]['quantity'] -= 1;
            }
        } else if (isset($_POST['asc'])) {
            $_SESSION['cart'][$index]['quantity'] += 1;
        }
        header('location:' . _HOST . 'cart');
    }
    public function remove_cart($index)
    {
        unset($_SESSION['cart'][$index]);
        header('location:' . _HOST . 'cart');
    }
}
