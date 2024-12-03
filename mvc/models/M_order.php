<?php
class M_order
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function add_order($user_id, $user_name, $phone_number, $address, $total_money, $voucher_id = null)
    {
        $sql = "INSERT INTO orders (user_id,user_name,phone_number,address,total_money,voucher_id) values(?,?,?,?,?,?)";
        return $this->conn->insert($sql, [$user_id, $user_name, $phone_number, $address, $total_money, $voucher_id]);
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
        $sql = "SELECT orders.order_id,orders.user_id,orders.date,orders.total_money,payment_method.payment_method,orders.status,voucher.description as voucher_description,
        orders.user_name,orders.phone_number, orders.address, orders.voucher_id,product.name, payment_method.status as payment_method_status,
        product_color.color_name, product_size.size_name,order_detail.quantity,order_detail.price FROM orders 
        INNER JOIN order_detail ON orders.order_id = order_detail.order_id 
        INNER JOIN product_variant ON product_variant.product_variant_id = order_detail.product_variant_id
        INNER JOIN product ON product_variant.product_id = product.product_id
        INNER JOIN payment_method ON payment_method.order_id = orders.order_id
        INNER JOIN product_color ON product_variant.color_id = product_color.color_id
        INNER JOIN product_size ON product_variant.size_id = product_size.size_id
        LEFT JOIN voucher ON voucher.voucher_id = orders.voucher_id
        ORDER BY orders.order_id DESC";
        return $this->conn->getAll($sql);
    }
    public function get_order_by_user_id($user_id)
    {
        $sql = "SELECT orders.order_id,orders.user_id,orders.date,orders.status,image.image,
        orders.user_name,orders.phone_number, orders.address, orders.voucher_id,product.name,
        product_color.color_name, product_size.size_name,order_detail.quantity,order_detail.price,orders.total_money FROM orders 
        INNER JOIN order_detail ON orders.order_id = order_detail.order_id 
        INNER JOIN product_variant ON product_variant.product_variant_id = order_detail.product_variant_id
        INNER JOIN product ON product_variant.product_id = product.product_id
        INNER JOIN product_color ON product_variant.color_id = product_color.color_id
        INNER JOIN product_size ON product_variant.size_id = product_size.size_id
        INNER JOIN image ON image.image_id = product_variant.image_id 
        INNER JOIN payment_method ON payment_method.order_id = orders.order_id
        WHERE orders.user_id = ? ORDER BY orders.order_id DESC
        ";
        return $this->conn->getAll($sql, [$user_id]);
    }
    function set_status($order_id, $status)
    {
        $sql = "UPDATE orders SET status = ? WHERE order_id = ?";
        return $this->conn->query($sql, [$status, $order_id]);
    }
    function cancel_order($order_id)
    {
        $sql = "UPDATE orders SET status = 'Canceled' WHERE order_id = ?";
        return $this->conn->query($sql, [$order_id]);
    }
    function update_payment_status($order_id, $status)
    {
        $date = date('Y-m-d H:i:s');
        $sql = "UPDATE payment_method SET status = ? , update_at = ? WHERE order_id = ?";
        return $this->conn->update($sql, [$status, $date, $order_id]);
    }
    function add_payment_method($order_id, $payment)
    {
        $sql = "INSERT INTO payment_method (order_id, payment_method) VALUES (?, ?)";
        return $this->conn->update($sql, [$order_id, $payment]);
    }
}
