<title>Document</title>
<style>
    body {
        background-color: #f6ffec;
    }

    .navbar-custom {
        background-color: #718355 !important;
    }

    .navbar-brand {
        font-family: "Cormorant Garamond", serif;
        font-weight: 700;
        letter-spacing: 9px;
    }

    form {
        width: 400px;
    }

    .input-box {
        position: relative;
        margin-bottom: 20px;
    }

    form input {
        height: 50px;
        width: 100%;
        padding: 12px 20px;
        font-size: 16px;
        border: 1px solid #ccc;
        outline: none;
    }

    .input-box label {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 14px;
        color: #aaa;
        transition: all 0.3s ease;
    }

    .input-box input:focus+label,
    .input-box input:not(:placeholder-shown)+label {
        top: 10px;
        font-size: 12px;
        color: #007bff;
    }

    .input-box input:focus {
        border-color: #007bff;
    }

    .links {
        text-align: center;
        margin-top: 10px;
    }

    .links a {
        color: #000000;
        text-decoration: none;
    }

    input[type="submit"] {
        background-color: #718c55;
        color: white;
        padding: 10px 20px;
        border: none;
        width: 100%;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #cfe1b9;
    }

    .images {
        width: 100px;
        height: 100px;
    }

    .images img {
        width: 40px;
        height: 40px;
    }

    .signin-register a {
        color: #000000;
        font-size: 24px;
        text-decoration: none;
    }

    .col-4 {
        background-color: #b5c99a;
    }

    .order {
        margin-top: 80px;
    }

    .order .o1,
    .o3 {
        font-size: 16px;
    }

    .o2 {
        font-size: 12px;
    }
</style>
<div class="container-fluid-lg">
    <div class="row h-100">
        <div
            class="col-lg-8 col-md-12 d-flex justify-content-center align-items-center">
            <div class="login-register pt-5">
                <div class="signin-register d-flex justify-content-between mb-1">

                    <a href="<?= _HOST . 'login' ?>">Sign In</a>

                    <a href="">Create Account</a>
                </div>
                <hr class="mb-4" />

                <form class="form mt-3" action="<?= _HOST ?>/login/register" method="post">

                    <?= isset($result) ? '<div class="alert alert-' . $result['type'] . ' ">' . $result['result'] . '</div>' : ''  ?>
                    <div class="input-box">
                        <input type="text" id="user_name" name="user_name" placeholder=" " required />
                        <label for="user_name"><span>*</span>FIRST NAME</label>

                    </div>
                    <div class="input-box">
                        <input type="text" id="email" placeholder=" " name="email" required />
                        <label for="email"><span>*</span> EMAIL ADDRESS</label>
                    </div>
                    <div class="input-box">
                        <input type="text" id="password" placeholder=" " name="password" required />

                        <label for=" password"><span>*</span>PASSWORD</label>

                    </div>
                    <input type="submit" value="Signin" />
                </form>
                <div class="images d-flex w-100 pt-5">
                    <ul class="list-unstyled d-flex justify-content-between w-100">
                        <li

                            class=" me-3 d-flex flex-column align-items-center">
                            <a href=""><img src="<?= _HOST ?>public/imgs/Facebook_Logo_(2019).png" alt="" /></a>
                            <span class="mt-3">FACEBOOK</span>
                        </li>
                        <li
                            class=" me-3 d-flex flex-column align-items-center">
                            <a href=""><img src="<?= _HOST ?>public/imgs/Google__G__logo.svg.webp" alt="" /></a>
                            <span class="mt-3">GOOGLE</span>
                        </li>
                        <li
                            class=" me-3 d-flex flex-column align-items-center">
                            <a href=""><img src="<?= _HOST ?>public/imgs/Apple_logo_black.svg.png" alt="" /></a>

                            <span class="mt-3">APPLE</span>
                        </li>
                    </ul>
                </div>
                <div
                    class="order mb-5 d-flex flex-column align-items-center justify-content-center">
                    <span class="o1">ODER STATUS TRACKING</span>
                    <span class="o2 mt-1">Track your recent order below</span>
                    <span class="o3 mt-3">FIND MY ORDER</span>
                </div>
            </div>
        </div>
        <div
            class="col-lg-4 col-md-12 d-flex flex-column align-items-center justify-content-center">
            <h2 class="text-black text-center mb-3">FL Account Benefits</h2>
            <span class="text-black text-center mb-3">
                Enjoy these complimentary benefits exclusive to our account holders
            </span>
            <img
                class="image w-75 h-auto"
                src="https://www.ralphlauren.com/on/demandware.static/-/Library-Sites-RalphLauren_NA_Library/en_US/v1732101595296/img/account/benefits/sign_in_enhancement_card2.jpg"
                alt="" />
        </div>
    </div>
</div>