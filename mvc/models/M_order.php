<?php
class M_order
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function add_order($user_id, $user_name, $payment_method, $phone_number, $address, $voucher_id = null)
    {
        $sql = "INSERT INTO orders (user_id,user_name,payment_method,phone_number,address,voucher_id) values(?,?,?,?,?,?)";
        return $this->conn->insert($sql, [$user_id, $user_name, $payment_method, $phone_number, $address, $voucher_id]);
    }
    public function add_order_detail($order_id, $product_variant_id, $quantity, $price)
    {
        $sql = "INSERT INTO order_detail (order_id,product_variant_id,quantity,price) values(?,?,?,?)";
        return $this->conn->insert($sql, [$order_id, $product_variant_id, $quantity, $price]);
    }
    public function reduce_stock_by_product_variant_id($product_variant_id, $quantity)
    {
        $sql = "UPDATE product_variant SET stock = stock - ? WHERE product_variant_id = ?";
        return $this->conn->insert($sql, [$quantity, $product_variant_id]);
    }
    public function get_order_all()
    {
        $sql = "SELECT orders.order_id,orders.user_id,orders.date,orders.payment_method,orders.status,
        orders.user_name,orders.phone_number, orders.address, orders.voucher_id,product.name,
        product_color.color_name, product_size.size_name,order_detail.quantity,order_detail.price FROM orders 
        INNER JOIN order_detail ON orders.order_id = order_detail.order_id 
        INNER JOIN product_variant ON product_variant.product_variant_id = order_detail.product_variant_id
        INNER JOIN product ON product_variant.product_id = product.product_id
        INNER JOIN product_color ON product_variant.color_id = product_color.color_id
        INNER JOIN product_size ON product_variant.size_id = product_size.size_id
        ORDER BY orders.order_id DESC";
        return $this->conn->getAll($sql);
    }
    public function get_order_by_user_id($user_id)
    {
        $sql = "SELECT orders.order_id,orders.user_id,orders.date,orders.payment_method,orders.status,order_detail.order_detail_id,
        orders.user_name, orders.total_money, orders.phone_number, orders.address, orders.voucher_id,product.name,product.product_id,  
        product_color.color_name, product_size.size_name,order_detail.quantity,order_detail.price, product.main_image FROM orders 
        INNER JOIN order_detail ON orders.order_id = order_detail.order_id 
        INNER JOIN product_variant ON product_variant.product_variant_id = order_detail.product_variant_id
        INNER JOIN product ON product_variant.product_id = product.product_id
        INNER JOIN product_color ON product_variant.color_id = product_color.color_id
        INNER JOIN product_size ON product_variant.size_id = product_size.size_id
        WHERE orders.user_id = ? ORDER BY orders.order_id DESC
        ";
        return $this->conn->getAll($sql, [$user_id]);
    }
    function set_status($order_id, $status)
    {
        $sql = "UPDATE orders SET status = ? WHERE order_id = ?";
        return $this->conn->query($sql, [$status, $order_id]);
    }
}
