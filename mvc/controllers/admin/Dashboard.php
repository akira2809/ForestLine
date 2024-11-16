<?php
class Dashboard extends Controller
{
    public $data = [];
    public function index()
    {
        $this->data['title'] = 'Dashboard';
        $this->data['page'] = 'dashboard';
        $this->view('layout/layout_admin', $this->data);
    }
    public function list_tour()
    {
        $this->data['title'] = 'Danh sách tour';
        $this->data['page'] = 'tour/listTour';
        echo "oke";
        $this->view('layout/layout_admin', $this->data);
    }
    public function add_tour()
    {
        $this->data['title'] = 'Thêm tour mới';
        $this->data['page'] = 'tour/add_tour';
        $this->view('layout/layout_admin', $this->data);
    }
}
