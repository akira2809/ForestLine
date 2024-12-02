<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">THÊM BÀI VIẾT</div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/blog/add_blog_review/?action=add_blog_review' ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-8">
                    <div class="card-body">
                        <div class="row g-3">
                            <div class="col-md-12"> 
                                <label for="validationCustom01" class="form-label">Bình luận</label>
                                <input type="text" class="form-control" id="validationCustom01" name="content" placeholder="Nhập tên bài viết..." required>
                                <div class="invalid-feedback">
                                    Nhập bình luận
                                </div>
                            </div> 
                           
                            
                            
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