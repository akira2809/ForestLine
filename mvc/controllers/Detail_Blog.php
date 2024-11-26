<?php
class Detail_Blog extends Controller
{
    public $model_blog;
    public function __construct()
    {
        $this->model_blog = $this->model('M_blog');
    }
    public function index($id)
    {
        $data['blog'] = $this->model_blog->get_blog_one($id);
        $data['page'] = 'detail_blog';
        $this->view('layout/layout_client', $data);
    }
    
}
