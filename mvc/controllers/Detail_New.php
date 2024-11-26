<?php
class Detail_New extends Controller
{
    public $model_post;
    public function __construct()
    {
        $this->model_post = $this->model('M_post');
    }
    public function index($id)
    {
        $data['one_post'] = $this->model_post->get_post_one($id);
        $data['page'] = 'detail_new';
        $this->view('layout/layout_client', $data);
    }
    
}
