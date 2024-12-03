<style>
    body {
        background-color: #f6ffec;
    }

    .navbar-custom {
        background-color: #718355 !important;
    }

    .navbar-brand {
        font-family: "Cormorant Garamond", serif;
        font-weight: 700;
        letter-spacing: 9px;
    }

    .col-1 .box img {
        width: 100px;
        height: 100px;
    }

    .col-6 img {
        max-width: 100%;
    }

    .btn {
        background-color: #718c55;
    }

    .spkh .box {
        background-color: #cfe1b9;
    }

    .spkh img {
        width: 100%;
    }

    .sptt img {
        width: 100%;
    }

    input[type="radio"] {
        display: none;
    }

    /* Kiểu dáng của label như nút */
    label.btn {
        padding: 10px 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        cursor: pointer;
        margin: 5px;
        background-color: #f9f9f9;
        transition: background-color 0.3s, color 0.3s;
    }

    /* Khi radio được chọn */
    input[type="radio"]:checked+label.btn {
        background-color: #718c55 !important;
        color: white;

    }

    .saleprice {
        text-decoration: line-through;
        font-size: 16px;
        color: grey;
    }
</style>
<?php
// var_dump(value: $data);
foreach ($data as $key => $item) {
    $product_variants[] = [
        'color_id' => $item['color_id'],
        'size_id' => $item['size_id'],
        'stock' => $item['stock'],
        'image' => $item['image']
    ];
}

$product_json = json_encode($product_variants);

