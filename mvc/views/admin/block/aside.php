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

                <!-- TIN TỨC VÀ KHUYẾN MÃI - NEWS -->
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Bài viết
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/blog/list_blog" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Tất cả bài viết</p>
                            </a> </li>
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/blog/add_blog" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Thêm bài viết</p>
                            </a> </li>    
                                               
                    </ul>
                </li>
                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Bình luận
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="<?= _HOST ?>admin/blog/list_blog_review" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Tất cả bình luận</p>
                            </a> </li>
                           
                            <li class="nav-item"> <a href="<?= _HOST ?>admin/blog/add_blog_review" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Thêm bình luận</p>
                            </a> </li>                     
                    </ul>
                </li>
            

            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside> <!--end::Sidebar--> <!--begin::App Main-->