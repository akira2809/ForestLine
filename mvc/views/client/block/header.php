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
                    <li class="nav-item">
                        <a class="nav-link" href="<?= _HOST ?>product">Sản phẩm</a>
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
                            <input oninput="searchInput()" type="text" id="search-input" class="form-control"
                                placeholder="Tìm kiếm sản phẩm...">
                            <div id="search-results"></div>
                            <a href="#" id="search-icon" class="nav-link">
                                <i class="fas fa-search"></i>
                            </a>

                        </div>
                        <!-- <a class="nav-link" href="#"><i class="fas fa-search"></i></a> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= isset($_SESSION['user_login']) ? _HOST . 'profile' : _HOST . 'login' ?>"><i class="fas fa-user"></i></a>
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
    // document.addEventListener('DOMContentLoaded', function() {
    //     const searchIcon = document.getElementById('search-icon');
    //     const searchWrapper = document.getElementById('search-wrapper');
    //     const searchInput = document.getElementById('search-input');
    //     const searchResults = document.getElementById('search-results');

    //     // Toggle search
    //     searchIcon.addEventListener('click', function(e) {
    //         e.preventDefault();
    //         searchWrapper.classList.toggle('d-none');
    //         if (!searchWrapper.classList.contains('d-none')) {
    //             searchInput.focus();
    //         }
    //     });

    //     // Close search when clicking outside
    //     document.addEventListener('click', function(e) {
    //         if (!searchWrapper.contains(e.target) && e.target !== searchIcon) {
    //             searchWrapper.classList.add('d-none');
    //         }
    //     });
    // })

    function searchInput() {
        const inputField = document.getElementById('search-input').value.trim()
        const currentURL = new URL(window.location.href);

        currentURL.searchParams.set('search', inputField);

        window.history.pushState({}, '', currentURL);
        var xmlhttp = new XMLHttpRequest();
        if (inputField != "") {
            xmlhttp.open("GET", "<?= _HOST ?>mvc/controllers/Header.php?search=" + inputField, true);
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    console.log(xmlhttp.responseText)
                    if (!xmlhttp.responseText == `<div>
                    <p>Không có sản phẩm trên</p>    
                    </div>`) {
                        console.log(xmlhttp.responseText)
                        // document.getElementById("productSearch").hidden = true;
                    } else {
                        // document.getElementById("productSearch").hidden = false;
                        document.getElementById("search-results").innerHTML = xmlhttp.responseText;
                    }
                    // console.log(xmlhttp.responseText)
                }
            }
            xmlhttp.send();
        }
    }
</script>