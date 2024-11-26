<?php
class Blog extends Controller
{
    public $model_blog;
    public function __construct()
    {
        $this->model_blog = $this->model('M_blog');
    }
    public function index()
    {
        $data['list_blog'] = $this->model_blog->get_blog_all();
        $data['page'] = 'blog';
        $this->view('layout/layout_client', $data);
    }
}
