<div class="container-fluid">
    <table id="sortableTable" class="table table-striped table-bordered text-center">
        <thead>
            <tr class=" bg-primary text-white ">
                <th>STT</th>
                <th>Tên bài viết</th>
                <th>Nội dung</th>
                <th>Hình ảnh chính</th>
                <th>Tác giả</th>
                <th>Ngày tạo</th>     
                <th>Trạng thái</th>
                <th>Hành động</th>           
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($blog as $key => $value):  
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td class="text-start"><?= $value['title'] ?></td>
                    <td><?= $value['content'] ?></td>
                    <td>
                        <img style="width:50px" src="<?= _HOST . 'uploads/' . $value['image_blog'] ?>" alt=">" />
                    </td>
                    <td><?= $value['author'] ?></td>
                    <td><?= $value['date'] ?></td>
                    <td><?= $value['status'] == 1 ? 'Hiện' : 'Ẩn' ?></td>
                    
                    <td>
                         <span>
                            <a href="<?= _HOST . "admin/blog/update_blog/"  . $value['blog_id'] ?>">
                            <i class="fa-solid fa-wrench"></i>
                            </a>
                        </span>
                        <span>
                        <a href="<?= _HOST . "admin/blog/update_blog/" . $value['blog_id'] . '?action=set-status-blog&status=' . $value['status'] ?>">
                                <?= $value['status'] == 1 ? '<i onclick="return confirm(`Bạn có chắc sẽ ẩn baì viết này không ?`)" class="fa-regular fa-eye-slash test1"></i>' : '<i class="fa-regular fa-eye test2"></i>' ?>
                            </a>
                        </span>
                       
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>

<style>
    .st {
        padding-left:30px ;
    }

</style>