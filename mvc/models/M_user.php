<?php
class M_user
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function register($user_name, $email, $password)
    {
        $sql = "INSERT INTO user (user_name,email,password) VALUES (?,?,?)";
        return $this->conn->insert($sql, [$user_name, $email, $password]);
    }
    public function active_account($user_id)
    {
        $sql = "UPDATE user SET active = 1 WHERE user_id = ?";
        return $this->conn->update($sql, [$user_id]);
    }
    public function login($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = ? AND password = ? AND active = 1";
        return $this->conn->getOne($sql, [$email, $password]);
    }
}
