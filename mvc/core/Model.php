<?php

class Model
{
    public $db;
    protected function connectDB()
    {
        $this->db = new DB;
    }
}
