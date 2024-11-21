<style>
    :root {
        --main-color: #718355;
        --second-color: #CFE1B9;
        --background-color: #E9F5DB;
        --text-color: #000;
        --price-color: #FF0000;
    }

    body {
        color: var(--main-color);
        background-color: #E9F5DB;

        margin: 0;
        padding: 0;
    }

    .bgp {
        background-color: #CFE1B9;
    }

    .navbar-custom {
        background-color: var(--main-color) !important;
    }

    .navbar-brand {
        /* font-family: 'Cormorant Garamond', serif; */
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 8px;
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
</head>

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
                <h4 class="fw-bold mt-3">Thông tin liên lạc</h4>
                <input type="text" class="form-control" style="font-weight: bold;" placeholder="Họ và tên">
                <div class="row">
                    <div class="col-lg-8 my-3">
                        <input type="text" class="form-control" style="font-weight: bold;" placeholder="Email">
                    </div>
                    <div class="col-lg-4 my-3">
                        <input type="text" class="form-control" style="font-weight: bold;" placeholder="Số điện thoại">
                    </div>
                </div>

                <h4 class="fw-bold mt-3">Thông tin vận chuyển</h4>
                <input type="text" class="form-control" style="font-weight: bold;" placeholder="Địa chỉ">
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
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Thanh toán khi giao hàng (COD)</label>
                </div> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Chuyển khoản ví điện tử (Momo)</label>
                </div> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Chuyển khoản ngân hàng</label>
                </div> <br>
                <button type="button" class="col-12 btn btn-custom btn-block1 mt-3">Hoàn tất đơn hàng</button>
            </div>
            <div class="col-lg-4" style="color: var(--main-color);">
                <div class="row">
                    <h4>Đơn hàng của bạn</h4>
                    <div class="col-lg-6">
                        <img src="./public/imgs/spthanhtoan.png" alt="">
                    </div>
                    <div class="col-lg-6 d-flex justify-content-between flex-column">
                        <div>
                            <h5>Polo Outerity Collection TÉ / Black</h5>
                            <p>Màu sắc: Đen</p>
                            <p>Kích thước: M</p>
                        </div>
                        <p class="col-lg-12 text-end text-decoration-line-through d-flex flex-column m-0 p-0">179.000 VND</p>
                        <p class="col-lg-12 text-end d-flex flex-column p-0">139.000 VND</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-8">
                            <input type="text" class="form-control" style="font-weight: bold;" placeholder="Mã giảm giá">
                        </div>
                        <div class="col-lg-4">
                            <button type="button" class="col-12 btn btn-custom btn-block1 m-0 p-1.5">ÁP DỤNG</button>
                        </div>
                        <p class="d-flex justify-content-between mt-3">Tổng tiền <span>139000 VND</span></p>
                        <p class="d-flex justify-content-between">Phí vận chuyển <span>25000 VND</span></p>
                        <hr>
                        <p class="d-flex justify-content-between fw-bold">Tổng <span>164000 VND</span></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>