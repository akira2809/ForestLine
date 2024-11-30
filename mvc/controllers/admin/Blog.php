<?php
class Blog extends Controller
{
    public function render($data)
    {
        $this->view('layout/layout_admin', $data);
    }
    public function index()
    {
        $data['page'] = 'blog/list_blog';        
        $this->render($data);
    }
    
    public function upload_image($name, $tmp_name)
    {
        $path = "./uploads/" . $name;
        $imageName = strtolower(pathinfo($path,  PATHINFO_FILENAME)) . 'Copy';
        $imageFileType = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        $count = 1;
        $imageNew = "./uploads/" . $imageName . '.' . $imageFileType;
        while (file_exists($imageNew)) {
            $imageNew = "./uploads/" . $imageName . $count . '.' . $imageFileType;
            $count++;
        }
        move_uploaded_file($tmp_name, $imageNew);
        return substr($imageNew, 10);
    }
    public function add_blog()
    {
        $blog = $this->model('M_blog');
        if (isset($_GET['action']) && $_GET['action'] == 'add_blog') {
            $image = $this->model('M_image');
            $imageNew = $this->upload_image($_FILES['image_blog']['name'], $_FILES['image_blog']['tmp_name']);
            $new_blog_id = $blog->add_blog(
             $_POST['title'], image_blog: $imageNew, content: $_POST['content'],
             author: $_POST['author']);
            $i = 0;
            foreach ($_FILES['image_detail']['name'] as $value) {
                $imageNew = $this->upload_image($value, $_FILES['image_detail']['tmp_name'][$i]);
                $image->add_image_blog($new_blog_id, $imageNew);
                $i++;
            }
            header("Location: " . _HOST . "/admin/blog/list_blog/");
        }
        $data['title'] = "Thêm bài viết";
        $data['page'] = 'blog/add_blog';
        $this->render($data);
    }
    public function list_blog()
    {
        $data['title'] = "Danh sách bài viết";
        $blog = $this->model('M_blog');
        $data['blog'] = $blog->get_blog_all_admin();
        $data['page'] = 'blog/list_blog';
        $this->render($data);
    }
    public function update_blog($id = null)
    {    
        $blog_variant = $this->model('M_blog');
        $blog = $this->model('M_blog');
        $data['blog'] = $blog->get_blog_all();
        $data['blog'] = $blog_variant->get_blog_one($id);
        $data['list_blog_variant'] = $blog_variant->get_blog_variant_by_id($id);
        $data['title'] = "Update bài viết";
        $data['page'] = 'blog/update_blog';
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {            
                case 'update_blog':
                    if (!$_FILES['image_blog']['name']) {
                        $path_image = $_POST['image_blog'];
                    } else {
                        $path_image = $_FILES['image_post']['name'];
                        $proImage = "./uploads/" . basename($_FILES['image_post']['name']);
                        move_uploaded_file($_FILES['image_post']['tmp_name'], $proImage);
                    }                                
                    $this->model('M_blog')->edit_blog(
                        $id,
                        $_POST['title'],
                        image_blog: $path_image,
                        content: $_POST['content'],                       
                        author: $_POST['author'],
/*                         date: $_POST['date']
 */                    );                   
                    header("Location: " . _HOST . "/admin/blog/list_blog");
                    break;              
                    case 'set-status-blog':
                        $status = ($_GET['status'] == 1) ? 0 : 1;
                        $blog = $this->model('M_blog');

                        $blog->set_status_blog($id, $status);
                        header("Location: " . _HOST . "/admin/blog/list_blog/");
                        break;
                default:

                    echo "Hành động không hợp lệ!";
                    break;
            }
        }
        $this->render($data);
    }

    public function edit_blog($id, $title, $content, $image_blog, $author, $date)
    {
        $blog = $this->model('M_blog');
        return $blog->edit_blog($id, $title, $content, $image_blog, $author, $date);
    }
}
