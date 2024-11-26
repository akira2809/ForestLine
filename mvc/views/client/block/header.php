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
  padding-right: 40px; /* Tạo khoảng cách cho biểu tượng search */
}

#search-icon {
  position: absolute;
  top: 50%;
  right: 10px;
  transform: translateY(-50%);
  color: #666;
  cursor: pointer;
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
            xmlhttp.onreadystatechange = function () {
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