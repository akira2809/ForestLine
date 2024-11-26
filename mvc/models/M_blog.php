<?php
class M_blog
{
    protected $conn;
    public function __construct(DB $conn)
    {
        $this->conn = $conn;
    }
    public function get_blog_all()
    {
        $sql = "SELECT * FROM blog";
        return  $this->conn->getAll($sql);
    }
    function get_blog_one($id)
    {
        $sql = "SELECT * FROM blog WHERE blog_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
    function add_blog($title, $content, $image_blog, $author, $date)
    {
        $sql = "INSERT INTO blog (title, content, image_blog, author,date) values (?,?,?,?,?)";
        return $this->conn->insert($sql, [$title, $content, $image_blog, $author, $date]);
    }
    function edit_blog($id, $title, $content, $image_blog, $author, $date)
    {
        $sql = "UPDATE blog SET title = ?,content = ?, image_blog = ?, author = ?, date = ? WHERE blog_id = ?";
        return $this->conn->update($sql, [$title, $content, $image_blog, $author, $date, $id]);
    }
    function set_status_blog($blog_id, $status)
    {
        $sql = "UPDATE blog SET status = ? WHERE blog_id = ?";
        return $this->conn->update($sql, [$status, $blog_id]);
    }
    function get_blog_variant_by_id($id)
    {
        $sql = "SELECT * FROM blog         
        WHERE id = ? ";
        return $this->conn->getAll($sql, [$id]);
    }
    
}