<?php
class Post extends Controller
{
    public function render($data)
    {
        $this->view('layout/layout_admin', $data);
    }
    public function index()
    {
        $data['page'] = 'post/list_post';        
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
    public function add_post()
    {
        $post = $this->model('M_post');
        if (isset($_GET['action']) && $_GET['action'] == 'add_post') {
            $image = $this->model('M_image');
            $imageNew = $this->upload_image($_FILES['image_post']['name'], $_FILES['image_post']['tmp_name']);
            $new_post_id = $post->add_post(
             $_POST['name_post'], image_post: $imageNew, content: $_POST['content'],
             name_2: $_POST['name_2'], name_3: $_POST['name_3'],about_2: $_POST['about_2'], about_3: $_POST['about_3']);
            $i = 0;
            foreach ($_FILES['image_detail']['name'] as $value) {
                $imageNew = $this->upload_image($value, $_FILES['image_detail']['tmp_name'][$i]);
                $image->add_image_post($new_post_id, $imageNew);
                $i++;
            }
            header("Location: " . _HOST . "/admin/post/list_post/");
        }
        $data['title'] = "Thêm sản phẩm";
        $data['page'] = 'post/add_post';
        $this->render($data);
    }
    public function list_post()
    {
        $data['title'] = "Danh sách bài viết";
        $post = $this->model('M_post');
        $data['post'] = $post->get_post_all();
        $data['page'] = 'post/list_post';
        $this->render($data);
    }
    public function update_post($id = null)
    {    
        $data['title'] = "Update bài viết";
        $data['page'] = 'post/update_post';
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {            
                case 'update_post':
                    if (!$_FILES['image_post']['name']) {
                        $path_image = $_POST['image_post'];
                    } else {
                        $path_image = $_FILES['image_post']['name'];
                        $proImage = "./uploads/" . basename($_FILES['image_post']['name']);
                        move_uploaded_file($_FILES['image_post']['tmp_name'], $proImage);
                    }     
                
               
                    $result =  $this->model('M_post')->edit_post(
                        $id,
                        $_POST['name_post'],
                        image_post: $path_image,
                        content: $_POST['content'],
                        name_2: $_POST['name_2'],
                        name_3: $_POST['name_3'],
                        about_2: $_POST['about_2'],
                        about_3: $_POST['about_3']
                    );
                    if ($result) {
                        header("Location: " . _HOST . "/admin/post/list_post");
                    } else {
                        echo "Cập nhật thất bại!";
                    }
                    break;
                    /* header("Location: " . _HOST . "/admin/post/list_post");
                    break; */              
                    case 'set-status-product':
                        $status = ($_GET['status'] == 1) ? 0 : 1;
                        $post = $this->model('M_post');

                        $post->set_status_product($id, $status);
                        header("Location: " . _HOST . "/admin/product/list-product/");
                        break;
                default:

                    echo "Hành động không hợp lệ!";
                    break;
            }
        }
        $this->render($data);
    }

    public function edit_post($id, $name_post, $content, $image_post, $name_2, $name_3, $about_2, $about_3)
    {
        $post = $this->model('M_post');
        return $post->edit_post($id, $name_post, $content, $image_post, $name_2, $name_3, $about_2, $about_3);
    }
}
