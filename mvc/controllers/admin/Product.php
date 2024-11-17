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

    public function add_product()
    {
        $product = $this->model('M_product');
        $data['product'] = $product->get_product_all();
        $data['page'] = 'product/add_product';
        $this->render($data);
    }
    public function list_product()
    {
        $product = $this->model('M_product');
        $data['product'] = $product->get_product_all();
        $data['page'] = 'product/list_product';
        $this->render($data);
    }
    public function update_product($id = null)
    {
        $product_variant = $this->model('M_product');
        $category = $this->model('M_category');
        $data['title'] = "Update sản phẩm";
        $data['category'] = $category->get_category_all();
        $data['size'] = $product_variant->get_size_all();
        $data['color'] = $product_variant->get_color_all();
        $data['product'] = $product_variant->get_product_one($id);
        $data['list_product_variant'] = $product_variant->get_product_variant_by_id($id);
        $data['page'] = 'product/update_product';
        if (isset($_GET['action']) && $_GET['action'] == 'add-product-variant') {
            $this->add_product_variant($id, $_POST['color'], $_POST['size'], $_POST['stock']);
            header("Location: " . _HOST . "/admin/product/update_product/" . $id);
        } else if (isset($_GET['action']) && $_GET['action'] == 'delete-product-variant') {
            $this->delete_product_variant($_GET['id']);
            header("Location: " . _HOST . "/admin/product/update_product/" . $id);
        } else if (isset($_GET['action']) && $_GET['action'] == 'edit-product') {

            $this->edit_product($id, $_POST['name'], main_image: $_FILES['main_image']['name'], base_price: $_POST['base_price'], sale_price: $_POST['sale_price'], description: $_POST['description'], category_id: $_POST['category_id']);
            header("Location: " . _HOST . "/admin/product/update_product/" . $id);
        }
        $this->render($data);
    }
    public function add_product_variant($product_id, $color, $size, $stock)
    {
        $product_variant = $this->model('M_product');
        return $product_variant->add_product_variant($product_id, $color, $size, $stock);
    }
    public function delete_product_variant($id)
    {
        $product_variant = $this->model('M_product');
        return $product_variant->delete_product_variant($id);
    }
    public function edit_product($id, $name, $main_image, $base_price, $sale_price, $description, $category_id)
    {
        $product = $this->model('M_product');
        return $product->edit_product($id, $name, $main_image, $base_price, $sale_price, $description, $category_id);
    }
}
