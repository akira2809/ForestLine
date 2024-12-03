<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">UPDATE BÀI VIẾT </div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/blog/update_blog/' . $blog['blog_id'] . '?action=update_blog' ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="card-body"> <!--begin::Row-->
                        <div class="row g-3"> <!--begin::Col-->
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tiêu đề</label> <input type="text" class="form-control" id="validationCustom01" value="<?= $blog['title'] ?>" name="title" placeholder="Nhập tiêu đề bài viết..." required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> 
                            <!-- <div class="col-md-12"> <label for="validationCustom01" class="form-label">Nội dung</label> <input type="text" class="form-control" id="validationCustom01" value="<?= $blog['content'] ?>" name="content" placeholder="Nhập nội dung bài viết..." required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> -->
                            <!-- Content demo -->
                            <div class="card-body">
                                Chỉnh sửa nội dung bài viết
                                <textarea name="content" id="editor-des"><?= $blog['content'] ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Ảnh chính</label>
                                <input class="form-control" hidden type="text" name="image_blog" value="<?= $blog['image_blog'] ?>">
                                <input class="form-control" type="file" name="image_blog" id="formFile">
                            </div>  
                            <div class="col-md-12"> <label for="validationCustom01" class="form-label">Tên tác giả</label> <input type="text" class="form-control" id="validationCustom01" value="<?= $blog['author'] ?>" name="author" placeholder="Nhập tiêu đề 2 bài viết..." required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div> <!--end::Row-->
                    </div> <!--end::Body--> <!--begin::Footer-->
                </div>
                <div class="col-4">
                    
                </div>
            </div>
            
            <div class="card-body">
                <button class="btn btn-primary">Lưu chỉnh sửa</button>
            </div>
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