<?php
class Review extends Controller
{
    public $model_review;
    public function __construct()
    {
        $this->model_review = $this->model('M_review');
    }
    public function index()
    {
        $data['list_review'] = $this->model_review->get_review_all();
        $data['page'] = 'detail';
        $this->view('layout/layout_client', $data);
    }
    public function upload_image($name, $tmp_name)
    {
        $path = "./uploads/" . $name;
        $imageName = strtolower(pathinfo($path,  PATHINFO_FILENAME)) . 'Copy';
        $imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        $count = 1;
        $imageNew = "./uploads/" . $imageName . '.' . $imageFileType;
        while (file_exists($imageNew)) {
            $imageNew = "./uploads/" . $imageName . $count . '.' . $imageFileType;
            $count++;
        }
        move_uploaded_file($tmp_name, $imageNew);
        return substr($imageNew, 10);
    }
    public function add_review()
    {

        var_dump($_POST);
        $review_id = $this->model_review->add_review($_POST['order_detail_id'], $_POST['content'], $_POST['star'], $_POST['product_id']);
        $this->model_review->set_order_review($_POST['order_detail_id']);
        if (isset($_FILES['images']) && count($_FILES['images']['name']) > 0 && $_FILES['images']['name'][0] != '') {
            // echo 'oke';
            $i = 0;
            foreach ($_FILES['images']['name'] as   $value) {
                $imageNew = $this->upload_image($value, $_FILES['images']['tmp_name'][$i]);
                $this->model_review->add_image_review($review_id, $imageNew);
                $i++;
            }
        }
        header("Location:" . _HOST . 'profile');
    }
}
