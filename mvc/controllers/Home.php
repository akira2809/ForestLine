<?php
class Home extends Controller
{
    public function index()
    {
        $this->view('client/block/header');
    }
    public function listProducts()
    {
        $res = $this->model('Product');
        $data['listProduct'] = $res->getProduct();
        var_dump($data['listProduct']);
        $this->view('main', $data);
    }
    public function updateProduct($id = null, $slug = [])
    {
        $id = $_GET['id'];
        $slug['name'] = $_GET['name'];
        $res = $this->model('Product');
        $res->updateProduct($id, $slug);
        $data['listProducts'] = $res->getProduct();
        $this->view('listProducts', $data);
    }
}
