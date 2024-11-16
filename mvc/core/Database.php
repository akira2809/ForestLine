<?php
class DB
{
    private $dsn = 'mysql:host=localhost;dbname=myShop';
    private $username = 'root';
    private $password = '';
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

    function getAll($sql)
    {
        $stmt = $this->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getOne($sql)
    {
        $stmt = $this->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insert($sql)
    {
        $this->query($sql);
        return $this->conn->lastInsertId();
    }

    function update($sql)
    {
        $this->query($sql);
    }

    function delete($sql)
    {
        $this->query($sql);
    }
}
