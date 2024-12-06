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
        $sql = "SELECT b.blog_id, b.title, b.author, b.status, b.image_blog, b.date, b.content, u.user_name
        FROM blog b 
        INNER JOIN user u
        ON b.author = u.user_id
        ORDER BY blog_id DESC";

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
    // blog_review
    public function get_blog_review_all()
    {
        $sql = "SELECT br.blog_review_id, br.user_id, u.user_name, br.date, br.content, b.blog_id, b.blog_id
        FROM blog_review br 
        INNER JOIN blog b ON br.blog_id = b.blog_id  
        INNER JOIN user u ON br.user_id = u.user_id ";
        return  $this->conn->getAll($sql);
    }
    function add_blog_review($blog_review,$user_id,$content)
    {
        $sql = "INSERT INTO blog_review (blog_id,user_id,content) values (?,?,?)/*  WHERE blog_id = ? */";
        return $this->conn->insert($sql, [$blog_review,$user_id,$content]);
    }
    public function get_blog_review_all_admin($id)
    {
        $sql = "SELECT br.blog_review_id, br.user_id, u.user_name, br.date, br.content
        FROM blog_review br 
        INNER JOIN blog b ON br.blog_id = b.blog_id  
        INNER JOIN user u
        ON br.user_id = u.user_id   where b.blog_id =?
        ORDER BY blog_review_id DESC";
        return  $this->conn->getAll($sql, [$id]);
    }
    
    
}