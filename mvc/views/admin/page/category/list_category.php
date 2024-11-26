<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <h3>Thêm danh mục</h3>
            <form action="<?= _HOST . 'admin/category/add-category' ?>" method="post">
                <label for="validationCustom" class="form-label">Tên danh mục</label>
                <input type="text" class="form-control" id="validationCustom" name="category" placeholder="Nhập tên danh mục..." required>
                <div class="my-2">
                    <button class="btn btn-primary">Thêm danh mục</button>
                </div>
            </form>
        </div>
        <div class="col-md-9">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên danh mục</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($category as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value['category'] ?></td>
                            <td>
                                <span onclick="openBoxEditCategory(<?= $value['category_id'] ?>,'<?= $value['category'] ?>')">
                                    <i class="fa-solid fa-wrench"></i>
                                </span>
                                <span>
                                    <a onclick="return confirm('Bạn có chắc chắn xóa danh mục này không ?')" href="<?= _HOST . 'admin/category/delete-category/' . $value['category_id'] ?>">
                                        <i class="fa-regular fa-trash-can"></i></a>
                                </span>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div hidden id="boxEditCategory" style="z-index: 9999; background-color: rgba(0, 0, 0, 0.65);" class="box position-fixed top-0 start-0 w-100 h-100 ">
        <form class="w-25 card bg-white p-3" action="<?= _HOST . 'admin/category/update-category' ?>" method="post">
            <span onclick="closeBoxEditCategory()" class="text-danger fs-4 text-end"><i class="fa-regular fa-circle-xmark"></i></span>
            <h3 class="text-center">Sửa danh mục</h3>
            <input type="text" hidden class="form-control" id="category_id" name="category_id" placeholder="Nhập tên danh mục..." required>
            <label for="" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" id="category_name" name="category" placeholder="Nhập tên danh mục..." required>
            <div class="my-3">
                <button class="btn btn-primary w-100">Lưu chỉnh sửa</button>
            </div>
        </form>
    </div>
</div>