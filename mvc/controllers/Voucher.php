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

        // $data['page'] = '';
        //  $this->view('layout/layout_client', $data);
    }
    public function check_voucher()
    {
        $current_time = date('Y-m-d');
        $res = strtoupper($_POST['voucher']);
        $total_price = $_POST['total_price'];
        // echo $current_time;
        $voucher = $this->model_voucher->check_voucher($res);
        if ($voucher && $voucher['status'] == 1) {
            if ($voucher['day_start'] > $current_time || $voucher['day_end'] < $current_time) {
                $data['result'] = "Voucher này đã hết thời gian sử dụng";
            } else if ($voucher['usage_limit'] == 0) {
                $data['result'] = "Số lượng sài voucher đã hết";
            } else if ($voucher['min_order_value'] > $total_price) {
                $data['result'] = "Giá trị đơn hàng phải lớn hơn $voucher[min_order_value] thì mới được sử dụng";
            } else {
                $data['result'] = 'Đã áp dụng mã thành công';
                $data['voucher_id']  = $voucher['voucher_id'];
                $data['voucher_value']  = $total_price - ($total_price - $voucher['value']);
                $data['total_price_add_voucher']  = $total_price - $voucher['value'];
            }
            $data['page'] = 'checkout';
            $this->view('layout/layout_client', $data);
        } else {
            $data['page'] = 'checkout';
            $data['result'] = 'Mã không tồn tại';
            $this->view('layout/layout_client', $data);
        }
    }
}
