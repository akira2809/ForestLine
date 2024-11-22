<?php
class Home extends Controller
{
    public $model_product;
    public $model_category;
    public function __construct()
    {
        $this->model_product = $this->model('M_product');
    }
    public function index()
    {
        $data['product_new'] = $this->model_product->get_product_by_count(5);
        $data['page'] = 'home';
        $this->view('layout/layout_client', $data);
    }
}