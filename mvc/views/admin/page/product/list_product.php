<div class="container-fluid">
    <table class="w-100 text-center">

        <tr class=" bg-primary text-white">
            <th>STT</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Danh mục</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>

        <?php
        foreach ($product as $key => $value) {
        ?>
            <tr style="background-color: <?= $value['status'] == 1 ? '#fff' : '#ddd' ?>">
                <td><?= $key + 1 ?></td>
                <td><?= $value['name'] ?></td>
                <td>
                    <img style="width:50px" src="<?= _HOST . 'uploads/' . $value['main_image'] ?>" alt="><?= $value['name'] ?>" />
                </td>
                <td><?= $value['base_price'] ?></td>
                <td><?= $value['category'] ?></td>
                <td><?= $value['status'] == 1 ? 'Hiện' : 'Ẩn' ?></td>
                <td>
                    <span><a href="<?= _HOST . "admin/product/update-product/" . $value['product_id'] ?>">
                            <i class="fa-solid fa-wrench"></i>
                        </a></span>
                    <span>
                        <a href="<?= _HOST . "admin/product/update-product/" . $value['product_id'] . '?action=set-status-product&status=' . $value['status'] ?>">
                            <?= $value['status'] == 1 ? '<i onclick="return confirm(`Bạn có chắc sẽ ẩn sản phẩm này không ?`)" class="fa-regular fa-eye-slash"></i>' : '<i class="fa-regular fa-eye"></i>' ?>
                        </a>
                    </span>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>