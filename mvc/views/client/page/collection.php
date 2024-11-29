<style>
   
    .breadcrumb {
        background-color: transparent;
        padding: 0;
        margin-bottom: 20px;
    }

    .breadcrumb-item a {
        text-decoration: none;
        color: #888;
    }

    .breadcrumb-item.active {
        color: #333;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .category-card {
        background-color: #f8f9f4;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        text-align: left;
        margin-bottom: 20px;
        flex: 1;
        margin: 10px;
        max-width: 630px;
    }

    .category-card img {
        width: 630px;
        height: 425px;
        object-fit: cover; /* Giữ tỉ lệ hình ảnh nhưng vẫn đảm bảo kích thước */
        display: block;
    }

    .category-card-content {
        padding: 15px;
    }

    .category-title {
        font-size: 20px;
        font-weight: bold;
        margin: 10px 0;
    }

    .category-subtitle {
        font-size: 14px;
        color: #666;
    }
</style>


    <main>
        <div class="container">
            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bộ sưu tập</li>
                </ol>
            </nav>

            <!-- First row -->
            <div class="row">
                <div class="category-card">
                    <img src="../public/imgs/phoi-do-mua-he_419603cc4d324851bc87a3a620163de6.jpg" alt="Sống động sắc hè">
                    <div class="category-card-content">
                        <p class="category-title">Sống Động Sắc Hè</p>
                        <p class="category-subtitle">Mùa hè của bạn, phong cách của chúng tôi!</p>
                    </div>
                </div>

                <div class="category-card">
                    <img src="../public/imgs/phoi-do-cong-so-nam-2-1.jpg" alt="Công sở thanh lịch">
                    <div class="category-card-content">
                        <p class="category-title">Công Sở Thanh Lịch</p>
                        <p class="category-subtitle">Mùa hè của bạn, phong cách của chúng tôi!</p>
                    </div>
                </div>
            </div>

            <!-- Second row -->
            <div class="row">
                <div class="category-card">
                    <img src="../public/imgs/phoi-do-toi-gian.jpg" alt="Minimalism tối giản">
                    <div class="category-card-content">
                        <p class="category-title">Minimalism Tối Giản</p>
                        <p class="category-subtitle">Mùa hè của bạn, phong cách của chúng tôi!</p>
                    </div>
                </div>

                <div class="category-card">
                    <img src="../public/imgs/1cac2317acce3b4b2a9eb135988744ed-2769920404.jpg" alt="Retro thập niên 90">
                    <div class="category-card-content">
                        <p class="category-title">Retro Thập Niên 90</p>
                        <p class="category-subtitle">Mùa hè của bạn, phong cách của chúng tôi!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
