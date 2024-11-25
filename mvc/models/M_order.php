<?php
class M_order
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function add_order($user_id, $payment_method, $phone_number, $address, $voucher_id = null)
    {
        $sql = "INSERT INTO orders (user_id,payment_method,phone_number,address,voucher_id) values(?,?,?,?,?)";
        return $this->conn->insert($sql, [$user_id, $payment_method, $phone_number, $address, $voucher_id]);
    }
    public function add_order_detail($order_id, $product_variant_id, $quantity, $price)
    {
        $sql = "INSERT INTO order_detail (order_id,product_variant_id,quantity,price) values(?,?,?,?)";
        return $this->conn->insert($sql, [$order_id, $product_variant_id, $quantity, $price]);
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
        ";
        return $this->conn->getAll($sql);
    }
}
