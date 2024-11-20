<?php
class Dashboard extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['page'] = 'dashboard';
        $this->view('layout/layout_admin', $data);
    }
}
