<?php
class M_size
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
}
