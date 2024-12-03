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

    .btn-cancel, .btn-rating:hover {
        border: var(--main-color) solid 1px;
        background: linear-gradient(to left, #fff 50%, var(--main-color) 50%);
        background-size: 200% 100%;
        background-position: left;
        color: white;
        transition: all 0.6s ease;
    }

    .btn-cancel, .btn-rating {
        background-position: right bottom;
        color: var(--main-color);
        border: var(--main-color) solid 1px;
    }

    .col-5ths {
        flex: 0 0 20%;
        /* 100% / 5 */
        max-width: 20%;
    }
    div.stars {
        width: 270px;
        display: inline-block;
      }

      input.star {
        display: none;
      }

      label.star {
        float: right;
        padding: 0.1rem;
        font-size: 12px;
        color: #444;
        transition: all 0.2s;
      }

      input.star:checked ~ label.star:before {
        content: "\f005";
        color: #fd4;
        transition: all 0.25s;
      }

      input.star-5:checked ~ label.star:before {
        color: #fe7;
      }

      input.star-1:checked ~ label.star:before {
        color: #f62;
      }

      label.star:before {
        content: "\f006";
        font-family: FontAwesome;
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
            'total_money' => $item['total_money'],
            'voucher_id' => $item['voucher_id'],
            'products' => [],
        ];
    }

    $groupedOrders[$orderId]['products'][] = [
        'name' => $item['name'],
        'product_id' => $item['product_id'],
        'order_detail_id' => $item['order_detail_id'],
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
                                            echo 'Đơn hàng đã hủy';
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
                                    <?php
                                    if ($order['status'] == 'Pending') {
                                    ?>
                                        <a onclick="return confirm('Bạn chắc chắn hủy đơn hàng này không')" href="<?= _HOST . 'checkout/cancel-order/' . $order['order_id'] ?>" class="btn-cancel p-2 d-inline-block text-decoration-none">Hủy đơn hàng</a>
                                    <?php
                                    } elseif ($order['status'] == 'Delivered') {
                                    ?>
                                      <button onclick="showReviewPopup('<?= $product['order_detail_id']?>','<?= $product['product_id']?>')"  class="btn-rating p-2 d-inline-block text-decoration-none">Đánh giá sản phẩm</button>
                                    <?php
                                    } elseif ($order['status'] == 'Shipped') {
                                    ?>
                                    <button class="btn-rating p-2 d-inline-block text-decoration-none">Đã nhận được hàng</button>
                                    <?php 
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>
                            <div class="row-fluid">

                            <div class="col-lg-12 p-2 col-sm-12 text-end py-2">
                                    <h5><span style="color: var(--text-color);">Tổng tiền:</span> <?= number_format($order['total_money'], 0, 0.0) ?> VND</h5>
                    
                                </div>
                            </div>
                        </div>
                    <?php
                        $i++;
                    }
                    ?>
                    <!-- Popup Đánh Giá -->
<div id="reviewPopup" class="modal" tabindex="-1" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Đánh giá sản phẩm</h5>
                <button type="button" class="close" onclick="closeReviewPopup()" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="reviewForm" method="post" action="<?= _HOST ?>review/add-review" >
                    <div class="form-group">
                        <label for="reviewText">Đánh giá của bạn:</label>
                        <textarea id="reviewText" name="content" class="form-control" rows="3" placeholder="Nhập đánh giá của bạn"></textarea>
                    </div>

                    <input type="text" name="order_detail_id" id="order_detail_id">
                    <input type="text" name="product_id" id="product_id">
                    <div class="form-group">
                        <label for="reviewImage">Chọn ảnh:</label>
                        <input type="file" name="images[]" id="reviewImage" class="form-control" accept="image/*" multiple>
                    </div>
                    
                    <div class="stars mt-2">
                        <input
                        class="star star-5"
                        id="star-5"
                        type="radio"
                        name="star"
                        value="5"
                        />
                        <label class="star star-5" for="star-5"></label>
                        <input
                        class="star star-4"
                        id="star-4"
                        type="radio"
                        name="star"
                        value="4"
                        />
                        <label class="star star-4" for="star-4"></label>
                        <input
                        class="star star-3"
                        id="star-3"
                        type="radio"
                        name="star"
                        value="3"
                        />
                         <label class="star star-3" for="star-3"></label>
                        <input
                        class="star star-2"
                        id="star-2"
                        type="radio"
                        name="star"
                        value="2"
                        />
                        <label class="star star-2" for="star-2"></label>
                        <input
                        class="star star-1"
                        id="star-1"
                        type="radio"
                        name="star"
                        value="1"
                        />
                        <label class="star star-1" for="star-1"></label>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary mt-3">Gửi đánh giá</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
                </div>


            </div>
        </div>

    </div>
</body>
<script>
    function showReviewPopup(orderId,productId) {
        document.getElementById('reviewPopup').style.display = 'block';
        window.currentOrderId = orderId;
        document.getElementById('product_id').value = productId
        document.getElementById('order_detail_id').value = orderId
    }

    function closeReviewPopup() {
        document.getElementById('reviewPopup').style.display = 'none';
    }
   closeReviewPopup();
</script>
