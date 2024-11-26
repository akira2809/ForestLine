<div class="container-fluid">
    <table id="sortableTable" class="table table-striped table-bordered text-center">
        <thead>
            <tr class=" bg-primary text-white ">
                <th>STT</th>
                <th>Tên bài viết</th>
                <th>Nội dung</th>
                <th>Hình ảnh chính</th>
                <th>Tiêu đề 2</th>
                <th>Nội dung 2</th>
                <th>Tiêu đề 3</th>
                <th>Nội dung 3</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($post as $key => $value):  
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td class="text-start"><?= $value['name_post'] ?></td>
                    <td><?= $value['content'] ?></td>
                    <td>
                        <img style="width:50px" src="<?= _HOST . 'uploads/' . $value['image_post'] ?>" alt=">" />
                    </td>
                    <td><?= $value['name_2'] ?></td>
                    <td><?= $value['about_2'] ?></td>
                    <td><?= $value['name_3'] ?></td>
                    <td><?= $value['about_3'] ?></td>
                    <td>
                         <span>
                            <a href="<?= _HOST . "admin/post/update_post/" ?>">
                            <i class="fa-solid fa-wrench"></i>
                            </a>
                        </span>
                        <span>
                        <a href="<?= _HOST . "admin/post/update_post/" . $value['id'] . '?action=set-status-product&status=' . $value['status'] ?>">
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