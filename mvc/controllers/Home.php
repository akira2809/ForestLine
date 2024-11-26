<?php
class Home extends Controller
{
    public $model_product;
    public $model_category;
    public function __construct()
    {
        $this->model_product = $this->model('M_product');
    }
    public function index()
    {
        $data['product_new'] = $this->model_product->get_product_by_count(5);
        $data['page'] = 'home';
        $this->view('layout/layout_client', $data);
    }
    public function search()
    {
        try {
            if (isset($_POST['keyword']) && !empty(trim($_POST['keyword']))) {
                $keyword = htmlspecialchars($_POST['keyword']);
                $results = $this->model_product->search_product($keyword);

                // Đảm bảo kết quả luôn là một mảng
                header('Content-Type: application/json');
                echo json_encode($results ?: []); // Trả về mảng rỗng nếu không có kết quả
            } else {
                header('Content-Type: application/json');
                echo json_encode([]);
            }
        } catch (Exception $e) {
            header('Content-Type: application/json');
            echo json_encode(['error' => 'Đã xảy ra lỗi trong quá trình xử lý.']);
        }
    }



}
