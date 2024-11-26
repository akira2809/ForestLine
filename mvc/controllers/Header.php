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
                <div>
                    Teen: ' . $item['name'] . '
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
if (isset($_GET['search'])) {
    // echo "<p> Oke con de </p>";
    $obj->search($_GET['search']);
}
