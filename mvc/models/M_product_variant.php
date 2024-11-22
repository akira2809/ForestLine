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
}
