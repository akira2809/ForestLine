<?php
class M_size
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function get_size_by_id($id)
    {
        $sql = "SELECT * FROM product_size WHERE size_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
}
