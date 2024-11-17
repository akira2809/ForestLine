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
    public function addCategory($nameCategory)
    {
        $sql = "INSERT INTO category(name_cat) VALUES ('$nameCategory')";
        return $this->conn->insert($sql);
    }
    public function deleteCategory($idCategory)
    {
        $sql = "DELETE FROM category WHERE id_cat = '$idCategory'";
        return $this->conn->delete($sql);
    }
}
