<?php
class M_post
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function get_post_all()
    {
        $sql = "SELECT * FROM post";
        return  $this->conn->getAll($sql);
    }
    function get_post_one($id)
    {
        $sql = "SELECT * FROM post WHERE post_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
    function add_post($name_post, $content, $image_post, $name_2, $name_3, $about_2, $about_3)
    {
        $sql = "INSERT INTO post (name_post, content, image_post, name_2, name_3, about_2, about_3) values (?,?,?,?,?,?,?)";
        return $this->conn->insert($sql, [$name_post, $content, $image_post, $name_2, $name_3, $about_2, $about_3]);
    }
    function edit_post($id, $name_post, $content, $image_post, $name_2, $name_3, $about_2, $about_3)
    {
        $sql = "UPDATE post SET name_post = ?,content = ?, name_2 = ?, name_3 = ?, about_2 = ? ,about_3 = ? WHERE id = ?";
        return $this->conn->update($sql, [$name_post, $content, $image_post, $name_2, $name_3, $about_2, $about_3, $id]);
    }
    function set_status_post($id, $status)
    {
        $sql = "UPDATE post SET status = ? WHERE id = ?";
        return $this->conn->update($sql, [$status, $id]);
    }
    
}