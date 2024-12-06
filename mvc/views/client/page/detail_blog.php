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
        #dangcmt:hover {
            border: #718355 solid 1px;
            background: linear-gradient(to left, #fff 50%, #718355 50%);
            background-size: 200% 100%; 
            background-position: left;
            color: white; 
            transition: all 0.6s ease;
        }
        #dangcmt {
            background-position: right bottom;          
            color:#718355;
            border: #718355 solid 1px;
        }
    </style>
    <div class="container">   
    <div style="color: #718355; " class="custom-container">       
        <blockquote class="blockquote text-center">
            <p><?= $blog['title'] ?></p>
            <footer class="blockquote-footer"><?= $blog['author'] ?></footer>
          </blockquote>
          <img src="<?=  _HOST . 'uploads/'. $blog['image_blog'] ?>" alt="<?= $blog['title'] ?>" alt="">
          <p class="text-end" ><?= $blog['date'] ?></p>
        <p><?= $blog['content'] ?></p>        
        
    <!-- them binh luan -->      
    <form class="needs-validation" novalidate action="<?= _HOST . 'blog/add_blog_review/'. $blog['blog_id'] ?>" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="col-lg-1">
            <img width="65" src="<?= _HOST . 'uploads/'.  $blog['image_blog'] ?>" alt="">
        </div>
        <div class="col-lg-11">
<!--             <p class="p-0 m-0">Tuongvan <span>27-08-1997</span> </p>          
 -->            <input class="p-2" type="text" id="validationCustom01" name="content" placeholder="Thêm bình luận" required>
            <input class="p-1" id="dangcmt" type="submit" value="Đăng">
        </div>
        </div>    
        </form>
       

    <hr>
    <!-- load binh luan -->   
    <?php
            foreach ($list_review_blog as $key => $value):  
            ?>                         
                <div class="row">
                    <div class="col-lg-1">
                        <img width="65" src="<?=  _HOST . 'uploads/'.  $blog['image_blog'] ?>" alt="">
                    </div>
                    <div class="col-lg-11">
                        <p class="p-0 m-0"><?= $value['user_name']?> <span><?= $value['date']?> </span> </p>            
                        <p><?= $value['content'] ?></p>

                    </div>
                </div> 
                <?php
            endforeach;
            ?>   
    </div> 
    </div>
    </div>
    <script>      
                 

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        "use strict";

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms =
            document.querySelectorAll(".needs-validation");

        // Loop over them and prevent submission
        Array.from(forms).forEach((form) => {
            form.addEventListener(
                "submit",
                (event) => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }

                    form.classList.add("was-validated");
                },
                false
            );
        });
    })();
</script>
    
                       
