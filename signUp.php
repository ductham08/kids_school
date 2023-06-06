<?php
    require_once("./database/config.php");

    $name = "";
    $mail = "";
    $password = "";
    $re_password = "";

    $err = [
        "name" => "",
        "email" => "",
        "password" => "",
        "re_password" => "",
        "status" => ""
    ];

if(isset($_POST['btn_submit'])){
    
    

    $sql_get_user_by_email  = "SELECT * FROM `users` WHERE email = '$mail'";
    $user = executeQuery($sql_get_user_by_email, true) ;


    if(empty($_POST['name'])){
        $err['name'] = "Họ và tên không được để trống !";
    } else {
        $name = $_POST['name'];
    }

    if(empty($_POST['email'])){
        $err['email'] = "Email không được để trống !";
    } else {
        $mail = $_POST['email'];

        $sql_get_user_by_email  = "SELECT * FROM `users` WHERE email = '$mail'";
        $user = executeQuery($sql_get_user_by_email, true) ;

        if(isset($user)){
            $err['email'] = "Email đã tồn tại trong hệ thống!";
        } 
    }

    // Pass
    if(empty($_POST['password'])){
        $err['password'] = "Mật khẩu không được để trống!";
    } else {
        $password = $_POST['password'];
    }
   
    // Re pass
    if(empty($_POST['re_password'])){
        $err['re_password'] = "Chưa xác nhận lại mật khẩu!";
    } else {
        $re_password = $_POST['re_password'];
    }

    // Validate pass
    if (isset($password) && isset($re_password)) {
        if ($password != $re_password) {
            $err['re_password'] = "Mật khẩu xác nhận không chính xác!";
        } else {
            $pass_md5 = md5($password);
        }
    }

   if(empty($err['name']) && empty($err['email']) && empty($err['password']) && empty($err['re_password']) ){
    
    $sql_signup = "INSERT INTO `users`( `email`, `name`, `password`, `role`) VALUES ('$mail','$name','$pass_md5','0')";
    executeQuery($sql_signup, true);
    $err['status'] = "Đăng ký tài khoản thành công!";

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
            <h3 style="text-align: center">Đăng ký</h3>
            <form action="" method="POST">
                <p style="text-align: left;color: #2c86b9 ;padding: 0;margin: 0;font-size: 15px;"> <?php echo $err['status'] ?></p>
                <input value="<?php echo $name ?>" type="text" placeholder="Họ và tên" name="name">
                <p style="text-align: left;color: red ;padding: 0;margin: 0;font-size: 15px;"><?php echo $err['name'] ?></p>
                <input value="<?php echo $mail ?>" type="text" placeholder="Email" name="email">
                <p style="text-align: left;color: red ;padding: 0;margin: 0;font-size: 15px;"><?php echo $err['email'] ?></p>
                <input value="<?php echo $password ?>" type="password" placeholder="Mật khẩu" name="password">
                <p style="text-align: left;color: red ;padding: 0;margin: 0;font-size: 15px;"><?php echo $err['password'] ?></p>
                <input value="<?php echo $re_password ?>" type="password" placeholder="Xác nhận mật khẩu" name="re_password">
                <p style="text-align: left;color: red ;padding: 0;margin: 0;font-size: 15px;"><?php echo $err['re_password'] ?></p>
                <button type="submit" name="btn_submit">Đăng ký</button>
            </form>
        </div>
        <div class="overlay-container col-md-6 col-12">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Chào mừng bạn</h1>
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