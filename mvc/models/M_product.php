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
        $sql = "SELECT * FROM product INNER JOIN category ON category.category_id = product.category_id ORDER BY product.product_id DESC";
        return $this->conn->getAll($sql);
    }
    function get_product_all_client()
    {
        $sql = "SELECT * FROM product INNER JOIN category ON category.category_id = product.category_id  WHERE status = 1 ORDER BY product.product_id DESC LIMIT 8";
        return $this->conn->getAll($sql);
    }

    function get_product_by_count($number)
    {
        $sql = "SELECT * FROM product INNER JOIN category ON category.category_id = product.category_id ORDER BY product.product_id DESC LIMIT $number";
        return $this->conn->getAll($sql);
    }
    function get_product_one($id)
    {
        $sql = "SELECT * FROM product WHERE product_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
    function add_product($name, $main_image, $base_price, $sale_price, $description, $category_id, $collection_id)
    {
        $sql = "INSERT INTO product (name, main_image, base_price,sale_price, description, category_id, status , collection_id) values (?,?,?,?,?,?,1,?)";
        return $this->conn->insert($sql, [$name, $main_image, $base_price, $sale_price, $description, $category_id, $collection_id]);
    }
    function edit_product($id, $name, $main_image, $base_price, $sale_price, $description, $category_id, $collection_id)
    {
        $sql = "ALTER TABLE product MODIFY collection_id INT NULL;
        UPDATE product SET name = ?,main_image = ?, base_price = ?, sale_price = ?, description = ? ,status = 1, category_id = ?, collection_id = ? WHERE product_id = ?";
        return $this->conn->update($sql, [$name, $main_image, $base_price, $sale_price, $description, $category_id, $collection_id, $id]);
    }
    function set_status_product($id, $status)
    {
        $sql = "UPDATE product SET status = ? WHERE product_id = ?";
        return $this->conn->update($sql, [$status, $id]);
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
    function get_product_by_category_id($category_id)
    {
        $sql = "SELECT * FROM product WHERE category_id = ? ORDER BY view DESC LIMIT 4";
        return $this->conn->getAll($sql, [$category_id]);
    }
    function get_product_best_view($limit)
    {
        $sql = "SELECT * FROM product ORDER BY view DESC LIMIT ?";
        return $this->conn->getAll($sql, [$limit]);
    }

    function add_product_variant($product_id, $color, $size, $stock, $image_id)
    {
        $sql = "INSERT INTO product_variant (product_id, color_id, size_id, stock, image_id) VALUE (?,?,?,?,?)";
        return $this->conn->getAll($sql, [$product_id, $color, $size, $stock, $image_id]);
    }
    function delete_product_variant($id)
    {
        $sql = "DELETE FROM product_variant WHERE product_variant_id = ?";
        return $this->conn->getAll($sql, [$id]);
    }
    function check_exist_product_variant($product_id, $color_id, $size_id)
    {
        $sql = "SELECT * FROM product_variant WHERE product_id = ? AND color_id =? AND size_id =?";
        return $this->conn->getOne($sql, [$product_id, $color_id, $size_id]);
    }
    function update_view($product_id)
    {
        $sql = "UPDATE product SET view = view + 1 WHERE product_id = ?";
        return $this->conn->getOne($sql, [$product_id]);
    }
    function update_product_variant_exist($id, $stock)
    {

        $stock = (int)$stock;

        $sql = "UPDATE product_variant SET stock = stock + ? WHERE product_variant_id = ?";
        return $this->conn->update($sql, [$stock, $id]);
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

    function searchByName($name)
    {
        $sql = "SELECT product.product_id, name, base_price, main_image, product.category_id FROM product INNER JOIN category ON product.category_id = category.category_id WHERE name LIKE '%$name%' OR category LIKE '%$name%' ";
        return $this->conn->getAll($sql);
    }
}
