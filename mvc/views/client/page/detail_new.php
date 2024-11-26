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
    </style>
    <div class="container-fluid">
    <?php foreach ($one_post as $post) {
                ?>
    <div class="custom-container">       
        <blockquote class="blockquote text-center">
            <p><?= $post['name_post'] ?></p>
            <footer class="blockquote-footer"><?= $post['author'] ?></footer>
          </blockquote>
        <p><?= $post['content'] ?></p>
        <img src="./uploads/<?= $post['image_post'] ?>" alt="<?= $post['name_post'] ?>" alt="">
        <h4><?= $post['name_2'] ?></h4>
        <p><?= $post['about_2'] ?> </p>
        <h4><?= $post['name_3'] ?> </h4>
        <p><?= $post['about_3'] ?> </p>
        
          
    </div>
    <?php }?>                    
