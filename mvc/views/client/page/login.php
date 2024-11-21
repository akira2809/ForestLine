<style>
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
        border-radius: 5px;
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
        top: -10px;
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

    input[type="submit"] {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        width: 100%;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>

<div class="login-register">
    <form action="<?= _HOST ?>/login/register" method="post">
        <div class="input-box">
            <input type="text" id="email" placeholder="" name="user_name" required />
            <label for="email"><span>*</span>USER NAME</label>
        </div>
        <div class="input-box">
            <input type="text" id="email" placeholder=" " name="email" required />
            <label for="email"><span>*</span> EMAIL ADDRESS</label>
        </div>
        <div class="input-box">
            <input type="text" id="email" placeholder=" " name="password" required />
            <label for="email"><span>*</span> PASSWORD</label>
        </div>

        <div class="links">
            <a href="">Forgot your password?</a>
        </div>
        <input type="submit" value="Đăng ký" />
    </form>
</div>