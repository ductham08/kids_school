<?php

// if(isset($_POST['btnSubmit'])){ 

//     $email = $_POST['user_email'];
//     $pass = $_POST['password'];

//     $sqlFindUser = "SELECT * FROM users WHERE mail = '$email'";
//     $user = executeQuery($sqlFindUser, true);

//     if($user){
//         return $errMail = "Email không tồn tại trong hệ thống!";
//     } else {
//         if($pass !== $repass || $repass == ""){
//             return $errPass = "Mật khẩu không chính xác!";
//         } else {

//             $passHasd = md5($pass);

//             $sqlAddUser = "INSERT INTO `users`(`name`, `mail`, `password`,  `role`) VALUES ('$name','$email', '$passHasd', 0 )";
//             $newUser = executeQuery($sqlFindUser, true);
//             if($newUser) {
//                 return $success = "Đăng ký tài khoản thành công!";
//             }
//         }
//     }



// }



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
            <form action="./up.php" method="POST" enctype="multipart/form-data">
                <h1>Đăng Ký</h1>
                <p><?= $success ?></p>
                <input type="text" required name="user_name" placeholder="Họ và Tên" />
                <input type="text" required name="user_email" placeholder="Email" />
                <p><?= $errMail ?></p>
                <input type="password" required name="password" placeholder="Mật khẩu" />
                <input type="password" required name="repassword" placeholder="Xác nhận mật khẩu" />
                <p><?= $errPass ?></p>
                <button type="submit" name="btnSubmit">Đăng ký</button>
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