<style>
        :root{
        --main-color: #718355;
        --second-color: #CFE1B9;
        --background-color: #E9F5DB;
        --text-color: #000;
        --price-color: #FF0000;
        }
        body {
            color :#718355;
            background-color: #E9F5DB;            
            margin: 0;
            padding: 0;
            
        }
        .navbar-brand {
        font-family: 'Cormorant Garamond', serif;
        font-size: 30px;
        font-weight: 700;
        letter-spacing: 8px;
        }
        .bgp{
            background-color: #CFE1B9;
        }
        .navbar-custom {
            background-color: #718355 !important;
        }
        .list-group-item
        {
            font-family: 'Cormorant Garamond', serif;
            background: var(--background-color);
        }
        .list-group-item:hover
        {
            color: #fff;
            background-color: var(--main-color);
        }
        .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            font-size: 30px;
            font-weight: 700;
            letter-spacing: 8px;
        } 
        .list-inline a{
            color: #000;

        }
        .list-inline li{
            background: var(--second-color);
            padding: 10px 20px;

        }
        .list-inline li:hover{
            color:#fff ;
            background: var(--main-color);
        }
        img{
            width: 100%;
            height: auto;
        }
        .btn-cancel:hover {
            border: var(--main-color) solid 1px;
            background: linear-gradient(to left, #fff 50%, var(--main-color) 50%);
            background-size: 200% 100%; 
            background-position: left;
            color: white; 
            transition: all 0.6s ease;
        }
        .btn-cancel {
            background-position: right bottom;          
            color: var(--main-color);
            border: var(--main-color) solid 1px;
        }
        .col-5ths {
            flex: 0 0 20%; /* 100% / 5 */
            max-width: 20%;
        }
    </style>
 
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 text-center m-0 p-0"> 
                    <div class="list-group">
                        <ul style="list-style: none;" class="m-0 p-0">
                            <li class="list-group-item" aria-current="true">Thông tin cá nhân</li>
                            <li class="list-group-item list-group-item-action" >Đơn hàng</li>
                            <li class="list-group-item list-group-item-action" >Đã thích</li>
                            <li class="list-group-item list-group-item-action" >Đăng xuất</li>
                        </ul>    
                    </div>
                </div>
                <div class="col-lg-9 p-0">
                    <ul class="list-inline d-flex text-center fs-6">
                        <li class="list-inline-item col-5ths col-md-4 m-0">Tất cả</li>
                        <li class="list-inline-item col-5ths col-md-2 m-0">Đang chờ</li>
                        <li class="list-inline-item col-5ths col-md-2 m-0">Đang giao</li>
                        <li class="list-inline-item col-5ths col-md-2 m-0">Đã hủy</li>
                        <li class="list-inline-item col-5ths col-md-2 m-0">Hoàn thành</li>
                    </ul>
                    <div class="row bg-light m-0 p-0">
                        <div class="col-lg-2 col-sm-4 m-0 p-0">
                            <img src="img/spthanhtoan.png" alt="">
                        </div>
                        <div class="col-lg-6 col-sm-5">
                            <h4>Polo Outerity Collection TÉ / Black</h4>
                            <p>Phân loại: size M, màu Đen</p>
                            <p>Số lượng: x1</p>
                        </div>
                        <div class="col-lg-4 col-sm-3">                            
                                <h6 class="text-end">Đang chờ xác nhận</h6>                     
                                <p class="col-lg-12 text-end text-decoration-line-through d-flex flex-column m-0 p-0">179.000 VND</p>
                                <p class="col-lg-12 text-end d-flex flex-column ">139.000 VND</p>
                        </div> 
                        <hr>
                        <div class="row-fluid">
                            
                            <div class="col-lg-12 col-sm-12 text-end py-2">
                            <h5><span style="color: var(--text-color);">Tổng tiền:</span> 139.000 VND</h5>
                            <button class="btn-cancel p-2">Hủy đơn hàng</button>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
            
        </div>
