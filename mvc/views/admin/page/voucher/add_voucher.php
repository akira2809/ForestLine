<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">THÊM VOUCHER </div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/voucher/handle-add-voucher' ?>" method="post">
            <div class="row">
                <div class="card-body">
                    <div class="row g-3 p-3">
                        <div class="col-md-6"> <label for="validationCustom02" class="form-label">Mã code</label>
                            <input type="text" class="form-control" placeholder="Nhập mã..." id="validationCustom02" name="code" required>
                            <div class="invalid-feedback">
                                Nhập code
                            </div>
                        </div>

                        <div class="col-md-6"> <label for="validationCustom03" class="form-label">Số lượng</label>
                            <input type="number" class="form-control" value="" id="validationCustom04" name="usage_limit" required>
                            <div class="invalid-feedback">
                                Nhập số lượng
                            </div>
                        </div>
                        <div class="col-md-6"> <label for="validationCustom06" class="form-label">Gía trị</label>
                            <input type="number" class="form-control" placeholder="Nhập giá trị..." id="validationCustom06" name="value" required>
                            <div class="invalid-feedback">
                                Nhập giá trị
                            </div>
                        </div>

                        <div class="col-md-6"> <label for="validationCustom07" class="form-label">Số tiền nhỏ nhất</label>
                            <input type="number" class="form-control" value="100000" id="validationCustom07" name="min_value" required>
                            <div class="invalid-feedback">
                                Nhập giá trị nhỏ nhất
                            </div>
                        </div>
                        <div class="col-md-6"> <label for="validationCustom04" class="form-label">Ngày bắt đầu</label>
                            <input type="date" class="form-control" placeholder="Nhập ngày bắt đầu..." id="validationCustom02" name="day_start" required>
                            <div class="invalid-feedback">
                                Nhập ngày bắt đầu
                            </div>
                        </div>

                        <div class="col-md-6"> <label for="validationCustom05" class="form-label">Ngày kết thúc</label>
                            <input type="date" class="form-control" id="validationCustom05" name="day_end" required>
                            <div class="invalid-feedback">
                                Nhập ngày kết thúc
                            </div>
                        </div>
                        <div class="col-md-12"> <label for="validationCustom01" class="form-label">Mô tả</label>
                            <input type="text" class="form-control" id="validationCustom01" name="description" placeholder="Nhập mô tả..." required>
                            <div class="invalid-feedback">
                                Nhập mô tả
                            </div>
                        </div>
                    </div> <!--end::Row-->
                </div> <!--end::Body--> <!--begin::Footer-->

            </div>
            <div class="card-body">
                <button class="btn btn-primary">Thêm voucher</button>
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