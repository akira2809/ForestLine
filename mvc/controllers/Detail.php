<?php
class Detail extends Controller
{
    public $model_product;
    public $model_product_variant;
    public $model_image;
    public $model_color;
    public $model_size;
    public function __construct()
    {
        $this->model_product = $this->model('M_product');
        $this->model_image = $this->model('M_image');
        $this->model_product_variant = $this->model('M_product_variant');
        $this->model_color = $this->model('M_color');
        $this->model_size = $this->model('M_size');
    }
    public function index($id)
    {
        $this->model_product->update_view($id);
        $data['product'] = $this->model_product->get_product_one($id);
        $data['image'] = $this->model_image->get_image_by_product_id($id);
        $data['color'] = $this->get_color_by_product_id($id);
        $data['size'] = $this->get_size_by_product_id($id);
        $data['data'] = $this->get_product_variant_by_product_id($id);
        $data['list_product_in_category'] = $this->model_product->get_product_by_category_id($data['product']['category_id']);
        if (count($data['list_product_in_category']) <= 1) {
            $data['list_product_in_category'] = $this->model_product->get_product_best_view(4);
        }
        $data['page'] = 'detail';
        $this->view('layout/layout_client', $data);
    }
    public function get_product_variant_by_product_id($product_id)
    {
        return $this->model_product_variant->get_product_variant_by_product_id($product_id);
    }
    public function get_color_by_product_id($product_id)
    {
        $product = $this->get_product_variant_by_product_id($product_id);
        $list_color = array_unique(array_column($product, 'color_id'));
        foreach ($list_color as $value) {

            $color[] =  $this->model_color->get_color_by_id($value);
        }
        return $color;
    }
    public function get_size_by_product_id($product_id)
    {
        $product = $this->get_product_variant_by_product_id($product_id);
        $list_size = array_unique(array_column($product, 'size_id'));
        foreach ($list_size as $value) {

            $size[] =  $this->model_size->get_size_by_id($value);
        }
        return $size;
    }
}
