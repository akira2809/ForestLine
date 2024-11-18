<?php
class Category extends Controller
{
    public function render($data)
    {
        $this->view('layout/layout_admin', $data);
    }
    public function index()
    {
        $this->list_category();
    }

    public function add_category()
    {
        $category = $this->model('M_category');
        $category->add_category($_POST['category']);
        header("Location: " . _HOST . "admin/category");
    }
    public function list_category()
    {
        $category = $this->model('M_category');
        $data['category'] = $category->get_category_all();
        $data['page'] = 'category/list_category';
        $data['title'] = 'Danh mục';
        $this->render($data);
    }
    public function update_category()
    {
        $category = $this->model('M_category');
        $category->update_category($_POST['category_id'], $_POST['category']);
        header("Location: " . _HOST . "admin/category");
    }
    public function delete_category($id = null)
    {
        $category = $this->model('M_category');
        $category->delete_category($id);
        header("Location: " . _HOST . "admin/category");
    }
}
