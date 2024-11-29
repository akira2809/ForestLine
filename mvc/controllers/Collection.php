<?php
class Collection extends Controller
{
    public $model_product;
    public $model_category;
    public function __construct()
    {
        $this->model_product = $this->model('M_product');
    }
    public function index()
    {
        $data['page'] = 'collection';
        $this->view('layout/layout_client', $data);
    }
}
