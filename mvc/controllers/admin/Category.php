<?php
class Category extends Controller
{
    public function __construct()
    {
        $cat = $this->model('M_category');
        $data['category'] = $cat->getCategoryAll();
        $this->view('admin/block/header');
        $this->view('admin/page/V_category', $data);
    }
    // public function addCategory()
    // {
    //     $cat = $this->model('M_category');
    //     if ($cat->addCategory($_POST['nameCategory'])) {
    //         $data['result'] = "Bạn đã thêm danh mục thành công";
    //     } else {
    //         $data['result'] = "Đã có lỗi xảy ra";
    //     }
    //     header("Location: ../../admin/category");
    //     $this->index();
    // }
    // public function deleteCategory($idCategory = null)
    // {
    //     $this->view('admin/block/header');
    //     $cat = $this->model('M_category');
    //     $cat->deleteCategory($idCategory);
    //     $data['category'] = $cat->getCategoryAll();
    //     header("Location: ../../../admin/category");
    //     $this->index();
    // }
}
