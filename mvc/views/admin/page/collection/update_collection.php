<div class="container-fluid">
    <div class="card card-info card-outline mb-4">
        <div class="card-header">
            <div class="card-title">Sửa Collection</div>
        </div>
        <form class="needs-validation" novalidate action="<?= _HOST . 'admin/collection/update_collection' ?>"
            method="post" enctype="multipart/form-data">
            <!-- Hidden để lưu ID của Collection -->
            <input type="hidden" name="collection_id" value="<?= htmlspecialchars($collection['collection_id']) ?>">

            <div class="row">
                <!-- Cột 1 -->
                <div class="col-8">
                    <div class="card-body">
                        <div class="row g-3">
                            <!-- Tiêu đề -->
                            <div class="col-md-12">
                                <label for="collectionTitle" class="form-label">Tên Collection</label>
                                <input type="text" class="form-control" id="collectionTitle" name="title"
                                    value="<?= htmlspecialchars($collection['title']) ?>" required>
                                <div class="invalid-feedback">Nhập tên bộ sưu tập</div>
                            </div>
                            <!-- Ảnh -->
                            <div class="mb-3">
                                <label for="collectionImage" class="form-label">Hình ảnh</label>
                                <input class="form-control" type="file" name="image" id="collectionImage">
                                <?php if (!empty($collection['image'])): ?>
                                    <img src="<?= _HOST . 'uploads/' . htmlspecialchars($collection['image']) ?>"
                                        alt="Hình ảnh hiện tại" class="img-thumbnail mt-2"
                                        style="width: 100px; height: 100px;">
                                <?php endif; ?>
                                <small class="form-text">Để trống nếu không muốn thay đổi hình ảnh.</small>
                            </div>
                            <!-- Slogan -->
                            <div class="col-md-12">
                                <label for="collectionSlogan" class="form-label">Slogan</label>
                                <input type="text" class="form-control" id="collectionSlogan" name="slogan"
                                    value="<?= htmlspecialchars($collection['slogan']) ?>" required>
                                <div class="invalid-feedback">Nhập slogan</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cột 2 -->
                <div class="col-4">
                    <div class="card-body">
                        <label>Trạng thái</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusShow" value="1"
                                <?= $collection['status'] == 1 ? 'checked' : '' ?>>
                            <label class="form-check-label" for="statusShow">Hiện</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="statusHide" value="0"
                                <?= $collection['status'] == 0 ? 'checked' : '' ?>>
                            <label class="form-check-label" for="statusHide">Ẩn</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chọn sản phẩm -->
            <div class="card-body">
                <label>Chọn sản phẩm</label>
                <div class="form-group">
                    <?php if (!empty($all_products)): ?>
                        <?php foreach ($all_products as $product): ?>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="products[]"
                                    value="<?= htmlspecialchars($product['product_id']) ?>"
                                    id="product_<?= htmlspecialchars($product['product_id']) ?>"
                                    <?= in_array($product['product_id'], $connected_products) ? 'checked' : '' ?>>

                                <label class="form-check-label d-flex align-items-center"
                                    for="product_<?= htmlspecialchars($product['product_id']) ?>">
                                    <img src="<?= _HOST . 'uploads/' . htmlspecialchars($product['main_image']) ?>"
                                        alt="Product Image" class="img-thumbnail me-2"
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                    <?= htmlspecialchars($product['name']) ?>
                                </label>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Không có sản phẩm nào để hiển thị.</p>
                    <?php endif; ?>
                </div>
            </div>


            <!-- Nút lưu -->
            <div class="card-body">
                <button class="btn btn-primary">Lưu thay đổi</button>
            </div>
        </form>
    </div>
</div>