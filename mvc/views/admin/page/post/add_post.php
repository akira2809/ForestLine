<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">THÊM BÀI VIẾT</div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/post/add_post/?action=add_post' ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tiêu đề</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_post" placeholder="Nhập tên bài viết..." required>
                                <div class="invalid-feedback">
                                    Nhập tiêu đề bài viết
                                </div>
                            </div> 
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Nội dung</label>
                                <input type="text" class="form-control" id="validationCustom01" name="content" placeholder="Nhập noi dung bài viết..." required>
                                <div class="invalid-feedback">
                                    Nhập nội dung bài viết
                                </div>
                            </div> 
                             <div class="mb-3">  
                                <label for="validationCustom05" for="formFile" class="form-label">Ảnh chính</label>
                                <input class="form-control" type="file" name="image_post" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Chọn hình ảnh
                                </div>
                            </div>
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tiêu đề 2</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_2" placeholder="Nhập tiêu đề 2 ..." required>
                                <div class="invalid-feedback">
                                    Nhập tiêu đề 2
                                </div>
                                <div class="col-md-12"> <label for="validationCustom01" class="form-label">Thêm 2</label>
                                <input type="text" class="form-control" id="validationCustom01" name="about_2" placeholder="Nhập Thêm 2 ..." required>
                                <div class="invalid-feedback">
                                    Nhập thêm 2
                                </div>
                            </div>
                             <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tiêu đề 3</label>
                                <input type="text" class="form-control" id="validationCustom01" name="name_3" placeholder="Nhập tiêu đề 3..." required>
                                <div class="invalid-feedback">
                                    Nhập tiêu đề 3
                                </div>
                            </div>  
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Thêm 2</label>
                                <input type="text" class="form-control" id="validationCustom01" name="about_3" placeholder="Nhập Thêm 2 ..." required>
                                <div class="invalid-feedback">
                                    Nhập thêm 2
                                </div>
                            </div>                    
                                                        
                        </div> <!--end::Row-->
                    </div> <!--end::Body--> <!--begin::Footer-->
                </div>
           
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