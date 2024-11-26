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
        margin: 0;
        padding: 0;

    }


    .bgp {
        background-color: #CFE1B9;
    }

    .navbar-custom {
        background-color: #718355 !important;
    }

    .list-group-item {
        font-family: 'Cormorant Garamond', serif;
        background: var(--background-color);
    }

    .list-group-item:hover {
        color: #fff;
        background-color: var(--main-color);
    }


    .list-inline a {
        color: #000;

    }

    .list-inline li {
        background: var(--second-color);
        padding: 10px 20px;

    }

    .list-inline li:hover {
        color: #fff;
        background: var(--main-color);
    }

    img {
        width: 100%;
        height: auto;
    }

    .btn-cancel:hover {
        border: var(--main-color) solid 1px;
        background: linear-gradient(to left, #fff 50%, var(--main-color) 50%);
        background-size: 200% 100%;
        background-position: left;
        color: white;
        transition: all 0.6s ease;
    }

    .btn-cancel {
        background-position: right bottom;
        color: var(--main-color);
        border: var(--main-color) solid 1px;
    }

    .col-5ths {
        flex: 0 0 20%;
        /* 100% / 5 */
        max-width: 20%;
    }
</style>
<?php
$groupedOrders = [];

foreach ($order as $item) {
    $orderId = $item['order_id'];
    if (!isset($groupedOrders[$orderId])) {
        $groupedOrders[$orderId] = [
            'order_id' => $orderId,
            'user_id' => $item['user_id'],
            'date' => $item['date'],
            'status' => $item['status'],
            'voucher_id' => $item['voucher_id'],
            'products' => [],
        ];
    }

    $groupedOrders[$orderId]['products'][] = [
        'name' => $item['name'],
        'color_name' => $item['color_name'],
        'size_name' => $item['size_name'],
        'image' => $item['main_image'],
        'quantity' => $item['quantity'],
        'price' => $item['price'],
    ];
}
?>

<body>
    <div class="container-fluid">
        <div class="row pt-5">
            <div class="col-lg-3 text-center m-0">
                <div class="list-group">
                    <ul style="list-style: none;" class="m-0 p-0">
                        <li class="list-group-item" aria-current="true">Thông tin cá nhân</li>
                        <li class="list-group-item list-group-item-action">Đơn hàng</li>
                        <li class="list-group-item list-group-item-action">Đã thích</li>
                        <li class="list-group-item list-group-item-action">
                            <a href="<?= _HOST ?>login/logout">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 px-2">
                <ul class="list-inline d-flex text-center fs-6 mb-0">
                    <li class="list-inline-item col-5ths col-md-4 m-0">Tất cả</li>
                    <li class="list-inline-item col-5ths col-md-2 m-0">Đang chờ</li>
                    <li class="list-inline-item col-5ths col-md-2 m-0">Đang giao</li>
                    <li class="list-inline-item col-5ths col-md-2 m-0">Đã hủy</li>
                    <li class="list-inline-item col-5ths col-md-2 m-0">Hoàn thành</li>
                </ul>
                <div>

                    <?php
                    $i = 0;
                    foreach ($groupedOrders as $key => $order) {
                    ?>
                        <div class="<?= $i == 0 ? '' : 'mt-5' ?> bg-light m-0  border">
                            <div style="background-color:#718355 ;" class="d-flex justify-content-between py-2 px-3 text-white">
                                <p class="m-0"><b>Ngày đặt: </b><?= $order['date'] ?></p>
                                <p class="m-0 text-end">
                                    <?php
                                    switch ($order['status']) {
                                        case 'Pending':
                                            echo 'Đang chờ xác nhận';
                                            break;
                                        case 'Confirmed':
                                            echo 'Đã được xác nhận, đang chờ vận chuyển';
                                            break;
                                        case 'Shipped':
                                            echo 'Đang vận chuyển đến bạn';
                                            break;
                                        case 'Canceled':
                                            echo 'Ban đã hủy';
                                            break;
                                        case 'Delivered':
                                            echo 'Đã hoàn thành';
                                            break;
                                    }
                                    ?>
                                </p>
                            </div>
                            <?php
                            foreach ($order['products'] as $key => $product) {
                            ?>
                                <div style="--bs-gutter-x: 0" class="row border-bottom">
                                    <div class="col-lg-2 col-sm-4 m-0 p-0">
                                        <img src="<?= _HOST . 'uploads/' . $product['image'] ?> " alt="">
                                    </div>
                                    <div class="col-lg-6 pt-3 px-3 col-sm-5">
                                        <h4><?= $product['name'] ?></h4>
                                        <p>Phân loại: <?= $product['size_name'] ?>, <?= $product['color_name'] ?></p>
                                        <p>Số lượng: x<?= $product['quantity'] ?></p>
                                    </div>
                                    <div class="col-lg-4 d-flex flex-column justify-content-center align-items-end pt-3 px-3 col-sm-3">
                                        <p><?= number_format($product['price'], 0, 0.0) ?> VNĐ</p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="row-fluid">

                                <div class="col-lg-12 col-sm-12 text-end py-2">
                                    <h5><span style="color: var(--text-color);">Tổng tiền:</span> 139.000 VND</h5>
                                    <button class="btn-cancel p-2">Hủy đơn hàng</button>
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                </div>


            </div>
        </div>

    </div>
</body>