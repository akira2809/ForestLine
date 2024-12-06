<?php
class M_voucher
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function check_voucher($voucher)
    {
        $sql = "SELECT * FROM voucher WHERE code = ?";
        return $this->conn->getOne($sql, [$voucher]);
    }
    public function update_usage_limit_by_voucher_id($voucher_id)
    {
        $sql = "UPDATE voucher SET usage_limit = usage_limit - 1 WHERE voucher_id = ?";
        return $this->conn->getOne($sql, [$voucher_id]);
    }
    public function get_vouchers()
    {
        $sql = "SELECT * FROM voucher";
        return $this->conn->getAll($sql);
    }
    public function get_voucher($id)
    {
        $sql = "SELECT * FROM voucher WHERE voucher_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
    public function add_voucher($code, $day_start, $day_end, $value, $count, $description, $min_value,)
    {
        $sql = "INSERT INTO voucher (code, day_start, day_end,value, usage_limit,description,min_order_value,status) VALUES (?,?,?,?,?,?,?,1)";
        return $this->conn->getAll($sql, [$code, $day_start, $day_end, $value, $count, $description, $min_value]);
    }
    public function update_voucher($code, $day_start, $day_end, $value, $count, $description, $min_value, $id)
    {
        $sql = "UPDATE voucher SET code = ?, day_start = ?, day_end = ?, value = ? , usage_limit = ?, description = ?, min_order_value = ? WHERE voucher_id = ?";
        return $this->conn->update($sql, [$code, $day_start, $day_end, $value, $count, $description, $min_value, $id]);
    }
    public function update_status_voucher($id, $status)
    {
        $sql = "UPDATE voucher SET status = ? WHERE voucher_id = ?";
        return $this->conn->getAll($sql, [$status, $id]);
    }
}
