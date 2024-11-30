  <style>
    body {
        color: #F6FFEC;
        font-family: 'Lora' 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .navbar-custom {
        background-color: #718355 !important;
    }

    .navbar-brand {
        font-family: 'Cormorant Garamond', serif;
        font-weight: 700;
        letter-spacing: 9px;
    }

    .category-card {
        background-color: #eff6e8;
        padding: 20px;
        border-radius: 10px;
    }

    .category-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .category-subtitle {
        font-size: 1rem;
        color: #555;
    }

    .category-image img {
        width: 100%;
        border-radius: 10px;
        max-width: 400px;
        margin: 0 auto;
        display: flex;
        justify-content: center;
    }
    
</style>
<div class="container ">    
 <div class="row">
                <?php foreach ($list_blog as $blog) {
                ?>
                <div class="category-card">
                    <div class="row">                
                        <div class="col-md-6  py-5 category-image">
                            <a href="<?= _HOST . 'detail_blog/' . $blog['blog_id'] ?>">
                            <img src="./uploads/<?= $blog['image_blog'] ?>" alt="<?= $blog['title'] ?>">
                            </a>
                        </div>
                        <div class="col-md-6  py-5">
                            <p class="category-title"> <?= $blog['title'] ?></p>
                            <p class="category-subtitle"><?= $blog['content'] ?> </p>
                        </div>
                 
                </div>           

                </div>  
                <?php
                } ?>
            </div>       
        </div>       
    </div>
    </div>
