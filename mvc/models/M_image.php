<?php
class M_image
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function add_image_product($product_id, $image)
    {
        $sql = "INSERT INTO image (product_id,image) VALUES (?,?)";
        return $this->conn->insert($sql, [$product_id, $image]);
    }
}
