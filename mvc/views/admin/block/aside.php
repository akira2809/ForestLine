<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="<?= _HOST ?>admin/dashboard" class="brand-link"> <span class="brand-text fw-light">FORESTLINE</span> <!--end::Brand Text--> </a> <!--end::Brand Link--> </div> <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <!-- 
                <li class="nav-header">MULTI LEVEL EXAMPLE</li> -->
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Sản phẩm
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/product/list-product" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Danh sách sản phẩm</p>
                            </a> </li>
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/product/add-product" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Thêm sản phẩm</p>
                            </a> </li>
                    </ul>
                </li>
                <!--  -->
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Danh mục
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/category/list-category" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Quản lí danh mục</p>
                            </a> </li>

                    </ul>
                </li>

                <!--  -->
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Order
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/order" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Tất cả đơn hàng</p>
                            </a> </li>
                    </ul>
                </li>
                <!--  -->
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Collection
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/collection/list_collection" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Danh Sách bộ sưu tầm</p>
                            </a> </li>
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/collection/add_collection" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Thêm bộ sưu tầm</p>
                            </a> </li>
                    </ul>
                </li>
                <!--  -->
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Voucher
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/voucher/list-voucher" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Danh sách voucher</p>
                            </a> </li>
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/voucher/add-voucher" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Thêm voucher</p>
                            </a> </li>
                    </ul>
                </li>
                <!--  -->

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Bài viết
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item"> <a href="<?= _HOST ?>admin/blog/list-blog" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Tất cả bài viết</p>
                            </a> </li>
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/blog/add-blog" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Thêm bài viết</p>
                            </a> </li>

                    </ul>
                </li>
                <!--  -->
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Đăng xuất

                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item"> <a href="<?= _HOST ?>login/logout" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Đăng xuất</p>
                            </a> </li>
                    </ul>
                </li>


                <!--  -->

            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->