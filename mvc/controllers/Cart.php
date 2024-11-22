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
    public function add_cart($id)
    {
        var_dump($_POST);
        $product_variant = $this->model_product_variant->find_product_variant($id, $_POST['color_id'], $_POST['size_id']);
        // $_SESSION['cart'][] = $product_variant;
        var_dump($product_variant);
        // header('location:' . _HOST . 'cart');
    }
}
