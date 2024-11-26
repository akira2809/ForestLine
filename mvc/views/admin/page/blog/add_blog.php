<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">THÊM BÀI VIẾT</div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/blog/add_blog/?action=add_blog' ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tiêu đề</label>
                                <input type="text" class="form-control" id="validationCustom01" name="title" placeholder="Nhập tên bài viết..." required>
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
                                <input class="form-control" type="file" name="image_blog" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Chọn hình ảnh
                                </div>
                            </div>
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tác giả</label>
                                <input type="text" class="form-control" id="validationCustom01" name="author" placeholder="Nhập tên tác giả ..." required>
                                <div class="invalid-feedback">
                                    Nhập tên tác giả
                                </div>
                                <div class="col-md-12"> <label for="validationCustom01" class="form-label">Ngày tạo</label>
                                <input type="date" class="form-control" id="validationCustom01" name="date" placeholder="Nhập ngày tạo ..." required>
                                <div class="invalid-feedback">
                                    Nhập ngày tạo
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