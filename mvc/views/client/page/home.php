<!-- Loading Animation -->
<div id="loading" class="loading-container">

    <div class="wrapper">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
        <div class="shadow"></div>
    </div>
</div>
<!-- Banner Carousel -->
<div id="carouselExample" class="carousel slide container-fluid p-0" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active position-relative bg-light" style="height: 800px;">
            <img src="public/imgs/bannerhome.jpg" class="img-fluid position-absolute w-100 h-100" alt="Banner 1">
        </div>
        <div class="carousel-item position-relative bg-light" style="height: 800px;">
            <img src="public/imgs/z4463558183726_a498b6c80488a460beb80665e52bc04b_965c8e758cf84fa3b58088295a7fb274.webp"
                class="img-fluid position-absolute w-100 h-100" alt="Banner 2">
        </div>
        <div class="carousel-item position-relative bg-light" style="height: 800px;">
            <img src="public/imgs/z4463558122016_bfef450d91a5399ebc2fade884caab82_97d2f0e768cb4543a22b4593107e3d3c.webp"
                class="img-fluid position-absolute w-100 h-100" alt="Banner 2">
        </div>
    </div>
    <button class="custom-carousel-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="custom-carousel-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="custom-carousel-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="custom-carousel-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
</div>

<style>
    /* Tùy chỉnh nút điều hướng carousel */
    .custom-carousel-prev,
    .custom-carousel-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        background-color: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 10;
        transition: all 0.3s ease;
    }

    .custom-carousel-prev {
        left: 20px;
    }

    .custom-carousel-next {
        right: 20px;
    }

    .custom-carousel-prev:hover,
    .custom-carousel-next:hover {
        background-color: rgba(255, 255, 255, 0.5);
    }

    .custom-carousel-prev-icon,
    .custom-carousel-next-icon {
        width: 30px;
        height: 30px;
        background-size: 100%;
        background-position: center;
        background-repeat: no-repeat;
        filter: invert(1);
    }

    /* Tùy chỉnh nút indicator carousel */
    .carousel-indicators {
        position: absolute;
        bottom: 20px;
        /* Điều chỉnh khoảng cách nút indicators với phần đáy */
        left: 90%;

        z-index: 10;
        display: flex;
        justify-content: center;
        gap: 10px;
        /* Khoảng cách giữa các nút */
    }

    .carousel-indicators button {
        width: 70px;
        /* Chiều rộng 40px */
        height: 0px;
        /* Chiều cao 40px */
        border-radius: 10%;
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        /* Bỏ đường viền */
        transition: all 0.3s ease;
    }

    .carousel-indicators button:hover {
        background-color: rgba(255, 255, 255, 0.8);
        /* Tăng độ sáng khi hover */
    }

    .carousel-indicators button.active {
        background-color: white;
    }
</style>


<!-- Danh sách sản phẩm -->
<div class="container my-5">
    <div class="row text-center">
        <div class="col-md-3">
            <img src="./public/imgs/Green-Women_s-Recycled-Polyester-Rain-Jacket-TCW4649-2277_1.jpg" class="img-fluid"
                alt="Đồ nữ giới - Mới nhất">
            <p class="mt-2">Đồ nữ giới</p>
            <p class="text-muted">Mới nhất</p>
        </div>
        <div class="col-md-3">
            <img src="./public/imgs/Brown-Eco-Friendly-Mock-Neck-Knit-Sweater-TCW5956-3453_4_c4199c2a-50a8-436b-b8fa-d1941acd155b.jpg"
                class="img-fluid" alt="Đồ nữ giới - Bán chạy nhất">
            <p class="mt-2">Đồ nữ giới</p>
            <p class="text-muted">Bán chạy nhất</p>
        </div>
        <div class="col-md-3">
            <img src="./public/imgs/Blue-Mens-Button-Up-Shirt-TCM4652-3562_4_0d553e6a-7689-4a5c-af07-df319f7c50eb.jpg"
                class="img-fluid" alt="Đồ nam giới - Mới nhất">
            <p class="mt-2">Đồ nam giới</p>
            <p class="text-muted">Mới nhất</p>
        </div>
        <div class="col-md-3">
            <img src="./public/imgs/Multi-Organic-Cotton-Knit-Sweater-TCM6066-3671_4_7d2c7342-3644-41b4-972d-eb71dcd228e7.jpg"
                class="img-fluid" alt="Đồ nam giới - Bán chạy nhất">
            <p class="mt-2">Đồ nam giới</p>
            <p class="text-muted">Bán chạy nhất</p>
        </div>
    </div>
