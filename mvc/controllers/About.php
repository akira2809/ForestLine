<?php
class About extends Controller
{
    public function index()
    {
        $data['page'] = 'about';
        $this->view('layout/layout_client', $data);
    }
}
