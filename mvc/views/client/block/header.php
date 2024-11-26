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
                        <a class="nav-link" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= _HOST ?>collection">Bộ sưu tập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= _HOST ?>news">Tin tức và khuyến mãi</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <div class="search-container">
                        <a href="#" id="search-icon" class="nav-link">
                            <i class="fas fa-search"></i>
                        </a>
                        <div id="search-wrapper" class="d-none">
                            <input type="text" id="search-input" class="form-control"
                                placeholder="Tìm kiếm sản phẩm...">
                            <div id="search-results"></div>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= _HOST ?>login"><i class="fas fa-user"></i></a>
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

<style>
    .search-container {
        position: relative;
        margin-right: 15px;
    }

    #search-wrapper {
        position: absolute;
        z-index: 1050;
        top: 100%;
        right: 0;
        width: 300px;
        background: white;
        padding: 10px;
        border-radius: 4px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    #search-input {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    #search-results {
        max-height: 400px;
        overflow-y: auto;
        margin-top: 10px;
    }

    .search-result-item {
        display: flex;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #eee;
        transition: all 0.3s ease;
    }

    .search-result-item:hover {
        background-color: #f8f9fa;
    }

    .search-result-image {
        width: 50px;
        height: 50px;
        object-fit: cover;
        margin-right: 10px;
        border-radius: 4px;
    }

    .search-result-details {
        flex: 1;
    }

    .search-result-name {
        font-weight: 500;
        color: #333;
        margin-bottom: 4px;
    }

    .search-result-price {
        color: #e44d26;
        font-weight: 500;
    }

    .no-results {
        padding: 15px;
        text-align: center;
        color: #666;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchIcon = document.getElementById('search-icon');
        const searchWrapper = document.getElementById('search-wrapper');
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');

        // Toggle search
        searchIcon.addEventListener('click', function (e) {
            e.preventDefault();
            searchWrapper.classList.toggle('d-none');
            if (!searchWrapper.classList.contains('d-none')) {
                searchInput.focus();
            }
        });

        // Close search when clicking outside
        document.addEventListener('click', function (e) {
            if (!searchWrapper.contains(e.target) && e.target !== searchIcon) {
                searchWrapper.classList.add('d-none');
            }
        });

        // Debounce function
        function debounce(func, wait) {
            let timeout;
            return function (...args) {
                clearTimeout(timeout);
                timeout = setTimeout(() => func.apply(this, args), wait);
            };
        }

        // Display search results function
        function displaySearchResults(data) {
            searchResults.innerHTML = '';

            if (!data || data.length === 0) {
                searchResults.innerHTML = '<div class="no-results">Không tìm thấy sản phẩm</div>';
                return;
            }

            data.forEach(product => {
                const price = new Intl.NumberFormat('vi-VN', {
                    style: 'currency',
                    currency: 'VND'
                }).format(product.sale_price);

                const html = `
            <a href="<?= _HOST ?>product/detail/${product.product_id}" 
               class="search-result-item text-decoration-none">
                <img src="<?= _HOST ?>uploads/${product.main_image}" 
                     class="search-result-image" 
                     alt="${product.name}">
                <div class="search-result-details">
                    <div class="search-result-name">${product.name}</div>
                    <div class="search-result-price">${price}</div>
                </div>
            </a>
        `;
                searchResults.insertAdjacentHTML('beforeend', html);
            });
        }

        // Debounced search function
        const debouncedSearch = debounce((keyword) => {
            fetch('<?= _HOST ?>header/search', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                body: `keyword=${encodeURIComponent(keyword)}`
            })
                .then(response => response.json())
                .then(data => displaySearchResults(data))
                .catch(error => {
                    console.error('Error:', error);
                    searchResults.innerHTML = '<div class="no-results">Đã xảy ra lỗi khi tìm kiếm</div>';
                });
        }, 300);

        // Search input event
        searchInput.addEventListener('input', function () {
            const keyword = this.value.trim();
            if (keyword.length > 0) {
                debouncedSearch(keyword);
            } else {
                searchResults.innerHTML = '';
            }
        });
    });

</script>