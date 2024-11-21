<?php
class Detail extends Controller
{
    public function index()
    {
        $data['page'] = 'detail';
        $this->view('layout/layout_client', $data);
    }
}
