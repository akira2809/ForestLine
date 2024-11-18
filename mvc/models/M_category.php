<?php
class M_category
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function get_category_all()
    {
        $sql = "SELECT * FROM category";
        return $this->conn->getAll($sql);
    }
    public function add_category($nameCategory)
    {
        $sql = "INSERT INTO category(category) VALUES (?)";
        return $this->conn->insert($sql, [$nameCategory]);
    }
    public function update_category($id, $category)
    {
        $sql = "UPDATE category SET category = ? WHERE category_id = ?";
        return $this->conn->delete($sql, [$category, $id]);
    }
    public function delete_category($id)
    {
        $sql = "DELETE FROM category WHERE category_id = ?";
        return $this->conn->delete($sql, [$id]);
    }
}
