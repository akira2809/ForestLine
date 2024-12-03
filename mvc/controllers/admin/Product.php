<?php
class Product extends Controller
{
    public function render($data)
    {
        $this->view('layout/layout_admin', $data);
    }
    public function index()
    {
        $data['page'] = 'product/list_product';
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
    public function add_product()
    {
        $product = $this->model('M_product');
        $category = $this->model('M_category');
        $collection = $this->model('M_collection');
        $data['collection'] = $collection->get_all_collections();
        $data['category'] = $category->get_category_all();
        if (isset($_GET['action']) && $_GET['action'] == 'add-product') {
            $collection_id = $_POST['collection_id'] ?? null;
            $image = $this->model('M_image');
            $imageNew = $this->upload_image($_FILES['main_image']['name'], $_FILES['main_image']['tmp_name']);
            $new_product_id = $product->add_product($_POST['name'], $imageNew, $_POST['base_price'],  $_POST['sale_price'],  $_POST['description'],  $_POST['category_id'], $collection_id);
            $i = 0;
            foreach ($_FILES['image_detail']['name'] as   $value) {
                $imageNew = $this->upload_image($value, $_FILES['image_detail']['tmp_name'][$i]);
                $image->add_image_product($new_product_id, $imageNew);
                $i++;
            }
            header("Location: " . _HOST . "/admin/product/list-product/");
        }
        $data['title'] = "Thêm sản phẩm";
        $data['page'] = 'product/add_product';
        $this->render($data);
    }
    public function list_product()
    {
        $data['title'] = "Danh sách sản phẩm";
        $product = $this->model('M_product');
        $data['product'] = $product->get_product_all();
        $data['page'] = 'product/list_product';
        $this->render($data);
    }
    public function update_product($id = null)
    {
        $product_variant = $this->model('M_product');
        $category = $this->model('M_category');


        $image = $this->model('M_image');


        $data['title'] = "Update sản phẩm";
        $data['category'] = $category->get_category_all();
        $data['collection'] = $collection->get_all_collections();
        $data['size'] = $product_variant->get_size_all();
        $data['color'] = $product_variant->get_color_all();
        $data['product'] = $product_variant->get_product_one($id);
        $data['list_product_variant'] = $product_variant->get_product_variant_by_id($id);

        $data['image_detail'] = $image->get_image_by_product_id($id);

        $data['page'] = 'product/update_product';
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'add-product-variant':

                    // var_dump($_POST);
                    $this->add_product_variant($id, $_POST['color'],  $_POST['size'], $_POST['stock'], $_POST['image_selected']);

                    header("Location: " . _HOST . "/admin/product/update_product/" . $id);
                    break;

                case 'delete-product-variant':
                    $this->delete_product_variant($_GET['id']);
                    header("Location: " . _HOST . "/admin/product/update_product/" . $id);
                    break;

                case 'edit-product':
                    if (!$_FILES['main_image']['name']) {
                        $path_image = $_POST['main_image'];
                    } else {
                        $path_image = $_FILES['main_image']['name'];
                        $proImage = "./uploads/" . basename($_FILES['main_image']['name']);
                        move_uploaded_file($_FILES['main_image']['tmp_name'], $proImage);
                    }
                    $collection_id = $_POST['collection_id'] ?? null;
                    $this->edit_product(
                        $id,
                        $_POST['name'],
                        main_image: $path_image,
                        base_price: $_POST['base_price'],
                        sale_price: $_POST['sale_price'],
                        description: $_POST['description'],
                        category_id: $_POST['category_id'],
                        collection_id: $collection_id,
                    );

                    // var_dump($_FILES['image_detail']['name']);
                    if (isset($_FILES['image_detail'])) {
                        $i = 0;
                        $image = $this->model('M_image');
                        foreach ($_FILES['image_detail']['name'] as   $value) {
                            $imageNew = $this->upload_image($value, $_FILES['image_detail']['tmp_name'][$i]);
                            $image->add_image_product($id, $imageNew);
                            $i++;
                        }
                    }

                    header("Location: " . _HOST . "/admin/product/list-product");
                    break;

                case 'set-status-product':
                    $status = ($_GET['status'] == 1) ? 0 : 1;
                    $this->set_status_product($id, $status);
                    header("Location: " . _HOST . "/admin/product/list-product/");
                    break;

                default:

                    echo "Hành động không hợp lệ!";
                    break;
            }
        }
        $this->render($data);
    }
    public function set_status_product($id, $status)
    {
        $product = $this->model('M_product');
        return $product->set_status_product($id, $status);
    }

    public function add_product_variant($product_id, $color, $size, $stock, $image_id)
    {
        $product_variant = $this->model('M_product');
        $temp = $product_variant->check_exist_product_variant($product_id, $color, $size, $image_id);

        // var_dump($temp);
        if ($temp) {
            $product_variant->update_product_variant_exist($temp['product_variant_id'],  $stock);
        } else {

            return $product_variant->add_product_variant($product_id, $color, $size, $stock, $image_id);

        }
    }
    public function delete_product_variant($id)
    {
        $product_variant = $this->model('M_product');
        return $product_variant->delete_product_variant($id);
    }
    public function edit_product($id, $name, $main_image, $base_price, $sale_price, $description, $category_id, $collection_id)
    {
        $product = $this->model('M_product');
        return $product->edit_product($id, $name, $main_image, $base_price, $sale_price, $description, $category_id, $collection_id);
    }
}
