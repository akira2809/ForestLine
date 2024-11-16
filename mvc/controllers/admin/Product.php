<?php
class Product extends Controller
{
    public function index()
    {
        $cat = $this->model('M_category');
        $data['category'] = $cat->getCategoryAll();
        $pro = $this->model('M_product');
        $data['product'] = $pro->getProductAllWithNameCategory();
        $this->view('admin/block/header');
        $this->view('admin/page/V_product', $data);
    }
    public function addProduct()
    {
        // print_r($_POST);
        $imageProduct = "uploads/" . basename($_FILES['imageProduct']['name']);
        if (move_uploaded_file($_FILES['imageProduct']['tmp_name'], $imageProduct)) {
            $pro = $this->model('M_product');
            $pro->addProduct($_POST['nameProduct'], $_POST['priceProduct'], $imageProduct, $_POST['categoryProduct']);
            header("location: ../../admin/product");
            $this->index();
        }
    }
}
