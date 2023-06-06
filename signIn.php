<?php

// if(isset($_POST['btnSubmit'])){ 

//     $name = $_POST['user_name'];
//     $email = $_POST['user_email'];
//     $pass = $_POST['password'];
//     $repass = $_POST['repassword'];

//     $errMail = "";
//     $errPass = "";

//     $sqlFindUser = "SELECT * FROM users WHERE mail = '$email'";
//     $user = executeQuery($sqlFindUser, true);

//     if($user){
//         return $errMail = "Email đã tồn tại trong hệ thống!";
//     } else {
//         if($pass !== $repass || $repass == ""){
//             return $errPass = "Mật khẩu xác nhận không chính xác!";
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
            <form action="#">
                <h1>Đăng Nhập</h1>
                <input type="email" placeholder="Email" />
                <input type="password" placeholder="Mật khẩu" />
                <a href="#">Quên mật khẩu?</a> <br>
                <button>Đăng Nhập</button>
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