<style>
    body {
        background-color: #f6ffec;
    }

    .navbar-custom {
        background-color: #718355 !important;
    }

    .navbar-brand {
        /* font-family: "Cormorant Garamond", serif; */
        font-weight: 700;
        letter-spacing: 9px;
    }

    .saleprice {
        text-decoration: line-through;
        font-size: 16px;
        color: grey;
    }
</style>
<article>
    <div class="container">
        <div class="product mt-5">
            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 g-3 sptt">
                <?php foreach ($list_product as $product) {
                ?>
                    <div class="col">
                        <div class="box">
                            <a href="<?= _HOST . 'detail/' . $product['product_id'] ?>">
                                <img
                                    src="./uploads/<?= $product['main_image'] ?>"
                                    alt=""
                                    class="img-fluid" />
                            </a>
                            <p><?= $product['name'] ?> </p>
                            <?= $product['sale_price'] > 0 ?
                                ' <p style="color: #FF0000;">' . number_format($product['base_price'], 0, 0.0)  . ' VNĐ <span class="saleprice">' . number_format($product['sale_price'], 0, 0.0) . ' VNĐ</span></p>'
                                : '<p style="color: #FF0000;">' . number_format($product['sale_price'], 0, 0.0)  . ' VNĐ </p>' ?>
                        </div>
                    </div>
                <?php
                } ?>


            </div>

            <div class="col mt-2 d-flex align-items-center justify-content-center">
                <div class="btn border">XEM THÊM</div>
            </div>
</article>