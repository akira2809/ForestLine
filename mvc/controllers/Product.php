<?php
class Product extends Controller
{
    public function index()
    {
        $pro = $this->model('M_product');
        $data['product'] =  $pro->getProductAll();
        $this->view('client/block/header');
        $this->view('client/page/V_product', $data);
    }
}
