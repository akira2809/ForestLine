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
}
