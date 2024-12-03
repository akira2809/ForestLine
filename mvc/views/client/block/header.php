
<style>
    /* Hide search results container by default */
    #search-results {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        max-height: 300px;
        overflow-y: auto;
        background-color: white;
        border: 1px solid #ddd;
        border-top: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    /* Show search results only when input is not empty */
    #search-input:not(:placeholder-shown)+#search-results,
    #search-input:focus+#search-results {
        display: block;
    }

    /* Search container should be positioned relatively */
    .search-container {
        position: relative;
    }

    /* Style for individual search result items */
    #search-results div {
        padding: 10px;
        border-bottom: 1px solid #f0f0f0;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    #search-results div:hover {
        background-color: #f5f5f5;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        #search-results {
            position: fixed;
            top: 60px;
            left: 0;
            width: 100%;
            max-height: 50vh;
        }
    }

    .search-container {
        position: relative;
    }

    #search-input {
        padding-right: 40px;
        /* Tạo khoảng cách cho biểu tượng search */
    }

    #search-icon {
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        color: #666;
        cursor: pointer;
    }

    .menu-container {
        background-color: #f5f5e8;
        padding: 20px;
        /* Tăng padding */
        font-size: 16px;

    }

    .menu-title {
        font-weight: bold;
        font-size: 38px;
        margin-bottom: 86px;
        text-align: center;

    }

    strong {
        font-size: 40px;
    }

    .divider {
        border-left: 1px solid #000;
        /* Đường ngăn */
        height: 100%;
    }

    .image-section img {
        height: auto;
        object-fit: cover;
        width: 100%;
    }

    /* Tăng khoảng cách giữa các cột */
    .col-4 {
        padding-left: 15px;
        padding-right: 15px;
    }

    .col-6 {
        padding-left: 20px;
        padding-right: 20px;
    }

    .mega-menu-parent:hover .mega-menu-container {
        display: block;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 999;
    }

    /* Mega Menu Custom CSS */
    .mega-menu-container {
        display: none;
        /* Ẩn menu theo mặc định */
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1050;
        /* Đảm bảo nằm trên các thành phần khác */
    }

    /* Hiển thị menu khi hover */
    .mega-menu-parent:hover .mega-menu-container {
        display: block;
    }

    .menu-title {
        font-weight: bold;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .divider {
        border-left: 1px solid #ddd;
        height: 100%;
    }

    .image-section img {
        height: auto;
        object-fit: cover;
        width: 100%;
    }
</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand me-3" href="<?= _HOST ?>">FORESTLINE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">

                    <li class="nav-item position-relative mega-menu-parent">
                        <a class="nav-link" href="<?= _HOST ?>product">Sản phẩm</a>
                        <!-- Mega Menu -->
                        <div class="mega-menu-container" style="display: none;">
                            <div class="container">
                                <div class="row g-0">
                                    <!-- Image Section -->
                                    <div class="col-md-4 image-section">
                                        <img src="../public/imgs/1_e966614c5242492992f8f67f302aef3f_grande.webp"
                                            alt="Fashion" class="img-fluid">
                                    </div>

                                    <!-- Menu Section -->
                                    <div class="col-md-8 menu-container">
                                        <div class="row">
                                            <!-- NAM Section -->
                                            <div class="col-md-6">
                                                <div class="menu-title">NAM</div>
                                                <!-- Row 1: Áo, Quần, Phụ kiện -->
                                                <div class="row">
                                                    <div class="col-4">
                                                        <ul>
                                                            <li><strong>Áo</strong></li>
                                                            <li>Áo sơ mi</li>
                                                            <li>Áo thun</li>
                                                            <li>Áo blazer</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-4">
                                                        <ul>
                                                            <li><strong>Quần</strong></li>
                                                            <li>Quần jean</li>
                                                            <li>Quần tây</li>
                                                            <li>Quần shorts</li>
                                                            <li>Quần thun</li>
                                                            <li>Quần ống suông</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-4">
                                                        <ul>
                                                            <li><strong>Phụ kiện</strong></li>
                                                            <li>Nón</li>
                                                            <li>Túi</li>
                                                            <li>Thắt lưng</li>
                                                            <li>Cà vạt</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Row 2: Áo khoác, ABC -->
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <ul>
                                                            <li><strong>Áo khoác</strong></li>
                                                            <li>Hoodie</li>
                                                            <li>Jacket</li>
                                                            <li>Áo khoác dù</li>
                                                            <li>Tất cả sản phẩm</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul>
                                                            <li><strong>ABC</strong></li>
                                                            <li>Đầm</li>
                                                            <li>Chân váy ngắn</li>
                                                            <li>Chân váy dài</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Divider -->
                                            <div class="col-1 d-flex justify-content-center">
                                                <div class="divider"></div>
                                            </div>

                                            <!-- NỮ Section -->
                                            <div class="col-5">
                                                <div class="menu-title">NỮ</div>
                                                <!-- Row 1: Áo, Quần, Phụ kiện -->
                                                <div class="row">
                                                    <div class="col-4">
                                                        <ul>
                                                            <li><strong>Áo</strong></li>
                                                            <li>Áo sơ mi</li>
                                                            <li>Áo thun</li>
                                                            <li>Áo blazer</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-4">
                                                        <ul>
                                                            <li><strong>Quần</strong></li>
                                                            <li>Quần jean</li>
                                                            <li>Quần tây</li>
                                                            <li>Quần shorts</li>
                                                            <li>Quần thun</li>
                                                            <li>Quần ống suông</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-4">
                                                        <ul>
                                                            <li><strong>Phụ kiện</strong></li>
                                                            <li>Nón</li>
                                                            <li>Túi</li>
                                                            <li>Thắt lưng</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- Row 2: Áo khoác, Chân váy -->
                                                <div class="row mt-3">
                                                    <div class="col-6">
                                                        <ul>
                                                            <li><strong>Áo khoác</strong></li>
                                                            <li>Hoodie</li>
                                                            <li>Jacket</li>
                                                            <li>Áo khoác dù</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-6">
                                                        <ul>
                                                            <li><strong>Chân váy</strong></li>
                                                            <li>Đầm</li>
                                                            <li>Chân váy ngắn</li>
                                                            <li>Chân váy dài</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= _HOST ?>about">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bộ sưu tập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức và khuyến mãi</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="search-container">
                            <input oninput="searchInput()" name="search" type="text" id="search-input"
                                class="form-control" placeholder="Tìm kiếm sản phẩm...">
                            <div id="search-results"></div>
                            <a href="#" id="search-icon" class="nav-link">
                                <i class="fas fa-search"></i>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="<?= isset($_SESSION['user_login']) ? _HOST . 'profile' : _HOST . 'login' ?>"><i
                                class="fas fa-user"></i></a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-heart"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= _HOST ?>cart"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<script>
    function searchInput() {
        const inputField = document.getElementById('search-input').value.trim();
        let formData = new FormData();
        formData.append('search', inputField);

        if (inputField !== "") {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState === 4 && xmlhttp.status === 200) {
                    const response = xmlhttp.responseText;
                    if (response.trim() === `<div><p>Không có sản phẩm trên</p></div>`) {
                        document.getElementById("search-results").innerHTML = response;
                        document.getElementById("productSearch").hidden = false;
                    } else {
                        document.getElementById("search-results").innerHTML = response;
                        document.getElementById("productSearch").hidden = true;
                    }
                }
            };
            xmlhttp.open("POST", "<?= _HOST ?>mvc/controllers/Header.php", true);
            xmlhttp.send(formData); // Sửa từ FormData thành formData
        }
    }

</script>