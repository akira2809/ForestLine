<?php
class Dashboard extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['page'] = 'dashboard';
        $this->view('layout/layout_admin', $data);
    }
    public function list_tour()
    {
        $data['title'] = 'Danh sách tour';
        $data['page'] = 'tour/listTour';
        echo "oke";
        $this->view('layout/layout_admin', $data);
    }
    public function add_tour()
    {
        $product = $this->model('Product');
        $data['product'] = $product->getProductAll();
        $data['title'] = 'Thêm tour mới';
        $data['page'] = 'tour/add_tour';
        $this->view('layout/layout_admin', $data);
    }
}
