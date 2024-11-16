<?php
class M_product
{
    private $conn;

    function __construct(DB $conn)
    {
        $this->conn = $conn;
    }

    function getProductAll()
    {
        $sql = "SELECT * FROM product";
        return $this->conn->getAll($sql);
    }
    function getProductAllWithNameCategory()
    {
        $sql = "SELECT * FROM category INNER JOIN product ON category.id_cat = product.id_cat";
        return $this->conn->getAll($sql);
    }
    function addProduct($name, $price, $image, $category)
    {
        $sql = "INSERT INTO product(name_pro,price_pro,image_pro,id_cat) VALUES ('$name','$price','$image','$category')";
        return $this->conn->insert($sql);
    }
}
