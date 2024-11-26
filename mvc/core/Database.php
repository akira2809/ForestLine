<?php
class DB
{
    private $dsn = _DNS;
    private $username = _USER_NAME;
    private $password =  _PASSWORD;
    private $conn;

    function __construct()
    {
        try {
            $this->conn = new PDO($this->dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //return $this->conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function query($sql, $params = [])
    {
        $stmt = $this->conn->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    function getAll($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getOne($sql, $params = [])
    {
        $stmt = $this->query($sql, $params);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insert($sql, $params = [])
    {
        $this->query($sql, $params);
        return $this->conn->lastInsertId();
    }

    function update($sql, $params = [])
    {
        $this->query($sql, $params);
    }

    function delete($sql, $params = [])
    {
        $this->query($sql, params: $params);
    }
}
