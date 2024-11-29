<div class="container-fluid">
    <table id="sortableTable" class="table table-striped table-bordered text-center">
        <thead>
            <tr class="bg-primary text-white">
                <th>STT</th>
                <th>Tên Collection</th>
                <th>Slogan</th>
                <th>Hình ảnh</th>
                <th>Trạng thái</th>z
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($collections as $key => $collection): ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td class="text-start"><?= htmlspecialchars($collection['title']) ?></td>
                    <td><?= htmlspecialchars($collection['slogan']) ?></td>
                    <td>
                        <img style="width:50px" src="<?= _HOST . 'uploads/' . htmlspecialchars($collection['image']) ?>"
                            alt="<?= htmlspecialchars($collection['title']) ?: 'No image available' ?>" />
                    </td>
                    <td><?= $collection['status'] == 1 ? 'Hiện' : 'Ẩn' ?></td>
                    <td>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="<?= _HOST . "admin/collection/update_collection/" . $collection['collection_id'] ?>"
                                class="text-primary">
                                <i class="fa-solid fa-wrench" title="Chỉnh sửa"></i>
                            </a>

                            <a href="<?= _HOST . "admin/collection/update_collection/" . $collection['collection_id'] . '?action=set-status-collection&status=' . $collection['status'] ?>"
                                onclick="return confirm('Bạn có chắc sẽ <?= $collection['status'] == 1 ? 'ẩn' : 'hiện' ?> bộ sưu tập này không?')"
                                class="text-<?= $collection['status'] == 1 ? 'warning' : 'success' ?>">
                                <?= $collection['status'] == 1
                                    ? '<i class="fa-regular fa-eye-slash" title="Ẩn"></i>'
                                    : '<i class="fa-regular fa-eye" title="Hiện"></i>' ?>
                            </a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<style>
    .test1 {
        padding-left: 30px;
    }
</style>