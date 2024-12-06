<div class="container-fluid">
    <table id="sortableTable" class="table table-striped table-bordered text-center">
        <thead>
            <tr class=" bg-primary text-white ">
                <th>STT</th>
                <th>Code</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Số lượng</th>
                <th>Giá trị</th>
                <th style="width:25%">Mô tả</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($list_voucher as $key => $value) {
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td class="text-start"><?= $value['code'] ?></td>
                    <td><?= $value['day_start'] ?></td>
                    <td><?= $value['day_end'] ?></td>
                    <td><?= $value['usage_limit'] ?></td>
                    <td><?= $value['value'] ?></td>
                    <td><?= $value['description'] ?></td>
                    <td><?= $value['status'] == 1 ? 'Hiện' : 'Ẩn' ?></td>
                    <td>
                        <span><a href="<?= _HOST . "admin/voucher/update-voucher/" . $value['voucher_id'] ?>">
                                <i class="fa-solid fa-wrench"></i>
                            </a></span>
                        <span>
                            <a href="<?= _HOST . "admin/voucher/handle-update-status/" . $value['voucher_id'] . '/' . $value['status'] ?>">
                                <?= $value['status'] == 1 ? '<i onclick="return confirm(`Bạn có chắc sẽ ẩn sản phẩm này không ?`)" class="fa-regular fa-eye-slash test1"></i>' : '<i class="fa-regular fa-eye test2"></i>' ?>
                            </a>
                        </span>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<style>
    .test1 {
        padding-left: 30px;
    }
</style>