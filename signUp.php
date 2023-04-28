<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KidKinder</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
</head>


<body>
    <!-- FOOTER START -->
    <?php
        require ("./component_header.php");
    ?>
    <!-- FOOTER END -->

    <div class="container col-md-6 col-12 form_sigin_signup" id="container">
        <div class="form-container col-md-6 col-12">
            <form action="#">
                <h1>Đăng Ký</h1>
                <input type="text" placeholder="Họ và Tên" />
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Mật khẩu" />
                <button>Đăng ký</button>
            </form>
        </div>
        <div class="overlay-container col-md-6 col-12">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng bạn đến với KidKinder!</h1>
                    <p>Nếu bạn đã có tài khoản, vui lòng chọn đăng nhập</p>
                    <p><a href="./signIn.php">Đăng Nhập</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER START -->
    <?php
        require ("./component_footer.php");
    ?>
    <!-- FOOTER END -->



    <script>
        $_COOKIEconst signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
</body>

</html>