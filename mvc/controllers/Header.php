<?php

require_once  __DIR__ .  '/../config/config.php';
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
                <a class="nav-link" href="' . _HOST . 'detail/' . $item['product_id'] . '">
                <div class="row">
                      <div class="col-lg-4">
                        <img class="w-100" src="' . _HOST . 'uploads/' . $item['main_image'] . '"/>
                    </div>
                    <div class="col-lg-8">
                    <p style="color: black">' . $item['name'] . '</p>
                    </div>
                    </div>
                    </a>
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
if (isset($_POST['search'])) {
    $obj->search($_POST['search']);
}
