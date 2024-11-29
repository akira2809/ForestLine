<style>
    :root {
        --main-color: #718355;
        --second-color: #CFE1B9;
        --background-color: #E9F5DB;
        --text-color: #000;
        --price-color: #FF0000;
    }


    .bgp {
        background-color: #CFE1B9;
    }

    .navbar-custom {
        background-color: var(--main-color) !important;
    }



    .btn-block1 {
        background-color: var(--second-color);
        color: var(--text-color);
    }

    .btn-block1:hover {
        background-color: var(--main-color);
        color: var(--background-color);
    }

    .border-costume {
        border-left: 1px solid #718355;
    }

    img {
        width: 100%;
        height: auto;
    }
</style>


<body>

    <div class="container">
        <h2 class="mt-3">Thanh toán</h2>

        <div class="row">
            <div class="col-lg-8" style="color: var(--text-color);">
                <hr>
                <div class="fw-bold p-3 bgp">
                    <h4>Vận chuyển và trả lại ngày lễ</h4>
                    <p>Tận hưởng dịch vụ giao hàng miễn phí cho tất cả các đơn hàng đến hết ngày 20 tháng 12 năm 2024 và gia hạn thời gian trả hàng miễn phí đến hết ngày 31 tháng 1 năm 2025 (Chi tiết)</p>
                </div>
                <form action="<?= _HOST ?>checkout/checkout" method="post">
                    <h4 class="fw-bold mt-3">Thông tin liên lạc</h4>
                    <input type="text" name="user_name" class="form-control" value="<?= isset($_SESSION['user_login']) ? $_SESSION['user_login']['user_name'] : '' ?>" style="font-weight: bold;" placeholder="Họ và tên" required>
                    <div class="row">
                        <div class="col-lg-8 my-3">
                            <input type="text" name="email" value="<?= isset($_SESSION['user_login']) ? $_SESSION['user_login']['email'] : '' ?>" class="form-control" style="font-weight: bold;" placeholder="Email" required>
                        </div>
                        <div class="col-lg-4 my-3">
                            <input type="text" name="phone_number" value="<?= isset($_SESSION['user_login']) ? $_SESSION['user_login']['phone_number'] : '' ?>" class="form-control" style="font-weight: bold;" placeholder="Số điện thoại" required>
                        </div>
                    </div>

                    <h4 class="fw-bold mt-3">Thông tin vận chuyển</h4>
                    <input type="text" class="form-control" name="address" value="<?= isset($_SESSION['user_login']) ? $_SESSION['user_login']['address'] : '' ?>" style="font-weight: bold;" required placeholder="Địa chỉ">
                    <input type="text" class="form-control mt-3" style="font-weight: bold;" placeholder="Căn hộ / Đơn vị (Tùy chọn)">
                    <div class="row">
                        <div class="col-lg-4 my-3">
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04" style="font-weight: bold;" aria-label="Chọn tỉnh / thành phố">
                                    <option selected>Chọn tỉnh / thành phố</option>
                                    <option value="1">TP Hồ Chí Minh</option>
                                    <option value="2">Hà Nội</option>
                                    <option value="3">Tiền Giang</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04" style="font-weight: bold;" aria-label="Chọn quận / huyện">
                                    <option selected>Chọn quận / huyện</option>
                                    <option value="1">Quận 1</option>
                                    <option value="2">Quận 2</option>
                                    <option value="3">Quận 3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 my-3">
                            <div class="input-group">
                                <select class="form-select" id="inputGroupSelect04" style="font-weight: bold;" aria-label="Chọn phường / xã">
                                    <option selected>Chọn phường / xã</option>
                                    <option value="1">Phường 1</option>
                                    <option value="2">Phường 2</option>
                                    <option value="3">Phường 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <h4 class="fw-bold mt-3">Phương thức thanh toán</h4>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio1" value="Thanh toán khi giao hàng" required>
                        <label class="form-check-label" for="inlineRadio1">Thanh toán khi giao hàng (COD)</label>
                    </div> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio2" value="Chuyển khoản ví điện tử">
                        <label class="form-check-label" for="inlineRadio2">Chuyển khoản ví điện tử (Momo)</label>
                    </div> <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="payment_method" id="inlineRadio3" value="Chuyển khoản ngân hàng">
                        <label class="form-check-label" for="inlineRadio3">Chuyển khoản ngân hàng</label>
                    </div> <br>
                    <?php
                    $t_m = 0;
                    foreach ($_SESSION['cart'] as $value) {
                        if (!$value['sale_price'] > 0) {
                            $t_m += $value['sale_price'] * $value['quantity'];
                        } else {
                            $t_m += $value['base_price'] * $value['quantity'];
                        }
                    }
                    ?>
                    <input type="text" name="total_money" value="<?= isset($total_price_add_voucher) ? $total_price_add_voucher : $t_m + 25000 ?>">
                    <input type="text" name="voucher_id" value="<?= isset($voucher_id) ? $voucher_id : null ?>">
                    <button type="submit" class="col-12 btn btn-custom btn-block1 mt-3">Hoàn tất đơn hàng</button>
                </form>
            </div>
            <div class="col-lg-4" style="color: var(--main-color);">
                <div class="row">
                    <h4>Đơn hàng của bạn</h4>
                    <div class="row">
                        <?php
                        $total_money = 0;
                        $ship = 25000;
                        foreach ($_SESSION['cart'] as $value) {
                        ?>

                            <div class="col col-lg-12 mb-3 d-flex gap-2">
                                <div class="col-lg-6">
                                    <img src="<?= _HOST . 'uploads/' . $value['main_image'] ?>" alt="">
                                </div>
                                <div class="col-lg-6 d-flex justify-content-between flex-column py-2">
                                    <div>
                                        <h5><?= $value['name'] ?></h5>
                                        <p>Màu sắc: <?= $value['color_name'] ?></p>
                                        <p>Kích thước: <?= $value['size_name'] ?></p>
                                    </div>
                                    <div> <?= $value['sale_price'] > 0 ?
                                                ' <p class="col-lg-12 text-end d-flex flex-column m-0 p-0">' . number_format($value['base_price'], 0, 0.0)  . ' VNĐ <span class="text-decoration-line-through ">' . number_format($value['sale_price'], 0, 0.0) . ' VNĐ</span></p>'
                                                : ' <p class="col-lg-12 text-end d-flex flex-column p-0">' . number_format($value['sale_price'], 0, 0.0)  . ' VNĐ </p>' ?></div>
                                </div>
                            </div>
                        <?php
                            if (!$value['sale_price'] > 0) {
                                $total_money += $value['sale_price'] * $value['quantity'];
                            } else {
                                $total_money += $value['base_price'] * $value['quantity'];
                            }
                        }
                        ?>
                    </div>
                    <hr>
                    <?=
                    isset($result) ? '
                    <div class="mt-3 alert alert-info">
                        ' . $result . '
                    </div> ' : '';
                    ?>
                    <form action="<?= _HOST ?>voucher/check_voucher" method="post">
                        <div class="row">
                            <div class="col-lg-8">
                                <input name="voucher" type="text" class="form-control" style="font-weight: bold;" placeholder="Mã giảm giá">
                                <input name="total_price" type="text" value="<?= $total_money + $ship ?>" class="form-control" style="font-weight: bold;" placeholder="Mã giảm giá">
                            </div>
                            <div class="col-lg-4">
                                <button type="submit" class="col-12 btn btn-custom btn-block1 m-0 p-1.5">ÁP DỤNG</button>
                            </div>
                            <p class="d-flex justify-content-between mt-3">Tổng tiền <span><?= number_format($total_money, 0, 0.0) ?> VND</span></p>
                            <p class="d-flex justify-content-between">Phí vận chuyển <span><?= number_format($ship, 0, 0.0) ?> VND</span></p>
                            <hr>
                            <p class="d-flex justify-content-between fw-bold">Tổng <span><?= isset($total_price_add_voucher) ? $total_price_add_voucher : number_format($total_money + $ship, 0, 0.0) ?> VND</span></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
    </div>