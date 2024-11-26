<?php
class Post extends Controller
{
    public function render($data)
    {
        $this->view('layout/layout_admin', $data);
    }
    public function index()
    {
        $data['page'] = 'post/list_post';
        $this->render($data);
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
    public function add_post()
    {
        $post = $this->model('M_post');
        if (isset($_GET['action']) && $_GET['action'] == 'add-post') {
            $image = $this->model('M_image');
            $imageNew = $this->upload_image($_FILES['image_post']['name'], $_FILES['image_post']['tmp_name']);
            $new_post_id = $post->add_post($_POST['name'], image_post: $imageNew, base_price: $_POST['base_price'], sale_price: $_POST['sale_price'], description: $_POST['description'], category_id: $_POST['category_id']);
            $i = 0;
            foreach ($_FILES['image_detail']['name'] as   $value) {
                $imageNew = $this->upload_image($value, $_FILES['image_detail']['tmp_name'][$i]);
                $image->add_image_post($new_post_id, $imageNew);
                $i++;
            }
            header("Location: " . _HOST . "/admin/post/list-post/");
        }
        $data['title'] = "Thêm sản phẩm";
        $data['page'] = 'post/add_post';
        $this->render($data);
    }
    public function list_post()
    {
        $data['title'] = "Danh sách bài viết";
        $post = $this->model('M_post');
        $data['post'] = $post->get_post_all();
        $data['page'] = 'post/list_post';
        $this->render($data);
    }
/*     public function update_post($id = null)
    {
        $data['title'] = "Update sản phẩm";
        $data['page'] = 'post/update_post';
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {            
                case 'edit-post':
                    if (!$_FILES['image_post']['name']) {
                        $path_image = $_POST['image_post'];
                    } else {
                        $path_image = $_FILES['image_post']['name'];
                        $proImage = "./uploads/" . basename($_FILES['image_post']['name']);
                        move_uploaded_file($_FILES['image_post']['tmp_name'], $proImage);
                    }
                    $this->edit_post(
                        $id,
                        $_POST['name'],
                        image_post: $path_image,
                        base_price: $_POST['base_price'],
                        sale_price: $_POST['sale_price'],
                        description: $_POST['description'],
                        category_id: $_POST['category_id']
                    );
                    header("Location: " . _HOST . "/admin/post/list-post");
                    break;

                case 'set-status-post':
                    $status = ($_GET['status'] == 1) ? 0 : 1;
                    $this->set_status_post($id, $status);
                    header("Location: " . _HOST . "/admin/post/list-post/");
                    break;

                default:

                    echo "Hành động không hợp lệ!";
                    break;
            }
        }
        $this->render($data);
    } */
/*     public function set_status_post($id, $status)
    {
        $post = $this->model('M_product');
        return $product->set_status_product($id, $status);
    }
    public function add_product_variant($product_id, $color, $size, $stock)
    {
        $product_variant = $this->model('M_product');
        $temp = $product_variant->check_exist_product_variant($product_id, $color, $size);
        // var_dump($temp);
        if ($temp) {
            $product_variant->update_product_variant_exist($temp['product_variant_id'],  $stock);
        } else {
            return $product_variant->add_product_variant($product_id, $color, $size, $stock);
        }
    }
    public function delete_product_variant($id)
    {
        $product_variant = $this->model('M_product');
        return $product_variant->delete_product_variant($id);
    } */
    public function edit_product($id, $name, $image_post, $base_price, $sale_price, $description, $category_id)
    {
        $product = $this->model('M_product');
        return $product->edit_product($id, $name, $image_post, $base_price, $sale_price, $description, $category_id);
    }
}
