<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">UPDATE SẢN PHẨM </div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/product/update-product/' . $product['product_id'] . '?action=edit-product' ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tiêu đề</label> <input type="text" class="form-control" id="validationCustom01" value="<?= $product['name'] ?>" name="name" placeholder="Nhập tiêu đề tour..." required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-6"> <label for="validationCustom02" class="form-label">Giá g</label> <input type="number" class="form-control" id="validationCustom02" value="<?= $product['base_price'] ?>" name="base_price" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> <!--end::Col--> <!--begin::Col-->

                            <div class="col-md-6"> <label for="validationCustom03" class="form-label">Giá giảm</label> <input type="number" class="form-control" id="validationCustom03" value="<?= $product['sale_price'] ?>" name="sale_price" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div> <!--end::Col--> <!--begin::Col-->
                            <div class="col-md-12"> <label for="validationCustom04" class="form-label">Danh mục</label> <select class="form-select" name="category_id" id="validationCustom04" required>
                                    <?php foreach ($category as $key => $val) {
                                        if ($val['category_id'] == $product['category_id']) {

                                    ?>
                                            <option selected value="<?= $val['category_id'] ?>"><?= $val['category'] ?></option>
                                        <?php
                                        } else {
                                        ?>
                                            <option value="<?= $val['category_id'] ?>"><?= $val['category'] ?></option>
                                    <?php
                                        }
                                    }
                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                                <div class="col-md-12"> <label class="form-label">Bộ sưu tập</label> <select class="form-select" name="collection_id">
                                        <option selected disabled value="">Choose...</option>
                                        <option value="null">Không chọn bộ sưu tập</option>
                                        <?php foreach ($collection as $key => $val) {
                                            if ($val['collection_id'] == $product['collection_id']) {

                                        ?>
                                                <option selected value="<?= $val['collection_id'] ?>"><?= $val['title'] ?></option>
                                            <?php
                                            } else {
                                            ?>
                                                <option value="<?= $val['collection_id'] ?>"><?= $val['title'] ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>

                                </div> <!--end::Col--> <!--begin::Col-->

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Ảnh chính</label>
                                    <input class="form-control" hidden type="text" name="main_image" value="<?= $product['main_image'] ?>">
                                    <input class="form-control" type="file" name="main_image" id="formFile">

                                </div>

                            </div> <!--end::Row-->
                        </div> <!--end::Body--> <!--begin::Footer-->
                    </div>
                </div>
                <div class="col-4">
                    <div class="card-body">
                        Ảnh minh họa
                        <div>
                            <img class="w-100" src="<?= _HOST . 'uploads/' . $product['main_image'] ?>" alt="">
                        </div>
                        <!-- <div class="col-sm-10 offset-sm-2"> -->

                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <div class="card-body">
                Mô tả
                <textarea name="description" id="editor-des"><?= $product['description'] ?></textarea>
            </div>
            <div class="card-body">
                <button class="btn btn-primary">Lưu chỉnh sửa</button>
            </div>
        </form>
    </div>
    <div class="card card-info card-outline mb-4" id="product_variant">
        <div class="card-header">
            <div class="card-title">BIẾN THỂ SẢN PHẨM</div>
        </div>
        <div class="card-body">

            <table class="table table-hover text-center border">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Màu sắc</th>
                        <th scope="col">Size</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_product_variant as $key => $value) {
                    ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $value['color_name'] ?></td>
                            <td><?= $value['size_name'] ?></td>
                            <td><?= $value['stock'] ?></td>
                            <td>
                                <span>
                                    <i class="fa-solid fa-wrench"></i>

                                </span>
                                <span>
                                    <a href="<?= _HOST . 'admin/product/update-product/' . $value['product_id']  . '?action=delete-product-variant&id=' . $value['product_variant_id'] ?>">
                                        <i class="fa-regular fa-trash-can"></i>
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

        <div class="card-body">
            <div onclick="openBox('boxAddProductVariant')" class="btn btn-primary">Thêm biến thể sản phẩm</div>
        </div>
    </div>
    <div hidden style="z-index: 9999; background-color: rgba(0, 0, 0, 0.65);" class="box position-fixed top-0 start-0 w-100 h-100 " id="boxAddProductVariant">
        <form class="w-25 card bg-white p-3" action="<?= _HOST . "admin/product/update-product/" . $product['product_id'] . "?action=add-product-variant" ?>" method="post">
            <span onclick="closeBox('boxAddProductVariant')" class="text-danger fs-4 text-end"><i class="fa-regular fa-circle-xmark"></i></span>
            <h3 class=" text-center">Thêm biến thể sản phẩm</h3>
            <label for="" class="form-label">Color</label>
            <select name="color" class="form-select" id="" required>
                <option selected disabled value="">Choose...</option>

                <?php foreach ($color as $key => $val) {
                ?>
                    <option value="<?= $val['color_id'] ?>"><?= $val['color_name'] ?></option>
                <?php
                }
                ?>
            </select>
            <label for="" class="form-label">Size</label>
            <select class="form-select" name="size" id="" required>
                <option selected disabled value="">Choose...</option>

                <?php foreach ($size as $key => $val) {
                ?>
                    <option value="<?= $val['size_id'] ?>"><?= $val['size_name'] ?></option>
                <?php
                }
                ?>
            </select>
            <div class="my-3">
                <label for="" class="form-label">Số lượng</label>

                <input type="number" class="form-select" value="200" name="stock">
            </div>
            <button class="btn btn-primary w-100">Thêm biến thể sản phẩm</button>
        </form>
    </div>

</div>

<script>
    (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms =
            document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>