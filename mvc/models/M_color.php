<?php
class M_color
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function get_color_by_id($id)
    {
        $sql = "SELECT * FROM product_color WHERE color_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
}
