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
            'payment_method' => $item['payment_method'],
            'user_name' => $item['user_name'],
            'phone_number' => $item['phone_number'],
            'address' => $item['address'],
            'total_money' => $item['total_money'],
            'voucher_description' => $item['voucher_description'],
            'products' => [],
        ];
    }

    $groupedOrders[$orderId]['products'][] = [
        'name' => $item['name'],
        'color_name' => $item['color_name'],
        'size_name' => $item['size_name'],
        'quantity' => $item['quantity'],
        'price' => $item['price'],
    ];
}
// echo '<pre>';
// var_dump($order);
// echo '</pre>';
$groupedOrders = array_values($groupedOrders);
?>
<div class="container-fluid">
    <table id="sortableTable" class="table table-striped table-bordered text-center">
        <thead>
            <tr class=" bg-primary text-white ">
                <th>STT</th>
                <th style="width:300px">Thông tin người mua</th>
                <th>Thông tin sản phẩm</th>
                <th style="width:200px">Thông tin đơn hàng</th>
                <th>Tổng tiền</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($groupedOrders as $key => $order) {
            ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td class="text-start">
                        <p><strong>Tên: </strong> <?= $order['user_name'] ?></p>
                        <p><strong>Số điện thoại: </strong> <?= $order['phone_number'] ?></p>
                        <p><strong>Địa chỉ: </strong> <?= $order['address'] ?></p>
                    </td>
                    <td class="p-0">
                        <?php
                        foreach ($order['products'] as $product) {
                        ?>
                            <div class="border-top text-start px-2">
                                <p><strong>Tên: </strong><?= ' x' . $product['quantity'] . ' - ' . $product['name']   ?> </p>
                                <p><strong>Phân loại: </strong><?= $product['color_name'] . '/' . $product['size_name'] ?></p>
                            </div>
                        <?php
                        }
                        ?>
                    </td>
                    <td class="text-start">
                        <p><strong>Ngày mua: </strong><?= $order['date'] ?></p>
                        <p><strong>Phương thức thanh toán: </strong><?= $order['payment_method'] ?></p>
                        <?php
                        if (isset($order['voucher_description'])) {
                            echo '<p><strong>Voucher: </strong>' . $order['voucher_description'] . '</p>';
                        }
                        ?>
                    </td>
                    <td><?= number_format($order['total_money'], 0, 0.0) ?> VNĐ</td>
                    <td><?php echo $order['status'];
                        switch ($order['status']) {
                            case 'Pending':
                                $text = '<div><a class="btn btn-primary" href="' . _HOST . 'admin/order/set-status/' . $order['order_id'] . '/Confirmed">Xác nhận</a></div>';
                                break;
                            case 'Confirmed':
                                $text = '<div><a class="btn btn-primary" href="' . _HOST . 'admin/order/set-status/' . $order['order_id'] . '/Shipped">Vận chuyển</a></div>';
                                break;
                            default:
                                $text = '';
                                break;
                        }
                        echo isset($text) ? $text : '';
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>