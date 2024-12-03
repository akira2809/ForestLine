<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">THÊM SẢN PHẨM </div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/product/add-product/?action=add-product' ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tiêu đề</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Nhập tên sản phẩm..." required>
                                <div class="invalid-feedback">
                                    Nhập tên sản phẩm
                                </div>
                            </div>
                            <div class="col-md-6"> <label for="validationCustom02" class="form-label">Giá gốc</label>
                                <input type="number" class="form-control" placeholder="Nhập giá sản phẩm..." id="validationCustom02" name="base_price" required>
                                <div class="invalid-feedback">
                                    Nhập giá
                                </div>
                            </div>

                            <div class="col-md-6"> <label for="validationCustom03" class="form-label">Giá giảm</label>
                                <input type="number" class="form-control" value="0" id="validationCustom03" name="sale_price" required>

                            </div>
                            <div class="col-md-12"> <label for="validationCustom04" class="form-label">Danh mục</label>
                                <select class="form-select" name="category_id" id="validationCustom04" required>
                                    <option selected disabled value="">choose...</option>
                                    <?php foreach ($category as $key => $val) {
                                    ?>

                                        <option value="<?= $val['category_id'] ?>"><?= $val['category'] ?></option>
                                    <?php
                                    }

                                    ?>
                                </select>
                                <div class="invalid-feedback">
                                    Chọn danh mục
                                </div>
                            </div>
                            <div class="col-md-12"> <label class="form-label">Bộ sưu tập</label> <select class="form-select" name="collection_id">
                                    <option selected disabled value="null">Choose...</option>
                                    <?php foreach ($collection as $key => $val) {

                                    ?>
                                        <option value="<?= $val['collection_id'] ?>"><?= $val['title'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                            </div>

                            <div class="mb-3">
                                <label for="validationCustom05" for="formFile" class="form-label">Ảnh chính</label>
                                <input class="form-control" type="file" name="main_image" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Chọn hình ảnh
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Ảnh chi tiết</label>
                                <input class="form-control" type="file" name="image_detail[]" id="formFileMultiple" multiple>
                            </div>

                        </div> <!--end::Row-->
                    </div> <!--end::Body--> <!--begin::Footer-->
                </div>
                <div class="col-4">
                    <div class="card-body">
                        Ảnh minh họa

                        <!-- <div class="col-sm-10 offset-sm-2"> -->
                        <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label> </div>
                        <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label> </div>
                        <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label> </div>
                        <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label> </div>
                        <div class="form-check"> <input class="form-check-input" type="checkbox" id="gridCheck1"> <label class="form-check-label" for="gridCheck1">
                                Example checkbox
                            </label> </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <div class="card-body">
                Mô tả
                <textarea name="description" id="editor-des"></textarea>
            </div>
            <div class="card-body">
                <button class="btn btn-primary">Lưu chỉnh sửa</button>
            </div>
        </form>

    </div>
</div>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
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
</script> <!--end::JavaScript-->