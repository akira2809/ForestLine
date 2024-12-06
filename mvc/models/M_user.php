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

    public function set_password($password, $email)
    {
        $sql = "UPDATE user SET password = ? WHERE email = ?";
        return $this->conn->update($sql, [$password, $email]);
    }

    public function login($email, $password)
    {
        $sql = "SELECT * FROM user WHERE email = ? AND password = ? AND active = 1";
        return $this->conn->getOne($sql, [$email, $password]);
    }
    public function add_user($name, $email, $password, $role)
    {
        $sql = "INSERT INTO user (user_name,email, password,role,active) VALUES (?,?,?,1)";
        return $this->conn->insert($sql, [$name, $email, $password, $role]);
    }
}
