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
    function add_product($name, $main_image, $base_price, $sale_price, $description, $category_id)
    {
        $sql = "INSERT INTO product (name, main_image, base_price,sale_price, description, category_id, status , collection_id) values (?,?,?,?,?,?,1,null)";
        return $this->conn->insert($sql, [$name, $main_image, $base_price, $sale_price, $description, $category_id]);
    }
    function edit_product($id, $name, $main_image, $base_price, $sale_price, $description, $category_id)
    {
        $sql = "UPDATE product SET name = ?,main_image = ?, base_price = ?, sale_price = ?, description = ? ,status = 1, category_id = ?, collection_id = null WHERE product_id = ?";
        return $this->conn->update($sql, [$name, $main_image, $base_price, $sale_price, $description, $category_id, $id]);
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
    function check_exist_product_variant($product_id, $color_id, $size_id)
    {
        $sql = "SELECT * FROM product_variant WHERE product_id = ? AND color_id =? AND size_id =?";
        return $this->conn->getOne($sql, [$product_id, $color_id, $size_id]);
    }
    function update_product_variant_exist($id, $stock)
    {
        $stock = (int) $stock;
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
    function search_product($keyword, $category = '', $minPrice = null, $maxPrice = null)
    {
        try {
            $params = [];
            $conditions = [];

            // Base query với các trường cần thiết
            $sql = "SELECT DISTINCT
                        p.product_id,
                        p.name,
                        p.main_image,
                        p.sale_price,
                        c.category_name,
                        c.category_id 
                    FROM {$this->table} p
                    INNER JOIN category c ON c.category_id = p.category_id
                    LEFT JOIN product_variant pv ON pv.product_id = p.product_id
                    WHERE p.status = 1 ";

            // Thêm điều kiện tìm kiếm theo keyword
            $conditions[] = "(p.name LIKE ? OR c.category_name LIKE ? OR p.description LIKE ?)";
            $params = array_merge($params, ["%$keyword%", "%$keyword%", "%$keyword%"]);

            // Thêm điều kiện lọc theo danh mục
            if (!empty($category)) {
                $conditions[] = "c.category_id = ?";
                $params[] = $category;
            }

            // Thêm điều kiện lọc theo giá
            if ($minPrice !== null) {
                $conditions[] = "p.sale_price >= ?";
                $params[] = $minPrice;
            }
            if ($maxPrice !== null) {
                $conditions[] = "p.sale_price <= ?";
                $params[] = $maxPrice;
            }

            // Thêm điều kiện kiểm tra tồn kho
            $conditions[] = "(pv.stock > 0 OR pv.stock IS NULL)";

            // Ghép các điều kiện
            if (!empty($conditions)) {
                $sql .= " AND " . implode(" AND ", $conditions);
            }

            // Thêm sắp xếp và giới hạn
            $sql .= " ORDER BY p.product_id DESC LIMIT 10";

            return $this->conn->getAll($sql, $params);

        } catch (Exception $e) {
            error_log("Search product error: " . $e->getMessage());
            throw $e;
        }
    }

}
