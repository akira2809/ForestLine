    <style>
        body {
            color :#718355;
            background-color: #E9F5DB;            
            margin: 0;
            padding: 0;             
        }

        .custom-container {
            max-width: 800px; /* Chiều rộng tối đa */
            margin: 0 auto; /* Canh giữa */
            padding: 0 15px; /* Khoảng cách padding */
            /* font-family: 'Cormorant Garamond', serif;
            font-size: 30px;
            font-weight: 700; */
        }
        h1{
            text-transform: uppercase;
            text-align: center;
        }
        .blockquote{
            font-family: 'Dancing Script', serif;
            font-size: 35px;
            font-weight: 700;
            font-style: italic;
        }
        img {
        width: 100%;
        border-radius: 10px;
        max-width: 500px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }
    </style>
    <div class="container">
   
    <div style="color: #718355; " class="custom-container">       
        <blockquote class="blockquote text-center">
            <p><?= $blog['title'] ?></p>
            <footer class="blockquote-footer"><?= $blog['author'] ?></footer>
          </blockquote>
          <img src="../uploads/<?= $blog['image_blog'] ?>" alt="<?= $blog['title'] ?>" alt="">
          <p class="text-end" ><?= $blog['date'] ?></p>
        <p><?= $blog['content'] ?></p>        
        
          
    
        <!-- <div class="row">
        <div class="col-lg-1">
            <img width="65" src="img/spthanhtoan.png" alt="">
        </div>
        <div class="col-lg-11">
            <p class="p-0 m-0">Tuongvan <span>27-08-1997</span> </p>           
            <input class="p-2" type="text" name="" id="" placeholder="Thêm bình luận">
            <input class="p-0" type="button" value="Đăng">
        </div>
    </div> -->
    <!-- binhluan -->
    <?php foreach ($list_review_blog as $blog_review) {
                ?>
                 <div class="row">
                      <div class="col-lg-1">
                        <img width="65" src="../uploads/<?= $blog['image_blog'] ?>" alt="">
                    </div>
                    <div class="col-lg-11">
                        <p class="p-0 m-0"><?= $blog_review['user_name']?> <span><?= $blog_review['date']?> </span> </p>            
                        <p><?= $blog_review['content'] ?></p>

                    </div>
                </div> 
                <?php
                } ?>
   
    </div> 
    </div>
    </div>
    
                       
