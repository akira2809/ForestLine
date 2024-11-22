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
</style>
<article>
    <div class="container">
        <div class="image">
            <img class="image-fluid w-100" src="z4463558122016_bfef450d91a5399ebc2fade884caab82_97d2f0e768cb4543a22b4593107e3d3c.webp" alt="">
        </div>
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
                            <span>179.000đ</span>
                            <span><del>200.000đ</del></span>
                        </div>
                    </div>
                <?php
                } ?>


            </div>

            <div class="col mt-2 d-flex align-items-center justify-content-center">
                <div class="btn border">XEM THÊM</div>
            </div>
</article>