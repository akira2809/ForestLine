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
        $sql = "SELECT * FROM blog WHERE status = 1";
        return  $this->conn->getAll($sql);
    }
    public function get_blog_all_admin()
    {
        $sql = "SELECT * FROM blog ORDER BY blog_id DESC";
        return  $this->conn->getAll($sql);
    }
    function get_blog_one($id)
    {
        $sql = "SELECT * FROM blog WHERE blog_id = ?";
        return $this->conn->getOne($sql, [$id]);
    }
    function add_blog($title, $content, $image_blog, $author)
    {
        $sql = "INSERT INTO blog (title, content, image_blog, author) values (?,?,?,?)";
        return $this->conn->insert($sql, [$title, $content, $image_blog, $author]);
    }
    function edit_blog($id, $title, $content, $image_blog, $author)
    {
        $sql = "UPDATE blog SET title = ?,content = ?, image_blog = ?, author = ? WHERE blog_id = ?";
        return $this->conn->update($sql, [$title, $content, $image_blog, $author, $id]);
    }
    function set_status_blog($blog_id, $status)
    {
        $sql = "UPDATE blog SET status = ? WHERE blog_id = ?";
        return $this->conn->update($sql, [$status, $blog_id]);
    }
    function get_blog_variant_by_id($id)
    {
        $sql = "SELECT * FROM blog         
        WHERE blog_id = ? ";
        return $this->conn->getAll($sql, [$id]);
    }
    
}