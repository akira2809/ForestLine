<?php
class M_product
{
    private $conn;

    function __construct(DB $conn)
    {
        $this->conn = $conn;
    }

    function get_product_all()
    {
        $sql = "SELECT * FROM product";
        return $this->conn->getAll($sql);
    }
    function get_product_one($id)
    {
        $sql = "SELECT * FROM product WHERE product_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
    function edit_product($id, $name, $main_image, $base_price, $sale_price, $description, $category_id)
    {
        $sql = "UPDATE product SET name = ?,main_image = ?, base_price = ?, sale_price = ?, description = ? ,status = 1, category_id = ?, collection_id = null WHERE product_id = ?";
        return $this->conn->update($sql, [$name, $main_image, $base_price, $sale_price, $description, $category_id, $id]);
    }
    function get_product_variant_by_id($id)
    {
        $sql = "SELECT * FROM product_variant 
        INNER JOIN product_color ON product_color.color_id = product_variant.color_id 
        INNER JOIN product ON product.product_id = product_variant.product_id 
        INNER JOIN product_size ON product_size.size_id = product_variant.size_id 
        WHERE product_variant.product_id = ? ";
        return $this->conn->getAll($sql, [$id]);
    }
    function add_product_variant($product_id, $color, $size, $stock)
    {
        $sql = "INSERT INTO product_variant (product_id, color_id, size_id, stock) VALUE (?,?,?,?)";
        return $this->conn->getAll($sql, [$product_id, $color, $size, $stock]);
    }
    function delete_product_variant($id)
    {
        $sql = "DELETE FROM product_variant WHERE product_variant_id = ?";
        return $this->conn->getAll($sql, [$id]);
    }
    function get_size_all()
    {
        $sql = "SELECT * FROM product_size";
        return $this->conn->getAll($sql);
    }
    function get_color_all()
    {
        $sql = "SELECT * FROM product_color";
        return $this->conn->getAll($sql);
    }
}
