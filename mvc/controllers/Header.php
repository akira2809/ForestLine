<?php
class Header extends Controller
{
    public $model_product;

    public function __construct()
    {
        $this->model_product = $this->model('M_product');
    }

    public function index()
    {
        $data['header'] = 'header';
        $this->view('layout/layout_client', $data);
    }

    public function search()
    {
        header('Content-Type: application/json');

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405);
            echo json_encode(['error' => 'Phương thức không được phép']);
            exit;
        }

        $input = $_POST['keyword'] ?? '';
        $keyword = trim($input);

        if (empty($keyword)) {
            echo json_encode(['error' => 'Vui lòng nhập từ khóa tìm kiếm']);
            exit;
        }

        try {
            $results = $this->model_product->search_product($keyword);
            echo json_encode($results);
        } catch (Exception $e) {
            error_log($e->getMessage());
            http_response_code(500);
            echo json_encode(['error' => 'Đã xảy ra lỗi trong quá trình tìm kiếm']);
        }
        exit;
    }

}