<?php
class Collection extends Controller
{
    public function render($data)
    {
        $this->view('layout/layout_admin', $data);
    }
    public function __construct()
    {
        $this->model_product = $this->model('M_product');
    }
    public function index()
    {
        $data['page'] = 'collection/list_collection';
        $collection = $this->model('M_collection');
        $data['collections'] = $collection->get_all_collections();
        $data['title'] = "Danh sách Collection";
        $this->render($data);
    }

    public function add_collection()
    {
        $data['title'] = "Thêm Collection";
        $data['page'] = 'collection/add_collection';

        // Lấy danh sách sản phẩm
        $data['products'] = $this->model_product->get_product_all_client();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $collection = $this->model('M_collection');
            $name = $_POST['title'];
            $description = $_POST['slogan'];
            $status = $_POST['status']; // Lấy trạng thái từ form
            $product_ids = isset($_POST['products']) ? $_POST['products'] : [];

            // Upload hình ảnh
            $image = $this->upload_image($_FILES['image']['name'], $_FILES['image']['tmp_name']);

            // Thêm bộ sưu tập
            $collection_id = $collection->add_collection($name, $description, $image, $status);

            // Liên kết sản phẩm với bộ sưu tập
            $this->model_product->update_product_collection($collection_id, $product_ids);

            header("Location: " . _HOST . "/admin/Collection/index");
        }




        $this->render($data);
    }


    public function upload_image($name, $tmp_name)
    {
        $path = "./uploads/" . $name;
        $imageName = strtolower(pathinfo($path, PATHINFO_FILENAME));
        $imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        $count = 1;
        $imageNew = "./uploads/" . $imageName . '.' . $imageFileType;

        while (file_exists($imageNew)) {
            $imageNew = "./uploads/" . $imageName . $count . '.' . $imageFileType;
            $count++;
        }

        move_uploaded_file($tmp_name, $imageNew);
        return substr($imageNew, 10); // Trả về đường dẫn tương đối
    }

    public function update_collection($id)
    {
        $data['title'] = "Sửa Collection";
        $data['page'] = 'collection/update_collection';

        // Lấy dữ liệu của collection theo ID
        $collectionModel = $this->model('M_collection');
        $data['collection'] = $collectionModel->get_one_collection($id);

        // Lấy danh sách sản phẩm và sản phẩm đã liên kết
        $data['all_products'] = $this->model_product->get_product_all_client();
        $data['connected_products'] = $this->model('M_collection')->get_products_by_collection($id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $slogan = $_POST['slogan'];
            $status = $_POST['status'];
            $productIds = isset($_POST['products']) ? $_POST['products'] : [];

            // Upload ảnh nếu có thay đổi
            $image = $data['collection']['image'];
            if (!empty($_FILES['image']['name'])) {
                $image = $this->upload_image($_FILES['image']['name'], $_FILES['image']['tmp_name']);
            }

            // Cập nhật Collection
            $collectionModel->update_collection($id, $title, $slogan, $status, $image);

            // Cập nhật sản phẩm liên kết
            $collectionModel->update_product_collection($id, $productIds);

            header("Location: " . _HOST . "/admin/collection/index");
        }

        $this->render($data);
    }

}
