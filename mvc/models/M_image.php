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
    public function get_image_by_product_id($product_id)
    {
        $sql = "SELECT * FROM image WHERE product_id = ?";
        return $this->conn->getAll($sql, [$product_id]);
    }
    
}
