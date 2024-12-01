<style>
    :root {
        --main-color: #718355;
        --second-color: #CFE1B9;
        --background-color: #E9F5DB;
        --text-color: #000;
        --price-color: #FF0000;
    }

    body {
        color: #718355;
        background-color: #E9F5DB;
        font-family: "Quicksand", serif;
        margin: 0;
        padding: 0;
    }

    .bgp {
        background-color: #CFE1B9;
    }

    .navbar-custom {
        background-color: #718355 !important;
    }



    .saleprice {
        text-decoration: line-through;
        font-size: 13px;
        color: grey;
    }

    .btn-custom button {
        background-color: #fff;
        color: #000;
        border: none;
    }

    .border-costume {
        border-left: 1px solid #718355;
    }

    .btn-block1 {
        background-color: var(--second-color);
        color: var(--text-color);
    }

    .btn-block1:hover {
        background-color: var(--main-color);
        color: var(--background-color);
    }

    img {
        width: 100%;
        height: auto;
    }
</style>

<?php
// unset($_SESSION['cart']);
// print_r($_SESSION['cart']);
?>
<div class="container p-0">
    <h2 class="mt-3">Giỏ hàng</h2>
    <hr>
    <div class="row m-0 p-0">
        <div class="col-lg-8 col-sm-12">
            <?php
            if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                $total_money = 0;
                $ship = 25000;
                foreach ($_SESSION['cart'] as $key => $value) {
            ?>
                    <div class="row">
                        <img class="col-lg-5" src="<?= _HOST . 'uploads/' . $value['main_image'] ?>" alt="">
                        <div class="col-lg-5 col-sm-6 m-0 d-flex justify-content-between flex-column">
                            <div>
                                <h4><?= $value['name'] ?></h4>
                                <?= $value['sale_price'] > 0 ?
                                    ' <p>' . number_format($value['base_price'], 0, 0.0)  . ' VNĐ / <span class="saleprice">' . number_format($value['sale_price'], 0, 0.0) . ' VNĐ</span></p>'
                                    : '<p>' . number_format($value['sale_price'], 0, 0.0)  . ' VNĐ </p>' ?>

                                <p>Màu sắc: <span><?= $value['color_name'] ?></span></p>
                                <p>Kích thước: <span><?= $value['size_name'] ?></span></p>
                            </div>
                            <div class="col-sm-6 d-flex flex-column">
                                <form action="<?= _HOST . 'cart/update-cart/' . $key ?>" method="post">
                                    <div class="col-4 btn-group btn-custom mt-auto">
                                        <input type="submit" name="desc" class="btn btn-success" value="-" />
                                        <input type="text" class="border border-light text-center" id="quantity" name="quantity" value="<?= $value['quantity'] ?>" readonly />
                                        <input type="submit" name="asc" class="btn btn-success" value="+" />
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-6 text-end d-flex justify-content-between flex-column">
                            <div>
                                <i class="fa-solid fa-pencil"></i>
                                <i class="fa-regular fa-heart px-3"></i>
                                <a href="<?= _HOST . 'cart/remove-cart/' . $key ?>">
                                    <i class="fa-solid fa-xmark"></i>
                                </a>

                            </div>
                            <h5 class="col-sm-12 d-flex flex-column"><?php
                                                                        if (!$value['sale_price'] > 0) {
                                                                            echo number_format($value['sale_price'] * $value['quantity'], 0, 0.0);
                                                                        } else {
                                                                            echo number_format($value['base_price'] * $value['quantity'], 0, 0.0);
                                                                        }
                                                                        ?></h5>
                        </div>
                    </div>
                    <hr>
            <?php
                }
            } else {
                echo isset($result) ? '
                <div class="mt-3 alert alert-info">
                    ' . $result . '
                </div>
                ' : '<div class="mt-3 alert alert-info">
                    Giỏ hàng trống 
                </div>';
            }
            if (!$value['sale_price'] > 0) {
                $total_money += $value['sale_price'] * $value['quantity'];
            } else {
                $total_money += $value['base_price'] * $value['quantity'];
            }
            ?>

        </div>
        <div class="col-lg-4 col-sm-12  mt-3">
            <p class="text-left bgp p-3">THÔNG TIN ĐƠN HÀNG</p>
            <p class="d-flex justify-content-between">Tổng tiền <span><?= number_format($total_money, 0, 0.0) ?> VND</span></p>
            <p class="d-flex justify-content-between">Phí vận chuyển <span><?= number_format($ship, 0, 0.0) ?> VND</span></p>
            <p class="d-flex justify-content-between">Tổng <span><?= number_format($total_money + $ship, 0, 0.0) ?> VND</span></p>
            <a href="<?= _HOST ?>/checkout">
                <button type="button" class="col-12 btn btn-custom btn-block1">Tiến hành thanh toán</button>
            </a>
            <p class="text-center pt-3">Hoặc</p>
            <button type="button" class="col-12 btn btn-dark btn-block">PayPal</button>
        </div>
    </div>
    <hr>
    <!-- có thể bạn sẽ thích  -->
    <div class="container">
        <h2>Có thể bạn sẽ thích
            <span class="btn-group btn-custom">
                <button type="button" class="btn btn-success fw-bolder">
                    < </button>
                        <button type="button" class="btn btn-success fw-bolder">></button>
            </span>
        </h2>
        <div class="row m-0 p-0">
            <div class="col-lg-3 col-sm-3 m-0">
                <img src="./public/imgs/spthanhtoan.png" alt="">
                <p class="fw-bolder">Áo thun</p>
                <p class="text-dark text-center fw-bolder">Tên áo</p>
                <p style="color: var(--price-color);">139000 VND <span class="saleprice">187000 VND</span></p>
            </div>
            <div class="col-lg-3 col-sm-3 m-0">
                <img class="" src="./public/imgs/spthanhtoan.png" alt="">
                <p class="fw-bolder">Áo thun</p>
                <p class="text-dark text-center fw-bolder">Tên áo</p>
                <p style="color: var(--price-color);">139000 VND <span class="saleprice">187000 VND</span></p>
            </div>
            <div class="col-lg-3 col-sm-3 m-0">
                <img src="./public/imgs/spthanhtoan.png" alt="">
                <p class="fw-bolder">Áo thun</p>
                <p class="text-dark text-center fw-bolder">Tên áo</p>
                <p style="color: var(--price-color);">139000 VND <span class="saleprice">187000 VND</span></p>
            </div>
            <div class="col-lg-3 col-sm-3 m-0">
                <img src="./public/imgs/spthanhtoan.png" alt="">
                <p class="fw-bolder">Áo thun</p>
                <p class="text-dark text-center fw-bolder">Tên áo</p>
                <p style="color: var(--price-color);">139000 VND <span class="saleprice">187000 VND</span></p>
            </div>
        </div>
        <div class="row m-0 p-0">
            <div class="col-lg-3 col-sm-3 m-0">
                <img src="./public/imgs/spthanhtoan.png" alt="">
                <p class="fw-bolder">Áo thun</p>
                <p class="text-dark text-center fw-bolder">Tên áo</p>
                <p style="color: var(--price-color);">139000 VND <span class="saleprice">187000 VND</span></p>
            </div>
            <div class="col-lg-3 col-sm-3 m-0">
                <img class="" src="./public/imgs/spthanhtoan.png" alt="">
                <p class="fw-bolder">Áo thun</p>
                <p class="text-dark text-center fw-bolder">Tên áo</p>
                <p style="color: var(--price-color);">139000 VND <span class="saleprice">187000 VND</span></p>
            </div>
            <div class="col-lg-3 col-sm-3 m-0">
                <img src="./public/imgs/spthanhtoan.png" alt="">
                <p class="fw-bolder">Áo thun</p>
                <p class="text-dark text-center fw-bolder">Tên áo</p>
                <p style="color: var(--price-color);">139000 VND <span class="saleprice">187000 VND</span></p>
            </div>
            <div class="col-lg-3 col-sm-3 m-0">
                <img src="./public/imgs/spthanhtoan.png" alt="">
                <p class="fw-bolder">Áo thun</p>
                <p class="text-dark text-center fw-bolder">Tên áo</p>
                <p style="color: var(--price-color);">139000 VND <span class="saleprice">187000 VND</span></p>
            </div>
        </div>
    </div>
    <hr>
    <!-- Chương trình ưu đãi -->
    <div class="container py-3">
        <div class="row m-0 p-0 text-center">
            <div class="col-4 m-0">
                <i class="d-flex justify-content-center align-items-center fa-solid fa-truck" style="font-size: 3rem;"></i>
                <h5>MIỄN PHÍ VẬN CHUYỂN</h5>
                <p>Cộng thêm, gia hạn trả hàng miễn phí</p>
            </div>
            <div class="col-4 m-0">
                <i class="d-flex justify-content-center align-items-center fa-solid fa-gift" style="font-size: 3rem;"></i>
                <h5>QUÀ TẶNG</h5>
                <p>Sự bền vững bên nhau tăng điểm hoàn thiện mới</p>
            </div>
            <div class="col-4 m-0">
                <i class="d-flex justify-content-center align-items-center fa-solid fa-credit-card" style="font-size: 3rem;"></i>
                <h5>THẺ QUÀ TẶNG ÁO TRUYỀN THỐNG</h5>
                <p>Thanh toán thuận lợi kèm may mắn</p>
            </div>
        </div>
        <hr>