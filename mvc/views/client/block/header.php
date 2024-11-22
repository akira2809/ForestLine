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
                        <a class="nav-link" href="#">Sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Về chúng tôi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bộ sưu tập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tin tức và khuyến mãi</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <div class="search-container position-relative">
                        <a href="#" id="search-icon" class="nav-link">
                            <i class="fas fa-search"></i>
                        </a>
                            <div id="search-wrapper" class="position-absolute w-100 mt-2 d-none">
                                <input type="text" id="search-input" class="form-controls"
                                    placeholder="Tìm kiếm sản phẩm...">
                                <div id="search-results" class="position-absolute w-100 bg-white border shadow-sm">
                                </div>
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
    }

    #search-wrapper {
        z-index: 1050;
        top: 100%;
        right: 0;
    }

    #search-results {
        max-height: 300px;
        overflow-y: auto;
    }

    #search-results a:hover {
        background-color: #f8f9fa;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchIcon = document.getElementById('search-icon');
        const searchWrapper = document.getElementById('search-wrapper');
        const searchInput = document.getElementById('search-input');
        const searchResults = document.getElementById('search-results');

        // Toggle search input visibility
        searchIcon.addEventListener('click', function (e) {
            e.preventDefault();
            searchWrapper.classList.toggle('d-none');
            if (!searchWrapper.classList.contains('d-none')) {
                searchInput.focus();
            }
        });

        // Close search when clicking outside
        document.addEventListener('click', function (event) {
            if (!searchWrapper.contains(event.target) && event.target !== searchIcon) {
                searchWrapper.classList.add('d-none');
            }
        });

        // Live search functionality
        searchInput.addEventListener('input', function () {
            const keyword = this.value.trim();

            if (keyword.length > 0) {
                fetch('<?= _HOST ?>home/search', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: `keyword=${encodeURIComponent(keyword)}`
                })
                    .then(response => response.json())
                    .then(data => {
                        displaySearchResults(data);
                    })
                    .catch(error => console.error('Error:', error));
            } else {
                searchResults.innerHTML = '';
                searchResults.classList.add('d-none');
            }
        });

        function displaySearchResults(data) {
            searchResults.innerHTML = '';
            searchResults.classList.remove('d-none');

            if (data.length > 0) {
                data.forEach(product => {
                    const resultItem = document.createElement('a');
                    resultItem.href = `<?= _HOST ?>product/detail/${product.product_id}`;
                    resultItem.classList.add('d-flex', 'align-items-center', 'p-2', 'text-decoration-none', 'text-dark');
                    resultItem.innerHTML = `
                    <img src="<?= _HOST ?>uploads/${product.main_image}" 
                         alt="${product.name}" 
                         class="mr-2" 
                         style="width: 50px; height: 50px; object-fit: cover;">
                    <span>${product.name}</span>
                `;
                    searchResults.appendChild(resultItem);
                });
            } else {
                searchResults.innerHTML = '<p class="p-2 text-muted">Không tìm thấy sản phẩm</p>';
            }
        }
    });

</script>