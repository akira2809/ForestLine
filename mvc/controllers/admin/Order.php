<?php
class Order extends Controller
{
    public $model_order;
    public function __construct()
    {
        $this->model_order = $this->model('M_order');
    }
    public function index()
    {
        $data['title'] = 'Đơn hàng';
        $data['page'] = 'order/list_order';
        $data['order'] = $this->model_order->get_order_all();
        $this->view('layout/layout_admin', $data);
    }
    public function set_status($order_id, $status)
    {
        $this->model_order->set_status($order_id, $status);
        header("location: " . _HOST . 'admin/order');
    }
}