</div>

<!-- Phần đếm số lượng cây đã trồng -->
<div class="container-fluid py-5" style="background-color: #718355;">
    <div class="text-center text-white">
        <h2 class="mb-3">Cùng nhau Chúng ta cùng trồng cây nhé</h2>
        <h1 class="fw-bold number-text-home" id="counter">105,166,522</h1>
        <p>Chúng tôi xây dựng dự án thiện nguyện giúp đỡ môi trường sống của chúng. Dự định trong năm 2030 sẽ là 1
            tỷ cây sẽ được trồng</p>
        <a href="#" class="text-white text-decoration-underline">Tìm hiểu thêm tại đây</a>
    </div>
</div>

<section class="container my-5 py-5">
    <div class="row align-items-center">
        <!-- Phần văn bản -->
        <div class="col-md-6">
            <h2 class="display-4 fw-bold" style="font-family: 'Londrina Shadow', cursive;">TALK Trash</h2>
            <h4 class="fw-bold mb-3">Tính bền vững = Tính Minh bạch</h4>
            <p class="text-primary">Tìm hiểu thêm tại đây</p>
            <p>
                Ngành công nghiệp may mặc tạo ra rất nhiều rác thải—chính xác là 10,5 triệu tấn mỗi năm. Chúng tôi
                đang giúp chuyển hướng một số rác thải khỏi bãi chôn lấp, đồng thời bảo tồn nước và các nguồn tài
                nguyên quan trọng. Bằng cách trồng cây cho mỗi mặt hàng được mua, chúng tôi chứng minh với thế giới
                rằng tính bền vững có thể và nên dễ dàng như mặc một chiếc áo phong.
            </p>
            <p>
                Sau đây là một bức ảnh chụp nhanh về tác động mà bạn đã giúp tạo ra cho đến nay trong năm nay:
            </p>

            <!-- Thống kê -->
            <div class="d-flex justify-content-start mt-4">
                <div class="text-center me-4">
                    <i class="fas fa-water fs-4 text-primary"></i>
                    <p class="fw-bold mb-0">200 MMG</p>
                </div>
                <div class="text-center me-4">
                    <i class="fas fa-leaf fs-4 text-success"></i>
                    <p class="fw-bold mb-0">245 MM l</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-recycle fs-4 text-warning"></i>
                    <p class="fw-bold mb-0">1 MM kg</p>
                </div>
            </div>
        </div>

        <!-- Phần hình ảnh -->
        <div class="col-md-6">
            <img src="./public/imgs/rubishsea.jpg" alt="Image of sustainability" class="img-fluid rounded"
                style="width: 900px;">
        </div>
    </div>
