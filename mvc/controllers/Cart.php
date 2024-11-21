<?php
class Cart extends Controller
{
    public function index()
    {
        $data['page'] = 'cart';
        $this->view('layout/layout_client', $data);
    }
}
