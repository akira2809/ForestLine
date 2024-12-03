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
        $data['list_blog_review'] = $this->model_blog->get_blog_review_all();

        $data['page'] = 'blog';
        $this->view('layout/layout_client', $data);
    }
    // load bình luận
    public function list_blog_review()
    {
        $blog_review = $this->model('M_blog');
        $data['blog_review'] = $blog_review->get_blog_review_all_admin();
        $data['page'] = 'blog/detail_blog';
        $this->render($data);
    }
     /* thêm bình luận */     
     public function add_blog_review($id)
     {
         $blog = $this->model('M_blog');
            $blog->add_blog_review(
                $id,
                $_SESSION['user_login']['user_id'],
            $_POST['content']);     
                header('location:' . _HOST . 'blog/detail_blog/' . $id);
     }
     public function detail_blog($id){
        $data['blog'] = $this->model_blog->get_blog_one($id);
        $data['list_review_blog'] = $this->model_blog->get_blog_review_all_admin();

        $data['page'] = 'detail_blog';
        $this->view('layout/layout_client', $data);
     }
   
     
}
