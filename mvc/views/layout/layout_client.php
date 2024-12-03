<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forestline Inc.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Shadow&display=swap" rel="stylesheet">
    <link href="<?= _HOST ?>public/css/all.css" rel="stylesheet">
    <link href="<?= _HOST ?>public/css/style.css" rel="stylesheet">
    <style>
        body {
            color: #F6FFEC;
        }

        .navbar-custom {
            background-color: #718355 !important;
        }

        .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 700;
            letter-spacing: 9px;
        }

        .number-text-home {
            font-family: 'Londrina Shadow', cursive;
            font-size: 200px;
            /* Kích thước font chữ mặc định cho desktop */
        }

        /* Điều chỉnh font chữ cho màn hình nhỏ */
        @media (max-width: 576px) {
            .number-text-home {
                font-size: 80px !important;
                /* Kích thước font chữ cho điện thoại */
            }
        }

        .divider {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            width: 1px;
            /* Độ rộng mỏng hơn */
            background-color: #ddd;
            /* Màu xám nhạt */
        }
    </style>
</head>
<?php require_once './mvc/views/client/block/header.php' ?>


<body class="bg-light text-dark">


    <?php
    if (isset($page)) {

        if (file_exists("./mvc/views/client/page/$page.php")) {

            require_once "./mvc/views/client/page/$page.php";
        } else {
            require_once "./mvc/views/client/page/home.php";
        }
    } else {
        require_once "./mvc/views/client/page/home.php";
    }

    ?>


    <?php require_once './mvc/views/client/block/footer.php' ?>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXlUHjB3ofSLR6lMFS3Z45qmo8SAl22Qq7QORtf8c+NcMm5H7jLupKak/DIp"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGcueSaoS0GGSorP1Cz9KxrBvZ6b6fIOg3Uktj0K3s43IMf3/hk6if8/I0D"
    crossorigin="anonymous"></script>
<script src="../public/js/main.js"></script>