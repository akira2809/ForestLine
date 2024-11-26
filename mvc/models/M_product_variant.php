<?php
class M_product_variant
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function get_product_variant_by_product_id($id)
    {
        $sql = "SELECT * FROM product_variant WHERE product_id = ?";
        return  $this->conn->getAll($sql, [$id]);
    }
    public function find_product_variant($product_id, $color_id, $size_id)
    {
        $sql = "SELECT * FROM product_variant WHERE product_id = ? AND color_id = ? AND size_id = ?";
        return  $this->conn->getOne($sql, [$product_id, $color_id, $size_id]);
    }
    function get_product_variant_by_id($id)
    {
        $sql = "SELECT * FROM product_variant 
        INNER JOIN product_color ON product_color.color_id = product_variant.color_id 
        INNER JOIN product ON product.product_id = product_variant.product_id 
        INNER JOIN product_size ON product_size.size_id = product_variant.size_id 
        WHERE product_variant.product_variant_id = ? ";
        return $this->conn->getOne($sql, [$id]);
    }
    function check_cart_exist($id)
    {
        $sql = "SELECT * FROM product_variant WHERE product_variant_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
}
