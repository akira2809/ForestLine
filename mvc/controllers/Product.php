<?php
class Product extends Controller
{
    public $model_product;
    public function __construct()
    {
        $this->model_product = $this->model('M_product');
    }
    public function index()
    {
        $data['list_product'] = $this->model_product->get_product_all();
        $data['page'] = 'product';
        $this->view('layout/layout_client', $data);
    }
}