?>
<article>
    <div class="container">
        <div class="product mt-5">
            <div class="row">

                <div class="col-1 d-none d-md-block">
                    <?php
                    foreach ($image as $value) {
                    ?>
                        <div class="row">
                            <div class="box gx-1 gy-3">
                                <img
                                    src="<?= _HOST . 'uploads/' . $value['image'] ?>"
                                    alt=""
                                    class="img-fluid" />
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <!-- Ảnh chính sẽ phóng to khi thu nhỏ màn hình -->
                <div class="col-12 col-md-6">
                    <img
                        id="main_image"
                        src="<?= _HOST . 'uploads/' . $product['main_image'] ?>"
                        alt=""
                        class="img-fluid" />
                </div>

                <div class="col-12 col-md-5">
                    <form action="<?= _HOST . 'cart/add_cart/' . $product['product_id'] ?>" method="post">
                        <h1><?= $product['name'] ?></h1>
                        <p>Áo phông</p>
                        <?= $product['sale_price'] > 0 ?
                            ' <p style="color: #FF0000;">' . number_format($product['base_price'], 0, 0.0)  . ' VNĐ <span class="saleprice">' . number_format($product['sale_price'], 0, 0.0) . ' VNĐ</span></p>'
                            : '<p style="color: #FF0000;">' . number_format($product['sale_price'], 0, 0.0)  . ' VNĐ </p>' ?>
                        <!-- <p>Màu sắc</p>
                        <ul class="list-unstyled">

                            <li class="d-inline">
                                <i class="fa-solid fa-leaf"></i>
                            </li>
                            <li class="d-inline">
                                <i class="fa-solid fa-leaf"></i>
                            </li>
                            <li class="d-inline">
                                <i class="fa-solid fa-leaf"></i>
                            </li>
                            <li class="d-inline">
                                <i class="fa-solid fa-leaf"></i>
                            </li>
                        </ul> -->
                        <p>Màu sắc</p>
                        <ul class="list-unstyled d-flex" id="color-list">
                            <?php foreach ($color as $val): ?>
                                <li>
                                    <input type="radio" id="color-<?= $val['color_name'] ?>" name="color_id" value="<?= $val['color_id'] ?>" required>
                                    <label for="color-<?= $val['color_name'] ?>" class="btn"><?= $val['color_name'] ?></label>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <p>Kích thước</p>
                        <ul class="list-unstyled d-flex" id="size-list">
                            <?php foreach ($size as $val): ?>
                                <li>
                                    <input type="radio" id="size-<?= $val['size_name'] ?>" name="size_id" value="<?= $val['size_id'] ?>" required>
                                    <label for="size-<?= $val['size_name'] ?>" class="btn"><?= $val['size_name'] ?></label>
                                </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="btn-group btn-custom mt-auto">
                            <button type="button" class="btn btn-success" onclick="decreaseQuantity()">-</button>
                            <input type="text" class=" text-center" id="quantity" name="quantity" value="1" readonly />
                            <button type="button" class="btn btn-success" onclick="increaseQuantity()">+</button>
                        </div>

                        <!-- <p><u>Bảng kích thước</u></p> -->
                        <div class=" mt-3">
                            <button class="btn mb-2">THÊM VÀO GIỎ HÀNG</button>
                        </div>
                        <h6>SẢN PHẨM</h6>
                        <div class="text">
                            <p>
                                Tên sản phẩm: Phông Mệt <br />
                                Câu chuyện: Một ngày dài tựa câu chuyện lớn, với tâm trạng mỏi
                                mệt vì những câu chuyện nhỏ mà vui
                            </p>

                            <p>
                                Kích thước <br />
                                S 1m60 - 1m65 55 - 60kg <br />
                                M 1m64 - 1m69 60 - 65kg <br />
                                L 1m70 - 1m74 66 - 70kg <br />
                                XL 1m74 - 1m7670 - 76kg
                            </p>

                            <p>
                                Chất liệu <br />
                                Cotton mềm
                            </p>

                            <p>
                                Phong cách liên quan <br />
                                Streetwear, beachwear,...
                            </p>
                            <h6>PHONG CÁCH</h6>
                            <p>
                                Dáng người phù hợp: Quả lê <br />
                                Gợi ý kết hợp: Jeans beggie, Chân váy
                            </p>
                            <h6>CHÍNH SÁCH</h6>
                            <p>
                                - Miễn phí đổi hàng cho khách mua ở Outerity trong trường hợp
                                bị lỗi từ nhà sản xuất, giao nhầm hàng, nhầm size. - Quay
                                video mở sản phẩm khi nhận hàng, nếu không có video unbox, khi
                                phát hiện lỗi phải báo ngay cho Outerity trong 1 ngày tính từ
                                ngày giao hàng thành công. Qua 1 ngày chúng mình không giải
                                quyết khi không có video unbox. - Sản phẩm đổi trong thời gian
                                3 ngày kể từ ngày nhận hàng - Sản phẩm còn mới nguyên tem,
                                tags, sản phẩm chưa giặt và không dơ bẩn, hư hỏng bởi những
                                tác nhân bên ngoài cửa hàng sau khi mua hàng.
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <h6>SẢN PHẨM KẾT HỢP:</h6>
        </div>
        <div
            class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 spkh g-3">
            <div class="col">
                <div class="box">
                    <div class="col-3 d-inline-block">
                        <div class="box">
                            <img
                                src="../public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                                alt="" />
                        </div>
                    </div>
                    <div class="col d-inline-block">
                        <div class="box">
                            <p>Phông Labubu</p>
                            <span>139.000VNĐ</span>
                            <span><u>139.000VNĐ</u></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="box">
                    <div class="col-3 d-inline-block">
                        <div class="box">
                            <img
                                src="../public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                                alt="" />
                        </div>
                    </div>
                    <div class="col d-inline-block">
                        <div class="box">
                            <p>Phông Labubu</p>
                            <span>139.000VNĐ</span>
                            <span><u>139.000VNĐ</u></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 spkh g-3 mt-1">
            <div class="col">
                <div class="box">
                    <div class="col-3 d-inline-block">
                        <div class="box">
                            <img
                                src="../public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                                alt="" />
                        </div>
                    </div>
                    <div class="col d-inline-block">
                        <div class="box">
                            <p>Phông Labubu</p>
                            <span>139.000VNĐ</span>
                            <span><u>139.000VNĐ</u></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="box">
                    <div class="col-3 d-inline-block">
                        <div class="box">
                            <img
                                src="../public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                                alt="" />
                        </div>
                    </div>
                    <div class="col d-inline-block">
                        <div class="box">
                            <p>Phông Labubu</p>
                            <span>139.000VNĐ</span>
                            <span><u>139.000VNĐ</u></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mt-3">
            <h6>SẢN PHẨM TƯƠNG TỰ:</h6>
        </div>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3 sptt">
            <div class="col">
                <div class="box">
                    <img
                        src="../public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                        alt=""
                        class="img-fluid" />
                    <p>
                        Áo thun <br />
                        Outerity <br />
                        <span>179.000đ</span>
                        <span><del>200.000đ</del></span>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="box">
                    <img
                        src="../public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                        alt=""
                        class="img-fluid" />
                    <p>
                        Áo thun <br />
                        Outerity <br />
                        <span>179.000đ</span>
                        <span><del>200.000đ</del></span>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="box">
                    <img
                        src="../public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                        alt=""
                        class="img-fluid" />
                    <p>
                        Áo thun <br />
                        Outerity <br />
                        <span>179.000đ</span>
                        <span><del>200.000đ</del></span>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="box">
                    <img
                        src="../public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                        alt=""
                        class="img-fluid" />
                    <p>
                        Áo thun <br />
                        Outerity <br />
                        <span>179.000đ</span>
                        <span><del>200.000đ</del></span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col mt-2">
            <h6>ĐÁNH GIÁ SẢN PHẨM:</h6>
        </div>
    </div>
</article>
<script>
    const productVariants = <?= $product_json ?>;
    const colorInputs = document.querySelectorAll('input[name="color_id"]');
    const sizeInputs = document.querySelectorAll('input[name="size_id"]');
    console.log(productVariants)

    function updateSizes(selectedColorId) {
        const sizeId = selectedColorId;
        const listSize = productVariants.filter((item) => {
            return item.color_id == sizeId
        })
        console.log(listSize[0]);
        document.getElementById('main_image').src = '<?= _HOST ?>' + 'uploads/' + listSize[0].image
        sizeInputs.forEach(sizeInput => {
            const isAvailable = listSize.some(variant =>
                variant.size_id == sizeInput.value
            );
            sizeInput.disabled = isAvailable ? false : true;
            sizeInput.nextElementSibling.style.backgroundColor = !isAvailable ? "#ddd" : '#f9f9f9';
            if (!isAvailable) {
                sizeInput.checked = false;
            }
        });
    }

    function updateColor(selectedSizeId) {
        const colorId = selectedSizeId;
        const listColor = productVariants.filter((item) => {
            return item.size_id == colorId
        })

        colorInputs.forEach(colorInput => {
            const isAvailable = listColor.some(variant =>
                variant.color_id == colorInput.value
            );

            colorInput.disabled = isAvailable ? false : true;
            colorInput.nextElementSibling.style.backgroundColor = !isAvailable ? "#ddd" : '#f9f9f9';
            if (!isAvailable) {
                colorInput.checked = false;
            }
        });
    }
    colorInputs.forEach(input => {
        input.addEventListener('change', event => {
            const selectedColorId = event.target.value;
            updateSizes(selectedColorId);
        });
    });
    sizeInputs.forEach(input => {
        input.addEventListener('change', event => {
            const selectedSizeId = event.target.value;
            updateColor(selectedSizeId);
        });
    });
</script>