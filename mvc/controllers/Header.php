<?php
// Header.php (Controller)
class Header extends Controller
{
    public $model_product;
    public $model_category;

    public function __construct()
    {
        $this->model_product = $this->model('M_product');
        $this->model_category = $this->model('M_category');
    }

    public function index()
    {
        $data['header'] = 'header';
        $this->view('layout/layout_client', $data);
    }

    public function search()
    {
        try {
            // Kiểm tra method
            if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
                $this->sendJsonResponse(false, 'Phương thức không được phép', 405);
                return;
            }

            // Lấy và validate dữ liệu
            $keyword = $this->getValidatedKeyword();
            if (!$keyword['success']) {
                $this->sendJsonResponse(false, $keyword['message']);
                return;
            }

            // Lấy các tham số tìm kiếm
            $filters = $this->getSearchFilters();

            // Thực hiện tìm kiếm
            $results = $this->model_product->search_product(
                $keyword['data'],
                $filters['category'],
                $filters['min_price'],
                $filters['max_price']
            );

            // Trả về kết quả
            $this->sendJsonResponse(true, '', 200, $results);

        } catch (Exception $e) {
            error_log($e->getMessage());
            $this->sendJsonResponse(false, 'Đã xảy ra lỗi trong quá trình tìm kiếm', 500);
        }
    }

    private function getValidatedKeyword()
    {
        $input = $_POST['keyword'] ?? '';
        $keyword = trim($input);

        if (empty($keyword)) {
            return [
                'success' => false,
                'message' => 'Vui lòng nhập từ khóa tìm kiếm'
            ];
        }

        if (mb_strlen($keyword) > 100) {
            return [
                'success' => false,
                'message' => 'Từ khóa tìm kiếm quá dài'
            ];
        }

        return [
            'success' => true,
            'data' => $keyword
        ];
    }

    private function getSearchFilters()
    {
        return [
            'category' => isset($_POST['category']) ? (int) $_POST['category'] : '',
            'min_price' => isset($_POST['min_price']) ? (float) $_POST['min_price'] : null,
            'max_price' => isset($_POST['max_price']) ? (float) $_POST['max_price'] : null
        ];
    }

    private function sendJsonResponse($success, $message = '', $statusCode = 200, $data = null)
    {
        header('Content-Type: application/json');
        http_response_code($statusCode);

        $response = [
            'success' => $success,
            'message' => $message
        ];

        if ($data !== null) {
            $response['data'] = $data;
        }

        echo json_encode($response);
        exit;
    }
}