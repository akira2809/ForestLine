<div class="container-fluid">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Giá</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Trạng thái</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($product as $key => $value) {
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['main_image'] ?></td>
                    <td><?= $value['base_price'] ?></td>
                    <td><?= $value['category_id'] ?></td>
                    <td><?= $value['status'] ?></td>
                    <td>
                        <span><a href="<?= _HOST . "admin/product/update-product/" . $value['product_id'] ?>">
                                <i class="fa-solid fa-wrench"></i>
                            </a></span>
                        <span><i class="fa-regular fa-trash-can"></i></span>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>