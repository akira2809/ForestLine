<?php
class News extends Controller
{
    public $model_post;
    public function __construct()
    {
        $this->model_post = $this->model('M_post');
    }
    public function index()
    {
        $data['list_post'] = $this->model_post->get_post_all();
        $data['page'] = 'news';
        $this->view('layout/layout_client', $data);
    }
}
