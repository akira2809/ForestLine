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
    <?php foreach ($list_post as $post) {
                ?>
        <div class="row g-0">
            <!-- Text Content - Left Side -->
            <div class="col-md-6">
                <div class="content-wrapper">
                    <h2>
                    <?= $post['name_post'] ?> 
                    </h2>
                    <p>
                    <?= $post['content'] ?> 
                    </p>
                </div>
            </div>
            <!-- Image - Right Side -->
            <div class="col-md-6">
                <div class="image-section">
                    <img src="./uploads/<?= $post['image_post'] ?>" alt=""
                        style="width: 100%; height: 100%; object-fit: cover;" />
                </div>
            </div>
        </div>
                
        
    </div>

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
                        <h5 class="section-title"><?= $post['name_2'] ?></h5>
                        <p class="section-content">
                           <?= $post['about_2'] ?>
                        </p>
                </div>
                <div class="col-md-6">
                    <h5 class="section-title"><?= $post['name_3'] ?></h5>
                    <p class="section-content">
                    <?= $post['about_3'] ?>
                    </p>
                </div>
            </div>
            <?php }?>                    

    </aside>



