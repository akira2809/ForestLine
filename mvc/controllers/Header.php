<?php
require_once __DIR__ . '/../config/config.php';
require_once  __DIR__ .  '/../core/Database.php';
require_once  __DIR__ . '/../models/M_product.php';
class Header
{
    public $model;
    public function __construct()
    {
        $this->model = new M_product(new DB());
        // var_dump($this->model);
    }
    public function search($name)
    {

        $result = $this->model->searchByName($name);
        // var_dump($result);
        if (!empty($result)) {
            foreach ($result as $item) {
                echo '
                <div class="d-flex">
                    <div style="50px">
                        <img class="w-50" src="' . _HOST . 'uploads/' . $item['main_image'] . '" alt="">
                    </div>
                    Name: ' . $item['name'] . '
                </div>
                ';
            }
        } else {
            echo '
            <div>
                <p>Không có sản phẩm trên</p>    
            </div>
            ';
        }
    }
}
$obj = new Header();
if (isset($_POST)) {

    $obj->search($_POST['search']);
}
