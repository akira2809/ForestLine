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

    .navbar-brand {
        font-family: 'Cormorant Garamond', serif;
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 8px;
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

    /* .number-text-home {
            font-family: 'Londrina Shadow', cursive;
            font-size: 200px;
            /* Kích thước font chữ mặc định cho desktop
        }

        /* Điều chỉnh font chữ cho màn hình nhỏ */
    /* @media (max-width: 576px) {
            .number-text-home {
                font-size: 80px !important;
            }
        }  */
</style>

<div class="container p-0">
    <h2 class="mt-3">Giỏ hàng</h2>
    <hr>
    <div class="row m-0 p-0">
        <div class="col-lg-8 col-sm-12">
            <div class="row">
                <img class="col-lg-5" src="./public/imgs/spthanhtoan.png" alt="">
                <div class="col-lg-5 col-sm-6 m-0 d-flex justify-content-between flex-column">
                    <div>
                        <h4>Polo Outerity Collection TÉ / Black</h4>
                        <p>139.000 VNĐ <span class="saleprice">159.000 VNĐ</span></p>
                        <p>Màu sắc: Đen</p>
                        <p>Kích thước: M</p>
                    </div>
                    <div class="col-sm-6 d-flex flex-column">
                        <div class="col-4 btn-group btn-custom mt-auto">
                            <button type="button" class="btn btn-success">-</button>
                            <button type="button" class="btn btn-success">1</button>
                            <button type="button" class="btn btn-success">+</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 text-end d-flex justify-content-between flex-column">
                    <div>
                        <i class="fa-solid fa-pencil"></i>
                        <i class="fa-regular fa-heart px-3"></i>
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <h5 class="col-sm-12 d-flex flex-column">139.000 VND</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12  mt-3">
            <p class="text-left bgp p-3">THÔNG TIN ĐƠN HÀNG</p>
            <p class="d-flex justify-content-between">Tổng tiền <span>139000 VND</span></p>
            <p class="d-flex justify-content-between">Phí vận chuyển <span>0 VND</span></p>
            <p class="d-flex justify-content-between">Tổng <span>139000 VND</span></p>
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