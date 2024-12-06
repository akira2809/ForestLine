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


        $data['product_new'] = $this->model_product->get_product_by_count(4);
        $data['product_best_view'] = $this->model_product->get_product_best_view(4);
        $data['page'] = 'home';
        $this->view('layout/layout_client', $data);
    }

}