</section>
<!-- Section sản phẩm tiêu biểu -->
<section class="position-relative text-center bg-dark text-white py-5">
    <!-- Background Image Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background-image: url('./public/imgs/fashion-store-display-i5s6es944n29q9sp-4051283188.jpg'); background-size: cover; background-position: center; opacity: 0.6;">
    </div>
    <!-- Content Overlay -->
    <div class="container position-relative z-1">
        <div class="row align-items-center">
            <!-- Left Image -->
            <div class="col-md-6 d-flex justify-content-center mb-5 mb-md-1 position-relative">
                <div class="video-container position-relative">
                    <video id="myVideo"
                        src="./public/video/y2meta.net_720p-unboxing-zara-package-wide-trousers-and-jacquard-stretch-shirt-unboxing-zara-zaraman-outfit.mp4"
                        autoplay muted loop playsinline class="img-fluid w-75" alt="Sản phẩm tiêu biểu">
                    </video>
                    <button class="custom-play-pause-btn">
                        <i class="fas fa-pause"></i>
                    </button>
                </div>
            </div>
            <!-- Right Image and Text Content -->
            <div class="col-md-6">
                <h2 class="mb-2">OUR FAVORITE GIFTS</h2>
                <p class="mb-3">FOR GIRLS</p>
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <!-- Indicators -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>

                    <!-- Slides -->
                    <div class="carousel-inner">
                        <!-- Slide 1 -->
                        <div class="carousel-item active">
                            <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                                <img src="./public/imgs/duy_2870_d77c4b981e2943a088c27759064b8731_master.webp"
                                    class=" custom-img" alt="Slide 1">
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="carousel-item">
                        <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                                <img src="./public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                                    class=" custom-img" alt="Slide 3">
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="carousel-item">
                            <div class="d-flex justify-content-center align-items-center" style="height: 400px;">
                                <img src="./public/imgs/apo7005_1_b14dbf0c3ae64d3380dfdd3775c0ac30_master.webp"
                                    class=" custom-img" alt="Slide 3">
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#productCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                </div>
            </div>

        </div>

        <style>
            .custom-img {
                max-width: 100%;
                /* Đảm bảo ảnh không vượt quá khung chứa */
                height: 100%;
                /* Giữ chiều cao của ảnh bằng khung */
                object-fit: fill;
                /* Giữ toàn bộ ảnh trong khung mà không bị cắt */
                border-radius: 10px;
                /* Bo góc ảnh */
            }

            .carousel-item {
                height: 400px;
                /* Đặt chiều cao cố định cho các slide */
            }


            .video-container {
                position: relative;
                width: 85%;
                /* Matching the video width */
            }

            .custom-play-pause-btn {
                position: absolute;
                bottom: 20px;
                left: 70px;
                background-color: rgba(0, 0, 0, 0.5);
                color: white;
                border: none;
                border-radius: 50%;
                width: 50px;
                height: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                z-index: 10;
            }

            .custom-play-pause-btn i {
                font-size: 20px;
            }

            .custom-play-pause-btn:hover {
                background-color: rgba(0, 0, 0, 0.7);
            }
        </style>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const video = document.getElementById('myVideo');
                const playPauseBtn = document.querySelector('.custom-play-pause-btn');
                const icon = playPauseBtn.querySelector('i');

                playPauseBtn.addEventListener('click', function () {
                    if (video.paused) {
                        video.play();
                        icon.classList.remove('fa-play');
                        icon.classList.add('fa-pause');
                    } else {
                        video.pause();
                        icon.classList.remove('fa-pause');
                        icon.classList.add('fa-play');
                    }
                });
            });
        </script>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-4">
                <h2 class="fw-bold text-uppercase">Những mẫu mới nhất</h2>
                <p class="text-muted">
                    Khám phá những bộ sưu tập mới nhất với những phụ kiện gắn liền với brand của chúng tôi, và nhiều
                    hơn.
                </p>
            </div>

            <!-- Slider Section -->
            <div class="col-md-8 position-relative">
                <div id="horizontalSlider" class="carousel slide" data-bs-ride="carousel">
                    <!-- Slider Items -->
                    <div class="carousel-inner">
                        <?php
                        $chunks = array_chunk($product_new, 3); // Hiển thị 3 sản phẩm mỗi slide
                        $isActive = true;

                        foreach ($chunks as $chunk) { ?>
                            <div class="carousel-item <?= $isActive ? 'active' : '' ?>">
                                <div class="d-flex justify-content-center">
                                    <?php foreach ($chunk as $val) { ?>
                                        <div class="product-card me-3">
                                            <a href="<?= _HOST . 'detail/' . $val['product_id'] ?>">
                                                <img src="./uploads/<?= $val['main_image'] ?>" class="img-fluid rounded"
                                                    alt="<?= $val['name'] ?>">
                                                <p class="text-center mt-2"><?= $val['name'] ?></p>
                                            </a>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                            $isActive = false;
                        } ?>
                    </div>

                    <!-- Controls -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#horizontalSlider"
                        data-bs-slide="prev" style="top: 50%; transform: translateY(-50%);">
                        <span class="carousel-control-prev-icon" aria-hidden="true" aria-hidden="true"
                            style="color: black;background-color: black;border-radius: 30px;"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#horizontalSlider"
                        data-bs-slide="next" style="top: 50%; transform: translateY(-50%);">
                        <span class="carousel-control-next-icon" aria-hidden="true"
                            style="color: black;background-color: black;border-radius: 30px;"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .carousel-control-prev,
    .carousel-control-next {
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        /* Đặt chiều rộng nút tùy ý */
        height: 50px;
        /* Đặt chiều cao nút tùy ý */
        background-color: rgba(0, 0, 0, 0.5);
        /* Thêm nền nếu muốn */
        border-radius: 50%;
        /* Tùy chọn bo tròn */
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 20px;
        /* Kích thước icon tùy ý */
        height: 20px;
    }

    .carousel-item img {
        transition: transform 1s ease-in-out;
    }

    .carousel-item:hover img {
        transform: scale(1.05);
    }

    /* Tổng quan slider */
    .carousel-inner {
        display: flex;
        overflow: hidden;
        position: relative;
    }

    .carousel-item {
        display: flex;
        justify-content: center;
        transition: transform 0.5s ease-in-out;
    }

    /* Thiết kế từng sản phẩm */
    .product-card {
        flex: 0 0 40%;
        margin: 0 15px;
    }

    .product-card img {
        width: 100%;
        max-height: 500px;
        /* Đảm bảo ảnh cao */
        object-fit: cover;
        border-radius: 10px;
    }

    .product-card p {
        font-size: 16px;
        font-weight: 500;
        color: #333;
        text-align: center;
    }

    /* Nút điều hướng Prev/Next */
    .carousel-control-prev,
    .carousel-control-next {
        width: 50px;
        height: 50px;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }

    .carousel-control-prev {
        left: -30px;
    }

    .carousel-control-next {
        right: -30px;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 25px;
        height: 25px;
    }

    #counter {
        /* font-size: 3rem; */
        transition: all 0.9s ease-in-out;
    }

    /* From Uiverse.io by mobinkakei */
    .wrapper {
        width: 200px;
        height: 60px;
        position: relative;
        z-index: 1;
    }

    .circle {
        width: 20px;
        height: 20px;
        position: absolute;
        border-radius: 50%;
        background-color: black;
        left: 15%;
        transform-origin: 50%;
        animation: circle7124 .5s alternate infinite ease;
    }

    @keyframes circle7124 {
        0% {
            top: 60px;
            height: 5px;
            border-radius: 50px 50px 25px 25px;
            transform: scaleX(1.7);
        }

        40% {
            height: 20px;
            border-radius: 50%;
            transform: scaleX(1);
        }

        100% {
            top: 0%;
        }
    }

    .circle:nth-child(2) {
        left: 45%;
        animation-delay: .2s;
    }

    .circle:nth-child(3) {
        left: auto;
        right: 15%;
        animation-delay: .3s;
    }

    .shadow {
        width: 20px;
        height: 4px;
        border-radius: 50%;
        background-color: rgba(0, 0, 0, 0.9);
        position: absolute;
        top: 62px;
        transform-origin: 50%;
        z-index: -1;
        left: 15%;
        filter: blur(1px);
        animation: shadow046 .5s alternate infinite ease;
    }

    @keyframes shadow046 {
        0% {
            transform: scaleX(1.5);
        }

        40% {
            transform: scaleX(1);
            opacity: .7;
        }

        100% {
            transform: scaleX(.2);
            opacity: .4;
        }
    }

    .shadow:nth-child(4) {
        left: 45%;
        animation-delay: .2s
    }

    .shadow:nth-child(5) {
        left: auto;
        right: 15%;
        animation-delay: .3s;
    }

    .loading-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background-color: rgba(255, 255, 255, 0.8);
        Nền mờ */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        transition: opacity 0.5s ease;
    }

    .loading-container.hidden {
        opacity: 0;
        visibility: hidden;
    }

    /* CSS của hamster (wheel-and-hamster) */
    .wheel-and-hamster {
        --dur: 1s;
        position: relative;
        width: 12em;
        height: 12em;
        font-size: 14px;
    }
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counterElement = document.getElementById("counter");
        const targetNumber = parseInt(counterElement.textContent.replace(/,/g, ""), 10); // Loại bỏ dấu phẩy
        const duration = 2000; // Thời gian hiệu ứng, tính bằng mili giây
        const increment = Math.ceil(targetNumber / (duration / 16)); // Chia để tăng dần

        let currentNumber = 0;

        const updateCounter = () => {
            currentNumber += increment;
            if (currentNumber > targetNumber) {
                currentNumber = targetNumber;
            }
            counterElement.textContent = currentNumber.toLocaleString(); // Format số với dấu phẩy
            if (currentNumber < targetNumber) {
                requestAnimationFrame(updateCounter);
            }
        };

        updateCounter();
    });
    document.addEventListener("DOMContentLoaded", () => {
        const loadingContainer = document.getElementById("loading");

        // Ẩn hiệu ứng loading sau khi trang tải xong
        window.addEventListener("load", () => {
            loadingContainer.classList.add("hidden");
        });
    });

</script>