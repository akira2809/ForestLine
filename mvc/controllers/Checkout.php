<?php
class Checkout extends Controller
{
    public function index()
    {
        $data['page'] = 'checkout';
        $this->view('layout/layout_client', $data);
    }
}
