<?php
class Voucher extends Controller
{
    public $model_voucher;
    public function __construct()
    {
        $this->model_voucher = $this->model('M_voucher');
    }
    public function index()
    {
        $data['title'] = 'Voucher';
        $data['page'] = 'voucher';
        $this->view('layout/layout_admin', $data);
    }
    public function render($data)
    {
        $data['title'] = 'Voucher';
        $this->view('layout/layout_admin', $data);
    }
    public function list_voucher()
    {
        $data['page'] = 'voucher/list_voucher';
        $data['list_voucher'] = $this->model_voucher->get_vouchers();
        $this->render($data);
    }
    public function update_voucher($id)
    {
        $data['page'] = 'voucher/update_voucher';
        $data['voucher'] = $this->model_voucher->get_voucher($id);
        // $data['list_voucher'] = $this->model_voucher->get_vouchers();
        $this->render($data);
    }
    public function add_voucher()
    {
        $data['page'] = 'voucher/add_voucher';
        // $data['list_voucher'] = $this->model_voucher->get_vouchers();
        $this->render($data);
    }
    public function handle_add_voucher()
    {
        $this->model_voucher->add_voucher(
            $_POST['code'],
            $_POST['day_start'],
            $_POST['day_end'],
            $_POST['value'],
            $_POST['usage_limit'],
            $_POST['description'],
            $_POST['min_value'],
        );
        header('location:' . _HOST . 'admin/voucher/list-voucher');
    }
    public function handle_update_voucher($id)
    {
        $this->model_voucher->update_voucher(
            $_POST['code'],
            $_POST['day_start'],
            $_POST['day_end'],
            $_POST['value'],
            $_POST['usage_limit'],
            $_POST['description'],
            $_POST['min_value'],
            $id
        );
        header('location:' . _HOST . 'admin/voucher/list-voucher');
    }
    public function handle_update_status($id, $status)
    {
        $status = $status == 1 ? 0 : 1;
        $this->model_voucher->update_status_voucher($id, $status);
        header('location:' . _HOST . 'admin/voucher/list-voucher');
    }
}
