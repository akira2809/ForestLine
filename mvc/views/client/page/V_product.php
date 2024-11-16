<main>
    <section>
        <div class="container">
            <?php
            foreach ($product as $key => $value) {
            ?>
                <div class="product">
                    <div class="imageProduct">
                        <img src="../../<?= $value['image_pro'] ?>" alt="">
                    </div>
                    <div class="contentProduct">
                        <p class="nameProduct"><?= $value['name_pro'] ?></p>
                        <p class="priceProduct"><?= $value['price_pro'] ?></p>
                    </div>
                    <div class="btnProduct">
                        <a href="#">Thêm giỏ hàng</a>
                        <a href="#">Mua ngay</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>
</main>