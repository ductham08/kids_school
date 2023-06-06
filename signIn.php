<?php
    require_once("./database/config.php");

    $mail = "";
    $password = "";

    $err = [
        "email" => "",
        "password" => ""
    ];

    session_start();

    if(isset($_POST['btn_submit'])){
        // Mail
        if(empty($_POST['email'])){
            $err['email'] = "Bạn chưa nhập Email!";
        } else {

            $mail = $_POST['email'];

            $sql_get_user_by_email  = "SELECT * FROM `users` WHERE email = '$mail'";
            $user = executeQuery($sql_get_user_by_email, false) ;

            if(!isset($user)){
                $err['email'] = "Email không tồn tại!";
            } else {
                if(empty($_POST['password'])){
                    $err['password'] = "Bạn chưa nhập mật khẩu!";
                } else {
                    $password = $_POST['password'];
                    if (md5($password) != $user['password']) {
                        $err['password'] = "Mật khẩu không chính xác!";
                    } else {
                        $_SESSION['user'] = [
                            "email" => $user['email'],
                            "name" => $user['name'],
                            "role" => $user['role']
                        ];

                        var_dump($_SESSION['user']);
                        sleep(1);
                        header('location: ./index.php');
                    }
                }
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KidKinder</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <style>
        input{
            outline: none
        }
    </style>
</head>


<body>
    <!-- FOOTER START -->
    <?php
        require ("./component_header.php");
    ?>
    <!-- FOOTER END -->

    <div class="container col-md-6 col-12 form_sigin_signup" id="container">
        <div class="form-container col-md-6 col-12">
        <h3 style="text-align: center">Đăng nhập</h3>
        <form action="" method="POST">
            <input value="<?php echo $mail ?>" type="text" placeholder="Email" name="email" id="">
            <p  style="text-align: left;color: red ;padding: 0;margin: 0;font-size: 15px;"><?php echo $err['email'] ?></p>
            <input value="<?php echo $password ?>" type="password" placeholder="Mật khẩu" name="password" id="">
            <p  style="text-align: left;color: red ;padding: 0;margin: 0;font-size: 15px;"><?php echo $err['password'] ?></p>
            <button type="submit" name="btn_submit">Đăng nhập</button>
        </form>
        </div>
        <div class="overlay-container col-md-6 col-12">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng quay lại!</h1>
                    <p>Nếu chưa có tài khoản vui lòng chọn đăng ký để tạo tài khoản mới</p>
                    <p><a href="./signUp.php">Đăng Ký</a></p>
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