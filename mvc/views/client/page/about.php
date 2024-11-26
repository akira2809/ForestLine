<style>
    body {
        color: #F6FFEC;
        font-family: 'Lora' 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .navbar-custom {
        background-color: #718355 !important;
    }

    .navbar-brand {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 700;
        letter-spacing: 9px;
    }

    .image-container {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .content-section {
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .content-wrapper {
        padding: 8rem 2rem;
    }

    .content-wrapper h2 {
        color: #37474f;
        font-size: 36px;
        line-height: 1.5;
        text-align: left;
        margin-bottom: 2rem;
        font-family: 'Quicksand', sans-serif;
        font-weight: 700;
        /* hoặc bold - tương đương với 700 */
    }

    .content-wrapper p {
        color: #37474f;
        font-size: 1rem;
        line-height: 1.6;
        text-align: left;
        margin-bottom: 1rem;
    }

    .gallery-section {
        padding: 60px 0;
        overflow: hidden;
        text-align: center;
    }

    .gallery-wrapper {
        margin: -20px;
    }

    .gallery-img {
        transition: transform 0.3s ease;
        width: 50%;
        height: 100%;
        object-fit: cover;
    }

    .gallery-img:hover {
        transform: scale(1.02);
        z-index: 10;
    }

    .stat-number {
        font-size: 2rem;
        font-weight: bold;
    }

    .stat-description {
        color: #6c757d;
    }

    .section-title {
        font-weight: bold;
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .section-content {
        color: #6c757d;
    }

    /* Adjust responsive behavior */
    @media (max-width: 768px) {
        .gallery-section .row {
            margin-top: 0 !important;
        }

        .gallery-section .col-3,
        .gallery-section .col-4,
        .gallery-section .col-5 {
            margin-left: 0 !important;
            padding: 10px;
        }
    }

    .divider {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        width: 1px;
        /* Độ rộng mỏng hơn */
        background-color: #ddd;
        /* Màu xám nhạt */
    }

    .gallery-img {
        transition: transform 3s ease-out;
        /* Hiệu ứng mượt */
    }
</style>


<div class="container-fluid">
    <div class="row g-0">
        <!-- Text Content - Left Side -->
        <div class="col-md-6">
            <div class="content-wrapper">
                <h2>
                    Chúng Tôi Tin Tưởng Những điều Thay Đổi Lớn Nhất Có Thể Bắt Đầu Từ Những Việc Nhỏ Nhất
                </h2>
                <p>
                    Nhỏ như việc mang túi cá nhân bên mình đến cửa hàng tạp hóa, hoặc uống từ chai nước tái sử
                    dụng—hoặc đưa ra những lựa chọn bền vững khi bạn mua sắm.
                </p>
                <p>
                    Đối với mỗi mặt hàng được mua, chúng tôi trồng cây, trong nỗ lực tái tạo hệ sinh thái, giữ
                    carbon và giảm cuộc sống chịu tác động của các cộng đồng trên khắp thế giới. Tất cả các sản
                    phẩm của chúng tôi đều được tạo ra theo phương pháp Earth-First, nghĩa là hàng được sản xuất
                    trong điều kiện làm việc công bằng, an toàn và sử dụng vật liệu tái chế và có nguồn gốc bền
                    vững.
                </p>
            </div>
        </div>
        <!-- Image - Right Side -->
        <div class="col-md-6">
            <div class="image-section">
                <img src="<?= _HOST ?>public/imgs/SustainabilityPage_Hero_Image_FA_740x540_crop_center.webp" alt="Main image"
                    style="width: 100%; height: 100%; object-fit: cover;" />
            </div>
        </div>
    </div>
</div>
<section class="gallery-section position-relative">
    <div class="container-fluid px-4 gallery-container">
        <div class="gallery-wrapper">
            <!-- First row -->
            <div class="row justify-content-center">
                <div class="col-4 position-relative" style="margin-top: 20px; z-index: 1;">
                    <img src="<?= _HOST ?>public/imgs/tree.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Sticks in water" />
                </div>
                <div class="col-5 position-relative" style="margin-left: -40px; z-index: 2;">
                    <img src="<?= _HOST ?>public/imgs/mainwithboat.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Sprout in soil" />
                </div>
            </div>

            <!-- Second row -->
            <div class="row justify-content-center" style="margin-top: -60px;">
                <div class="col-3 offset-2 position-relative" style="z-index: 3;">
                    <img src="<?= _HOST ?>public/imgs/river.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Worker in mangrove" />
                </div>
                <div class="col-4 position-relative" style="margin-left: 80px; z-index: 4;">
                    <img src="<?= _HOST ?>public/imgs/leaf.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Children at beach" />
                </div>
            </div>

            <!-- Third row -->
            <div class="row justify-content-center" style="margin-top: -40px;">
                <div class="col-3 position-relative" style="z-index: 5;">
                    <img src="<?= _HOST ?>public/imgs/AboutUs_04_Collage_Image_04_Desktop_FA.avif"
                        class="img-fluid rounded shadow-sm gallery-img" alt="Children by wall" />
                </div>
                <div class="col-5 position-relative" style="margin-left: 40px; z-index: 6;">
                    <img src="<?= _HOST ?>public/imgs/monkey.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Boat in water" />
                </div>
            </div>

            <!-- Fourth row -->
            <div class="row justify-content-center" style="margin-top: -80px;">
                <div class="col-4 offset-2 position-relative" style="z-index: 7;">
                    <img src="<?= _HOST ?>public/imgs/farmer.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Detailed leaf" />
                </div>
                <div class="col-4 position-relative" style="margin-left: 40px; z-index: 8;">
                    <img src="<?= _HOST ?>public/imgs/AboutUs_04_Collage_Image_07_Desktop_FA.jpg"
                        class="img-fluid rounded shadow-sm gallery-img" alt="Aerial landscape" />
                </div>
            </div>
        </div>
    </div>
</section>
<aside>
    <div class="container text-center py-5">
        <div class="row mb-5">
            <div class="col-md-4">
                <p class="stat-number">100M+</p>
                <p class="stat-description">Trees planted to date</p>
            </div>
            <div class="col-md-4">
                <p class="stat-number">75M+</p>
                <p class="stat-description">Communities helped</p>
            </div>
            <div class="col-md-4">
                <p class="stat-number">75M+</p>
                <p class="stat-description">Hours of work provided</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="section-title">Tạo ra tác động lâu dài</h5>
                <p class="section-content">
                    Vật liệu rất quan trọng. Chúng quan trọng khi nói đến tuổi thọ của quần áo, hoặc cách chúng ta
                    cảm
                    thấy khi mặc chúng. Nhưng quan trọng nhất, chúng quan trọng đối với trái đất của chúng ta. Đó là
                    lý
                    do tại sao chúng tôi chỉ cung cấp các loại vải thoải mái và bền vững nhất trên thị trường. Cho
                    dù đó
                    là áo khoác được làm từ 99% vật liệu có thể phân hủy sinh học hay đồ thể thao giúp chuyển hướng
                    chất
                    thải khỏi bãi chôn lấp, tất cả các sản phẩm của chúng tôi đều được sản xuất với mục đích bảo vệ
                    trái
                    đất.
                </p>
            </div>
            <div class="col-md-6">
                <h5 class="section-title">Về cơ chế</h5>
                <p class="section-content">
                    Bằng cách chỉ sử dụng vật liệu hữu cơ hoặc tái chế — như TENCEL™ lyocell, cotton hữu cơ hoặc
                    polyester tái chế REPREVE® — chúng tôi có thể cắt giảm lượng nước thải và khí thải phát sinh từ
                    quá
                    trình sản xuất hàng may mặc thông thường. Và mặc dù 98% tất cả các sản phẩm của chúng tôi đều
                    thân
                    thiện với môi trường, chúng tôi luôn tìm cách đổi mới với các vật liệu và phương pháp mới, như
                    nylon
                    tái chế, cotton và vải nhuộm tự nhiên hoặc không nhuộm.
                </p>
            </div>
        </div>
</aside>

<section class="gallery-section position-relative">
    <div class="container-fluid px-4 gallery-container">
        <div class="gallery-wrapper">
            <!-- First row -->
            <div class="row justify-content-center">
                <div class="col-4 position-relative" style="margin-top: 20px; z-index: 1;">
                    <img src="<?= _HOST ?>public/imgs/tree.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Sticks in water" />
                </div>
                <div class="col-5 position-relative" style="margin-left: -40px; z-index: 2;">
                    <img src="<?= _HOST ?>public/imgs/mainwithboat.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Sprout in soil" />
                </div>
            </div>

            <!-- Second row -->
            <div class="row justify-content-center" style="margin-top: -60px;">
                <div class="col-3 offset-2 position-relative" style="z-index: 3;">
                    <img src="<?= _HOST ?>public/imgs/river.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Worker in mangrove" />
                </div>
                <div class="col-4 position-relative" style="margin-left: 80px; z-index: 4;">
                    <img src="<?= _HOST ?>public/imgs/leaf.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Children at beach" />
                </div>
            </div>

            <!-- Third row -->
            <div class="row justify-content-center" style="margin-top: -40px;">
                <div class="col-3 position-relative" style="z-index: 5;">
                    <img src="<?= _HOST ?>public/imgs/AboutUs_04_Collage_Image_04_Desktop_FA.avif"
                        class="img-fluid rounded shadow-sm gallery-img" alt="Children by wall" />
                </div>
                <div class="col-5 position-relative" style="margin-left: 40px; z-index: 6;">
                    <img src="<?= _HOST ?>public/imgs/monkey.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Boat in water" />
                </div>
            </div>

            <!-- Fourth row -->
            <div class="row justify-content-center" style="margin-top: -80px;">
                <div class="col-4 offset-2 position-relative" style="z-index: 7;">
                    <img src="<?= _HOST ?>public/imgs/farmer.jpg" class="img-fluid rounded shadow-sm gallery-img"
                        alt="Detailed leaf" />
                </div>
                <div class="col-4 position-relative" style="margin-left: 40px; z-index: 8;">
                    <img src="<?= _HOST ?>public/imgs/AboutUs_04_Collage_Image_07_Desktop_FA.jpg"
                        class="img-fluid rounded shadow-sm gallery-img" alt="Aerial landscape" />
                </div>
            </div>
        </div>
    </div>

</section>

<body class="bg-light text-dark">
    <div class="container py-5">
        <h2 class="fw-bold mb-4">Hành tinh và Mọi Người trước</h2>
        <div class="row">
            <!-- Cột trái -->
            <div class="col-md-6">
                <p>
                    Các nhà máy mà chúng tôi hợp tác đều nỗ lực đáp ứng các tiêu chuẩn cao nhất khi nói đến việc duy
                    trì các quyền lao động có đạo đức. Các nhà máy đối tác của chúng tôi được kiểm toán thường xuyên
                    để đảm bảo tuân thủ Quy tắc ứng xử của Tentree và các tiêu chuẩn lao động quốc tế.
                </p>
                <p>
                    Chúng tôi đảm bảo rằng người lao động được trả lương xứng đáng với mức lương công bằng, đảm bảo
                    ngày nghỉ ngơi hợp lý và tiếp cận các cơ hội việc làm bình đẳng cho cả nam và nữ. Trong mọi khía
                    cạnh kinh doanh của mình, chúng tôi nỗ lực cung cấp cho mọi người nơi làm việc an toàn, nơi họ
                    có thể cảm thấy hài lòng về những đóng góp của mình trong việc bảo vệ hành tinh của chúng ta.
                </p>
            </div>
            <!-- Cột phải -->
            <div class="col-md-6">
                <p>
                    Chúng tôi tiếp cận mọi bước trong hoạt động kinh doanh của mình với những rào cản này, bao gồm
                    cả các đối tác và nhà cung cấp của chúng tôi. Với những trụ cột về đạo đức và nguyên tắc này,
                    chúng tôi đảm bảo rằng tất cả mọi người làm việc với Tentree đều được tôn trọng, đánh giá cao và
                    cảm thấy an toàn.
                </p>
                <p>
                    Trước khi bắt kỳ hình thức sản xuất nào có thể bắt đầu, chúng tôi yêu cầu tất cả các nhà cung
                    cấp của mình phải ký và tuân thủ các hướng dẫn sau. Chúng tôi cũng yêu cầu kiểm toán thường
                    xuyên để đảm bảo họ cam kết liên tục với quy tắc ứng xử của chúng tôi.
                </p>
            </div>
        </div>
    </div>
</body>