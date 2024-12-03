<?php
class M_collection
{
    private $conn;

    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }

    public function get_all_collections()
    {
        $sql = "SELECT collection_id, title, image, slogan, status FROM collection";
        return $this->conn->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_one_collection($id)
    {
        $sql = "SELECT * FROM collection WHERE collection_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }

    public function add_collection($title, $slogan, $image, $status)
    {
        $sql = "INSERT INTO collection (title, slogan, image, status) VALUES (?, ?, ?, ?)";
        return $this->conn->insert($sql, [$title, $slogan, $image, $status]);
    }




    public function set_status_collection($id, $status)
    {
        $sql = "UPDATE collection SET status = ? WHERE collection_id = ?";
        return $this->conn->update($sql, [$status, $id]);
    }

    public function update_collection($id, $title, $slogan, $status, $image)
    {
        $sql = "UPDATE collection SET title = ?, slogan = ?, status = ?, image = ? WHERE collection_id = ?";
        return $this->conn->update($sql, [$title, $slogan, $status, $image, $id]);
    }
    public function get_products_by_collection($collection_id)
    {
        $sql = "SELECT product_id FROM product WHERE collection_id = ?";
        $result = $this->conn->query($sql, [$collection_id])->fetchAll(PDO::FETCH_COLUMN);
        return $result ?: [];
    }
    public function update_product_collection($collection_id, $product_ids)
    {
        // Đặt tất cả sản phẩm liên quan về null trước
        $this->conn->update("UPDATE product SET collection_id = NULL WHERE collection_id = ?", [$collection_id]);

        // Gán lại các sản phẩm được chọn
        foreach ($product_ids as $product_id) {
            $this->conn->update("UPDATE product SET collection_id = ? WHERE product_id = ?", [$collection_id, $product_id]);
        }
    }





}
