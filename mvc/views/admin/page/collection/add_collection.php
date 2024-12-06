<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">THÊM COLLECTION</div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/collection/add_collection' ?>"
            method="post" enctype="multipart/form-data" id="collectionForm">
            <div class="row">
                <!-- Cột 1 -->
                <div class="col-8">
                    <div class="card-body">
                        <div class="row g-3">
                            <!-- Tiêu đề -->
                            <div class="col-md-12">
                                <label for="collectionTitle" class="form-label">Tên Collection</label>
                                <input type="text" class="form-control" id="collectionTitle" name="title"
                                    placeholder="Nhập tên bộ sưu tập..." required>
                                <div class="invalid-feedback">Nhập tên bộ sưu tập</div>
                            </div>
                            <!-- Ảnh -->
                            <div class="mb-3">
                                <label for="collectionImage" class="form-label">Hình ảnh</label>
                                <input class="form-control" type="file" name="image" id="collectionImage" required>
                                <div class="invalid-feedback">Chọn hình ảnh</div>
                            </div>
                            <!-- Slogan -->
                            <div class="col-md-12">
                                <label for="collectionSlogan" class="form-label">Slogan</label>
                                <input type="text" class="form-control" id="collectionSlogan" name="slogan"
                                    placeholder="Nhập slogan..." required>
                                <div class="invalid-feedback">Nhập slogan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cột 2 -->
                <div class="col-4">
                    <div class="card-body">
                        Trạng thái
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusShow" value="1" checked>
                            <label class="form-check-label" for="statusShow">Hiện</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusHide" value="0">
                            <label class="form-check-label" for="statusHide">Ẩn</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Nút lưu -->
            <div class="card-body">
                <button class="btn btn-primary" type="submit">Lưu</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Bắt sự kiện khi gửi form
    document.getElementById('collectionForm').addEventListener('submit', function (event) {
        // Lấy toàn bộ các trường trong form
        const form = this;

        // Kiểm tra xem form có hợp lệ hay không
        if (!form.checkValidity()) {
            event.preventDefault(); // Ngăn không cho gửi form
            event.stopPropagation(); // Ngăn sự kiện lan rộng
        }

        // Thêm class `was-validated` để Bootstrap kích hoạt hiển thị lỗi
        form.classList.add('was-validated');
    });
</script>
