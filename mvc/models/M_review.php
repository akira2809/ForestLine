<?php
class M_review
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function get_review_all()
    {
        $sql = "SELECT * FROM review WHERE status = 1";
        return  $this->conn->getAll($sql);
    }
    public function get_review_all_admin()
    {
        $sql = "SELECT * FROM review ORDER BY review_id DESC";
        return  $this->conn->getAll($sql);
    }
    function get_review_one($id)
    {
        $sql = "SELECT * FROM review WHERE review_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
    function add_review($order_detail_id, $content, $rating, $product_id)
    {
        $user_id = $_SESSION['user_login']['user_id'];
        $sql = "INSERT INTO review (order_detail_id,content, rating, user_id,product_id) values (?,?,?,?,?)";
        return $this->conn->insert($sql, [$order_detail_id, $content, $rating, $user_id, $product_id]);
    }
    function edit_review($review_id, $content, $rating, $date, $image)
    {
        $sql = "UPDATE review SET content = ?,rating = ?, date = ?, image = ? WHERE review_id = ?";
        return $this->conn->update($sql, [$review_id, $content, $rating, $date, $image]);
    }
    function set_status_review($review_id, $status)
    {
        $sql = "UPDATE review SET status = ? WHERE review_id = ?";
        return $this->conn->update($sql, [$status, $review_id]);
    }
    function get_review_variant_by_id($id)
    {
        $sql = "SELECT * FROM review         
        WHERE review_id = ? ";
        return $this->conn->getAll($sql, [$id]);
    }
    function add_image_review($review_id, $review_image)
    {
        $sql = "INSERT INTO review_image (review_id,review_image) VALUES (?,?)";
        return $this->conn->getAll($sql, [$review_id, $review_image]);
    }
    function set_order_review($order_id)
    {
        $sql = "UPDATE order_detail SET review = 1 WHERE order_detail_id = ?";
        return $this->conn->update($sql, [$order_id]);
    }
    public function get_review_by_product_id($id)
    {
        $sql = "SELECT * FROM review
        LEFT JOIN review_image ON review.review_id = review_image.review_id 
        INNER JOIN user ON review.user_id = user.user_id
        WHERE review.product_id = ?";
        return $this->conn->getAll($sql, [$id]);
    }
}
//
